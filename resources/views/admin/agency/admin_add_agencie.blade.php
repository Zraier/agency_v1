@extends('admin.admin_dashboard')
@section('admin')

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<div class="page-content">
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add Agencie</li>
        </ol>
    </nav>
    <div class="row">
      <div class="col-md-12 stretch-card">
        <div class="card">
          <div class="card-body">
            <h6 class="card-title">Add Agencie to DataBase</h6>
              <form class="forms-sample" method="POST" action="{{ route('admin.AddAgency') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                  <div class="col-sm-4">
                    <div class="mb-3">
                      <label for="exampleInputUsername1" class="form-label"> </label>
                      <img id="imageShow" class="wd-80 rounded-circle" src="{{ !empty($AgencieData->photo) ? url('upload/agencie_image/'.$AgencieData->photo) : url('upload/no_image.jpg')}}" alt="profile">  
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="mb-3">
                      <label for="exampleInputUsername1" class="form-label">Photo</label>
                      <input type="file" class="form-control" name="photo" id="photo">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-4">
                    <div class="mb-3">
                      <label class="form-label">Name</label>
                      <input type="text" class="form-control" name="name" placeholder="Enter Name" value="{{ old('name') }}" >
                        @error('name')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                  </div><!-- Col -->
                  <div class="col-sm-4">
                    <div class="mb-3">
                      <label class="form-label">Email</label>
                      <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Enter email" value="{{ old('email') }}">
                        @error('email')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                  </div><!-- Col -->
                </div><!-- Row -->
                <div class="row">
                  <div class="col-sm-4">
                    <div class="mb-3">
                      <label class="form-label">phone</label>
                      <input type="text" class="form-control" name="phone" placeholder="Enter Your Phone Number" value="{{ old('phone') }}">
                      @error('phone')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                  </div><!-- Col -->
                  <div class="col-sm-4">
                    <div class="mb-3">
                      <label class="form-label">Address</label>
                      <input type="text" class="form-control" name="address" placeholder="Enter Your Address">
                    </div>
                  </div><!-- Col -->
                  <!-- Col -->
                </div><!-- Row -->
                <div class="row">
                  <div class="col-sm-4">
                    <div class="mb-3">

                      <label class="form-label">UserName</label>
                      <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" placeholder="UserName" value="{{ old('username') }}">
                      @error('username')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror

                    </div>
                  </div>                
                </div>
                <div class="row"><!-- Col -->
                  <div class="col-sm-4">
                    <div class="mb-3">

                      <label class="form-label">Password</label>
                      <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password"  autocomplete="off">
                      @error('password')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror

                    </div>
                  </div><!-- Col -->
                  <div class="col-sm-4">
                    <div class="mb-3">

                      <label for="Confirme Password" class="form-label">Confirme Password</label>
                      <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" id="password_confirmation"  autocomplete="off">
                      @error('password_confirmation')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror

                    </div>
                  </div>
                </div><!-- Row -->
                <button type="submit" class="btn btn-primary submit">Add Agencie</button>
              </form>
          </div>
        </div>
      </div>
    </div>

  
</div>
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
</script>

@endsection