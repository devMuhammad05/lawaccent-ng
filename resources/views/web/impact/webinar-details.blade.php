<x-app-layout>

    <!--=============================
        DISPLAY ANY ERROR START
    ==============================-->
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            @php
                flash()->error("$error")
            @endphp
        @endforeach
    @endif
    <!--=============================
       DISPLAY ANY ERROR END
    ==============================-->

    <section class="sectiontitle">
        <div class="container">
            <div class="row sectiontitlerow">
                <div class="col-md-6">
                    <a href="{{ route('our-impact.legal.literacy') }}">
                        <div class="backicon">
                            <img src="{{ asset("web/assets/images/lessthan.svg") }}" alt="" />
                            <span>Back To Webinars</span>
                        </div>
                    </a>
                    <h4>{{ $webinar->title }}</h4>
                    <p>{{ $webinar->date->format('d M Y') }}</p>

                    <div class="webinartime">
                        <div class="webinartimediv">
                            <span>00</span>
                            <span>Days</span>
                        </div>
                        <div class="webinartimediv">
                            <span>00</span>
                            <span>Hours</span>
                        </div>
                        <div class="webinartimediv">
                            <span>00</span>
                            <span>Minutes</span>
                        </div>
                        <div class="webinartimediv">
                            <span>00</span>
                            <span>Second</span>
                        </div>
                    </div>


                    <p>
                        {{ $webinar->description }}
                    </p>
                    <a href="#step1"><button class="btn btnrsvp">RSVP Now!</button></a>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset("web/assets/images/laptophone.webp") }}" alt="image" />
                </div>
            </div>
        </div>
    </section>

    <section class="rsvp">
        <div class="container">
            <div class="rsvprowcard shadow">
                <form id="consultationForm" action="{{ route('webinar.store') }}" method="POST">
                    @csrf
                    {{-- <div class="progress-indicator progressrsvp">
                        <span class="step-indicator active" id="indicator1"></span>
                        <span class="step-indicator" id="indicator2"></span>
                        <span class="step-indicator" id="indicator3"></span>
                    </div> --}}

                    <!-- Step 1 -->
                    <div class="form-step rsvpform-step" id="step1">
                        <h4>RSVP</h4>
                        <p>Secure your spot for our upcoming legal seminar.</p>
                        <form action="">
                            <label for="" class="rsvplabelform">Full Name</label>
                            <input type="text" placeholder="Enter Full Name" class="stepinput form-control" name="name"
                                required />
                            <label for="" class="rsvplabelform">Email Address</label>
                            <input type="email" placeholder="Enter email address" name="email"
                                class="stepinput form-control" required />
                            <label for="" class="rsvplabelform">Phone Number</label>
                            <input class="stepinput form-control" type="tel"
                                placeholder="Enter a valid phone number (Ex. +234 801 2345 678)" name="phone_number"
                                required />
                            <div class="rsvpspandiv">
                                <span>Attendance Type</span>
                            </div>
                            <div class="labeldiv">
                                <label><input type="radio" name="type" value="Virtual" {{ old('type') == 'Virtual' ? 'checked' : '' }} />
                                    Virtual</label>
                                <label><input type="radio" name="type" value="In Person" {{ old('type') == 'In Person' ? 'checked' : '' }} /> In
                                    Person</label>
                            </div>

                            {{-- <label for="" class="rsvplabelforms">Event</label> --}}
                            {{-- <select class="stepinput form-control" required>
                                <option value="">Autofilled Event</option>
                                <option>Autofilled Event</option>
                                <option>Autofilled Event</option>
                                <option>Autofilled Event</option>
                            </select> --}}
                            {{-- <button type="button" class="btn rsvpsubmitbtn" onclick="nextStep()">
                                Next
                            </button> --}}

                            <label for="" class="rsvplabelform">Have Any Questions To Ask Before The Webinar?</label>

                            <textarea placeholder="Enter your question" class="rsvpfixed-textarea form-control"
                                name="question"></textarea>


                            <button class="btn reservebtn mt-5" type="submit">
                                Reserve My Seat
                            </button>
                        </form>
                    </div>

                    <!-- Step 2 -->
                    <div class="form-step rsvpform-step" id="step2" style="display: none">
                        <h4>RSVP</h4>
                        <p>Secure your spot for our upcoming legal seminar.</p>
                        <form action="">
                            <label for="" class="rsvplabelform">Have Any Questions To Ask Before The Webinar?</label>
                            <textarea placeholder="Enter your question"
                                class="stepinput form-control rsvpfixed-textarea" required
                                style="height: 300px!important"></textarea>
                            <div class="mt-4">
                                <button class="btn reservebtn" onclick="submitForm()">
                                    Reserve My Seat
                                </button>
                            </div>
                        </form>
                    </div>

                    <!-- Step 3 -->

                </form>
            </div>
        </div>
    </section>

    <section class="businesscontact">
        <div class="container">
            <div class="row businesscontactrow">
                <h3 class="getext">Get Involved</h3>
                <p>
                    At Law Accent Nigeria, we welcome collaborations with organisations,
                    schools, <br />
                    and community leaders to expand legal awareness. If you will like to
                    partner with <br />
                    us or attend one of our sessions, reach out to us.
                </p>
                <div class="businesscontactbutton">
                    <button class="btn">
                        <a href="mailto:info@lawaccent.com">Send An Email</a>
                    </button>
                    <button class="btn">
                        <a href="tel:+2347040092801">Call Us</a>
                    </button>
                </div>
            </div>
        </div>
    </section>

    @include('web.partials.newsletter')


    <script>

        const webinarDate = "{{ $webinar->date }}";

        const countdownInterval = setInterval(() => {
            const now = new Date().getTime();
            const webinarTime = new Date(webinarDate).getTime();
            const timeLeft = webinarTime - now;

            if (timeLeft <= 0) {
                clearInterval(countdownInterval);
                document.querySelector('.webinartime').innerHTML = `
                <div class="webinartimediv"><span>00</span><span>Days</span></div>
                <div class="webinartimediv"><span>00</span><span>Hours</span></div>
                <div class="webinartimediv"><span>00</span><span>Minutes</span></div>
                <div class="webinartimediv"><span>00</span><span>Seconds</span></div>
            `;
                return;
            }

            const days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
            const hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

            document.querySelector('.webinartime').innerHTML = `
            <div class="webinartimediv"><span>${String(days).padStart(2, '0')}</span><span>Days</span></div>
            <div class="webinartimediv"><span>${String(hours).padStart(2, '0')}</span><span>Hours</span></div>
            <div class="webinartimediv"><span>${String(minutes).padStart(2, '0')}</span><span>Minutes</span></div>
            <div class="webinartimediv"><span>${String(seconds).padStart(2, '0')}</span><span>Seconds</span></div>
        `;
        }, 1000);



        // MULTISTEP FORM (Schedule Page) FUNCTION
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
    </script>


</x-app-layout>
