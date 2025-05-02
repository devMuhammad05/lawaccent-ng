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
                  <form action="">
                    <label for="" class="pb-1"><small>Full Name</small></label>
                    <input
                      type="text"
                      placeholder="Enter Full Name"
                      class="stepinput form-control"
                      required
                    />
                    <label for="" class="labelform">Email Address</label>
                    <input
                      type="email"
                      placeholder="Enter email address"
                      class="stepinput form-control"
                      required
                    />
                    <label for="" class="labelform">Phone Number</label>
                    <input
                      class="stepinput form-control"
                      type="tel"
                      placeholder="Enter a valid phone number (Ex. +234 801 2345 678)"
                      required
                    />
                    <div class="spandiv">
                      <span
                        >Are you eligible for the upcoming Law School
                        Session?</span
                      >
                    </div>
                    <div class="labeldiv">
                      <label
                        ><input type="radio" name="consultationType" /> Yes</label
                      >
                      <label
                        ><input type="radio" name="consultationType" /> No</label
                      >
                      <label
                        ><input
                          type="radio"
                          name="consultationType"
                        />Partially</label
                      >
                    </div>
                  </form>
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
                  <form action="">
                    <label for="" class="pb-1"
                      ><small>Graduation Date</small></label
                    >
                    <input type="date" class="stepinput form-control" required />
                    <label for="" class="labelform">Degree Classification</label>
                    <select class="stepinput form-control" required>
                      <option value="">Choose degree of classification</option>
                      <option>Choose</option>
                      <option>Choose degree</option>
                      <option>Choose degree of</option>
                      <option>Choose degree of classification</option>
                    </select>
                    <label for="" class="labelform"
                      >Cumulative Grade Point Average (CGPA)</label
                    >
                    <input
                      type="text"
                      placeholder="Enter your CGPA"
                      class="stepinput form-control"
                      required
                    />
                    <label for="" class="labelform">Degree Classification</label>
                    <select class="stepinput form-control" required>
                      <option value="">
                        Have you been selected for any Scholarship?
                      </option>
                      <option>NO</option>
                      <option>YES</option>
                    </select>
                    <label for="" class="labelform">If yes, specify</label>
                    <input
                      type="text"
                      placeholder="Enter details"
                      class="stepinput form-control"
                      required
                    />
                  </form>
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
                  <form action="">
                    <div class="file-upload-wrapper">
                      <label class="pb-1"
                        ><small>Academic Credential (Transcript)</small></label
                      >
                      <div class="file-upload-box">
                        <input type="file" class="file-input" />
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
                        <input type="file" class="file-input" />
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
                        <input type="file" class="file-input" />
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
                  </form>
                </div>
              </div>
            </div>
            <div class="mt-4">
              <div class="accordrow">
                <input type="checkbox" name="" id="" />
                I confirm that the information provided is accurate and complete
                to the <br />
                best of my knowledge.
              </div>
              <div class="accordrow">
                <input type="checkbox" name="" id="" />
                I agree to be contacted by Law Accent for updates regarding this
                <br />
                application.
              </div>
              <button class="btn form-button">Submit Application Form</button>
            </div>
          </div>
        </div>
      </section>

    <livewire:contact-us-form />

    @include('web.partials.newsletter')

</x-app-layout>
