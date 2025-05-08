<section class="contact-section">
    <div class="container">
        <div class="contact-row">
            <div class="contact-info">

                <h1>{{ $subject }}</h1>
                <p>{{ $sub_heading }}</p>
                <button class="btn">
                    <a href="{{ route('consultation') }}">Schedule a Consultation</a></button><br />
                <div class="buttonspread">
                    <button class="btn">
                        <img src="{{ asset("web/assets/images/calling.svg") }}" alt="image" />
                        <a href="tel:+2347040092801">Call Us</a></button><br />
                    <button class="btn">
                        <a href="mailto:info@lawaccent.com"><img src="{{ asset("web/assets/images/mail.svg") }}" alt="image" /> Email
                            Us</a>
                    </button>
                </div>
            </div>

            <div class="contact-form">
                <form wire:submit.prevent="save">
                    <div class="form-group">
                        <input type="text" placeholder="Your Name" wire:model.live.debounce.500ms="name" class="@error('name') is-invalid @enderror" />
                        @error('name')
                            <small class="text-error d-block">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input type="email" placeholder="Email Address" wire:model.live.debounce.500ms="email" class="@error('email') is-invalid @enderror" />
                        @error('email')
                            <small class="text-error d-block">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input type="tel" id="phone" placeholder="Phone Number" wire:model.live.debounce.500ms="phone_number" class="@error('phone_number') is-invalid @enderror" />
                        @error('phone_number')
                            <small class="text-error d-block">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <textarea placeholder="Describe Your Enquiries" wire:model.live.debounce.500ms="message" class="@error('message') is-invalid @enderror"></textarea>
                        @error('message')
                            <small class="text-error d-block">{{ $message }}</small>
                        @enderror
                    </div>

                    <button type="submit" class="w-100" wire:loading.attr="disabled" wire:target="save">
                        <span wire:loading.remove wire:target="save">Submit</span>
                        <span wire:loading wire:target="save">Submitting...</span>
                    </button>

                </form>
            </div>

        </div>
    </div>
</section>




