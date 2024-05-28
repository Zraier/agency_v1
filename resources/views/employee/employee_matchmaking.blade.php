@extends('employee.employee_dashboard')
@section('employee')
<div class="pd-ltr-20 xs-pd-20-10">
    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="title">
                        <h4>Matchmaking</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Matching
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Default Basic Forms Start -->
        <h4 class="h4 text-blue mb-30">My Matchy Trips</h4>
        <div class="card-deck mb-30">
            @foreach ($data as $trip)
            <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
                <div class="card card-box">
                    <a href="#">
                <img
                    class="card-img-top"
                    style="width:351px; height:198px "
                    src="{{ !empty($trip->image) ? url('upload/agencie_image/Trips_image/'.$trip->image) : url('upload/no_image.jpg')}}"
                    alt="Card image cap"
                />
                <div class="card-body">
                    <h5>{{ $trip->findname->name }}</h5>
                    <br>
                    <h4>{{ $trip->country->name }}</h4>
                    <h5>{{ $trip->date }}</h5>
                    <h5>{{ $trip->duree }} Days</h5>
                    <p class="card-text">
                        {{$trip->programme}}
                    </p>
                </div>
                    </a>
                </div>
            </div>
            @endforeach
            
    </div>
</div>	
			
@endsection
