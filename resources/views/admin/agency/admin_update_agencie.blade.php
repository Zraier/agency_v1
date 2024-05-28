@extends('admin.admin_dashboard')
@section('admin')

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <div class="page-content">

    <div class="row profile-body">
    
 
      <!-- middle wrapper start -->
      <div class="col-md-8 col-xl-8 middle-wrapper">
        <div class="row">
          <div class="col-md-10 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
    
                  <h6 class="card-title">Update Profil</h6>
                  <form class="forms-sample" method="POST" action="{{ route('admin.AgencyUpdate') }}" enctype="multipart/form-data">
                    @csrf
                      <input type="hidden" name="id_agence" value="{{ $data->id_agence }}">
                      <div class="mb-3">
                          <label for="exampleInputUsername1" class="form-label">Name</label>
                          <input type="text" class="form-control" name="name" id="name" value="{{$data->name}}" autocomplete="off">
                      </div>
                      <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Email address</label>
                          <input type="email" class="form-control" name="email" id="email" value="{{$data->email}}" autocomplete="off">
                      </div>
                      <div class="mb-3">
                          <label for="exampleInputUsername1" class="form-label">Phone</label>
                          <input type="text" class="form-control" name="phone" id="phone" value="{{$data->phone}}" autocomplete="off">
                      </div>
                      <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Address</label>
                          <input type="text" class="form-control" name="address" id="address" value="{{$data->address}}" autocomplete="off">
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputUsername1" class="form-label">Status :</label>
                        <div class="form-check form-check-inline">
                          <input type="radio" class="form-check-input" name="status" value="active" id="active" {{ $data->status === 'active' ? 'checked' : '' }}>
                          <label class="form-check-label" for="radioInline">Active</label>
                           
                        </div>
                        <div class="form-check form-check-inline">
                          <input type="radio" class="form-check-input" name="status" value="inactive" id="inactive" {{ $data->status === 'inactive' ? 'checked' : '' }}>
                          <label class="form-check-label" for="radioInline1">Inactive</label>
                        </div>
                        </div>
                      <div class="mb-3">
                          <label for="exampleInputUsername1" class="form-label">Photo</label>
                          <input type="file" class="form-control" name="photo" id="photo">
                      </div>

                      <div class="mb-3">
                          <label for="exampleInputUsername1" class="form-label"> </label>
                          <img id="imageShow" class="wd-80 rounded-circle" src="{{ !empty($data->photo) ? url('upload/agencie_image/'.$data->photo) : url('upload/no_image.jpg')}}" alt="profile">
                        
                      </div>
                </div>
                <button type="submit" class="btn btn-primary me-2">Save Update</button>
              </form>
    
              </div>
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