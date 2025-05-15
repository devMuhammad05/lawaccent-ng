@extends('admin.layouts.master')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Legal Checklist</h1>
        </div>
        <div class="card card-primary">
            <div class="card-header">
                <h4>Edit Legal Checklist</h4>

            </div>
            <div class="card-body">
                <form action="{{ route('admin.checklists.update', $legalCheckList->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label>Title</label>
                        <input type='text' class='form-control' placeholder='Title' name='title' value='{{ $legalCheckList->title }}'>
                    </div>

                    <div class="form-group">
                        <label>Description</label>
                        <input type='text' class='form-control' placeholder='Description' name='description'
                            value='{{ $legalCheckList->description }}'>
                    </div>

                    <div class="form-group">
                        <label class="form-control">Checklists</label>
                        <textarea class="summernote" name="body">{{
                            $legalCheckList->body
                        }}
                        </textarea>
                    </div>

                    <button class="btn btn-primary py-2 px-3" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </section>
@endsection
