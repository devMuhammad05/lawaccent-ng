@extends('admin.layouts.master')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>View Scholarship Application</h1>
        </div>
        <div class="card card-primary">
            <div class="card-header">
                <h4></h4>

            </div>
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <label>Name</label>
                        <input type='text' class='form-control'
                            value='{{ $scholarshipApplication->name }}' disabled>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type='text' class='form-control'
                            value='{{ $scholarshipApplication->email }}' disabled>
                    </div>
                    <div class="form-group">
                        <label>Phone Number</label>
                        <input type='text' class='form-control'
                            value='{{ $scholarshipApplication->phone_number }}' disabled>
                    </div>
                    <div class="form-group">
                        <label>Eligibility Status</label>
                        <input type='text' class='form-control'
                            value='{{ $scholarshipApplication->eligibility_status }}' disabled>
                    </div>
                    <div class="form-group">
                        <label>Graduation Date</label>
                        <input type='text' class='form-control'
                            value='{{ $scholarshipApplication->graduation_date }}' disabled>
                    </div>
                    <div class="form-group">
                        <label>Degree Classification</label>
                        <input type='text' class='form-control'
                            value='{{ $scholarshipApplication->degree_classification }}' disabled>
                    </div>
                    <div class="form-group">
                        <label>Cgpa</label>
                        <input type='text' class='form-control'
                            value='{{ $scholarshipApplication->cgpa }}' disabled>
                    </div>
                    <div class="form-group">
                        <label>Previously Selected For Scholarship</label>
                        <input type='text' class='form-control'
                            value='{{ ucfirst($scholarshipApplication->previously_selected_for_scholarship) }}' disabled>
                    </div>

                    <div class="form-group">
                        <label>Previous Scholarship Details</label>
                        <input type='text' class='form-control'
                            value='{{ $scholarshipApplication->scholarship_details }}' disabled>
                    </div>

                    <div class="form-group">
                        <label>Download Transcript document </label>
                        <a href="{{ asset($scholarshipApplication->transcript_doc) }}" download class='btn btn-primary mx-2'>
                            <i class='fas fa-download'></i>
                        </a>
                    </div>

                    <div class="form-group">
                        <label>Download Essay document</label>
                        <a href="{{ asset($scholarshipApplication->essay_doc) }}" download class='btn btn-primary mx-2'>
                            <i class='fas fa-download'></i>
                        </a>
                    </div>

                    <div class="form-group">
                        <label>Cv document</label>
                        <a href="{{ asset($scholarshipApplication->cv_doc) }}" download class='btn btn-primary mx-2'>
                            <i class='fas fa-download'></i>
                        </a>
                    </div>

                    @if (!$scholarshipApplication->is_read)
                        <a href='{{ route('admin.scholarship-application.markAsRead', $scholarshipApplication->id) }}' class='btn btn-primary p-2'>
                            Mark as read
                        </a>
                    @endif
                </form>
            </div>
        </div>
    </section>
@endsection
