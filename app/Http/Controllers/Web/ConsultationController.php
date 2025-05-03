<?php

namespace App\Http\Controllers\web;

use App\Models\Consultation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Web\StoreConsultationRequest;

class ConsultationController extends Controller
{
    /**
     * Display a listing of the resource.
    */
    public function index()
    {
        return view('web.consultation');
    }

    public function store(StoreConsultationRequest $request)
    {
        $data = $request->validated();

        Consultation::create($data);

        flash('success', 'Your consultation request has been submitted successfully. We will get back to you shortly.');
    }
}

