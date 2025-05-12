@use('App\Models\SiteSetting', 'SiteSetting')

@extends('admin.layouts.master')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Job Openings</h1>
        </div>

        <div class="card card-primary">
            <div class="card-header">
                <h4>Job Application Form Link (For Career Page Apply Now Button)</h4>
            </div>
            <div class="card-body">

                <form action="{{ route('admin.site-settings.update', ['site_setting' => SiteSetting::first()]) }}"
                    method="POST">
                    @csrf
                    @method('PUT')
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="form-group w-50">
                            <label>Application form link</label>
                            <input type="url" class="form-control" name="application_form_link">
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
                <h4>All Job Openings</h4>
                <div class="card-header-action">
                    <a href="{{ route('admin.job-openings.create')}}" class="btn btn-primary">
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
