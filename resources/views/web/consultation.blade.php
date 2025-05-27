<x-app-layout>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            @php
                flash()->error("$error")
            @endphp
        @endforeach
    @endif

    <section class="schedulesection">
        <div class="container">
            <div class="row schedulerow">
                <div class="schedulerowcard">

                    <form action="{{ route('consultation.store') }}" method="POST" id="consultationForm">
                        @csrf

                        <div class="progress-indicator">
                            <span class="step-indicator active" id="indicator1"></span>
                            <span class="step-indicator" id="indicator2"></span>
                            <span class="step-indicator" id="indicator3"></span>
                        </div>

                        <!-- Step 1 -->
                        <div class="form-step" id="step1">
                            <h4>Schedule A Consultation</h4>
                            <span>Book a consultation with one of our experienced lawyers</span><br />
                            <label class="labelform">Full Name</label>

                            <input type="text" name="name" value="{{ old('name') }}" placeholder="Enter Full Name"
                                class="stepinput form-control" id="fullName" required />
                            <small class="text-error d-block" id="errorName"></small>

                            <label class="labelform">Email Address</label>
                            <input type="email" name="email" value="{{ old('email') }}"
                                placeholder="Enter email address" class="stepinput form-control" id="email" />
                            <small class="text-error d-block" id="errorEmail"></small>

                            <label class="labelform">Phone Number</label>
                            <input type="tel" name="phone_number" value="{{ old('phone_number') }}"
                                placeholder="Enter a valid phone number (Ex. +234 801 2345 678)"
                                class="stepinput form-control" id="phone" />
                            <small class="text-error d-block" id="errorPhone"></small>

                            <div class="spandiv"><span>Preferred Consultation Type</span></div>
                            <div class="labeldiv">
                                <label><input type="radio" name="type" value="Virtual" {{ old('type') == 'Virtual' ? 'checked' : '' }} /> Virtual</label>
                                <label><input type="radio" name="type" value="In Person" {{ old('type') == 'In Person' ? 'checked' : '' }} /> In
                                    Person</label>
                            </div>
                            <small class="text-error d-block" id="errorType"></small>

                            <button type="button" class="btn submitbtn" id="nextBtn" onclick="nextStep()"
                                >Next</button>

                        </div>

                        <!-- Step 2 -->
                        <div class="form-step" id="step2" style="display: none">
                            <h4>Schedule A Consultation</h4>
                            <span>Book a consultation with one of our experienced lawyers</span> <br>

                            <label class="labelforms">Preferred Date And Time</label>
                            <input type="datetime-local" class="stepinput form-control" name="date"
                                value="{{ old('date') }}" id="dateTime" />
                            <small class="text-error d-block" id="errorDate"></small>

                            <label class="labelforms">Additional Information</label>
                            <textarea placeholder="Enter any additional information" class="form-control fixed-textarea"
                                id="info" name="additional_info">{{ old('additional_info') }}
                            </textarea>
                            <small class="text-error d-block" id="errorInfo"></small>

                            <div class="mt-4">
                                <div class=" d-flex align-items-start gap-2">
                                    <input type="checkbox" class="checks mt-1" name="checkbox" required />
                                    <p class="mb-0 ">
                                        We value your privacy. Your information will be used solely
                                        to respond to your enquiry and, if you click the box above,
                                        to keep you informed about our products, services, and
                                        valuable content. You can withdraw your consent at any time.
                                        See our
                                        <a href="{{ route('privacy-notice') }}" target="_blank" class="view-privacy">Privacy
                                            Notice</a>
                                        for details.
                                    </p>
                                </div>
                            </div>

                            <!-- Google reCAPTCHA -->
                            <div class="g-recaptcha mt-3" data-sitekey="{{ config('app.recaptcha_sitekey') }}"></div>


                            <div class="mt-4">
                                <button type="button" class="btn" onclick="prevStep()">Previous</button>
                                <button type="submit" class="btn" id="submitBtn">Submit</button>
                            </div>
                        </div>


                        <!-- Step 3 -->
                        <div class="form-step" id="step3" style="display: none">
                            <h4>Your Consultation Has Been Booked Successfully!</h4>
                            <p class="pt-3">
                                Thank you for scheduling a consultation with Law Accent. We
                                have received your request and you are all set!
                            </p>
                            <div class="py-3">
                                <p><strong>Appointment Details</strong></p>
                                <ul>
                                    <li>Name: <span class="name">Muhammad</span> </li>
                                    <li>Email: <span class="email"></span> </li>
                                    <li>Phone Number: <span class="phone_number"></span></li>
                                    <li>Date and Time: <span class="date_time"></span></li>
                                    <li>Consultation Type: <span class="type"></span></li>
                                </ul>
                            </div>
                            <p>
                                A confirmation email will be sent to you. We wll also send a
                                reminder closer to your appointment.
                            </p>

                            <a href="{{ route('home') }}">
                                <button class="btn btnhomepage mt-3">
                                    Back to Homepage
                                </button>
                            </a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>

    @include('web.partials.newsletter')

    @push('script')
        <script src="{{ asset("web/assets/js/schedule-consultation.js") }}"></script>
    @endpush
</x-app-layout>
