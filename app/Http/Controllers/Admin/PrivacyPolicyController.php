<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\PrivacyPolicyDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Privacy\StorePrivacyPolicyRequest;
use App\Http\Requests\Privacy\UpdatePrivacyPolicyRequest;
use App\Models\PrivacyPolicy;

class PrivacyPolicyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(PrivacyPolicyDataTable $dataTable)
    {
        return $dataTable->render('admin.privacy-policy.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.privacy-policy.create');
    }

    public function store(StorePrivacyPolicyRequest $request)
    {
        $validatedData = $request->validated();
        $faq = PrivacyPolicy::create($validatedData);

        flash()->success('Privacy Notice added successfully');

        return redirect()->route('admin.privacy-policy.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $privacyPolicy = PrivacyPolicy::find($id);

        return view('admin.privacy-policy.edit', [
            'privacyPolicy' => $privacyPolicy,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePrivacyPolicyRequest $request, PrivacyPolicy $privacyPolicy)
    {
        $validatedData = $request->validated();

        $privacyPolicy->update($validatedData);

        flash()->success('Privacy Notice updated successfully');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $privacyPolicy = PrivacyPolicy::find($id);

        $privacyPolicy->delete();

        flash()->deleted('Privacy Notice deleted successfully');

        return redirect()->back();
    }
}
