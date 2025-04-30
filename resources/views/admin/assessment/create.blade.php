@extends('admin.layouts.master')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Assessments</h1>
        </div>
        <div class="card card-primary">
            <div class="card-header">
                <h4>Create Assessment</h4>

            </div>
            <div class="card-body">
                <form enctype="multipart/form-data" action="{{ route('admin.assessments.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label>Title</label>
                        <input type='text' class='form-control' placeholder='Enter assessment title' name='title'
                            value='{{ old('title') }}'>
                    </div>

                    <div class="form-group">
                        <label>Description</label>
                        <input type='text' class='form-control' placeholder='Enter description' name='description'
                            value='{{ old('description') }}'>
                    </div>

                    <div class="form-group">
                        <label>Thumbnail</label>
                        <div id="image-preview" class="image-preview">
                            <label for="image-upload" id="image-label">Choose File</label>
                            <input type="file" name="thumbnail" id="image-upload" />
                        </div>
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

@push('scripts')
    <script type="text/javascript">
        bkLib.onDomLoaded(function() {
            nicEditors.allTextAreas()
        });
    </script>
@endpush
