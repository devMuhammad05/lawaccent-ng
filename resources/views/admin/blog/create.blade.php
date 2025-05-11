@extends('admin.layouts.master')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Blogs</h1>
        </div>
        <div class="card card-primary">
            <div class="card-header">
                <h4>Create Blog</h4>

            </div>
            <div class="card-body">
                <form enctype="multipart/form-data" action="{{ route('admin.blogs.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label>Title</label>
                        <input type='text' class='form-control' placeholder='Enter blog title' name='title'
                            value='{{ old('title') }}'>
                    </div>

                    <div class="form-group">
                        <label>Sub Title</label>
                        <input type='text' class='form-control' placeholder='Enter subtitle' name='sub_heading'
                            value='{{ old('sub_heading') }}'>
                    </div>

                    <div class="form-group">
                        <label>Select Category</label>
                        <select type='text' class='form-control' name='category_id'>
                            <option selected disabled>Select Category</option>

                            @foreach ($categories as $category)
                                <option value="{{ old('category_id', $category->id) }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
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
