@extends('admin.layouts.master')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Job Opening</h1>
        </div>
        <div class="card card-primary">
            <div class="card-header">
                <h4>Create Job Opening</h4>

            </div>
            <div class="card-body">
                <form enctype="multipart/form-data" action="{{ route('admin.job-openings.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label>Role/Position</label>
                        <input type='text' class='form-control' placeholder='Enter Role' name='role'
                            value='{{ old('role') }}'>
                    </div>

                    <div class="form-group">
                        <label>Location</label>
                        <input type='text' class='form-control' placeholder='Enter Location' name='location'
                            value='{{ old('location') }}'>
                    </div>

                    <div class="form-group">
                        <label>Application link</label>
                        <input type='url' class='form-control' placeholder='Enter link' name='application_link'
                            value='{{ old('application_link') }}'>
                    </div>

                     <button class="btn btn-primary py-2 px-3" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </section>
@endsection
