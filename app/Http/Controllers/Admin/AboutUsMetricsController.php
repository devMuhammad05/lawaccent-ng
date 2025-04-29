<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\AboutUsMetric;
use App\Http\Controllers\Controller;
use App\Http\Requests\AboutUs\AboutUsMetricsRequest;

class AboutUsMetricsController extends Controller
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
     * Update the specified resource in storage.
     */
    public function update(AboutUsMetricsRequest $request, AboutUsMetric $aboutUsMetric)
    {
        $data = $request->validated();
        $aboutUsMetric->update($data);


        flash()->success('Metrics updated successfully');
        return back();
    }

}
