@extends('layout.admin_header')
@section('admin_content')
    <div class="container-fluid">
        <div class="container-fluid admin_dashboard">
            <div class="row g-4">
             
                <div class="col-lg-4">
                    <a href="{{ route('admin.auth.courses.index') }}" class="card h-100 overflow-hidden border border-light-subtle">
                        <div class="card-body p-4">
                            <h3 class="mb-9 fw-semibold">Courses</h3>
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h2 class="fw-semibold mb-3">{{ $productCount }}</h2>
                                </div>
                                <div class="col-4">
                                    <span
                                        class="me-1 rounded-circle bg-light-secondary round-80 d-flex align-items-center justify-content-center">
                                        <i class="ti ti-package text-secondary h1"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
               
                <div class="col-lg-4">
                    <a href="{{ route('admin.auth.payment.index') }}" class="card h-100 overflow-hidden border border-light-subtle">
                        <div class="card-body p-4">
                            <h3 class="mb-9 fw-semibold">Fee Type</h3>
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h2 class="fw-semibold mb-3">{{ $prescriptionCount }}</h2>
                                </div>
                                <div class="col-4">
                                    <span
                                        class="me-1 rounded-circle bg-light-secondary round-80 d-flex align-items-center justify-content-center">
                                        <i class="ti ti-file-description text-secondary h1"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
             
            </div>
        </div>
    </div>
@endsection
