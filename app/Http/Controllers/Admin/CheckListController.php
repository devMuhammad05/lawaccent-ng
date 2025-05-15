<?php

namespace App\Http\Controllers\Admin;

use App\Models\LegalCheckList;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DataTables\LegalCheckListDataTable;
use App\Http\Requests\Admin\CheckList\StoreCheckList;

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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
