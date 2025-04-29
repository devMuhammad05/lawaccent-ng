@extends('admin.layouts.master')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Privacy Notice</h1>
        </div>
        <div class="card card-primary">
            <div class="card-header">
                <h4>Edit Privacy Notice</h4>

            </div>
            <div class="card-body">
                <form action="{{ route('admin.privacy-notice.update', ['privacy_policy' => $privacyPolicy]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Title</label>
                        <input type='text' class='form-control' placeholder='Question' name='question'
                            value='{{ $privacyPolicy->question }}'>
                    </div>

                    <div class="form-group">
                        <label class="form-control">Answer</label>
                          <textarea class="summernote" name="answer">{!! $privacyPolicy->answer !!}</textarea>
                    </div>

                    <div class="form-group">
                        <label>Status</label>
                        <select type='text' class='form-control' name='status'>
                            <option value="1" {{ $privacyPolicy->status === 1 ? 'selected' : '' }}>Active</option>
                            <option value="0" {{ $privacyPolicy->status === 0 ? 'selected' : '' }}>Inactive</option>
                        </select>
                    </div>

                     <button class="btn btn-primary py-2 px-3" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </section>
@endsection
