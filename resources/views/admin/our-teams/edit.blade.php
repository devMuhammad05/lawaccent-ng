@extends('admin.layouts.master')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Team Member</h1>
        </div>
        <div class="card card-primary">
            <div class="card-header">
                <h4>Edit Team Member</h4>

            </div>
            <div class="card-body">
                <form enctype="multipart/form-data" action="{{ route('admin.our-teams.update', ['our_team' => $team]) }}"
                    method="POST">

                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="form-group col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Member picture</label>
                                <div id="image-preview" class="image-preview">
                                    <label for="image-upload" id="image-label">Choose File</label>
                                    <input type="file" name="image_path" id="image-upload" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group text-center">
                                <label>Current Member picture</label> <br>
                                <img src="{{ asset($team->image_path) }}" style="object-fit: contain" width="300" height="200" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Member Full Name</label>
                        <input type='text' class='form-control' placeholder='John Doe' name='full_name'
                            value='{{ $team->full_name }}'>
                    </div>

                    <div class="form-group">
                        <label>Role</label>
                        <input type='text' class='form-control' placeholder='Manager' name='role'
                            value='{{ $team->role }}'>
                    </div>


                    <div class="form-group">
                        <label>LinkedIn Url</label>
                        <input type='text' class='form-control' placeholder='LinkedIn Url' name='linkedin_url'
                            value='{{ @$team->linkedin_url }}'>
                    </div>

                     <button class="btn btn-primary py-2 px-3" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </section>
@endsection

