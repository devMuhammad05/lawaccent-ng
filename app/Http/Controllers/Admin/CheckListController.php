<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\LegalCheckList;
use App\Http\Controllers\Controller;
use App\DataTables\LegalCheckListDataTable;
use App\Http\Requests\Admin\CheckList\StoreCheckList;
use App\Http\Requests\Admin\CheckList\UpdateCheckList;

class CheckListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(LegalCheckListDataTable $checkListsDataTable)
    {
        return $checkListsDataTable->render('admin.checklist.index');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.checklist.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCheckList $request)
    {
        $data = $request->validated();

        LegalCheckList::create($data);

        return to_route('admin.checklists.index')->with("success", "Legal checklist created successfully");
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $legalCheckList = legalCheckList::find($id);

        return view('admin.checklist.edit', [
            'legalCheckList' => $legalCheckList,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCheckList $request, string $id)
    {
        $validatedData = $request->validated();

        $legalCheckList = legalCheckList::find($id);

        $legalCheckList->update($validatedData);

        flash()->success('Legal checklist updated successfully');

        return to_route('admin.checklists.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $legalCheckList = legalCheckList::find($id);

        $legalCheckList->delete();

        return response([
            "status" => "success",
            "response" => "Legal checklist deleted successfully",
        ]);

    }
}
