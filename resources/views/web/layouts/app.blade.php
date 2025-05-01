<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"
    />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="robots" content="index, follow" />
    <meta
      name="description"
      content="Law Accent (NG) is dedicated to simplifying the complexities of data protection and privacy for organisations across industries."
    />
    <title>Law Accent NG</title>
    <link rel="icon" href="{{ asset("web/assets/images/ng.webp") }}"" />
    <link rel="stylesheet" href="{{ asset("web/assets/css/style.css") }}" />
    <link rel="stylesheet" href="{{ asset("web/assets/css/mobile.css") }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      media="all"
    />
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
              <li><a href="resources.html">Resources</a></li>
              <li><a href="{{ route("practice-areas.index") }}">Practice Areas</a></li>
              <li><a href="career.html">Career</a></li>
              <li><a href="contactus.html">Contact</a></li>
              <li><a href="privacynotice.html">Privacy Notice</a></li>
              <li><a href="cookienotice.html">Cookie Notice</a></li>
            </ul>
          </div>

          <div class="footer-section">
            <h3>Addresses</h3>
            <p>
              <strong>Nigeria: </strong><br />30, Muyibat Oyefusi Crescent,
              <br />
              Omole Phase 1, Lagos State <br /><br />
              60, Old Owode Road, Onikolobo,<br />
              Abeokuta, Ogun State
            </p>
            <p>
              <strong>Kenya: </strong><br />Skygo Building 1st floor, <br />
              Milolongo.
            </p>
            <p>
              <strong>United Kingdom: </strong><br />82a, James Carter Road,
              <br />
              Mildenhall, IP28 7DE.
            </p>
          </div>

          <div class="footer-section footer-contact">
            <h3>Contact</h3>
            <p><a href="mailto:info@lawaccent.com">info@lawaccent.com</a></p>
            <p><a href="#">www.lawaccent.com</a></p>
            <p class="footerp">
              +2347040092801<br /><br /><span>+2347040092804</span
              ><br /><br /><span>+254 726 707693</span><br /><br /><span
                >+44 7909 339154</span
              >
            </p>
          </div>

          <div class="footer-section working-hours">
            <h3>Working Hours</h3>
            <span
              ><strong>Mondays </strong><br />
              9AM - 5PM</span
            >
            <span
              ><strong>Tuesdays </strong><br />
              9AM - 5PM</span
            >
            <span
              ><strong>Wednesdays </strong><br />
              9AM - 5PM</span
            >
            <span
              ><strong>Thursdays </strong><br />
              9AM - 5PM</span
            >
            <span
              ><strong>Fridays </strong><br />
              9AM - 5PM</span
            >
          </div>
        </div>
        <div class="bottom-row">
          <div class="footerlogo">
            <img src="{{ asset("web/assets/images/logo.webp") }}" alt="Law Accent Logo" />
            <p>(C) 2025 LAW ACCENT NIGERIA. ALL RIGHTS RESERVED.</p>
          </div>
          <div class="social-icons">
            <a href=""><img src="{{ asset("web/assets/images/linkedin.svg") }}" alt="LinkedIn" /></a>
            <a href=""><img src="{{ asset("web/assets/images/x.svg") }}" alt="X (Twitter)" /></a>
            <a href=""><img src="{{ asset("web/assets/images/fb.svg") }}" alt="Facebook" /></a>
            <a href=""><img src="{{ asset("web/assets/images/insta.svg") }}" alt="Instagram" /></a>
          </div>
        </div>
      </div>
    </footer>

    <script src="{{ asset("web/assets/js/script.js") }}"></script>
    <script src="{{ asset("web/assets/js/validate-phone-field.js") }}"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
      defer
    ></script>
  </body>
</html>
