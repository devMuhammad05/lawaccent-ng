@extends('admin.layouts.master')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Blogs</h1>
        </div>
        <div class="card card-primary">
            <div class="card-header">
                <h4>Edit Blog</h4>

            </div>
            <div class="card-body">
                <form enctype="multipart/form-data" action="{{ route('admin.blogs.update', $blog->id) }}" method="POST"
                    enctype="multipart/form-data">

                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label>Title</label>
                        <input type='text' class='form-control' placeholder='Question' name='title'
                            value='{{ $blog->title }}'>
                    </div>

                    <div class="form-group">
                        <label>Sub Title</label>
                        <input type='text' class='form-control' placeholder='Short Answer' name='sub_heading'
                            value='{{ $blog->sub_heading }}'>
                    </div>

                    <div class="form-group">
                        <label>Select Category</label>
                        <select type='text' class='form-control' name='category_id'>
                            <option selected disabled>Select Category</option>

                            @foreach ($categories as $category)
                                <option @selected($category->id == $blog->category_id) value="{{ old('category_id', $category->id) }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
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
                                <img src="{{ asset($blog->thumbnail) }}" width="300" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Body</label>
                        <textarea name="body" style="width: 100%;"rows="10">{{ $blog->body }}</textarea>
                    </div>

                    <div class="form-group">
                        <label>Status</label>
                        <select type='text' class='form-control' name='status'>
                            <option @selected($blog->status === 1) value="1">Active</option>
                            <option @selected($blog->status === 0) value="0">Inactive</option>
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
