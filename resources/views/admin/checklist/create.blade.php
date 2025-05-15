@extends('admin.layouts.master')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Legal Checklist</h1>
        </div>
        <div class="card card-primary">
            <div class="card-header">
                <h4>Create Legal Checklist</h4>

            </div>
            <div class="card-body">
                <form action="{{ route('admin.checklists.store') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label>Title</label>
                        <input type='text' class='form-control' placeholder='Title' name='title' value='{{ old('title') }}'>
                    </div>

                    <div class="form-group">
                        <label>Description</label>
                        <input type='text' class='form-control' placeholder='Description' name='description'
                            value='{{ old('description') }}'>
                    </div>

                    <div class="form-group">
                        <label class="form-control">Checklists</label>
                        <textarea class="summernote" name="body">
                            {{ old('body', "<p>✅ Registered with CAC</p>

                            <p>✅ Active tax identification number (TIN)</p>

                            <p>✅ Business permits/licences obtained</p>

                            <p>✅ Up-to-date annual returns with CAC</p>

                            <p>✅ Formal contracts with clients & partners</p>")
                        }}
                        </textarea>
                    </div>

                    <button class="btn btn-primary py-2 px-3" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </section>
@endsection
