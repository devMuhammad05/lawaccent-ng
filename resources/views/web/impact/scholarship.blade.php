<x-app-layout>

    <section class="aboutlawaccent">
        <div class="container">
            <img src="{{ asset("web/assets/images/social.svg") }}" alt="image" />
            <h3>Law Accent Legal Scholarship Application Form</h3>
            <p>
                Please ensure you meet the eligibility criteria before proceeding to
                fill out the form below.
            </p>
        </div>
    </section>

    <section class="scholarshipform">
        <div class="container">
            <div class="accordion form-accordion" id="accordionExample">
                <div class="accordion-item form-accordion-item shadow mt-4">
                    <h2 class="accordion-header">
                        <button aria-label="Name" class="accordion-button form-accordion-button" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-controls="collapseOne">
                            Personal Information
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <form action="">
                                <label for="" class="labelform">Full Name</label>
                                <input type="text" placeholder="Enter Full Name" class="stepinput form-control"
                                    required />
                                <label for="" class="labelform">Email Address</label>
                                <input type="email" placeholder="Enter email address" class="stepinput form-control"
                                    required />
                                <label for="" class="labelform">Phone Number</label>
                                <input class="stepinput form-control" type="tel"
                                    placeholder="Enter a valid phone number (Ex. +234 801 2345 678)" required />
                                <div class="spandiv">
                                    <span>Are you eligible for the upcoming Law School
                                        Session?</span>
                                </div>
                                <div class="labeldiv">
                                    <label><input type="radio" name="consultationType" /> Yes</label>
                                    <label><input type="radio" name="consultationType" /> In
                                        No</label>
                                    <label><input type="radio" name="consultationType" /> In
                                        Partially</label>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="accordion-item form-accordion-item shadow mt-4">
                    <h2 class="accordion-header">
                        <button aria-label="Name" class="accordion-button collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-controls="collapseTwo">
                            Academic Details
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <form action="">
                                <label for="" class="labelform">Graduation Date</label>
                                <input type="date" class="stepinput form-control" required />
                                <label for="" class="labelform">Degree Classification</label>
                                <select class="stepinput form-control" required>
                                    <option value="">Choose degree of classification </option>
                                    <option>>Choose</option>
                                    <option>Choose degree</option>
                                    <option>Choose degree of</option>
                                    <option>Choose degree of classification</option>
                                </select>
                                <label for="" class="labelform">Phone Number</label>
                                <input class="stepinput form-control" type="tel"
                                    placeholder="Enter a valid phone number (Ex. +234 801 2345 678)" required />
                            </form>
                        </div>
                    </div>
                </div>
                <div class="accordion-item form-accordion-item shadow mt-4">
                    <h2 class="accordion-header">
                        <button aria-label="Name" class="accordion-button collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-controls="collapseThree">
                            Supporting Documents
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <form action="">
                                <label for="" class="labelform">Full Name</label>
                                <input type="text" placeholder="Enter Full Name" class="stepinput form-control"
                                    required />
                                <label for="" class="labelform">Email Address</label>
                                <input type="email" placeholder="Enter email address" class="stepinput form-control"
                                    required />
                                <label for="" class="labelform">Phone Number</label>
                                <input class="stepinput form-control" type="tel"
                                    placeholder="Enter a valid phone number (Ex. +234 801 2345 678)" required />
                                <div class="spandiv">
                                    <span>Are you eligible for the upcoming Law School
                                        Session?</span>
                                </div>
                                <div class="labeldiv">
                                    <label><input type="radio" name="consultationType" /> Yes</label>
                                    <label><input type="radio" name="consultationType" /> In
                                        No</label>
                                    <label><input type="radio" name="consultationType" /> In
                                        Partially</label>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('web.partials.contact-us-form')

    @include('web.partials.newsletter')

</x-app-layout>
