<nav class="navbar navbar-expand-lg navbar-light">
<div class="container">
<a class="navbar-brand" href="{{ route("home") }}">
    <img src="{{ asset("web/assets/images/logo.webp") }}" alt="brand logo" />
    <img src="{{ asset("web/assets/images/ng.svg") }}" alt="brand logo" />
</a>
<button
    class="navbar-toggler"
    type="button"
    data-bs-toggle="collapse"
    data-bs-target="#navbarNavDropdown"
    aria-controls="navbarNavDropdown"
    aria-expanded="false"
    aria-label="Toggle navigation"
>
    <svg
    xmlns="http://www.w3.org/2000/svg"
    width="20"
    height="20"
    fill="#fff"
    class="bi bi-list"
    viewBox="0 0 16 16"
    >
    <path
        fill-rule="evenodd"
        d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"
    />
    </svg>
</button>
<div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav mx-auto">
    <li class="nav-item active">
        <a class="nav-link navlinks" href="{{ route("home") }}"
        >Home <span class="sr-only"></span
        ></a>
    </li>

    <li class="nav-item">
        <a class="nav-link navlinks" href="{{ route("about-us") }}"
        >About Us <span class="sr-only"></span
        ></a>
    </li>

    <li class="nav-item dropdown">
        <div class="svg-dropdown d-flex align-items-center">
        <a
            class="nav-link navlinks"
            href="{{ route("practice-areas.index") }}"
            id="navbarDropdownLink"
        >
            Practice Areas
        </a>

        <a
            class="nav-link px-1"
            href="#"
            id="dropdownToggleIcon"
            role="button"
            data-bs-toggle="dropdown"
            aria-expanded="false"
        >
            <img src="{{ asset("web/assets/images/arrow-down.svg") }}" alt="arrow" width="90%" />
        </a>
        </div>
        <ul class="dropdown-menu" aria-labelledby="dropdownToggleIcon">
        <li>
            <a class="dropdown-item" href="{{ route('practice-areas.data.protection.services') }}"
            >Data Protection and Advisory Services</a
            >
        </li>
        <li>
            <a class="dropdown-item" href="{{ route('practice-areas.corporate.law.services') }}"
            >Corporate Law</a
            >
        </li>
        <li>
            <a class="dropdown-item" href="{{ route('practice-areas.family.law.services') }}">Family Law</a>
        </li>
        <li>
            <a class="dropdown-item" href="{{ route('practice-areas.litigation.services') }}">Litigation</a>
        </li>
        <li>
            <a class="dropdown-item" href="{{ route('practice-areas.real.estate.services') }}"
            >Real Estate Law</a
            >
        </li>
        <li>
            <a class="dropdown-item" href="{{ route('practice-areas.debt.recovery.services') }}"
            >Debt Recovery</a
            >
        </li>
        <li>
            <a class="dropdown-item" href="{{ route('practice-areas.banking.and.finance.services') }}"
            >Banking and Finance Law</a
            >
        </li>
        </ul>
    </li>

    <li class="nav-item dropdown">
        <div class="svg-dropdown d-flex align-items-center">
        <a
            class="nav-link navlinks"
            href="{{ route('resources.index') }}"
            id="resourcesLink"
        >
            Resources
        </a>

        <a
            class="nav-link px-1"
            href="#"
            id="resourcesDropdownToggle"
            role="button"
            data-bs-toggle="dropdown"
            aria-expanded="false"
        >
            <img src="{{ asset("web/assets/images/arrow-down.svg") }}" alt="arrow" width="90%" />
        </a>
        </div>

        <ul class="dropdown-menu" aria-labelledby="dropdownToggleIcon">
        <li>
            <a class="dropdown-item" href="{{ route('resources.blogs') }}"
            >Blog Posts / Articles</a
            >
        </li>
        <li>
            <a class="dropdown-item" href="{{ route('resources.faqs') }}">FAQs</a>
        </li>
        <li>
            <a class="dropdown-item" href="{{ route(name: 'resources.case.studies') }}"
            >Case Studies</a
            >
        </li>
        <li>
            <a class="dropdown-item" href="{{ route('resources.media.hub') }}">Media Hub</a>
        </li>
        <li>
            <a class="dropdown-item" href="{{ route('resources.business.nigeria') }}"
            >Doing Business in Nigeria</a
            >
        </li>
        <li>
            <a class="dropdown-item" href="{{ route('resources.legal.services') }}"
            >Cross Border Legal Services</a
            >
        </li>
        <li>
            <a class="dropdown-item" href="{{ route('resources.assessment.tool') }}"
            >Legal Checklist and Assessment Tool</a
            >
        </li>
        </ul>
    </li>

    <li class="nav-item dropdown">
        <div class="svg-dropdown d-flex align-items-center">
        <a
            class="nav-link navlinks"
            href="{{ route('our-impact.index') }}"
            id="ourImpactLink"
        >
            Our Impact
        </a>

        <a
            class="nav-link px-1"
            href="#"
            id="ourImpactDropdownToggle"
            role="button"
            data-bs-toggle="dropdown"
            aria-expanded="false"
        >
            <img src="{{ asset("web/assets/images/arrow-down.svg") }}" alt="arrow" width="90%" />
        </a>
        </div>
        <ul class="dropdown-menu" aria-labelledby="dropdownToggleIcon">
        <li>
            <a class="dropdown-item" href="{{ route('our-impact.legal.literacy') }}"
            >Legal Literacy & Public Education</a
            >
        </li>
        <li>
            <a class="dropdown-item" href="{{ route('our-impact.scholarship') }}"
            >Law School Scholarship Programme</a
            >
        </li>
        </ul>
    </li>

    <li class="nav-item">
        <a class="nav-link navlinks" href="{{ route('career') }}"
        >Career <span class="sr-only"></span
        ></a>
    </li>

    <li class="nav-item">
        <a class="nav-link navlinks" href="{{ route('contact-us') }}">Contact</a>
    </li>
    </ul>
    <div class="join-container">
    <button aria-label="Name" class="btn btn-consult">
        <a href="{{ route('consultation') }}">Schedule a Consultation</a>
    </button>
    <a href="search.html"
        ><button aria-label="Name" class="btn btn-search">
        <img src="{{ asset("web/assets/images/search.svg") }}" alt="image" /></button
    ></a>
    </div>
</div>
</div>
</nav>
