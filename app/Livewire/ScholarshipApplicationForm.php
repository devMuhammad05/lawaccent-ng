<?php

namespace App\Livewire;

use App\Models\ScholarshipApplication;
use Livewire\Component;
use Livewire\WithFileUploads;

class ScholarshipApplicationForm extends Component
{
    use WithFileUploads;

    public $name;
    public $email;
    public $phone_number;
    public $eligibility_status;
    public $graduation_date;
    public $degree_classification;
    public $cgpa;
    public $previously_selected_for_scholarship;
    public $scholarship_details;
    public $transcript_doc;
    public $essay_doc;
    public $cv_doc;
    public $information_consent;
    public $application_consent;


    protected $rules = [
        'name' => 'required|string|max:255|min:3',
        'email' => 'required|email:rfc,dns,spoof',
        'phone_number' => "required|string|max:255|regex:/^(\+?\d{1,3}[- ]?)?\d{10}$/",
        'eligibility_status' => 'required',
        'graduation_date' => 'required|date',
        'degree_classification' => 'required|string',
        'cgpa' => 'required|numeric',
        'previously_selected_for_scholarship' => 'required',
        'scholarship_details' => 'nullable|max:150',
        'transcript_doc' => 'nullable|file|mimes:pdf,doc,docx|max:5048',
        'essay_doc' => 'nullable|file|mimes:pdf,doc,docx|max:5048',
        'cv_doc' => 'nullable|file|mimes:pdf,doc,docx|max:5048',
    ];

    public function save()
    {
        // dd("hi");
        $data = $this->validate();
        ScholarshipApplication::create($data);
        flash()->success('Your application has been successfully!');

        $this->reset();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('web.partials.scholarship-application-form');
    }
}
