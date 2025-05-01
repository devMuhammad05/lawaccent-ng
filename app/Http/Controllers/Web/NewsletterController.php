<?php

namespace App\Http\Controllers\Web;

use App\Models\Newsletter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsletterController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $request->validate([
            'email' => 'required|email:rfc,dns,spoof',
        ]);

        Newsletter::create([
            'email' => $request->email,
        ]);

        flash()->success('You have successfully subscribed to our newsletter!');

        return redirect()->back();
    }
}
