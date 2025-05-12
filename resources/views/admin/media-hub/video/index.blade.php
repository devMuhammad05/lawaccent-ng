@use('App\Models\SiteSetting', 'SiteSetting')

@extends('admin.layouts.master')

@section('content')
<section class="section">
    <div class="section-header">
      <h1>Videos</h1>
    </div>

    <div class="card card-primary">
        <div class="card-header">
            <h4>Youtube Link (For Media Hub Page)</h4>
        </div>
        <div class="card-body">

            <form action="{{ route('admin.site-settings.update', ['site_setting' => SiteSetting::first()]) }}"
                method="POST">
                @csrf
                @method('PUT')
                <div class="d-flex justify-content-between align-items-center">
                    <div class="form-group w-50">
                        <label>Youtube Link</label>
                        <input
                            type="url" class="form-control"
                            value="{{ old('youtube_link', optional(SiteSetting::first())->youtube_link) }}" placeholder="Enter Youtube Link" name="youtube_link"
                        >
                        
                    </div>
                    <div>
                        <button class="btn btn-primary py-2 px-3">Update</button>
                    </div>
                </div>
            </form>

        </div>
    </div>

    <div class="card card-primary">
        <div class="card-header">
          <h4>All Videos</h4>
          <div class="card-header-action">
            <a href="{{ route('admin.videos.create')}}" class="btn btn-primary">
              Create new
            </a>
          </div>

        </div>
        <div class="card-body">
          {{ $dataTable->table() }}
        </div>
      </div>
</section>
@endsection

@push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush
