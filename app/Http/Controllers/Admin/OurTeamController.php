<?php

namespace App\Http\Controllers\Admin;

use App\Models\OurTeam;
use App\Http\Controllers\Controller;
use App\DataTables\OurTeamsDataTable;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Team\NewTeamRequest;
use App\Http\Requests\Team\UpdateTeamRequest;
use App\Http\Requests\Admin\OurTeam\StoreOurTeamRequest;
use App\Http\Requests\Admin\OurTeam\UpdateOurTeamRequest;

class OurTeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(OurTeamsDataTable $dataTable)
    {
        return $dataTable->render('admin.our-teams.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.our-teams.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOurTeamRequest $request)
    {
        $validatedData = $request->validated();

        if ($request->hasFile('image_path')) {
            $validatedData['image_path'] = 'storage/'.Storage::disk('public')
                ->put('/teams', $request->file('image_path'));
        }

        $team = OurTeam::create($validatedData);

        flash()->success('Created successfully');

        return redirect()->route('admin.our-teams.edit', ['our_team' => $team]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $team = OurTeam::find($id);

        return view('admin.our-teams.edit', [
            'team' => $team,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOurTeamRequest $request, string $id)
    {
        $data = $request->validated();

        if ($request->hasFile('image_path')) {
            $data['image_path'] = 'storage/'.Storage::disk('public')
                ->put('/teams', $request->file('image_path'));
        }

        $team = OurTeam::find($id);
        $res = $team->update($data);

        $res ? flash()->success('Updated successfully') : flash()->success('Failed to update');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        try {
            $team = OurTeam::find($id);

            if (Storage::disk('public')->exists($team->image_path)) {
                Storage::disk('public')->delete($team->image_path);
            }

            $team->delete();

            return response()->json(['status' => 'success', 'message' => 'Deleted successfully']);

        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => 'Unable to complete this action']);
        }
    }
}
