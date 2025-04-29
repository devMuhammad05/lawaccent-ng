@extends('admin.layouts.master')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Privacy Notice</h1>
        </div>
        <div class="card card-primary">
            <div class="card-header">
                <h4>Create Privacy Notice</h4>

            </div>
            <div class="card-body">
                <form enctype="multipart/form-data" action="{{ route('admin.privacy-notice.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label>Question</label>
                        <input type='text' class='form-control' placeholder='Question' name='question'
                            value='{{ old('question') }}'>
                    </div>

                    <div class="form-group">
                        <label class="form-control">Answer</label>
                          <textarea class="summernote" name="answer">{{ old('answer') }}</textarea>
                    </div>

                    <div class="form-group">
                        <label>Status</label>
                        <select type='text' class='form-control' name='status'>
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>

                     <button class="btn btn-primary py-2 px-3" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </section>
@endsection

