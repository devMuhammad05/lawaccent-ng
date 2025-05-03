<?php

use Livewire\Component;
use App\Models\Consultation;

class ScheduleConsultationForm extends Component
{
    public $currentStep = 1;

    public $name, $email, $phone, $consultationType;
    public $area_of_concern, $date_time, $additional_info;

    protected $rules = [
        1 => [
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required',
            'consultationType' => 'required|in:Virtual,In Person',
        ],
        2 => [
            'area_of_concern' => 'required',
            'date_time' => 'required|date',
            'additional_info' => 'nullable|string',
        ]
    ];

    public function nextStep()
    {
        $this->validate($this->rules[$this->currentStep]);
        $this->currentStep++;
    }

    public function previousStep()
    {
        $this->currentStep--;
    }

    public function submit()
    {
        $this->validate(array_merge(...array_values($this->rules)));

        Consultation::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'consultation_type' => $this->consultationType,
            'area_of_concern' => $this->area_of_concern,
            'date_time' => $this->date_time,
            'additional_info' => $this->additional_info,
        ]);

        session()->flash('success', 'Consultation scheduled successfully.');
        $this->currentStep = 3;
    }

    public function render()
    {
        return view('livewire.schedule-consultation-form');
    }
}
