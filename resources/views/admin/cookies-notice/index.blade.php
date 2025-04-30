@use('App\Models\SiteSetting', 'SiteSetting')

@extends('admin.layouts.master')
@section('content')
    <section class="section">

        <div class="section-header">
            <h1>Cookie Notice</h1>
        </div>

        <div class="card card-primary">
            <div class="card-header">
              <h4>Cookie Notice Effective Date</h4>
            </div>
            <div class="card-body">

                <p>Effective Date:
                    [<span id="date">{{ optional(SiteSetting::first())->cookie_notice_effective_date->format('d/m/Y') }}</span>]
                </p>

                <form action="{{ route('admin.site-settings.update', ['site_setting' => SiteSetting::first()]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="form-group w-50">
                            <label>Date (mm/dd/Y)</label>
                            <input type="date"
                                   class="form-control"
                                   name="cookie_notice_effective_date"
                                   data-date-format="dd/mm/yyyy"
                                   value="{{ optional(SiteSetting::first())->cookie_notice_effective_date->format('Y-m-d') }}">
                        </div>
                        <div>
                            <button class="btn btn-primary py-2 px-3" >Update</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>

        <div class="card card-primary">
            <div class="card-header">
                <h4>Create Cookie Notice</h4>
                <div class="card-header-action">
                    <a href="{{ route('admin.cookie-notice.create') }}" class="btn btn-primary">
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
