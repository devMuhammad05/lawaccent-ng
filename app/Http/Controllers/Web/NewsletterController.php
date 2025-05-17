<?php

namespace App\Http\Controllers\Web;

use App\Models\Newsletter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

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

        if (Newsletter::where('email', $request->email)->exists()) {
            flash()->warning('You are already subscribed!');
            return redirect()->back();
        } 

        Newsletter::create([
            'email' => $request->email,
        ]);


        Mail::html('
        <p>Thank you for subscribing to our newsletter.</p>
        <p>Stay tuned for updates and exclusive content.</p>
        <p>
            <a href="https://lawaccent.com" style="display:inline-block;padding:10px 15px;background-color:#114906;color:#fff;text-decoration:none;border-radius:5px;">
                Visit Our Website
            </a>
        </p>
        ', function ($message) use ($request) {
            $message->to($request->email)
                ->subject('Newsletter Subscription');
        });


        flash()->success('You have successfully subscribed to our newsletter!');


        return redirect()->back();
    }
}
