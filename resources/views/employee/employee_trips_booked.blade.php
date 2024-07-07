@extends('employee.employee_dashboard')
@section('employee')
<div class="pd-ltr-20 xs-pd-20-10">
    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="title">
                        <h4>Trip Detail</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Trip Detail
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Default Basic Forms Start -->
        <h4 class="h4 text-blue mb-30">Selected Trip detail</h4>
        <div class="card-deck mb-30">
            
            <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
                {{-- <img src="data:image/png;base64, {!! base64_encode($qrCode) !!}"> --}}
            {!! $qrCode !!}
            </div>
            
            
    </div>
</div>				
@endsection