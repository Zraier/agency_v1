@extends('agency.agency_dashboard')
@section('agency')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<div class="pd-ltr-20 xs-pd-20-10">
    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="title">
                        <h4>Planing</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Plan a Trip
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Default Basic Forms Start -->
        <div class="pd-20 card-box mb-30">
            <div class="clearfix">
                <div class="pull-left">
                    <h4 class="text-blue h4">Yalla Tripi</h4>
                    <p class="mb-30">Create your own travel plan</p>
                </div>
            </div>
            @php
                $username= Auth::user()->username;
                $profileData = App\Models\agencie::findByUsername($username);
                
          
                @endphp
           
                <form method="POST" action="{{ route('store.plan') }}" enctype="multipart/form-data" id="mainForm">
                    @csrf
                    <input type="hidden" name="id_agence" value="{{ $profileData->id_agence }}">
                    <h5>Country Selection</h5>
                    <br>
                    
                        <div class="row">
                            
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Departure Date  :</label>
                                    <input
                                    class="form-control"
                                    placeholder="Select Date"
                                    type="date"
                                    name="date"
                                    id="startDate"
                                />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Arrival Date :</label>
                                    <input
											class="form-control"
											placeholder="Select Date"
											type="date"
                                            id="endDate"
										/>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Trip Days :</label>
                                    <input
											class="form-control"
											placeholder="Select Date"
											type="number"
                                            name="duree"
                                            id="dateDifference"
                                            readonly
										/>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <br>
                                    <br>
                                    <label>Select Country :</label>
                                    <select class="selectpicker countrypicker" name="country" data-flag="true" data-live-search="true"></select>
                                </div>
                            </div>
                          
                        </div>

                    <!-- Step 2 -->
                    <h5>Programme</h5>
                    <br>
                        <div class="row">
                           
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Trip Programme :</label>
                                    <textarea class="form-control" name="programme"></textarea>
                                </div>
                            </div>
                        </div>
                  
                    <!-- Step 3 -->
                    <h5>Images</h5>
                    <br>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="fv-row">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="photo" id="photo" />
                                            <label class="custom-file-label">Choose Front Image</label>
                                        </div>
                                     
                                    </div>
                                </div>
                            </div>
						</div>
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
                                <div class="card card-box">
                                    <img
                                        id="imageShow"
                                        class="card-img-top"
                                        style="width:351px; height:198px "
                                        src="{{ url('upload/no_image.jpg')}}"
                                        alt="Card image cap"
                                    />
                                  
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    
                    <!-- Step 4 -->
                    
                </form>
           
        </div>
    </div>
</div>	
@endsection
@section('script')	
<script type="text/javascript">
    $(document).ready(function(){
  
      $('#photo').change(function(e){
        var reader = new FileReader();
        reader.onload = function(e){
          $('#imageShow').attr('src',e.target.result);
        } 
        reader.readAsDataURL(e.target.files['0']);
      });
  
    });		
    // Function to calculate date difference and update the input field
    function calculateDateDifference() {
        // Get the selected dates
        var startDate = new Date(document.getElementById('startDate').value);
        var endDate = new Date(document.getElementById('endDate').value);

        // Calculate the difference in milliseconds
        var differenceInMilliseconds = endDate - startDate;

        // Convert milliseconds to days
        var differenceInDays = Math.floor(differenceInMilliseconds / (1000 * 60 * 60 * 24));

        // Update the input field with the result
        document.getElementById('dateDifference').value = differenceInDays;
    }

    // Listen to input event on date input fields
    document.getElementById('startDate').addEventListener('input', calculateDateDifference);
    document.getElementById('endDate').addEventListener('input', calculateDateDifference);

</script>
@endsection