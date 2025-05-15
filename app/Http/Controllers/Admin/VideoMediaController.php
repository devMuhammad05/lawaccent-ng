<?php

namespace App\Http\Controllers\Admin;

use App\Models\VideoMedia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DataTables\VideoMediasDataTable;

class VideoMediaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(VideoMediasDataTable $videoMediasDataTable)
    {
        return $videoMediasDataTable->render('admin.media-hub.video.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.media-hub.video.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'media_location' => 'nullable|file|mimes:mp4',
            'media_link' => 'nullable',
        ]);

        if ($request->filled('media_location') && $request->filled('media_link')) {

            flash()->error('Only one of video file or media link should be provided.');
            return back();
        }

        if ($request->hasFile('media_location')) {
            $path = $request->file('media_location')->store('media-hub/videos', 'public');

            $data['media_location'] = (string) 'storage/'.$path;
        }

        VideoMedia::create($data);
        flash()->success( 'Media added successfully');

        return to_route('admin.videos.store');
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
        $data = VideoMedia::find($id);

        return view('admin.media-hub.video.edit', compact('data'));
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
        $videoMedia = VideoMedia::find($id);

        $videoMedia->delete();

        return response()->json(['status' => 'success', 'message' => 'Deleted successfully']);
    }
}
