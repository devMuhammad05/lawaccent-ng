<?php

namespace App\Http\Controllers\Admin;

use App\Models\VideoMedia;
use App\Models\PodcastMedia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
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

            $data['media_location'] = (string) 'storage/' . $path;
        }

        PodcastMedia::create($data);
        flash()->success('Media added successfully');

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
    $data = $request->validate([
        'title' => 'required|string|max:255',
        'media_location' => 'nullable|file|mimes:mp3',
        'media_link' => 'nullable|url',
    ]);

    // Check if both fields are provided
    if ($request->hasFile('media_location') && $request->filled('media_link')) {
        flash()->error('Only one of podcast file or media link should be provided.');
        return back();
    }

    $podcast = PodcastMedia::find($id);

    // Initialize media fields as null to ensure we're starting fresh
    $mediaData = [
        'media_location' => null,
        'media_link' => null,
    ];

    // Handle file upload if provided
    if ($request->hasFile('media_location')) {
        // Delete old file if exists
        if ($podcast->media_location) {
            Storage::disk('public')->delete(str_replace('storage/', '', $podcast->media_location));
        }

        $path = $request->file('media_location')->store('media-hub/podcasts', 'public');
        $mediaData['media_location'] = 'storage/' . $path;
    }
    // Handle media link if provided
    elseif ($request->filled('media_link')) {
        $mediaData['media_link'] = $data['media_link'];

        // Delete old file if exists
        if ($podcast->media_location) {
            Storage::disk('public')->delete(str_replace('storage/', '', $podcast->media_location));
        }
    }
    // If neither provided, keep the existing values
    else {
        $mediaData['media_location'] = $podcast->media_location;
        $mediaData['media_link'] = $podcast->media_link;
    }

    // Update the podcast with title and media data
    $podcast->update([
        'title' => $data['title'],
        'media_location' => $mediaData['media_location'],
        'media_link' => $mediaData['media_link'],
    ]);

    flash()->success('Media updated successfully');

    return to_route('admin.podcasts.index');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $postMedia = PodcastMedia::find($id);

        $postMedia->delete();

        return response()->json(['status' => 'success', 'message' => 'Deleted successfully']);
    }
}
