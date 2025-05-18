@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Dashboard</h1>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center mb-4">
                            <img src="{{ asset('web/assets/images/logo.webp') }}" alt="Logo" class="img-fluid mb-3"
                                style="max-height: 120px;">
                            <h2 class="welcome-heading">Welcome back, {{ Auth::user()->name }}!</h2>
                            <p class="text-muted">It's great to see you again. Today is {{ date('l, F d, Y') }}</p>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-10 offset-md-1">
                                <div class="card bg-light">
                                    <div class="card-body">
                                        <h4 class="text-center mb-3">Your Mission Control</h4>
                                        <p>This admin panel is your command center for managing all aspects of your
                                            platform. We've designed it with care to make your administrative tasks
                                            efficient and straightforward.</p>

                                        <div class="mission-statement p-4 my-4 bg-white rounded shadow-sm">
                                            <h5 class="text-center mb-3"><i class="fas fa-heart text-danger"></i> Our
                                                Mission</h5>
                                            <p class="text-center">To provide powerful yet intuitive tools that empower you
                                                to deliver exceptional experiences to your users while maintaining the
                                                highest standards of quality and security.</p>
                                        </div>

                                        <h5 class="mt-4 text-center">Everything You Can Manage From Here:</h5>

                                        <div class="row mt-4">
                                            <div class="col-md-4 mb-4">
                                                <div class="feature-card h-100 p-4 bg-white rounded shadow-sm text-center">
                                                    <i class="fas fa-newspaper text-primary fa-2x mb-3"></i>
                                                    <h6>Blog Management</h6>
                                                    <p class="small">Create, edit, and organize blog posts. Upload images,
                                                        categorize content, and schedule publications to engage your
                                                        audience.</p>
                                                    <a href="{{ route('admin.blogs.index') }}"
                                                        class="btn btn-sm btn-outline-primary">Manage Blogs</a>
                                                </div>
                                            </div>

                                            <div class="col-md-4 mb-4">
                                                <div class="feature-card h-100 p-4 bg-white rounded shadow-sm text-center">
                                                    <i class="fas fa-question-circle text-success fa-2x mb-3"></i>
                                                    <h6>FAQ Management</h6>
                                                    <p class="small">Create and organize FAQs into categories. Help users
                                                        find answers to common questions with a well-structured knowledge
                                                        base.</p>
                                                    <a href="{{ route('admin.faqs.index') }}"
                                                        class="btn btn-sm btn-outline-success">Manage FAQs</a>
                                                </div>
                                            </div>

                                            <div class="col-md-4 mb-4">
                                                <div class="feature-card h-100 p-4 bg-white rounded shadow-sm text-center">
                                                    <i class="fas fa-envelope text-info fa-2x mb-3"></i>
                                                    <h6>Contact Messages</h6>
                                                    <p class="small">Review and respond to user inquiries from the contact
                                                        form. Never miss an important message from your potential clients.
                                                    </p>
                                                    <a href="{{ route('admin.contact-us.index') }}"
                                                        class="btn btn-sm btn-outline-info">View Messages</a>
                                                </div>
                                            </div>

                                            {{-- <div class="col-md-4 mb-4">
                                                <div class="feature-card h-100 p-4 bg-white rounded shadow-sm text-center">
                                                    <i class="fas fa-cog text-danger fa-2x mb-3"></i>
                                                    <h6>Settings</h6>
                                                    <p class="small">Configure site-wide settings, social media links, and
                                                        general preferences.</p>
                                                    <a href="{{ route('admin.site-settings.index') }}"
                                                        class="btn btn-sm btn-outline-danger">Update Settings</a>
                                                </div>
                                            </div> --}}

                                            <div class="col-md-4 mb-4">
                                                <div class="feature-card h-100 p-4 bg-white rounded shadow-sm text-center">
                                                    <i class="fas fa-file-alt text-secondary fa-2x mb-3"></i>
                                                    <h6>Page Management</h6>
                                                    <p class="small">Edit static pages like Privacy Notice, Cookie Notice
                                                        and Terms of Service with an intuitive editor.</p>
                                                    <a href="{{ route('admin.privacy-notice.index') }}"
                                                        class="btn btn-sm btn-outline-secondary">Edit Pages</a>
                                                </div>
                                            </div>

                                            <div class="col-md-4 mb-4">
                                                <div class="feature-card h-100 p-4 bg-white rounded shadow-sm text-center">
                                                    <i class="fas fa-tasks text-warning fa-2x mb-3"></i>
                                                    <h6>Quiz Management</h6>
                                                    <p class="small">Create, edit, and organize quizzes to assess and engage
                                                        users effectively.</p>
                                                    <a href="{{ route('admin.quizzes.index') }}"
                                                        class="btn btn-sm btn-outline-primary">Manage Quizzes</a>
                                                </div>
                                            </div>


                                            <div class="col-md-4 mb-4">
                                                <div class="feature-card h-100 p-4 bg-white rounded shadow-sm text-center">
                                                    <i class="fas fa-briefcase text-primary fa-2x mb-3"></i>
                                                    <h6>Job Openings</h6>
                                                    <p class="small">Post and manage job vacancies. Add detailed
                                                        requirements to attract qualified candidates.</p>
                                                    <a href="{{ route('admin.job-openings.index') }}"
                                                        class="btn btn-sm btn-outline-primary">Manage Jobs</a>
                                                </div>
                                            </div>


                                        </div>

                                        <div class="quick-stats p-4 my-4 bg-white rounded shadow-sm">
                                            <h5 class="text-center mb-4"><i class="fas fa-chart-pie text-primary"></i> Quick
                                                Statistics</h5>
                                            <div class="row text-center">
                                                <div class="col-md-3 mb-3">
                                                    <div class="stat-item">
                                                        <h3 class="text-info">{{ $unreadApplicationCount ?? '0' }}</h3>
                                                        <p class="small text-muted">Unread Schoolarship Applications</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 mb-3">
                                                    <div class="stat-item">
                                                        <h3 class="text-info">{{ $unreadMessages ?? '0' }}</h3>
                                                        <p class="small text-muted">Unread Messages</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 mb-3">
                                                    <div class="stat-item">
                                                        <h3 class="text-success">{{ $unreadWebinarApplicationCount ?? '0' }}</h3>
                                                        <p class="small text-muted">Unread Webinar Applications</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 mb-3">
                                                    <div class="stat-item">
                                                        <h3 class="text-warning">{{ $unreadConsultationCount ?? '0' }}</h3>
                                                        <p class="small text-muted">Unread Consultation Messages</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        $(document).ready(function () {
            // Simple animation for welcome message
            $(".welcome-heading").hide().fadeIn(1200);

            // Highlight the feature cards on hover
            $(".feature-card").hover(
                function () {
                    $(this).removeClass("shadow-sm").addClass("shadow");
                },
                function () {
                    $(this).removeClass("shadow").addClass("shadow-sm");
                }
            );

            // Stats counter animation
            $('.stat-item h3').each(function () {
                $(this).prop('Counter', 0).animate({
                    Counter: $(this).text()
                }, {
                    duration: 2000,
                    easing: 'swing',
                    step: function (now) {
                        $(this).text(Math.ceil(now));
                    }
                });
            });
        });
    </script>
@endsection
