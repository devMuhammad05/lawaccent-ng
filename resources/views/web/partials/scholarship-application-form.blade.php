<section class="scholarshipform">

    <form action="" wire:submit.prevent="save">
        <div class="container">
        <div class="accordion form-accordion" id="accordionExample">
            <div class="accordion-item form-accordion-item shadow mt-4" wire:ignore.self>
            <h2 class="accordion-header">
                <button
                aria-label="Name"
                class="accordion-button form-accordion-button"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseOne"
                aria-controls="collapseOne"
                >
                Personal Information
                </button>
            </h2>
            <div
                id="collapseOne"
                class="accordion-collapse collapse show"
                data-bs-parent="#accordionExample"
            >
                <div class="accordion-body">

                    <label for="" class="pb-1"><small>Full Name</small></label>
                    <input
                    type="text"
                    wire:model="name"
                    placeholder="Enter Full Name"
                    class="stepinput form-control"
                    />
                    @error('name')
                        <small class="text-error mt-1 d-block">{{ $message }}</small>
                    @enderror

                    <label for="" class="labelform">Email Address</label>
                    <input
                    type="email"
                    wire:model="email"
                    placeholder="Enter email address"
                    class="stepinput form-control"
                    />
                    @error('email')
                        <small class="text-error mt-1 d-block">{{ $message }}</small>
                    @enderror


                    <label for="" class="labelform">Phone Number</label>
                    <input
                    class="stepinput form-control"
                    type="tel"
                    wire:model="phone_number"
                    placeholder="Enter a valid phone number (Ex. +234 801 2345 678)"
                    />
                    @error('phone_number')
                        <small class="text-error mt-1 d-block">{{ $message }}</small>
                    @enderror

                    <div class="spandiv mt-3">
                    <span
                        >Are you eligible for the upcoming Law School
                        Session?</span
                    >
                    </div>
                    <div class="labeldiv">
                    <label
                        ><input type="radio" name="consultationType" wire:model="eligibility_status" /> Yes</label
                    >

                    <label
                        ><input type="radio" name="consultationType" wire:model="eligibility_status" /> No</label
                    >
                    <label
                        ><input
                        type="radio"
                        name="consultationType"
                        wire:model="eligibility_status"
                        />Partially</label
                    >
                    </div>

                    <div>
                        @error('eligibility_status')
                            <small class="text-error d-block">{{ $message }}</small>
                        @enderror
                    </div>

                </div>
            </div>
            </div>
            <div class="accordion-item form-accordion-item shadow mt-4" wire:ignore.self>
            <h2 class="accordion-header">
                <button
                aria-label="Name"
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseTwo"
                aria-controls="collapseTwo"
                >
                Academic Details
                </button>
            </h2>
            <div
                id="collapseTwo"
                class="accordion-collapse collapse"
                data-bs-parent="#accordionExample"
            >
                <div class="accordion-body">
                    <label for="" class="pb-1"
                    ><small>Graduation Date</small></label
                    >
                    <input type="date" wire:model="graduation_date" class="stepinput form-control"  />
                    @error('graduation_date')
                        <small class="text-error d-block">{{ $message }}</small>
                    @enderror

                    <label for="" class="labelform">Degree Classification</label>
                    <select class="stepinput form-control" wire:model="degree_classification" >
                    <option value="degree">Choose degree of classification</option>
                    <option class="degree">Choose</option>
                    <option>Choose degree</option>
                    <option>Choose degree of</option>
                    <option>Choose degree of classification</option>
                    </select>
                    @error('degree_classification')
                        <small class="text-error d-block">{{ $message }}</small>
                    @enderror


                    <label for="" class="labelform"
                    >Cumulative Grade Point Average (CGPA)</label
                    >
                    <input
                    type="text"
                    placeholder="Enter your CGPA"
                    class="stepinput form-control"
                    wire:model="cgpa"
                    />
                    @error('cgpa')
                        <small class="text-error d-block">{{ $message }}</small>
                    @enderror

                    <label for="" class="labelform">Have you been selected for any Scholarship?</label>
                    <select class="stepinput form-control" wire:model="previously_selected_for_scholarship" >
                    <option value="">
                        Have you been selected for any Scholarship?
                    </option>
                    <option value="no">NO</option>
                    <option value="yes">YES</option>
                    </select>
                    @error('previously_selected_for_scholarship')
                        <small class="text-error d-block">{{ $message }}</small>
                    @enderror

                    <label for="" class="labelform">If yes, specify</label>
                    <input
                    type="text"
                    wire:model="scholarship_details"
                    placeholder="Enter details"
                    class="stepinput form-control"
                    />
                    @error('scholarship_details')
                        <small class="text-error d-block">{{ $message }}</small>
                    @enderror

                </div>
            </div>
            </div>
            <div class="accordion-item form-accordion-item shadow mt-4">
            <h2 class="accordion-header">
                <button
                aria-label="Name"
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseThree"
                aria-controls="collapseThree"
                >
                Supporting Documents
                </button>
            </h2>
            <div
                id="collapseThree"
                class="accordion-collapse collapse"
                data-bs-parent="#accordionExample"
            >
                <div class="accordion-body">

                    <div class="file-upload-wrapper">
                    <label class="pb-1"
                        ><small>Academic Credential (Transcript)</small></label
                    >
                    <div class="file-upload-box">
                        <input type="file" wire:model="transcript_doc"class="file-input"  />
                        <div class="file-instructions">
                        <p>
                            <span
                            ><img
                                src="{{ asset("web/assets/images/file-upload.svg") }}"
                                alt="image" /></span
                            ><br class="br" />
                            Choose a file or drag and drop<br /><small
                            >(Max file size: 5MB)</small
                            >
                        </p>
                        </div>
                    </div>
                    </div>

                    <div class="file-upload-wrapper">
                    <label class="labelform"
                        >A one page essay explaining why you are the best
                        candidate</label
                    >
                    <div class="file-upload-box">
                        <input type="file" wire:model="essay_doc" class="file-input" />
                        <div class="file-instructions">
                        <p>
                            <span
                            ><img
                                src="{{ asset("web/assets/images/file-upload.svg") }}"
                                alt="image" /></span
                            ><br class="br" />
                            Choose a file or drag and drop<br /><small
                            >(Max file size: 5MB)</small
                            >
                        </p>
                        </div>
                    </div>
                    </div>

                    <div class="file-upload-wrapper">
                    <label class="labelform">Curriculum Vitae (CV)</label>
                    <div class="file-upload-box">
                        <input type="file" wire:model="cv_doc" class="file-input" />
                        <div class="file-instructions">
                        <p>
                            <span
                            ><img
                                src="{{ asset("web/assets/images/file-upload.svg") }}"
                                alt="image" /></span
                            ><br class="br" />
                            Choose a file or drag and drop<br /><small
                            >(Max file size: 5MB)</small
                            >
                        </p>
                        </div>
                    </div>
                    </div>

                </div>
            </div>
            </div>
            <div class="mt-4">
            <div class="accordrow">
                <input type="checkbox" wire:model="information_consent"  id="" />
                I confirm that the information provided is accurate and complete
                to the <br />
                best of my knowledge.
            </div>
            <div class="accordrow">
                <input type="checkbox" wire:model="application_consent"  id="" />
                I agree to be contacted by Law Accent for updates regarding this
                <br />
                application.
            </div>
            <button type="submit" class="btn form-button">Submit Application Form</button>
            </div>
        </div>
        </div>
    </form>
</section>


