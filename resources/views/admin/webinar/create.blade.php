@extends('admin.layouts.master')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Webinar</h1>
        </div>
        <div class="card card-primary">
            <div class="card-header">
                <h4>Create an upcoming Webinar</h4>

            </div>
            <div class="card-body">
                <form enctype="multipart/form-data" action="{{ route('admin.webinars.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label>Title</label>
                        <input type='text' class='form-control' placeholder='Enter webinar title' name='title'
                            value='{{ old('title') }}'>
                    </div>

                    <div class="form-group">
                        <label>Topic</label>
                        <input type='text' class='form-control' placeholder='Topic' name='topic'
                            value='{{ old('topic') }}'>
                    </div>

                    <div class="form-group">
                        <label>Description</label>
                        <input type='text' class='form-control' placeholder='Description' name='description'
                            value='{{ old('description') }}'>
                    </div>

                    <div class="form-group">
                        <label>Date and Time</label>
                        <input type="datetime-local" class="form-control" name="date" value="{{ old('date') }}">
                    </div>


                     <button class="btn btn-primary py-2 px-3" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </section>
@endsection
