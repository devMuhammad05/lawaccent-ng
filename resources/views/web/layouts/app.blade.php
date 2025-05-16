<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="robots" content="index, follow" />
    <meta name="description"
        content="Law Accent (NG) is dedicated to simplifying the complexities of data protection and privacy for organisations across industries." />
    <title>Law Accent NG</title>
    <link rel="icon" href="{{ asset("web/assets/images/logo.webp") }}" />
    <link rel="stylesheet" href="{{ asset("web/assets/css/style.css") }}" />
    <link rel="stylesheet" href="{{ asset("web/assets/css/mobile.css") }}" />
    <link rel="stylesheet" href="{{ asset("web/assets/css/custom.css") }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" media="all" />
</head>

@livewireStyles

<body>
    

    @include('web.layouts.navbar')

    {{ $slot }}

    <footer class="footer">
        <div class="container">
            <div class="footer-row">
                <div class="footer-section">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="{{ route("about-us") }}">About Us</a></li>
                        <li><a href="{{ route('resources.index') }}">Resources</a></li>
                        <li><a href="{{ route("practice-areas.index") }}">Practice Areas</a></li>
                        <li><a href="{{ route('career') }}">Career</a></li>
                        <li><a href="{{ route('contact-us') }}">Contact</a></li>
                        <li><a href="{{ route('privacy-notice') }}">Privacy Notice</a></li>
                        <li><a href="{{ route('cookie-notice') }}">Cookie Notice</a></li>
                    </ul>
                </div>

                <div class="footer-section">
                    <h3>Addresses</h3>
                    <p>
                        <a href="https://g.co/kgs/Z69ZNMQ">
                            <strong>Nigeria: </strong><br />30, Muyibat Oyefusi Crescent,
                            <br />
                            Omole Phase 1, Lagos State</a>
                        <br /><br />
                        <a href="https://g.co/kgs/EXVWFB2">60, Old Owode Road, Onikolobo,<br />
                            Abeokuta, Ogun State</a>
                    </p>
                    <p>
                        <a href=""><strong>Kenya: </strong><br />Skygo Building 1st floor, <br />
                            Milolongo.</a>
                    </p>
                    <p>
                        <a href="https://g.co/kgs/c4bzbUr"><strong>United Kingdom: </strong><br />82a, James Carter
                            Road,
                            <br />
                            Mildenhall, IP28 7DE.</a>
                    </p>
                </div>

                <div class="footer-section footer-contact">
                    <h3>Contact</h3>
                    <p><a href="mailto:info@lawaccent.com">info@lawaccent.com</a></p>
                    <p><a href="https://www.lawaccent.com">www.lawaccent.com</a></p>
                    <p class="footerp">
                        <a href="tel:+2347040092801">+2347040092801</a><br /><br /><a
                            href="tel:+2347040092804"><span>+2347040092804</span></a><br /><br /><a
                            href="tel:++254726707693"><span>+254726707693</span></a><br /><br /><a
                            href="tel:+447909339154"><span>+447909339154</span></a>
                    </p>
                </div>


                <div class="footer-section working-hours">
                    <h3>Working Hours</h3>
                    <span><strong>Mondays </strong><br />
                        9AM - 5PM</span>
                    <span><strong>Tuesdays </strong><br />
                        9AM - 5PM</span>
                    <span><strong>Wednesdays </strong><br />
                        9AM - 5PM</span>
                    <span><strong>Thursdays </strong><br />
                        9AM - 5PM</span>
                    <span><strong>Fridays </strong><br />
                        9AM - 5PM</span>
                </div>
            </div>
            <div class="bottom-row">
                <div class="footerlogo">
                    <img src="{{ asset("web/assets/images/logo.webp") }}" alt="Law Accent Logo" />
                    <p>(C) 2025 LAW ACCENT NIGERIA. ALL RIGHTS RESERVED.</p>
                </div>
                <div class="social-icons">

                    @if (@$socials->linkedin_link)
                        <a href="{{ $socials->linkedin_link }}" target="_blank">
                            <img src="{{ asset('web/assets/images/linkedin.svg') }}" alt="linkedIn" />
                        </a>
                    @endif
                    @if (@$socials->x_link)
                        <a href="{{ $socials->x_link }}" target="_blank">
                            <img src="{{ asset('web/assets/images/x.svg') }}" alt="x" />
                        </a>
                    @endif
                    @if (@$socials->facebook_link)
                        <a href="{{ $socials->facebook_link }}" target="_blank">
                            <img src="{{ asset('web/assets/images/fb.svg') }}" alt="facebook" />
                        </a>
                    @endif
                    @if (@$socials->instagram_link)
                        <a href="{{ $socials->instagram_link }}" target="_blank">
                            <img src="{{ asset('web/assets/images/insta.svg') }}" alt="instagram" />
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </footer>


    <script type="text/javascript" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>

    <script src="{{ asset("web/assets/js/script.js") }}"></script>
    @stack('script')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" defer></script>

    <script src="https://www.google.com/recaptcha/api.js"></script>
</body>

</html>
