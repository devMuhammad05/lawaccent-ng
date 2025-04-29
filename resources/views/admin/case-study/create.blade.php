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
                        <label>Case Study Name</label>
                        <input type='text' class='form-control' placeholder='Question' name='name'
                            value='{{ old('name') }}'>
                    </div>

                    <div class="form-group">
                        <label>Sector</label>
                        <input type='text' class='form-control' placeholder='Short Answer' name='sector'
                            value='{{ old('sector') }}'>
                    </div>

                    <div class="form-group">
                        <label>Thumbnail</label>
                        <div id="image-preview" class="image-preview">
                            <label for="image-upload" id="image-label">Choose File</label>
                            <input type="file" name="thumbnail" id="image-upload" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Primary Challenges</label>
                        <textarea name="challenges" style="width: 100%; height: 200px;">
                            {{ old('challenges') }}
                        </textarea>
                    </div>

                    <div class="form-group">
                        <label>Services Provided</label>
                        <textarea name="services" style="width: 100%; height: 200px;">
                            {{ old('services') }}
                        </textarea>
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
