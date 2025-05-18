<?php

namespace App\Http\Controllers\Web;

use App\Models\WebinarApplication;
use Illuminate\Http\Request;
use App\Enums\ConsultationTypes;
use App\Http\Controllers\Controller;
use App\Http\Requests\Web\StoreWebinarApplication;

class WebinarApplicationController extends Controller
{
    public function store(StoreWebinarApplication $request)
    {
        $data = $request->validated();

        if ($request->type == 'Virtual') {
            $data['type'] = ConsultationTypes::Virtual;
        } else {
            $data['type'] = ConsultationTypes::InPerson;
        }

        WebinarApplication::create($data);

        flash()->success('Application successful');

        return back();
    }
}
