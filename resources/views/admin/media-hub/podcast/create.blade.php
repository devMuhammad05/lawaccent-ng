@extends('admin.layouts.master')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Podcast</h1>
        </div>
        <div class="card card-primary">
            <div class="card-header">
                <h4>Create Podcast</h4>

            </div>
            <div class="card-body">
                <form enctype="multipart/form-data" action="{{ route('admin.podcasts.store') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label>Title</label>
                        <input type='text' class='form-control' placeholder='Enter podcast title' name='title'
                            value='{{ old('title') }}'>
                    </div>

                    <div class="form-group">
                        <label>Select media format</label>
                        <select id="mediaType" class="form-control">
                            <option value="">-- Choose media format --</option>
                            <option value="file">Upload Podcast</option>
                            <option value="url">Enter URL</option>
                        </select>
                    </div>

                    <div class="form-group" id="fileInput" style="display: none;">
                        <label>Select podcast (mp3 only)</label>
                        <input type='file' class='form-control' name='media_location' accept="audio/mp3">
                    </div>

                    <div class="form-group" id="urlInput" style="display: none;">
                        <label>Podcast URL</label>
                        <input type='url' class='form-control' placeholder='Enter Podcast URL' name='media_link'
                            value='{{ old('media_link') }}'>
                    </div>

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
@endpush
