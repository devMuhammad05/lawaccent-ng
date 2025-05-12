<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    protected $fillable = [
        // 'recaptcha_status',
        // 'display_cookies_consent_banner',
        'privacy_notice_effective_date',
        'cookie_notice_effective_date',
        'application_form_link',
    ];

    protected $casts = [
        'privacy_notice_effective_date' => 'date',
        'cookie_notice_effective_date' => 'date',
    ];
}
