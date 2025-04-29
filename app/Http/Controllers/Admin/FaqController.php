<?php

namespace App\Http\Controllers\Admin;

use App\Models\Faq;
use App\DataTables\FaqsDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Faq\StoreFaqRequest;
use App\Http\Requests\Admin\Faq\UpdateFaqRequest;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(FaqsDataTable $dataTable)
    {
        return $dataTable->render('admin.faq.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.faq.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFaqRequest $request)
    {
        $validatedData = $request->validated();
        $faq = Faq::create($validatedData);

        flash()->success('Faq created successfully');

        return to_route('admin.faqs.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $faq = Faq::find($id);

        return view('admin.faq.edit', [
            'faq' => $faq,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFaqRequest $request, Faq $faq)
    {
        $validatedData = $request->validated();

        $faq->update($validatedData);

        flash()->success('Faq updated successfully');

        return to_route('admin.faqs.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $faq = Faq::find($id);

        $faq->delete();

        flash()->deleted('Faq deleted successfully');

        return redirect()->back();
    }
}
