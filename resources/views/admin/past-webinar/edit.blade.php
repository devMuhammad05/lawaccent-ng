@extends('admin.layouts.master')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Past Webinar</h1>
        </div>
        <div class="card card-primary">
            <div class="card-header">
                <h4>Edit Past Webinar</h4>

            </div>
            <div class="card-body">
                <form enctype="multipart/form-data" action="{{ route('admin.past-webinars.update', $pastWebinar) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label>Title</label>
                        <input type='text' class='form-control' placeholder='Enter webinar title' name='title'
                            value='{{ $pastWebinar->title }}'>
                    </div>

                    <div class="form-group">
                        <label>Topic</label>
                        <input type='text' class='form-control' placeholder='Topic' name='topic'
                            value='{{ $pastWebinar->topic }}'>
                    </div>

                    <div class="form-group">
                        <label>Recording url</label>
                        <input type='url' class='form-control' placeholder='Url'
                        name='recording_url' value='{{ $pastWebinar->recording_url }}'>
                    </div>

                     <button class="btn btn-primary py-2 px-3" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </section>
@endsection
