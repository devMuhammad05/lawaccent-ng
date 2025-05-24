<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ContactUs;
use App\Rules\EmailValidation;
use Illuminate\Support\Facades\Mail;
use App\Rules\PhoneNumberValidationRule;
use Illuminate\Support\Facades\Validator;

class ContactUsForm extends Component
{
    public $name;
    public $email;
    public $phone_number;
    public $message;
    public $subject = "Need Legal Clarity? Let’s Talk.";
    public $sub_heading = "For Enquiries and Consultations";

    public function rules()
    {
        return [
            'name' => 'required|string|max:255|min:3',
            'email' => ['required', 'email:rfc,dns,spoof'],
            'phone_number' => ['required', 'string', 'max:17', 'regex:/^\+\d{10,14}$/'],
            'message' => 'required|string|max:255',
        ];
    }

    public function save()
    {
        $data = $this->validate();

        // Validate email with your custom EmailValidation rule (calls API)
        // $emailValidator = Validator::make(
        //     ['email' => $this->email],
        //     ['email' => [new EmailValidation()]]
        // );

        // if ($emailValidator->fails()) {
        //     $this->addError('email', $emailValidator->errors()->first('email'));
        //     return;
        // }

        // // Validate phone with your custom PhoneNumberValidationRule
        // $phoneValidator = Validator::make(
        //     ['phone_number' => $this->phone_number],
        //     ['phone_number' => [new PhoneNumberValidationRule()]]
        // );

        // if ($phoneValidator->fails()) {
        //     $this->addError('phone_number', $phoneValidator->errors()->first('phone_number'));
        //     return;
        // }

        // If all validation passes, save data
        ContactUs::create($data);

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

        flash()->success('Your message has been sent successfully!');
        $this->reset();
    }

    public function updated($propertyName)
    {
        // Run only the fast validations here
        $this->validateOnly($propertyName, $this->rules());
    }


    public function render()
    {
        return view('web.partials.contact-us-form');
    }
}
