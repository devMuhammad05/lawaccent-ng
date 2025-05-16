<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Enums\ConsultationTypes;
use App\Http\Controllers\Controller;
use App\Http\Requests\Web\StoreWebinarApplication;

class WebinarApplicationController extends Controller
{
    public function store(StoreWebinarApplication $request)
    {
        $data = $request->validated();

        // dd($request->all());

        if ($request->type == 'Virtual') {
            $data['type'] = ConsultationTypes::Virtual;
        } else {
            $data['type'] = ConsultationTypes::InPerson;
        }

        flash()->success('Application successful');

        return back();
    }
}
