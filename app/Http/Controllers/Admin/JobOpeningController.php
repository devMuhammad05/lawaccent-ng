<?php

namespace App\Http\Controllers\Admin;

use App\Models\JobOpening;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DataTables\JobOpeningsDataTable;
use App\Http\Requests\Admin\JobOpening\StoreJobOpeningRequest;

class JobOpeningController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(JobOpeningsDataTable $dataTable)
    {
        return $dataTable->render('admin.job-opening.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.job-opening.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreJobOpeningRequest $request)
    {
        $data = $request->validated();
        JobOpening::create($data);

        flash()->success("Job opening created successfully");

        return to_route('admin.job-openings.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $jobOpening = JobOpening::find($id);

        $jobOpening->delete();

        flash()->deleted('Job opening deleted successfully');

        return redirect()->back();
    }
}
