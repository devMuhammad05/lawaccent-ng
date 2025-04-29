@extends('admin.layouts.master')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Case Study</h1>
        </div>
        <div class="card card-primary">
            <div class="card-header">
                <h4>Edit Case Study</h4>

            </div>
            <div class="card-body">
                <form enctype="multipart/form-data" action="{{ route('admin.case-studies.update', $case->id) }}" method="POST">

                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label>Case Study Name</label>
                        <input type='text' class='form-control' placeholder='Question' name='name'
                            value='{{ $case->name }}'>
                    </div>

                    <div class="form-group">
                        <label>Sector</label>
                        <input type='text' class='form-control' placeholder='Short Answer' name='sector'
                            value='{{ $case->sector }}'>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Thumbnail</label>
                                <div id="image-preview" class="image-preview">
                                    <label for="image-upload" id="image-label">Choose File</label>
                                    <input type="file" name="thumbnail" id="image-upload" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="text-center form-group">
                                <label>Current Thumbnail</label> <br>
                                <img src="{{ asset($case->thumbnail) }}" width="300" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Primary Challenges</label>
                        <textarea name="challenges" style="width: 100%; height: 200px;">{{ $case->challenges }}</textarea>
                    </div>

                    <div class="form-group">
                        <label>Services Provided</label>
                        <textarea name="services" style="width: 100%; height: 200px;">{{ $case->services }}</textarea>
                    </div>

                    <div class="form-group">
                        <label>Status</label>
                        <select type='text' class='form-control' name='status'>
                            <option @selected($case->status === 1) value="1">Active</option>
                            <option @selected($case->status === 0) value="0">Inactive</option>
                        </select>
                    </div>

                     <button class="btn btn-primary py-2 px-3" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script type="text/javascript">
        bkLib.onDomLoaded(function() {
            nicEditors.allTextAreas()
        });
    </script>
@endpush
