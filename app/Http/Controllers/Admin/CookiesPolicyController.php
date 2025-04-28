<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\CookiesPolicyDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCookiePolicyRequest;
use App\Http\Requests\UpdateCookiePolicyRequest;
use App\Models\CookiesPolicy;

class CookiesPolicyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(CookiesPolicyDataTable $cookiesPolicyDataTable)
    {
        return $cookiesPolicyDataTable->render('admin.cookies-policy.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.cookies-policy.create');
    }

    public function store(StoreCookiePolicyRequest $request)
    {
        $validatedData = $request->validated();
        $faq = CookiesPolicy::create($validatedData);

        flash()->success('Cookie Notice added successfully');

        return redirect()->route('admin.cookies-policy.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cookiePolicy = CookiesPolicy::find($id);

        return view('admin.cookies-policy.edit', [
            'cookiesPolicy' => $cookiePolicy,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCookiePolicyRequest $request, CookiesPolicy $cookiesPolicy)
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
        $cookiePolicy = CookiesPolicy::find($id);

        $cookiePolicy->delete();

        flash()->deleted('Cookie Notice deleted successfully');

        return redirect()->back();
    }
}
