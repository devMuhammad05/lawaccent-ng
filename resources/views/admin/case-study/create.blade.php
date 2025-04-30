@extends('admin.layouts.master')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Case Study</h1>
        </div>
        <div class="card card-primary">
            <div class="card-header">
                <h4>Create Case Study</h4>

            </div>
            <div class="card-body">
                <form enctype="multipart/form-data" action="{{ route('admin.case-studies.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label>Case Study Title</label>
                        <input type='text' class='form-control' placeholder='Enter case study title' name='title'
                            value='{{ old('title') }}'>
                    </div>

                    <div class="form-group">
                        <label>Select Category</label>
                        <select type='text' class='form-control' name='case_study_category_id'>
                            <option selected disabled>Select Category</option>

                            @foreach ($categories as $category)
                                <option value="{{ old('case_study_category_id', $category->id) }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Legal Issues Explored</label>
                        <input type='text' class='form-control' placeholder='Enter legal issues' name='legal_issues_explored'
                            value='{{ old('legal_issues_explored') }}'>
                    </div>

                    <div class="form-group">
                        <label>Thumbnail</label>
                        <div id="image-preview" class="image-preview">
                            <label for="image-upload" id="image-label">Choose File</label>
                            <input type="file" name="thumbnail" id="image-upload" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Body</label>
                        <textarea name="body" style="width: 100%; height: 200px;">
                            {{ old('body') }}
                        </textarea>
                    </div>

                    {{-- <div class="form-group">
                        <label>Status</label>
                        <select type='text' class='form-control' name='status'>
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div> --}}

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
