<x-app-layout>

    {{-- <section class="schedulesection">
        <div class="container">
            <div class="row schedulerow">
                <div class="schedulerowcard">
                    <form id="consultationForm">
                        <div class="progress-indicator">
                            <span class="step-indicator active" id="indicator1"></span>
                            <span class="step-indicator" id="indicator2"></span>
                            <span class="step-indicator" id="indicator3"></span>
                        </div>

                        <!-- Step 1 -->
                        <div class="form-step" id="step1">
                            <h4>Schedule A Consultation</h4>
                            <span>Book a consultation with one of our experienced lawyers</span><br />
                            <form action="">
                                <label for="" class="labelform">Full Name</label>
                                <input type="text" placeholder="Enter Full Name" class="stepinput form-control"
                                    required />
                                <small class="text-error d-block">Name is required</small>


                                <label for="" class="labelform">Email Address</label>
                                <input type="email" placeholder="Enter email address" class="stepinput form-control"
                                    required />
                                <label for="" class="labelform">Phone Number</label>
                                <input class="stepinput form-control" type="tel"
                                    placeholder="Enter a valid phone number (Ex. +234 801 2345 678)" required />
                                <div class="spandiv">
                                    <span>Preferred Consultation Type</span>
                                </div>
                                <div class="labeldiv">
                                    <label><input type="radio" name="consultationType" />
                                        Virtual</label>
                                    <label><input type="radio" name="consultationType" /> In
                                        Person</label>
                                </div>
                                <button type="submit" class="btn submitbtn" onclick="nextStep()">
                                    Next
                                </button>
                            </form>
                        </div>

                        <!-- Step 2 -->
                        <div class="form-step" id="step2" style="display: none">
                            <h4>Schedule A Consultation</h4>
                            <span>Book a consultation with one of our experienced lawyers</span>
                            <form action="">
                                <label for="" class="labelforms">Choose Area Of Legal Concern</label>
                                <select class="stepinput form-control" required>
                                    <option value="">Choose area of concern</option>
                                    <option>Family Law</option>
                                    <option>Business Law</option>
                                    <option>Property Law</option>
                                </select>
                                <label for="" class="labelforms">Preferred Date And Time</label>
                                <input type="datetime-local" class="stepinput form-control" required />
                                <label for="" class="labelforms">Additional Information</label>
                                <textarea placeholder="Enter any additional information"
                                    class="stepinput form-control fixed-textarea" required></textarea>
                                <div class="mt-4">
                                    <button class="btn" onclick="prevStep()">Previous</button>
                                    <button type="button" class="btn" onclick="submitForm()">
                                        Submit
                                    </button>
                                </div>
                            </form>
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
                                    <li>Name:</li>
                                    <li>Email:</li>
                                    <li>Phone Number:</li>
                                    <li>Date and Time:</li>
                                    <li>Consultation Type:</li>
                                </ul>
                            </div>
                            <p>
                                A confirmation email will be sent to you. We wll also send a
                                reminder closer to your appointment.
                            </p>
                            <button class="btn btnhomepage mt-3" onclick="goHome()">
                                Back to Homepage
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section> --}}


    <section class="schedulesection">
        <div class="container">
            <div class="row schedulerow">
                <div class="schedulerowcard">
                    <form id="consultationForm">
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
                            <input type="text" placeholder="Enter Full Name" class="stepinput form-control"
                                id="fullName" />
                            <small class="text-error d-block" id="errorName"></small>

                            <label class="labelform">Email Address</label>
                            <input type="email" placeholder="Enter email address" class="stepinput form-control"
                                id="email" />
                            <small class="text-error d-block" id="errorEmail"></small>

                            <label class="labelform">Phone Number</label>
                            <input type="tel" placeholder="Enter a valid phone number (Ex. +234 801 2345 678)"
                                class="stepinput form-control" id="phone" />
                            <small class="text-error d-block" id="errorPhone"></small>

                            <div class="spandiv"><span>Preferred Consultation Type</span></div>
                            <div class="labeldiv">
                                <label><input type="radio" name="consultationType" value="Virtual" /> Virtual</label>
                                <label><input type="radio" name="consultationType" value="In Person" /> In
                                    Person</label>
                            </div>
                            <small class="text-error d-block" id="errorType"></small>

                            <button type="button" class="btn submitbtn" id="nextBtn" onclick="nextStep()"
                                disabled>Next</button>
                        </div>

                        <!-- Step 2 -->
                        <div class="form-step" id="step2" style="display: none">
                            <h4>Schedule A Consultation</h4>
                            <span>Book a consultation with one of our experienced lawyers</span>
                            <label class="labelforms">Choose Area Of Legal Concern</label>
                            <select class="stepinput form-control" id="legalArea">
                                <option value="">Choose area of concern</option>
                                <option>Family Law</option>
                                <option>Business Law</option>
                                <option>Property Law</option>
                            </select>
                            <small class="text-error d-block" id="errorArea"></small>

                            <label class="labelforms">Preferred Date And Time</label>
                            <input type="datetime-local" class="stepinput form-control" id="dateTime" />
                            <small class="text-error d-block" id="errorDate"></small>

                            <label class="labelforms">Additional Information</label>
                            <textarea placeholder="Enter any additional information"
                                class="stepinput form-control fixed-textarea" id="info"></textarea>
                            <small class="text-error d-block" id="errorInfo"></small>

                            <div class="mt-4">
                                <button class="btn" onclick="prevStep()">Previous</button>
                                <button type="button" class="btn" id="submitBtn" onclick="submitForm()"
                                    disabled>Submit</button>
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
                                    <li>Consultation Type: <span class="consultation_type"></span></li>
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


    <script>

        let currentStep = 1;
        showStep(currentStep);

        function showStep(step) {
            document.querySelectorAll(".form-step").forEach((el, index) => {
                el.style.display = index === step - 1 ? "block" : "none";
            });
            document.querySelectorAll(".step-indicator").forEach((el, index) => {
                el.classList.remove("active");
                el.style.width = "12px";
            });
            document.getElementById(`indicator${step}`).classList.add("active");
            document.getElementById(`indicator${step}`).style.width = "45px";
            currentStep = step;
        }

        function nextStep() {
            showStep(2);
        }

        function prevStep() {
            showStep(1);
        }

        function submitForm() {
            showStep(3);
        }

        const fullName = document.getElementById('fullName');
        const email = document.getElementById('email');
        const phone = document.getElementById('phone');
        const nextBtn = document.getElementById('nextBtn');

        const legalArea = document.getElementById('legalArea');
        const dateTime = document.getElementById('dateTime');
        const info = document.getElementById('info');
        const submitBtn = document.getElementById('submitBtn');

        const radioInputs = document.getElementsByName('consultationType');

        function validateStep1() {
            let isValid = true;

            // Full Name
            if (fullName.value.trim() === '') {
                document.getElementById('errorName').textContent = 'Full name is required';
                isValid = false;
            } else {
                document.getElementById('errorName').textContent = '';
            }

            // Email
            const emailRegex = /^\S+@\S+\.\S+$/;
            if (!emailRegex.test(email.value.trim())) {
                document.getElementById('errorEmail').textContent = 'Enter a valid email';
                isValid = false;
            } else {
                document.getElementById('errorEmail').textContent = '';
            }

            // Phone
            const phoneRegex = /^\+?\d{10,15}$/;
            if (!phoneRegex.test(phone.value.trim())) {
                document.getElementById('errorPhone').textContent = 'Enter a valid phone number';
                isValid = false;
            } else {
                document.getElementById('errorPhone').textContent = '';
            }

            // Consultation Type
            let selectedType = false;
            for (let r of radioInputs) {
                if (r.checked) selectedType = true;
            }
            if (!selectedType) {
                document.getElementById('errorType').textContent = 'Select a consultation type';
                isValid = false;
            } else {
                document.getElementById('errorType').textContent = '';
            }

            nextBtn.disabled = !isValid;
            return isValid;
        }

        function validateStep2() {
            let isValid = true;

            if (legalArea.value === '') {
                document.getElementById('errorArea').textContent = 'Please choose an area';
                isValid = false;
            } else {
                document.getElementById('errorArea').textContent = '';
            }

            if (dateTime.value === '') {
                document.getElementById('errorDate').textContent = 'Date and time required';
                isValid = false;
            } else {
                document.getElementById('errorDate').textContent = '';
            }

            if (info.value.trim() === '') {
                document.getElementById('errorInfo').textContent = 'Please provide additional info';
                isValid = false;
            } else {
                document.getElementById('errorInfo').textContent = '';
            }

            submitBtn.disabled = !isValid;
            return isValid;
        }

        // Attach oninput validation
        fullName.oninput = email.oninput = phone.oninput = () => validateStep1();
        radioInputs.forEach(r => r.onclick = validateStep1);

        legalArea.oninput = dateTime.oninput = info.oninput = () => validateStep2();

        // Modify step navigation to validate before changing steps
        function nextStep() {
            if (validateStep1()) {
                showStep(2);
            }
        }

        function submitForm() {
            if (validateStep2()) {
                $(".name").text(fullName.value)
                $(".email").text(email.value)
                $(".phone_number").text(phone.value)
                $(".date_time").text(dateTime.value)
                // $(".consultation_type")
                showStep(3);
            }
        }

    </script>

    <livewire:contact-us-form />

    @include('web.partials.newsletter')

</x-app-layout>
