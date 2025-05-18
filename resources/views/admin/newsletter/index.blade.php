@extends('admin.layouts.master')

@section('content')
<section class="section">
    <div class="section-header">
      <h1>Newsletters</h1>
    </div>
    <div class="card card-primary">
        <div class="card-header">
          <h4>All Newsletters</h4>
          <div class="card-header-action">

            <a href="{{ route('admin.newsletters-export.export') }}">
                <button class="btn btn-secondary">Export Emails</button>
            </a>
            
            <a href="{{ route('admin.newsletters.create')}}" class="btn btn-primary">
              Send Email
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

    {{-- <script src="{{ asset("vendor/datatables/buttons.server-side.js") }}"></script> --}}

    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush
