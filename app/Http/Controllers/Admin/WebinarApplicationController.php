<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\WebinarApplication;
use App\Http\Controllers\Controller;
use App\DataTables\WebinarApplicationsDataTable;
use App\DataTables\UnreadWebinarApplicationsDataTable;


class WebinarApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index(WebinarApplicationsDataTable $webinarApplicationsDataTable)
    {
        return $webinarApplicationsDataTable->render('admin.webinar-application.index');
    }

    public function unread(UnreadWebinarApplicationsDataTable $webinarApplicationsDataTable)
    {
        return $webinarApplicationsDataTable->render('admin.webinar-application.unread');
    }


    public function markAsRead(WebinarApplication $webinarApplication)
    {
        $webinarApplication->markAsRead();

        flash()->success('Message marked as read successfully');

        // return to_route('admin.webinar-applications.unread');

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $webinarApplication = WebinarApplication::find($id);

        $webinarApplication->markAsRead();

        return view('admin.webinar-application.show', [
            'webinarApplication' => $webinarApplication,
        ]);
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
