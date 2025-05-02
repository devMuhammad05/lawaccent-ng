<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ScholarshipApplication;
use App\DataTables\ScholarshipApplicationsDataTable;
use App\DataTables\UnreadScholarshipApplicationsDataTable;

class ScholarshipApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(ScholarshipApplicationsDataTable $scholarshipApplicationsDataTable)
    {
        return $scholarshipApplicationsDataTable->render('admin.scholarship-application.index');
    }

    public function unread(UnreadScholarshipApplicationsDataTable $unreadConsultationsDataTable)
    {
        return $unreadConsultationsDataTable->render('admin.scholarship-application.unread');
    }

    public function markAsRead(ScholarshipApplication $scholarshipApplication)
    {

        $scholarshipApplication->markAsRead();

        flash()->success('Application marked as read successfully');

        return to_route('admin.scholarship-applications.unread');
    }
}
