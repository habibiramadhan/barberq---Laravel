@extends('layouts.admin.master')

@section('content')
<div class="col">
            
    <div class="h-100">
        <div class="row">
            <div class="col-xl-4">
                <div class="row">
                    <div class="col-xl-12 col-md-6">
                        <!-- card -->
                        <div class="card card-animate">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div class="flex-grow-1">
                                        <p class="text-uppercase fw-medium text-muted text-truncate fs-13">Total Earnings</p>
                                        <h4 class="fs-22 fw-semibold mb-3">$<span class="counter-value" data-target="745.35">0</span></h4>
                                        <div class="d-flex align-items-center gap-2">
                                            <h5 class="text-success fs-12 mb-0">
                                                <i class="ri-arrow-right-up-line fs-13 align-middle"></i> +18.30 %
                                            </h5>
                                            <p class="text-muted mb-0">than last week</p>
                                        </div>
                                    </div>
                                    <div class="avatar-sm flex-shrink-0">
                                        <span class="avatar-title bg-soft-success rounded fs-3">
                                            <i class="bx bx-dollar-circle text-success"></i>
                                        </span>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                            <div class="animation-effect-6 text-success opacity-25 fs-18">
                                <i class="bi bi-currency-dollar"></i>
                            </div>
                            <div class="animation-effect-4 text-success opacity-25 fs-18">
                                <i class="bi bi-currency-pound"></i>
                            </div>
                            <div class="animation-effect-3 text-success opacity-25 fs-18">
                                <i class="bi bi-currency-euro"></i>
                            </div>
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <div class="col-xl-12 col-md-6">
                        <!-- card -->
                        <div class="card card-animate">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div class="avatar-sm flex-shrink-0">
                                        <span class="avatar-title bg-soft-info rounded fs-3">
                                            <i class="bx bx-shopping-bag text-info"></i>
                                        </span>
                                    </div>
                                    <div class="text-end flex-grow-1">
                                        <p class="text-uppercase fw-medium text-muted text-truncate fs-13">Orders</p>
                                        <h4 class="fs-22 fw-semibold mb-3"><span class="counter-value" data-target="698.36">0</span>k </h4>
                                        <div class="d-flex align-items-center justify-content-end gap-2">
                                            <h5 class="text-danger fs-12 mb-0">
                                                <i class="ri-arrow-right-down-line fs-13 align-middle"></i> -2.74 %
                                            </h5>
                                            <p class="text-muted mb-0">than last week</p>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                            <div class="animation-effect-6 text-info opacity-25 left fs-18">
                                <i class="bi bi-handbag"></i>
                            </div>
                            <div class="animation-effect-4 text-info opacity-25 left fs-18">
                                <i class="bi bi-shop"></i>
                            </div>
                            <div class="animation-effect-3 text-info opacity-25 left fs-18">
                                <i class="bi bi-bag-check"></i>
                            </div>
                        </div><!-- end card -->
                    </div><!-- end col -->
                
                    <div class="col-xl-12 col-md-6">
                        <!-- card -->
                        <div class="card card-animate">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div class="flex-grow-1">
                                        <p class="text-uppercase fw-medium text-muted text-truncate fs-13">Customers</p>
                                        <h4 class="fs-22 fw-semibold mb-3"><span class="counter-value" data-target="183.35">0</span>M </h4>
                                        <div class="d-flex align-items-center gap-2">
                                            <h5 class="text-success fs-12 mb-0">
                                                <i class="ri-arrow-right-up-line fs-13 align-middle"></i> +29.08 %
                                            </h5>
                                            <p class="text-muted mb-0">than last week</p>
                                        </div>
                                    </div>
                                    <div class="avatar-sm flex-shrink-0">
                                        <span class="avatar-title bg-soft-warning rounded fs-3">
                                            <i class="bx bx-user-circle text-warning"></i>
                                        </span>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                            <div class="animation-effect-6 text-warning opacity-25 fs-18">
                                <i class="bi bi-person"></i>
                            </div>
                            <div class="animation-effect-4 text-warning opacity-25 fs-18">
                                <i class="bi bi-person-fill"></i>
                            </div>
                            <div class="animation-effect-3 text-warning opacity-25 fs-18">
                                <i class="bi bi-people"></i>
                            </div>
                        </div><!-- end card -->
                    </div><!-- end col -->
                </div> <!-- end row-->
            </div>
            
            <div class="col-xl-8">
                <div class="card">
                    <div class="card-header border-0 align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Revenue</h4>
                        <div>
                            <button type="button" class="btn btn-soft-secondary btn-sm">
                                ALL
                            </button>
                            <button type="button" class="btn btn-soft-secondary btn-sm">
                                1M
                            </button>
                            <button type="button" class="btn btn-soft-secondary btn-sm">
                                6M
                            </button>
                            <button type="button" class="btn btn-secondary btn-sm">
                                1Y
                            </button>
                        </div>
                    </div><!-- end card header -->
                
                    <div class="card-header p-0 border-0 bg-soft-light">
                        <div class="row g-0 text-center">
                            <div class="col-6 col-sm-3">
                                <div class="p-3 border border-dashed border-start-0">
                                    <h5 class="mb-1"><span class="counter-value" data-target="7585">0</span></h5>
                                    <p class="text-muted mb-0">Orders</p>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-6 col-sm-3">
                                <div class="p-3 border border-dashed border-start-0">
                                    <h5 class="mb-1">$<span class="counter-value" data-target="22.89">0</span>k</h5>
                                    <p class="text-muted mb-0">Earnings</p>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-6 col-sm-3">
                                <div class="p-3 border border-dashed border-start-0">
                                    <h5 class="mb-1"><span class="counter-value" data-target="367">0</span></h5>
                                    <p class="text-muted mb-0">Refunds</p>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-6 col-sm-3">
                                <div class="p-3 border border-dashed border-start-0 border-end-0">
                                    <h5 class="mb-1 text-success"><span class="counter-value" data-target="18.92">0</span>%</h5>
                                    <p class="text-muted mb-0">Conversation Ratio</p>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                    </div><!-- end card header -->
                
                    <div class="card-body p-0 pb-2">
                        <div class="w-100">
                            <div id="customer_impression_charts" data-colors='["--tb-dark", "--tb-primary", "--tb-secondary"]' class="apex-charts" dir="ltr"></div>
                        </div>
                    </div><!-- end card body -->
                </div><!-- end card -->
            </div><!-- end col -->
        </div>
    </div> <!-- end .h-100-->

</div> 
@endsection