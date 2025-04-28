{{-- Include Meta Tags --}}
@include('admin.partials.__meta-tags')

<body>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div
                        class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                        <div class="login-brand">
                            Reset Password
                        </div>

                        <div class="card card-primary">

                            <div class="card-body">
                                <form method="POST" method="POST" action="{{ route('reset.password.update') }}">
                                    @method('PUT')
                                    @csrf
                                    <div class="form-group">
                                        <label for="password">New Password</label>
                                        <input id="password" type="password" class="form-control" name="password"
                                            value="{{ old('password') }}" tabindex="1" autofocus>
                                        <div class="invalid-feedback">
                                            Please fill in your new password
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="password">Confirm Password</label>
                                        <input id="password" type="password" class="form-control"
                                            name="password_confirmation" value="{{ old('password') }}" tabindex="1"
                                            autofocus>
                                        <div class="invalid-feedback">
                                            Confirm Password
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                            Submit
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="simple-footer">
                            Copyright &copy; {{ config('app.name') }} {{ now()->year }}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- General JS Scripts -->
    <script src="assets/modules/jquery.min.js"></script>
    <script src="assets/modules/popper.js"></script>
    <script src="assets/modules/tooltip.js"></script>
    <script src="assets/modules/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="assets/modules/moment.min.js"></script>
    <script src="assets/js/stisla.js"></script>

    <!-- JS Libraies -->

    <!-- Page Specific JS File -->

    <!-- Template JS File -->
    <script src="assets/js/scripts.js"></script>
    <script src="assets/js/custom.js"></script>
</body>

</html>
