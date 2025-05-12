<?php

namespace App\Http\Controllers\Admin;

use App\Models\Webinar;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DataTables\webinarsDataTable;
use App\Http\Requests\Admin\Webinar\StoreWebinarRequest;

class WebinarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(webinarsDataTable $videoMediasDataTable)
    {
        return $videoMediasDataTable->render('admin.webinar.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.webinar.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreWebinarRequest $request)
    {
        $data = $request->validated();

        $data['slug'] = Str::slug($data['title']);
        Webinar::create($data);

        return to_route('admin.webinars.index')->with("success", "Webinar created successfully");
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
