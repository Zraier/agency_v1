@extends('admin.admin_dashboard')
@section('admin')

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Agencies</li>
        </ol>
    </nav>

    <div class="row">
    <div class="col-md-12 grid-margin stretch-card">
  <div class="card">
  <div class="card-body">
    <h6 class="card-title">Agencie Table</h6>
    <p class="text-muted mb-3">Here you can <a href="#" target="_blank">Update/Delete </a>Agencies.</p>
    <div class="table-responsive">
      <table id="dataTableExample" class="table">
        <thead>
          <tr>
            <th>Photo</th>
            <th>Name</th>
            <th>UserName</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Adresse</th>
            <th>Status</th>
            <th>Created At</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($AgencieData as $key=>$agencie )
            <tr>
                <td><img class="wd-100 rounded-circle" src="{{ !empty($agencie->photo) ? url('upload/agencie_image/'.$agencie->photo) : url('upload/no_image.jpg')}}" alt="profile"></td>
                <td>{{ $agencie->name }}</td>
                <td>{{ $agencie->user->username }}</td>
                <td>{{ $agencie->email }}</td>
                <td>{{ $agencie->phone }}</td>
                <td>{{ $agencie->address }}</td>
                <td>{{ $agencie->status }}</td>
                <td>{{ $agencie->created_at->format('Y-m-d') }}</td>
                <td>
                  <a href="{{ route('admin.AgencyPageUpdate', ['id_agence' => $agencie->id_agence]) }}" class="btn btn-warning">Update</a>
                  <a href="{{ route('admin.AgencyDelete', ['username' => $agencie->username]) }}" class="btn btn-danger" id="delete">Delete</a>
                </td>
            </tr>  
            @endforeach
            
        </tbody>
      </table>
    </div>
  </div>
</div>
        </div>
    </div>

</div>

@endsection