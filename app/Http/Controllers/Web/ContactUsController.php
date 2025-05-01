<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
    */
    public function index()
    {
        return view('web.contact-us');
    }


    public function store(NewContactUsRequest $request)
    {
        $data = $request->validated();

        if (array_key_exists('send_mail', $data)) {
            $data['send_mail'] = $data['send_mail'] === 'on' ? true : false;
        } else {
            $data['send_mail'] = false;
        }

        ContactUs::create($data);
        flash()->success('Thank you! <br> Message sent successfully!');

        return redirect()->back();
    }
}
