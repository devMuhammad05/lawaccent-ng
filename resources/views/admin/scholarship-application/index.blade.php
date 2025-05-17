@extends('admin.layouts.master')
@use('App\Models\SiteSetting', 'SiteSetting')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Scholarship Applications</h1>
        </div>

        <div class="card card-primary">
            <div class="card-header">
                <h4>Application form status</h4>
            </div>
            <div class="card-body">

                <form action="{{ route('admin.site-settings.update', ['site_setting' => SiteSetting::first()]) }}"
                    method="POST">
                    @csrf
                    @method('PUT')
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="form-group w-50">
                            <div class="form-group">
                                <label>Status</label>
                                <select type='text' class='form-control' name='schoolarship_application_status'>
                                    <option @selected(optional(SiteSetting::first())->schoolarship_application_status == 1) value="1">Active</option>
                                    <option @selected(optional(SiteSetting::first())->schoolarship_application_status == 0)  value="0">Disable</option>
                                </select>
                            </div>
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
                <h4>All Scholarship Applications</h4>
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
