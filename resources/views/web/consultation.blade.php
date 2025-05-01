<x-app-layout>

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
                  <span
                    >Book a consultation with one of our experienced lawyers</span
                  ><br />
                  <form action="">
                    <label for="" class="labelform">Full Name</label>
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
                      <span>Preferred Consultation Type</span>
                    </div>
                    <div class="labeldiv">
                      <label
                        ><input type="radio" name="consultationType" />
                        Virtual</label
                      >
                      <label
                        ><input type="radio" name="consultationType" /> In
                        Person</label
                      >
                    </div>
                    <button
                      type="submit"
                      class="btn submitbtn"
                      onclick="nextStep()"
                    >
                      Next
                    </button>
                  </form>
                </div>

                <!-- Step 2 -->
                <div class="form-step" id="step2" style="display: none">
                  <h4>Schedule A Consultation</h4>
                  <span
                    >Book a consultation with one of our experienced lawyers</span
                  >
                  <form action="">
                    <label for="" class="labelforms"
                      >Choose Area Of Legal Concern</label
                    >
                    <select class="stepinput form-control" required>
                      <option value="">Choose area of concern</option>
                      <option>Family Law</option>
                      <option>Business Law</option>
                      <option>Property Law</option>
                    </select>
                    <label for="" class="labelforms"
                      >Preferred Date And Time</label
                    >
                    <input
                      type="datetime-local"
                      class="stepinput form-control"
                      required
                    />
                    <label for="" class="labelforms"
                      >Additional Information</label
                    >
                    <textarea
                      placeholder="Enter any additional information"
                      class="stepinput form-control fixed-textarea"
                      required
                    ></textarea>
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
      </section>

    @include('web.partials.newsletter')

</x-app-layout>
