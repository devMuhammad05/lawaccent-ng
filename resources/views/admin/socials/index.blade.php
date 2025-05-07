@extends('admin.layouts.master')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Social Links</h1>
        </div>
        <div class="card card-primary">
            <div class="card-header">
                <h4>Update Social Links</h4>

            </div>
            <div class="card-body">
                <form enctype="multipart/form-data" action="{{ route('admin.socials.update', 1) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label>X ('Twitter')</label>
                        <input type='url' class='form-control' placeholder='link to x account' name='x_link'
                            value='{{ old('x_link', @$social_links->x_link) }}'>
                    </div>
                    <div class="form-group">
                        <label>Linkedin</label>
                        <input type='url' class='form-control' placeholder='link to Linkedin account'
                            name='linkedin_link' value='{{ old('linkedin_link', @$social_links->linkedin_link) }}'>
                    </div>
                    <div class="form-group">
                        <label>Facebook</label>
                        <input type='url' class='form-control' placeholder='link to facebook account'
                            name='facebook_link' value='{{ old('facebook_link', @$social_links->facebook_link) }}'>
                    </div>
                    <div class="form-group">
                        <label>Instagram</label>
                        <input type='url' class='form-control' placeholder='link to Instagram account '
                            name='instagram_link' value='{{ old('instagram_link', @$social_links->instagram_link) }}'>
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
