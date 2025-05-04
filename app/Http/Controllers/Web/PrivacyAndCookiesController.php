<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\CookieNotice;
use App\Models\PrivacyNotice;
use App\Models\SiteSetting;

class PrivacyAndCookiesController extends Controller
{
    public function privacy()
    {
        $privacyNotice = PrivacyNotice::where('status', '!=', false)->get();
        $effectiveDate = SiteSetting::first()->privacy_notice_effective_date->format('d/m/Y');

        return view('web.privacy-notice', compact('privacyNotice', 'effectiveDate'));
    }

    public function cookies()
    {
        $cookieNotice = CookieNotice::where('status', '!=', false)->get();
        $effectiveDate = SiteSetting::first()->cookie_notice_effective_date->format('d/m/Y');

        return view('web.cookie-notice', compact('cookieNotice', 'effectiveDate'));
    }
}
