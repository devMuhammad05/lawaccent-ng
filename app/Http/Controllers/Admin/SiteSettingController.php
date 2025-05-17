<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SiteSetting;
use Illuminate\Http\Request;

class SiteSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $site_setting = SiteSetting::first();

        return view('admin.setting.index', compact('site_setting'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SiteSetting $site_setting)
    {
        $validatedData = $request->validate([
            // 'recaptcha_status' => ['sometimes', 'boolean'],
            // 'display_cookies_consent_banner' => ['sometimes', 'boolean'],
            'privacy_notice_effective_date' => ['sometimes', 'date'],
            'cookie_notice_effective_date' => ['sometimes', 'date'],
            'application_form_link' => ['sometimes', 'url'],
            'youtube_link' => ['sometimes', 'url'],
            'schoolarship_application_status' => ['sometimes', 'boolean']
        ]);

        // dd($site_setting);

        $site_setting->update($validatedData);

        flash()->success('Settings updated successfully.');

        return back();
    }
}
