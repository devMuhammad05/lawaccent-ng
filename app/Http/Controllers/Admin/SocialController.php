<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Social;
use Illuminate\Http\Request;

class SocialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $social_links = Social::first();

        return view('admin.socials.index', [
            'social_links' => $social_links,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'x_link' => 'nullable|url',
            'linkedin_link' => 'nullable|url',
            'facebook_link' => 'nullable|url',
            'instagram_link' => 'nullable|url',
        ]);

        Social::updateOrCreate(
            ['id' => $id],
            $validatedData
        );

        flash()->success('Social link updated');

        return redirect()->back();
    }
}
