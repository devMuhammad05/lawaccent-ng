<?php

namespace App\Http\Controllers\Admin;

use App\Models\VideoMedia;
use App\Models\PodcastMedia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DataTables\PodcastsMediaDataTable;

class PodcastMediaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(PodcastsMediaDataTable $podcastsMediaDataTable)
    {
        return $podcastsMediaDataTable->render('admin.media-hub.podcast.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.media-hub.podcast.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'media_location' => 'nullable|file|mimes:mp3',
            'media_link' => 'nullable|url',
        ]);

        if ($request->filled('media_location') && $request->filled('media_link')) {

            flash()->error('Only one of podcast file or media link should be provided.');
            return back();
        }

        if ($request->hasFile('media_location')) {
            $path = $request->file('media_location')->store('media-hub/podcasts', 'public');

            $data['media_location'] = (string) 'storage/'.$path;
        }

        PodcastMedia::create($data);
        flash()->success( 'Media added successfully');

        return to_route('admin.podcasts.store');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = PodcastMedia::find($id);

        return view('admin.media-hub.podcast.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $postMedia = PodcastMedia::find($id);

        $postMedia->delete();

        // flash()->deleted('Privacy Notice deleted successfully');

        return redirect()->back();
    }
}
