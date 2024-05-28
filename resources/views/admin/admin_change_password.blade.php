@extends('admin.admin_dashboard')
@section('admin')

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <div class="page-content">

    <div class="row profile-body">
      <!-- left wrapper start -->
      <div class="d-none d-md-block col-md-4 col-xl-4 left-wrapper">
        <div class="card rounded">
          <div class="card-body">
            <div class="d-flex align-items-center justify-content-between mb-2">
                <div>
                    <img class="wd-100 rounded-circle" src="{{ !empty($profileData->photo) ? url('upload/admin_image/'.$profileData->photo) : url('upload/no_image.jpg')}}" alt="profile">
                    <span class="h4 ms-3">{{ $profileData->username }}</span>
                  </div>
            </div>
            
            <p>Hi! I'm Amiah the Senior UI Designer at NobleUI. We hope you enjoy the design and quality of Social.</p>
            <div class="mt-3">
              <label class="tx-11 fw-bolder mb-0 text-uppercase">Name:</label>
              <p class="text-muted">{{ $profileData->name }}</p>
            </div>
            <div class="mt-3">
              <label class="tx-11 fw-bolder mb-0 text-uppercase">Email:</label>
              <p class="text-muted">{{ $profileData->email }}</p>
            </div>
            <div class="mt-3">
                <label class="tx-11 fw-bolder mb-0 text-uppercase">Phone:</label>
                <p class="text-muted">{{ $profileData->phone }}</p>
            </div>
            <div class="mt-3">
              <label class="tx-11 fw-bolder mb-0 text-uppercase">Adresse:</label>
              <p class="text-muted">{{ $profileData->address }}</p>
            </div>
            <div class="mt-3 d-flex social-links">
              <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                <i data-feather="github"></i>
              </a>
              <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                <i data-feather="twitter"></i>
              </a>
              <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                <i data-feather="instagram"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- left wrapper end -->
      <!-- middle wrapper start -->
      <div class="d-none d-md-block col-md-4 col-xl-6 left-wrapper">
        <div class="row">
          <div class="col-md-10 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
    
                  <h6 class="card-title">Update Password</h6>
                  <form class="forms-sample" method="POST" action="{{ route('admin.change.password') }}">
                    @csrf
                      <div class="mb-3">
                          <label for="Current Password" class="form-label">Current Password</label>
                          <input type="text" class="form-control @error('current_password') is-invalid @enderror" name="current_password" id="current_password"  autocomplete="off">
                          @error('current_password')
                            <span class="text-danger">{{ $message }}</span>
                          @enderror
                      </div>
                      <div class="mb-3">
                        <label for="eNew Password" class="form-label">New Password</label>
                        <input type="text" class="form-control @error('password') is-invalid @enderror" name="password" id="password"  autocomplete="off">
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                          @enderror
                    </div>
                    <div class="mb-3">
                        <label for="Confirme Password" class="form-label">Confirme Password</label>
                        <input type="text" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" id="password_confirmation"  autocomplete="off">
                        @error('password_confirmation')
                            <span class="text-danger">{{ $message }}</span>
                          @enderror
                    </div>
                     
                      
                      <button type="submit" class="btn btn-primary me-2">Save Update</button>

                  </form>
    
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  


@endsection