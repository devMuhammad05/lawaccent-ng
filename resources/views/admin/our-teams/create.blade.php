@extends('admin.layouts.master')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Team Member</h1>
        </div>
        <div class="card card-primary">
            <div class="card-header">
                <h4>Add Team Member</h4>

            </div>
            <div class="card-body">
                <form enctype="multipart/form-data" action="{{ route('admin.our-teams.store') }}" method="POST">

                    @csrf
                    <div class="form-group">
                        <label>Member picture</label>
                        <div id="image-preview" class="image-preview">
                            <label for="image-upload" id="image-label">Choose File</label>
                            <input type="file" name="image_path" id="image-upload" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Member Full Name</label>
                        <input type='text' class='form-control' placeholder='John Doe' name='full_name'
                            value='{{ old('full_name') }}'>
                    </div>

                    <div class="form-group">
                        <label>Role</label>
                        <input type='text' class='form-control' placeholder='Manager' name='role'
                            value='{{ old('role') }}'>
                    </div>
                    
                    <div class="form-group">
                        <label>LinkedIn Url</label>
                        <input type='url' class='form-control' placeholder='LinkedIn Url' name='linkedin_url'
                            value='{{ old('linkedin_url') }}'>
                    </div>

                     <button class="btn btn-primary py-2 px-3" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </section>
@endsection
