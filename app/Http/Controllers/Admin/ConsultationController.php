<?php

namespace App\Http\Controllers\Admin;

use App\Models\Consultation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DataTables\ConsultationsDataTable;
use App\DataTables\UnreadConsultationsDataTable;

class ConsultationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(ConsultationsDataTable $consultationsDataTable)
    {
        return $consultationsDataTable->render('admin.consultation.index');
    }

    public function unread(UnreadConsultationsDataTable $unreadConsultationsDataTable)
    {
        return $unreadConsultationsDataTable->render('admin.consultation.unread');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $consultation = Consultation::find($id);

        return view('admin.consultation.show', [
            'consultation' => $consultation,
        ]);
    }

    public function markAsRead(string $id)
    {
        $consultation = Consultation::find($id);

        $consultation->markAsRead();
        flash()->success('Enquiry marked as read successfully');

        return to_route('admin.consultations.unread');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
