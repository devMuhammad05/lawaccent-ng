<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DataTables\CookieNoticeDataTable;

class CookieNoticeController extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index(CookieNoticeDataTable $cookiesPolicyDataTable)
    {
        return $cookiesPolicyDataTable->render('admin.cookies-notice.index');
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
        $faq = CookiesPolicy::create($validatedData);

        flash()->success('Cookie Notice added successfully');

        return redirect()->route('admin.cookies-notice.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $CookieNotice = CookiesPolicy::find($id);

        return view('admin.cookies-notice.edit', [
            'cookiesPolicy' => $CookieNotice,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCookieNoticeRequest $request, CookiesPolicy $cookiesPolicy)
    {
        $validatedData = $request->validated();

        $cookiesPolicy->update($validatedData);

        flash()->success('Cookie Notice updated successfully');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $CookieNotice = CookiesPolicy::find($id);

        $CookieNotice->delete();

        flash()->deleted('Cookie Notice deleted successfully');

        return redirect()->back();
    }
}
