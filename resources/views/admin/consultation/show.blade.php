@extends('admin.layouts.master')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>View Consultation Message</h1>
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
                            value='{{ $contact->name }}' disabled>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type='text' class='form-control' placeholder='Question' name='question'
                            value='{{ $contact->email }}' disabled>
                    </div>
                    <div class="form-group">
                        <label>Message</label>
                        <textarea name="data" style="width: 100%;" disabled>{{ $contact->message }}</textarea>
                    </div>

                    @if (!$contact->is_read)
                        <a href='{{ route('admin.contact-us.markAsRead', $contact->id) }}' class='btn btn-primary p-2'>
                            Mark as read
                        </a>
                    @endif
                </form>
            </div>
        </div>
    </section>
@endsection
