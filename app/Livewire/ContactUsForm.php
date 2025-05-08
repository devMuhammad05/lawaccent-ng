<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ContactUs;
use Illuminate\Support\Facades\Mail;

class ContactUsForm extends Component
{
    public $name;
    public $email;
    public $phone_number;
    public $message;
    public $subject = "Need Legal Clarity? Let’s Talk.";
    public $sub_heading = "For Enquiries and Consultations";

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

        Mail::html("
        <p>Thank you for sending us a message.</p>
        <p>Here is the summary of the message you sent:</p>

        <ul>
            <li><strong>Name:</strong> {$this->name}</li>
            <li><strong>Email:</strong> {$this->email}</li>
            <li><strong>Phone Number:</strong> {$this->phone_number}</li>
            <li><strong>Message:</strong> {$this->message}</li>
        </ul>
    ", function ($message) {
        $message->to($this->email)
                ->subject('Thank You for Contacting Us');
    });


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
