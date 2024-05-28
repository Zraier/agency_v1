<div class="left-side-bar">
    <div class="brand-logo">
        <a href="index.html">
            <img src="{{ asset('backend_agence/vendors/images/tripi_dark.png')}}" alt="" class="dark-logo" />
            <img
                src="{{ asset('backend_agence/vendors/images/tripi_white.png')}}" alt="" class="light-logo"
            />
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">

                <li class="dropdown">
                    <a href="{{ route ('Employee.dashboard') }}" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-house"></span
                        ><span class="mtext">Home</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('Employee.Matchmaking') }}" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-journal-medical"></span
                        ><span class="mtext">Matchmaking</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('Employee.trips', ['id' => $profileData->id_emp]) }}" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-journal-bookmark"></span
                        ><span class="mtext">My trips</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('Employee.calendar') }}" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-calendar4-week"></span
                        ><span class="mtext">Calendar</span>
                    </a>
                </li>
                
                <li>
                    <a href="{{ route('Employee.plan') }}" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-calendar2-plus"></span
                        ><span class="mtext">Plan a Trip</span>
                    </a>
                </li>
                
                <li>
                    <div class="dropdown-divider"></div>
                </li>
               
            
            </ul>
        </div>
    </div>
</div>