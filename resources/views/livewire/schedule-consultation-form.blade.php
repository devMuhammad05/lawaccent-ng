<section class="schedulesection">
    <div class="container">
      <div class="row schedulerow">
        <div class="schedulerowcard">
          <form id="consultationForm">
            <div>
                <div class="progress-indicator">
                    <span class="step-indicator {{ $currentStep === 1 ? 'active' : '' }}"></span>
                    <span class="step-indicator {{ $currentStep === 2 ? 'active' : '' }}"></span>
                    <span class="step-indicator {{ $currentStep === 3 ? 'active' : '' }}"></span>
                </div>

                @if ($currentStep === 1)
                    <div>
                        <label>Full Name</label>
                        <input type="text" wire:model.lazy="name">
                        @error('name') <span class="text-danger">{{ $message }}</span> @enderror

                        <label>Email</label>
                        <input type="email" wire:model.lazy="email">
                        @error('email') <span class="text-danger">{{ $message }}</span> @enderror

                        <label>Phone</label>
                        <input type="tel" wire:model.lazy="phone">
                        @error('phone') <span class="text-danger">{{ $message }}</span> @enderror

                        <label>Consultation Type</label>
                        <input type="radio" wire:model="consultationType" value="Virtual"> Virtual
                        <input type="radio" wire:model="consultationType" value="In Person"> In Person
                        @error('consultationType') <span class="text-danger">{{ $message }}</span> @enderror

                        <button wire:click="nextStep">Next</button>
                    </div>
                @elseif ($currentStep === 2)
                    <div>
                        <label>Area of Legal Concern</label>
                        <select wire:model="area_of_concern">
                            <option value="">Select</option>
                            <option>Family Law</option>
                            <option>Business Law</option>
                            <option>Property Law</option>
                        </select>
                        @error('area_of_concern') <span class="text-danger">{{ $message }}</span> @enderror

                        <label>Preferred Date & Time</label>
                        <input type="datetime-local" wire:model="date_time">
                        @error('date_time') <span class="text-danger">{{ $message }}</span> @enderror

                        <label>Additional Info</label>
                        <textarea wire:model="additional_info"></textarea>

                        <button wire:click="previousStep">Back</button>
                        <button wire:click="submit">Submit</button>
                    </div>
                @elseif ($currentStep === 3)
                    <div>
                        <h4>Thank you! Your consultation has been scheduled.</h4>
                        <button wire:click="$set('currentStep', 1)">Book Another</button>
                    </div>
                @endif
            </div>

          </form>
        </div>
      </div>
    </div>
  </section>
