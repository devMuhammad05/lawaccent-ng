<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\AboutUsMetric;
use App\Http\Controllers\Controller;
use App\Http\Requests\AboutUs\AboutUsMetricsRequest;

class AbouUsMetricsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aboutUsMetrics = AboutUsMetric::first();
        return view('admin.about-us.index', compact('aboutUsMetrics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AboutUsMetricsRequest $request)
    {
        // dd($request);

        $data = $request->validated();

        AboutUsMetric::update($data);
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AboutUsMetricsRequest $request, AboutUsMetric $aboutUsMetric)
    {
        $data = $request->validated();
        $aboutUsMetric->update($data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
