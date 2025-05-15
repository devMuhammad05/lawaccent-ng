<?php

namespace App\Http\Controllers\Admin;

use App\Models\CookieNotice;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DataTables\CookieNoticeDataTable;
use App\Http\Requests\Admin\Cookie\StoreCookieNoticeRequest;
use App\Http\Requests\Admin\Cookie\UpdateCookieNoticeRequest;

class CookieNoticeController extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index(CookieNoticeDataTable $CookieNoticeDataTable)
    {
        return $CookieNoticeDataTable->render('admin.cookies-notice.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.cookies-notice.create');
    }

    public function store(StoreCookieNoticeRequest $request)
    {
        $validatedData = $request->validated();
        $faq = CookieNotice::create($validatedData);

        flash()->success('Cookie Notice added successfully');

        return redirect()->route('admin.cookie-notice.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $CookieNotice = CookieNotice::find($id);

        return view('admin.cookies-notice.edit', [
            'CookieNotice' => $CookieNotice,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCookieNoticeRequest $request, CookieNotice $CookieNotice)
    {
        $validatedData = $request->validated();

        $CookieNotice->update($validatedData);

        flash()->success('Cookie Notice updated successfully');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $CookieNotice = CookieNotice::find($id);

        $CookieNotice->delete();

        return response()->json(['status' => 'success', 'message' => 'Deleted successfully']);
    }
}
