@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Unread Webinar Applications</h1>
        </div>
        <div class="card card-primary">
            <div class="card-header">
                <h4 clas>Unread Webinar Applications</h4>
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
