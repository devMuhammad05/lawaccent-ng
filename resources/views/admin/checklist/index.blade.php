@use('App\Models\SiteSetting', 'SiteSetting')

@extends('admin.layouts.master')
@section('content')
    <section class="section">

        <div class="section-header">
            <h1>Legal Checklists</h1>
        </div>

        <div class="card card-primary">
            <div class="card-header">
                <h4>Create Checklist</h4>
                <div class="card-header-action">
                    <a href="{{ route('admin.checklists.create') }}" class="btn btn-primary">
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
