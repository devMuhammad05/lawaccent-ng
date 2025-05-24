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
                            value='{{ $consultation->name }}' disabled>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type='text' class='form-control' placeholder='Question' name='question'
                            value='{{ $consultation->email }}' disabled>
                    </div>
                    <div class="form-group">
                        <label>Phone Number</label>
                        <input type='text' class='form-control' placeholder='Question' name='question'
                            value='{{ $consultation->phone_number }}' disabled>
                    </div>
                    {{-- <div class="form-group">
                        <label>Legal Concerns</label>
                        <input type='text' class='form-control' placeholder='Question' name='question'
                            value='{{ str_replace('_', ' ', ucfirst($consultation->legal_concerns)) }}' disabled>
                    </div> --}}
                    <div class="form-group">
                        <label>Type</label>
                        <input type='text' class='form-control' placeholder='Question' name='question'
                            value='{{ str_replace('-', ' ', ucfirst($consultation->type)) }}' disabled>
                    </div>
                    <div class="form-group">
                        <label>Date</label>
                        <input type="text" class="form-control" placeholder="Question" name="question"
                            value="{{ $consultation->date->format('d M Y h:i A') }}" disabled>

                    </div>
                    <div class="form-group">
                        <label>Additional Info</label>
                        <textarea name="data" style="width: 100%;" disabled>{{ $consultation->additional_info }}</textarea>
                    </div>
                </form>
                @if (!$consultation->is_read)
                    <a href='{{ route('admin.consultations.markAsRead', $consultation->id) }}' class='btn btn-primary p-2'>
                        Mark as read
                    </a>
                @endif
            </div>
        </div>
    </section>
@endsection
