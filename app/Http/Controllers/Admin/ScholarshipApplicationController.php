<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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


}
