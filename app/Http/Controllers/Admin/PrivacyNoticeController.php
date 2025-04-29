<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\PrivacyNotice;
use App\Http\Controllers\Controller;
use App\DataTables\PrivacyNoticeDataTable;
use App\Http\Requests\Admin\Privacy\StorePrivacyNoticeRequest;
use App\Http\Requests\Admin\Privacy\UpdatePrivacyNoticeRequest;

class PrivacyNoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(PrivacyNoticeDataTable $dataTable)
    {
        return $dataTable->render('admin.privacy-notice.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.privacy-notice.create');
    }

    public function store(StorePrivacyNoticeRequest $request)
    {
        $validatedData = $request->validated();
        $faq = PrivacyNotice::create($validatedData);

        // flash()->success('Privacy Notice added successfully');

        return redirect()->route('admin.privacy-notice.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $PrivacyNotice = PrivacyNotice::find($id);

        return view('admin.privacy-notice.edit', [
            'PrivacyNotice' => $PrivacyNotice,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePrivacyNoticeRequest $request, PrivacyNotice $PrivacyNotice)
    {
        $validatedData = $request->validated();

        $PrivacyNotice->update($validatedData);

        flash()->success('Privacy Notice updated successfully');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $PrivacyNotice = PrivacyNotice::find($id);

        $PrivacyNotice->delete();

        flash()->deleted('Privacy Notice deleted successfully');

        return redirect()->back();
    }
}
