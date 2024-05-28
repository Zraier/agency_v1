<nav class="sidebar">
    <div class="sidebar-header">
      <a href="#" class="sidebar-brand">
        Tripi<span>معانا</span>
      </a>
      <div class="sidebar-toggler not-active">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
    <div class="sidebar-body">
      <ul class="nav">
        <li class="nav-item nav-category">Main</li>
        <li class="nav-item">
          <a href="{{ route('admin.dashboard') }}" class="nav-link">
            <i class="link-icon" data-feather="box"></i>
            <span class="link-title">Dashboard</span>
          </a>
        </li>

        <li class="nav-item nav-category">Agencies</li>

        <li class="nav-item">
          <a href="{{ route('admin.Agency') }}" class="nav-link">
            <i class="link-icon" data-feather="home"></i>
            <span class="link-title">Show Agencies</span>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{ route('admin.AddAgency') }}" class="nav-link">
            <i class="link-icon" data-feather="plus-square"></i>
            <span class="link-title">Add Agencies</span>
          </a>
        </li>

        <li class="nav-item nav-category">Entreprises</li>

        <li class="nav-item">
          <a href="{{ route('admin.Entreprise') }}" class="nav-link">
            <i class="link-icon" data-feather="briefcase"></i>
            <span class="link-title">Show Entreprises</span>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{ route('admin.AddEntreprise') }}" class="nav-link">
            <i class="link-icon" data-feather="plus-square"></i>
            <span class="link-title">Add Entreprises</span>
          </a>
        </li>

       

        <li class="nav-item nav-category">Employees</li>

        <li class="nav-item">
          <a href="{{ route('admin.Employee') }}" class="nav-link">
            <i class="link-icon" data-feather="users"></i>
            <span class="link-title">show Employees</span>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{ route('admin.AddEmployee') }}" class="nav-link">
            <i class="link-icon" data-feather="user-plus"></i>
            <span class="link-title">Add Employees</span>
          </a>
        </li>
      </ul>
    </div>
</nav>