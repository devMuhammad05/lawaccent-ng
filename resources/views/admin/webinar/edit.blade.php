@extends('admin.layouts.master')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Webinar</h1>
        </div>
        <div class="card card-primary">
            <div class="card-header">
                <h4>Edit Webinar</h4>

            </div>
            <div class="card-body">
                <form enctype="multipart/form-data" action="{{ route('admin.webinars.update', $webinar) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label>Title</label>
                        <input type='text' class='form-control' placeholder='Enter webinar title' name='title'
                            value='{{ $webinar->title }}'>
                    </div>

                    <div class="form-group">
                        <label>Topic</label>
                        <input type='text' class='form-control' placeholder='Topic' name='topic'
                            value='{{ $webinar->topic }}'>
                    </div>

                    <div class="form-group">
                        <label>Description</label>
                        <input type='text' class='form-control' placeholder='Description' name='description'
                            value='{{ $webinar->description }}'>
                    </div>

                    <div class="form-group">
                        <label>Date and Time</label>
                        <input type="datetime-local" class="form-control" name="date" value="{{ $webinar->date   }}">
                    </div>


                     <button class="btn btn-primary py-2 px-3" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </section>
@endsection
