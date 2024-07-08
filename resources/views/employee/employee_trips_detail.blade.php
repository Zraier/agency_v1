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
                <div class="card card-box">
                <img
                    class="card-img-top"
                    style="width:351px; height:198px "
                    src="{{ !empty($data->image) ? url('upload/agencie_image/Trips_image/'.$data->image) : url('upload/no_image.jpg')}}"
                    alt="Card image cap"
                />
                <div class="card-body">
                    
                    <h4>{{ $data->country->name }}</h4>
                    <h5>{{ $data->date }}</h5>
                    <h5>{{ $data->duree }} Days</h5>
                    <p class="card-text">
                        {{$data->programme}}
                    </p>
                    <a href="{{ route('employee.BookTrip', ['id_voy' => $data->ref_voy_agence]) }}" class="btn btn-primary">Book Now!</a>
                    
                </div>
                </div>
            </div>
            
            
    </div>
</div>				
@endsection