@extends('admin.layouts.master')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>View Webinar Application</h1>
        </div>
        <div class="card card-primary">
            <div class="card-header">
                <h4></h4>

            </div>
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <label>Name</label>
                        <input type='text' class='form-control' placeholder='Question' name='question'
                            value='{{ $webinarApplication->name }}' disabled>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type='text' class='form-control' value='{{ $webinarApplication->email }}' disabled>
                    </div>
                    <div class="form-group">
                        <label>Phone Number</label>
                        <input type='text' class='form-control' value='{{ $webinarApplication->phone_number }}' disabled>
                    </div>

                    <div class="form-group">
                        <label>Type</label>
                        <input type='text' class='form-control' value='{{ ucfirst($webinarApplication->type) }}' disabled>
                    </div>

                    <div class="form-group">
                        <label>Question details</label>
                        <textarea name="data" style="width: 100%;" disabled>{{ $webinarApplication->question }}</textarea>
                    </div>

                    @if (!$webinarApplication->is_read)
                        <a href='{{ route('admin.webinar-applications.markAsRead', $webinarApplication->id) }}'
                            class='btn btn-primary p-2'>
                            Mark as read
                        </a>
                    @endif
                </form>
            </div>
        </div>
    </section>
@endsection
