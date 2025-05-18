<?php

namespace App\Http\Controllers\Admin;

use App\Models\PastWebinar;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DataTables\PastWebinarsDataTable;
use App\Http\Requests\Admin\Webinar\StorePastWebinar;
use App\Http\Requests\Admin\Webinar\UpdatePastWebinar;

class PastWebinarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(PastWebinarsDataTable $pastWebinarsDataTable)
    {
        return $pastWebinarsDataTable->render('admin.past-webinar.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.past-webinar.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePastWebinar $request)
    {
        $data = $request->validated();

        PastWebinar::create($data);

        return to_route('admin.past-webinars.index')->with("success", "Added successfully");
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
        $pastWebinar = PastWebinar::find($id);

        return view('admin.past-webinar.edit', [
            'pastWebinar' => $pastWebinar,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePastWebinar $request, PastWebinar $pastWebinar)
    {
        $validatedData = $request->validated();

        $pastWebinar->update($validatedData);

        flash()->success('Updated successfully');

        return to_route('admin.past-webinars.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $webinar = PastWebinar::find($id);

        $webinar->delete();

        return response()->json(['status' => 'success', 'message' => 'Deleted successfully']);
    }
}
