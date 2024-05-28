@extends('admin.admin_dashboard')
@section('admin')

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Entreprise</li>
        </ol>
    </nav>

    <div class="row">
    <div class="col-md-12 grid-margin stretch-card">
  <div class="card">
  <div class="card-body">
    <h6 class="card-title">Entreprise Table</h6>
    <p class="text-muted mb-3">Here you can <a href="#" target="_blank">Update/Delete </a>Entreprise.</p>
    <div class="table-responsive">
      <table id="dataTableExample" class="table">
        <thead>
          <tr>
            <th>Photo</th>
            <th>Name</th>
            <th>UserName</th>
            <th>Domaine</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Adresse</th>
            <th>Status</th>
            <th>Created At</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($EntrepriseData as $key=>$entreprise )
            <tr>
                <td><img class="wd-100 rounded-circle" src="{{ !empty($entreprise->photo) ? url('upload/entreprise_image/'.$entreprise->photo) : url('upload/no_image.jpg')}}" alt="profile"></td>
                <td>{{ $entreprise->name }}</td>
                <td>{{ $entreprise->user->username }}</td>
                <td>{{ $entreprise->domaine->domaine_activity }}</td>
                <td>{{ $entreprise->email }}</td>
                <td>{{ $entreprise->phone }}</td>
                <td>{{ $entreprise->address }}</td>
                <td>{{ $entreprise->status }}</td>
                <td>{{ $entreprise->created_at->format('Y-m-d') }}</td>
                <td>
                  <a href="{{ route('admin.EntreprisePageUpdate', ['id_ent' => $entreprise->id_ent]) }}" class="btn btn-warning">Update</a>
                  <a href="{{ route('admin.EntrepriseDelete', ['username' => $entreprise->username]) }}" class="btn btn-danger" id="delete">Delete</a>
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