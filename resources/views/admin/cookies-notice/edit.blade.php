@extends('admin.layouts.master')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Cookie Notice</h1>
        </div>
        <div class="card card-primary">
            <div class="card-header">
                <h4>Edit Cookie Notice</h4>

            </div>
            <div class="card-body">
                <form action="{{ route('admin.cookie-notice.update', ['cookies_policy' => $cookiesPolicy]) }}"
                    method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Title</label>
                        <input type='text' class='form-control' placeholder='Question' name='question'
                            value='{{ $cookiesPolicy->question }}'>
                    </div>

                    <div class="form-group">
                        <label class="form-control">Answer</label>
                          <textarea class="summernote" name="answer">{!! $cookiesPolicy->answer !!}</textarea>
                    </div>

                    <div class="form-group">
                        <label>Status</label>
                        <select type='text' class='form-control' name='status'>
                            <option value="1" @selected($cookiesPolicy->status == 1)>Active</option>
                            <option value="0" @selected($cookiesPolicy->status == 0)>Inactive</option>
                        </select>
                    </div>

                     <button class="btn btn-primary py-2 px-3" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </section>
@endsection
