@extends('admin.layouts.master')

@section('content')
<section class="section">
    <div class="section-header mb-4">
        <h1>About Us Metrics</h1>
    </div>

    <form action="{{ route('admin.about-us-metrics.update', $aboutUsMetrics) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="row g-4 bg-light p-5 rounded shadow-sm">
            <!-- Year -->
            <div class="col-md-3">
                <div class="card card-primary text-center p-4 shadow-sm h-100">
                    <div class="card-body py-4">
                        <div class="mb-3">
                            <i class="fas fa-calendar-alt fa-2x text-primary"></i>
                        </div>
                        <h5 class="card-title mb-3">Year</h5>
                        <input type="number" class="form-control text-center" value="{{ $aboutUsMetrics->year }}"  placeholder="e.g. 2016" name="year" value="{{ old('year') }}">
                    </div>
                </div>
            </div>

            <!-- Offices -->
            <div class="col-md-3">
                <div class="card card-primary text-center p-4 shadow-sm h-100">
                    <div class="card-body py-4">
                        <div class="mb-3">
                            <i class="fas fa-building fa-2x text-success"></i>
                        </div>
                        <h5 class="card-title mb-3">Offices</h5>
                        <input type="number" class="form-control text-center" value="{{ $aboutUsMetrics->number_of_offices }}" placeholder="Number of offices" name="number_of_offices" value="{{ old('number_of_offices') }}">
                    </div>
                </div>
            </div>

            <!-- Clients -->
            <div class="col-md-3">
                <div class="card card-primary text-center p-4 shadow-sm h-100">
                    <div class="card-body py-4">
                        <div class="mb-3">
                            <i class="fas fa-users fa-2x text-info"></i>
                        </div>
                        <h5 class="card-title mb-3">Clients</h5>
                        <input type="number" class="form-control text-center" value="{{ $aboutUsMetrics->number_of_clients }}" placeholder="Number of clients" name="number_of_clients" value="{{ old('number_of_clients') }}">
                    </div>
                </div>
            </div>

            <!-- Scholarships -->
            <div class="col-md-3">
                <div class="card card-primary text-center p-4 shadow-sm h-100">
                    <div class="card-body py-4">
                        <div class="mb-3">
                            <i class="fas fa-graduation-cap fa-2x text-warning"></i>
                        </div>
                        <h5 class="card-title mb-3">Scholarships</h5>
                        <input type="number" class="form-control text-center" value="{{ $aboutUsMetrics->number_of_scholarships }}" placeholder="Scholarships given" name="number_of_scholarships" value="{{ old('number_of_scholarships') }}">
                    </div>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="col-12 text-center mt-5 d-none">
                <button type="submit" class="btn btn-primary px-5">
                    <i class="fas fa-save me-2"></i>Save Metrics
                </button>
            </div>
        </div>
    </form>
</section>
@endsection
