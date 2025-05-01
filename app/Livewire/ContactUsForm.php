<?php

namespace App\Livewire;

use App\Models\ContactUs;
use Livewire\Component;

class ContactUsForm extends Component
{
    public $name;
    public $email;
    public $phone_number;
    public $message;

    protected $rules = [
        'name' => 'required|string|max:255|min:3',
        'email' => 'required|email:rfc,dns,spoof',
        'phone_number' => "required|string|max:255|regex:/^(\+?\d{1,3}[- ]?)?\d{10}$/",
        'message' => 'required|string|max:255',
    ];

    public function save()
    {
        $data = $this->validate();
        ContactUs::create($data);
        flash()->success('Your message has been sent successfully!');

        $this->reset();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('web.partials.contact-us-form');
    }
}
