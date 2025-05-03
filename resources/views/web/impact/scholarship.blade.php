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

    {{-- <livewire:scholarship-application-form /> --}}

    <section class="scholarshipform">
        <form action="{{ route('our-impact.scholarship.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="container">
                <div class="accordion form-accordion" id="accordionExample">
                    {{-- Personal Information --}}
                    <div class="accordion-item form-accordion-item shadow mt-4">
                        <h2 class="accordion-header">
                            <button class="accordion-button form-accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-controls="collapseOne">
                                Personal Information
                            </button>

                        </h2>

                        @if ($errors->has('name') || $errors->has('email') || $errors->has('phone_number') || $errors->has('eligibility_status'))
                            <small class="text-error px-4">An error occurred in this section</small>
                        @endif

                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                            <div class="accordion-body">

                                <label class="pb-1"><small>Full Name</small></label>
                                <input type="text" name="name" value="{{ old('name') }}" placeholder="Enter Full Name" class="stepinput form-control" />
                                @error('name') <small class="text-error mt-1 d-block">{{ $message }}</small> @enderror

                                <label class="labelform">Email Address</label>
                                <input type="email" name="email" value="{{ old('email') }}" placeholder="Enter email address" class="stepinput form-control" />
                                @error('email') <small class="text-error mt-1 d-block">{{ $message }}</small> @enderror

                                <label class="labelform">Phone Number</label>
                                <input type="tel" name="phone_number" value="{{ old('phone_number') }}" placeholder="Enter a valid phone number" class="stepinput form-control" />
                                @error('phone_number') <small class="text-error mt-1 d-block">{{ $message }}</small> @enderror

                                <div class="spandiv mt-3">
                                    <span>Are you eligible for the upcoming Law School Session?</span>
                                </div>
                                <div class="labeldiv">
                                    <label><input type="radio" name="eligibility_status" value="eligible" {{ old('eligibility_status') == 'yes' ? 'checked' : '' }} /> Yes</label>
                                    <label><input type="radio" name="eligibility_status" value="not_eligible" {{ old('eligibility_status') == 'no' ? 'checked' : '' }} /> No</label>
                                    <label><input type="radio" name="eligibility_status" value="partially_eligible" {{ old('eligibility_status') == 'partially' ? 'checked' : '' }} /> Partially</label>
                                </div>
                                @error('eligibility_status') <small class="text-error d-block">{{ $message }}</small> @enderror
                            </div>
                        </div>
                    </div>

                    {{-- Academic Details --}}
                    <div class="accordion-item form-accordion-item shadow mt-4">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-controls="collapseTwo">
                                Academic Details
                            </button>
                        </h2>
                        @if (
                            $errors->has('graduation_date') ||
                            $errors->has('degree_classification') ||
                            $errors->has('cgpa') ||
                            $errors->has('previously_selected_for_scholarship') ||
                            $errors->has('scholarship_details')
                        )
                            <small class="text-error px-4">An error occurred in this section</small>
                        @endif

                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">

                                <label class="pb-1"><small>Graduation Date</small></label>
                                <input type="date" name="graduation_date" value="{{ old('graduation_date') }}" class="stepinput form-control" />
                                @error('graduation_date') <small class="text-error d-block">{{ $message }}</small> @enderror

                                <label class="labelform">Degree Classification</label>
                                <select name="degree_classification" class="stepinput form-control">
                                    <option value="">Choose degree of classification</option>
                                    <option value="first" {{ old('degree_classification') == 'first' ? 'selected' : '' }}>First Class</option>
                                    <option value="second_upper" {{ old('degree_classification') == 'second_upper' ? 'selected' : '' }}>Second Class Upper</option>
                                    <option value="second_lower" {{ old('degree_classification') == 'second_lower' ? 'selected' : '' }}>Second Class Lower</option>
                                    <option value="third" {{ old('degree_classification') == 'third' ? 'selected' : '' }}>Third Class</option>
                                </select>
                                @error('degree_classification') <small class="text-error d-block">{{ $message }}</small> @enderror

                                <label class="labelform">Cumulative Grade Point Average (CGPA)</label>
                                <input type="number" name="cgpa" value="{{ old('cgpa') }}" placeholder="Enter your CGPA" class="stepinput form-control" />
                                @error('cgpa') <small class="text-error d-block">{{ $message }}</small> @enderror

                                <label class="labelform">Have you been selected for any Scholarship?</label>
                                <select name="previously_selected_for_scholarship" class="stepinput form-control">
                                    <option value="">Select an option</option>
                                    <option value="no" {{ old('previously_selected_for_scholarship') == 'no' ? 'selected' : '' }}>No</option>
                                    <option value="yes" {{ old('previously_selected_for_scholarship') == 'yes' ? 'selected' : '' }}>Yes</option>
                                </select>
                                @error('previously_selected_for_scholarship') <small class="text-error d-block">{{ $message }}</small> @enderror

                                <label class="labelform">If yes, specify</label>
                                <input type="text" name="scholarship_details" value="{{ old('scholarship_details') }}" placeholder="Enter details" class="stepinput form-control" />
                                @error('scholarship_details') <small class="text-error d-block">{{ $message }}</small> @enderror
                            </div>
                        </div>
                    </div>

                    {{-- Supporting Documents --}}
                    <div class="accordion-item form-accordion-item shadow mt-4">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-controls="collapseThree">
                                Supporting Documents
                            </button>
                        </h2>
                        @if (
                            $errors->has('transcript_doc') ||
                            $errors->has('essay_doc') ||
                            $errors->has('cv_doc')
                        )
                            <small class="text-error px-4">An error occurred in this section</small>
                        @endif

                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">

                                <div class="file-upload-wrapper">
                                    <label class="pb-1"><small>Academic Credential (Transcript)</small></label>
                                    <div class="file-upload-box">
                                        <input type="file" name="transcript_doc" class="file-input" />
                                        <div class="file-instructions">
                                            <p><span><img src="{{ asset('web/assets/images/file-upload.svg') }}" alt="upload icon" /></span><br />Choose a file or drag and drop<br /><small>(Max file size: 5MB)</small></p>
                                        </div>
                                    </div>
                                    @error('transcript_doc') <small class="text-error d-block">{{ $message }}</small> @enderror
                                </div>

                                <div class="file-upload-wrapper">
                                    <label class="labelform">Essay (1 page max)</label>
                                    <div class="file-upload-box">
                                        <input type="file" name="essay_doc" class="file-input" />
                                        <div class="file-instructions">
                                            <p><span><img src="{{ asset('web/assets/images/file-upload.svg') }}" alt="upload icon" /></span><br />Choose a file or drag and drop<br /><small>(Max file size: 5MB)</small></p>
                                        </div>
                                    </div>
                                    @error('essay_doc') <small class="text-error d-block">{{ $message }}</small> @enderror
                                </div>

                                <div class="file-upload-wrapper">
                                    <label class="labelform">Curriculum Vitae (CV)</label>
                                    <div class="file-upload-box">
                                        <input type="file" name="cv_doc" class="file-input" />
                                        <div class="file-instructions">
                                            <p><span><img src="{{ asset('web/assets/images/file-upload.svg') }}" alt="upload icon" /></span><br />Choose a file or drag and drop<br /><small>(Max file size: 5MB)</small></p>
                                        </div>
                                    </div>
                                    @error('cv_doc') <small class="text-error d-block">{{ $message }}</small> @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Consent and Submit --}}
                    <div class="mt-4">
                        <div class="accordrow">
                            <input type="checkbox" name="information_consent" {{ old('information_consent') ? 'checked' : '' }} required />
                            I confirm that the information provided is accurate and complete to the best of my knowledge.
                        </div>
                        <div class="accordrow">
                            <input type="checkbox" name="application_consent" {{ old('application_consent') ? 'checked' : '' }} />
                            I agree to be contacted by Law Accent for updates regarding this application.
                        </div>
                        <button type="submit" class="btn form-button">Submit Application Form</button>
                    </div>
                </div>
            </div>
        </form>
    </section>


    <livewire:contact-us-form />

    @include('web.partials.newsletter')

    @push('scripts')
        <script src="{{ asset("web/assets/js/scholarship.js") }}"></script>
    @endpush


</x-app-layout>
