<nav class="navbar navbar-expand-lg main-navbar">
    <form class="mr-auto form-inline">
        <ul class="mr-3 navbar-nav">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i
                        class="fas fa-search"></i></a></li>
        </ul>
    </form>
    <ul class="navbar-nav navbar-right">
        <div class="dropdown-menu dropdown-list dropdown-menu-right">
            <div class="dropdown-header">Messages
                <div class="float-right">
                    <a href="#">Mark All As Read</a>
                </div>
            </div>
            <div class="dropdown-list-content dropdown-list-message">
                <a href="#" class="dropdown-item dropdown-item-unread">
                    <div class="dropdown-item-avatar">
                        <img alt="image" src="" class="rounded-circle">
                        <div class="is-online"></div>
                    </div>
                    <div class="dropdown-item-desc">
                        <b>Kusnaedi</b>
                        <p>Hello, Bro!</p>
                        <div class="time">10 Hours Ago</div>
                    </div>
                </a>
                <a href="#" class="dropdown-item dropdown-item-unread">
                    <div class="dropdown-item-avatar">
                        <img alt="image" src="" class="rounded-circle">
                    </div>
                    <div class="dropdown-item-desc">
                        <b>Dedik Sugiharto</b>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                        <div class="time">12 Hours Ago</div>
                    </div>
                </a>
                <a href="#" class="dropdown-item dropdown-item-unread">
                    <div class="dropdown-item-avatar">
                        <img alt="image" src="" class="rounded-circle">
                        <div class="is-online"></div>
                    </div>
                    <div class="dropdown-item-desc">
                        <b>Agung Ardiansyah</b>
                        <p>Sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <div class="time">12 Hours Ago</div>
                    </div>
                </a>
                <a href="#" class="dropdown-item">
                    <div class="dropdown-item-avatar">
                        <img alt="image" src="" class="rounded-circle">
                    </div>
                    <div class="dropdown-item-desc">
                        <b>Ardian Rahardiansyah</b>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit ess</p>
                        <div class="time">16 Hours Ago</div>
                    </div>
                </a>
                <a href="#" class="dropdown-item">
                    <div class="dropdown-item-avatar">
                        <img alt="image" src="" class="rounded-circle">
                    </div>
                    <div class="dropdown-item-desc">
                        <b>Alfa Zulkarnain</b>
                        <p>Exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                        <div class="time">Yesterday</div>
                    </div>
                </a>
            </div>
            <div class="text-center dropdown-footer">
                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
            </div>
        </div>
        </li>
        <li class="dropdown"><a href="#" data-toggle="dropdown"
                class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                {{-- <img alt="image" src="{{ asset('admin/assets/img/avatar/avatar-2.png') }}"
                    class="mr-1 rounded-circle"> --}}
                <div class="d-sm-none d-lg-inline-block">
                    <p class="admin-text">Hi, Admin</p>
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                {{-- <div class="dropdown-title">Logged in 5 min ago</div> --}}
                {{-- <a href="" class="dropdown-item has-icon">
                    <i class="far fa-user"></i> Profile
                </a>
                <a href="features-settings.html" class="dropdown-item has-icon">
                    <i class="fas fa-cog"></i> Settings
                </a> --}}
                <div class="dropdown-divider"></div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <a href="#" onclick="event.preventDefault();
                        this.closest('form').submit();" class="dropdown-item has-icon text-danger">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>

                </form>
            </div>
        </li>
    </ul>
</nav>
<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <img src="{{ asset("web/assets/images/logo.webp") }}" alt="logo" width="100" />
            <img src="{{ asset("web/assets/images/ng.svg") }}" alt="brand logo" />
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('admin.dashboard') }}">LA NG</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="{{ $currentRoute === 'dashboard' ? 'active' : '' }}">
                <a href="{{ route('admin.dashboard') }}" class="nav-link">
                    <i class="fas fa-columns"></i></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="{{ $currentRoute === 'about-us-metrics' ? 'active' : '' }}">
                <a href="{{ route('admin.about-us-metrics.index') }}" class="nav-link">
                    <i class="fas fa-columns"></i></i>
                    <span>About Us Metrics</span>
                </a>
            </li>
            <li class="{{ $currentRoute === 'faqs' ? 'active' : '' }}">
                <a href="{{ route('admin.faqs.index') }}" class="nav-link">
                    <i class="fas fa-columns"></i></i>
                    <span>FAQs</span>
                </a>
            </li>
            <li class="{{ $currentRoute === 'privacy-notice' ? 'active' : '' }}">
                <a href="{{ route('admin.privacy-notice.index') }}" class="nav-link">
                    <i class="fas fa-columns"></i></i>
                    <span>Privacy Notice</span>
                </a>
            </li>
            <li class="{{ $currentRoute === 'cookie-notice' ? 'active' : '' }}">
                <a href="{{ route('admin.cookie-notice.index') }}" class="nav-link">
                    <i class="fas fa-columns"></i></i>
                    <span>Cookie Notice</span>
                </a>
            </li>
            <li class="{{ $currentRoute === 'blogs' ? 'active' : '' }}">
                <a href="{{ route('admin.blogs.index') }}" class="nav-link">
                    <i class="fas fa-columns"></i></i>
                    <span>Blogs</span>
                </a>
            </li>
            <li class="{{ $currentRoute === 'quizzes' ? 'active' : '' }}">
                <a href="{{ route('admin.quizzes.index') }}" class="nav-link">
                    <i class="fas fa-columns"></i></i>
                    <span>Quizzes</span>
                </a>
            </li>
            <li class="{{ $currentRoute === 'job-openings' ? 'active' : '' }}">
                <a href="{{ route('admin.job-openings.index') }}" class="nav-link">
                    <i class="fas fa-columns"></i></i>
                    <span>Job Openings</span>
                </a>
            </li>
            <li class="{{ $currentRoute === 'case-studies' ? 'active' : '' }}">
                <a href="{{ route('admin.case-studies.index') }}" class="nav-link">
                    <i class="fas fa-columns"></i></i>
                    <span>Case studies</span>
                </a>
            </li>
            <li class="{{ $currentRoute === 'assessments' ? 'active' : '' }}">
                <a href="{{ route('admin.assessments.index') }}" class="nav-link">
                    <i class="fas fa-columns"></i></i>
                    <span>Assessments</span>
                </a>
            </li>
            <li class="{{ $currentRoute === 'checklists' ? 'active' : '' }}">
                <a href="{{ route('admin.checklists.index') }}" class="nav-link">
                    <i class="fas fa-columns"></i></i>
                    <span>Checklists</span>
                </a>
            </li>
            <li class="{{ $currentRoute === 'our-teams' ? 'active' : '' }}">
                <a href="{{ route('admin.our-teams.index') }}" class="nav-link">
                    <i class="fas fa-columns"></i></i>
                    <span>Our Teams</span>
                </a>
            </li>

            {{-- <li class="{{ $currentRoute === 'checklists' ? 'active' : '' }}">
                <a href="" class="nav-link">
                    <i class="fas fa-columns"></i></i>
                    <span>Checklists</span>
                </a>
            </li> --}}

            <li class="dropdown {{ $currentRoute === 'scholarship-applications' ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown">
                    <i class="fas fa-columns"></i>
                    <span>
                        Scholarship Applications
                        @if ($unreadApplicationCount > 0)
                            <button type="button" class="btn btn-danger">
                                !
                            </button>
                        @endif
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="{{ route('admin.scholarship-applications.unread') }}">
                            Unread Applications
                            @if ($unreadApplicationCount > 0)
                                <span class="counter">{{ $unreadApplicationCount }}</span>
                            @endif
                        </a>
                    </li>
                    <li><a class="nav-link" href="{{ route('admin.scholarship-applications.index') }}">All
                            Applications</a></li>
                </ul>
            </li>

            <li class="{{ $currentRoute === 'newletters' ? 'active' : '' }}">
                <a href="{{ route('admin.newsletters.index') }}" class="nav-link">
                    <i class="fas fa-columns"></i></i>
                    <span>Newsletters</span>
                </a>
            </li>

            <li class="dropdown {{ $currentRoute === 'contact-us' ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown">
                    <i class="fas fa-columns"></i>
                    <span>
                        Contact us
                        @if ($unreadMessagesCount > 0)
                            <button type="button" class="btn btn-danger">
                                !
                            </button>
                        @endif
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="{{ route('admin.contact-us.unread') }}">
                            Unread Messages
                            @if ($unreadMessagesCount > 0)
                                <span class="counter">{{ $unreadMessagesCount }}</span>
                            @endif
                        </a>
                    </li>
                    <li><a class="nav-link" href="{{ route('admin.contact-us.index') }}">All Messages</a></li>
                </ul>
            </li>

            <li
                class="dropdown {{ $currentRoute === 'videos' ? 'active' : '' }} {{ $currentRoute === 'podcasts' ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown">
                    <i class="fas fa-columns"></i>
                    <span>
                        Media Hub
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="{{ route('admin.videos.index') }}">Videos</a>
                    </li>
                    <li><a class="nav-link" href="{{ route('admin.podcasts.index') }}">Podcast</a></li>
                </ul>
            </li>

            <li
                class="dropdown {{ $currentRoute === 'webinars' ? 'active' : '' }} {{ $currentRoute === 'past-webinars' ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown">
                    <i class="fas fa-columns"></i>
                    <span>
                        Webinars
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('admin.webinars.index') }}">Upcoming webinars</a></li>
                    <li><a class="nav-link" href="{{ route('admin.past-webinars.index') }}">Past webinars</a></li>
                </ul>
            </li>


            <li
                class="dropdown {{ $currentRoute === 'webinar-applications' ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown">
                    <i class="fas fa-columns"></i>
                    <span>
                        Webinars Applications
                        @if ($unreadWebinarApplicationCount > 0)
                            <button type="button" class="btn btn-danger" style="z-index: 9999">
                                !
                            </button>
                        @endif
                    </span>
                </a>
                <ul class="dropdown-menu">

                    <li>
                        <a class="nav-link" href="{{ route('admin.webinar-applications.unread') }}">
                            Unread Applications
                            @if ($unreadWebinarApplicationCount > 0)
                                <span class="counter">{{ $unreadWebinarApplicationCount }}</span>
                            @endif
                        </a>
                    </li>

                    <li><a class="nav-link" href="{{ route('admin.webinar-applications.index') }}">All Applications</a></li>

                </ul>
            </li>

            <li class="dropdown {{ $currentRoute === 'consultations' ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown">
                    <i class="fas fa-columns"></i>
                    <span>
                        Consultations
                        @if ($unreadConsultationCount > 0)
                            <button type="button" class="btn btn-danger">
                                !
                            </button>
                        @endif
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="{{ route('admin.consultations.unread') }}">
                            Unread Consultations
                            @if ($unreadConsultationCount > 0)
                                <span class="counter">{{ $unreadConsultationCount }}</span>
                            @endif
                        </a>
                    </li>
                    <li><a class="nav-link" href="{{ route('admin.consultations.index') }}">All Consultations</a></li>
                </ul>
            </li>


            <li class="{{ $currentRoute === 'socials' ? 'active' : '' }}">
                <a href="{{ route('admin.socials.index') }}" class="nav-link">
                    <i class="fas fa-columns"></i></i>
                    <span>Socials</span>
                </a>
            </li>







            {{-- <li class="{{ $currentRoute === 'site-settings' ? 'active' : '' }}">
                <a href="" class="nav-link">
                    <i class="fas fa-columns"></i></i>
                    <span>Site Settings</span>
                </a>
            </li> --}}
        </ul>

    </aside>
</div>


<style>
    .notice {
        padding: 0px 7px !important;
        width: 20px !important
    }

    .counter {
        color: white;
        background-color: #fc544b;
        padding: 0px 7px;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.4);
        font-size: 9px;
        border-radius: 3px;
        margin-left: 5px;
    }

    .btn {
        padding: 0px 7px;
        font-size: 13px;
        font-weight: bold;
    }
</style>
