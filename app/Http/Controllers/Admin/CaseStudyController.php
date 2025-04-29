<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\CaseStudiesDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\CaseStudy\StoreCaseStudyRequest;
use App\Http\Requests\CaseStudy\UpdateCaseStudyRequest;
use App\Models\CaseStudy;
use App\Models\CaseStudyCategory;
use Illuminate\Support\Str;
use Storage;

class CaseStudyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(CaseStudiesDataTable $caseStudiesDataTable)
    {
        return $caseStudiesDataTable->render('admin.case-study.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = CaseStudyCategory::all();
        return view('admin.case-study.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCaseStudyRequest $request)
    {
        $validatedData = $request->validated();

        if ($request->hasFile('thumbnail')) {
            $imagePath = $request->file('thumbnail')->store('case-study', 'public');

            $validatedData['thumbnail'] = (string) 'storage/'.$imagePath;
        }

        $validatedData['slug'] = Str::slug(title: __($validatedData['name'].now()));

        CaseStudy::create($validatedData);

        flash()->success('Case Study created successfully');

        return redirect()->route('admin.case-studies.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $case = CaseStudy::find($id);

        return view('admin.case-study.edit', compact('case'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCaseStudyRequest $request, string $id)
    {
        $validatedData = $request->validated();

        if ($request->hasFile('thumbnail')) {
            $imagePath = $request->file('thumbnail')->store('case-study', 'public');

            $validatedData['thumbnail'] = (string) 'storage/'.$imagePath;
        }

        $validatedData['slug'] = Str::slug(__($validatedData['name'].now()));

        CaseStudy::find($id)->update($validatedData);

        flash()->success('Case Study updated successfully');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $caseStudy = CaseStudy::find($id);
            if (Storage::exists($caseStudy->thumbnail)) {
                Storage::delete($caseStudy->thumbnail);
            }

            $caseStudy->delete();

            return response()->json(['status' => 'success', 'message' => 'Deleted successfully']);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => 'Unable to complete this action']);
        }
    }
}
