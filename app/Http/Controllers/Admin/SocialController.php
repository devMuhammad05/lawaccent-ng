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
            'x_link' => 'sometimes|url',
            'linkedin_link' => 'sometimes|url',
            'youtube_link' => 'sometimes|url',
            'instagram_link' => 'sometimes|url',
        ]);

        Social::updateOrCreate(
            ['id' => $id],
            $validatedData
        );

        flash()->success('Social link updated');

        return redirect()->back();
    }
}
