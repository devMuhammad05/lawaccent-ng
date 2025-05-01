<form action="{{ route('newsletters.store') }}" method="post">
@csrf
<section class="subscribe">
    <div class="container">
        <div class="contact-row">
            <div class="subscribe-text">
                <h3>Subscribe To Our Newsletter</h3>
                <p>
                    Join our mailing list and make sense of the law—one email at a
                    time.
                </p>
            </div>

            <div class="subscribe-wrapper">
                <input type="email" name="email" placeholder="Enter Email Address" required />
                <button type="submit">Subscribe</button>
            </div>

        </div>
    </div>
</section>
</form>
