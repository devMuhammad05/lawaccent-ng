@extends('admin.layouts.master')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Blogs</h1>
        </div>
        <div class="card-body">
            <form enctype="multipart/form-data" action="{{ route('admin.videos.update', $data->id) }}" method="POST">
                @csrf

                <div class="form-group">
                    <label>Title</label>
                    <input type='text' class='form-control' placeholder='Enter video title' name='title'
                        value='{{ old('title', $data->title) }}'>
                </div>

                <div class="form-group">
                    <label>Select media format</label>
                    <select id="mediaType" class="form-control">
                        <option value="">-- Choose media format --</option>
                        <option value="file">Upload Video</option>
                        <option value="url">Enter URL</option>
                    </select>
                </div>

                <div class="form-group" id="fileInput" style="display: none;">
                    <label>Select video (mp4 only)</label>
                    <input type='file' class='form-control' name='media_location' accept="video/mp4">
                </div>

                <div class="form-group" id="urlInput" style="display: none;">
                    <label>Video URL</label>
                    <input type='url' class='form-control' placeholder='Enter video URL' name='media_link'
                        value='{{ old('media_link', $data->title) }}'>
                </div>

                <button class="btn btn-primary py-2 px-3" type="submit">Submit</button>
            </form>
        </div>

        <script>
            document.getElementById('mediaType').addEventListener('change', function () {
                const fileInput = document.getElementById('fileInput');
                const urlInput = document.getElementById('urlInput');

                if (this.value === 'file') {
                    fileInput.style.display = 'block';
                    urlInput.style.display = 'none';
                } else if (this.value === 'url') {
                    fileInput.style.display = 'none';
                    urlInput.style.display = 'block';
                } else {
                    fileInput.style.display = 'none';
                    urlInput.style.display = 'none';
                }
            });
        </script>
    </section>
@endsection


@push('scripts')
    <script type="text/javascript">
        bkLib.onDomLoaded(function() {
            nicEditors.allTextAreas()
        });
    </script>
@endpush
