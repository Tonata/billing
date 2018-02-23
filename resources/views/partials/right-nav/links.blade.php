<ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
        <a class="nav-link" href="{{url('/')}}">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
        </a>
    </li>


        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Users">
            <a class="nav-link" href="{{url('/users')}}">
                <i class="fa fa-fw fa-users"></i>
                <span class="nav-link-text">Users</span>
            </a>
        </li>

    @auth
        <li  class="nav-item label-primary" id="btn-logout" data-toggle="tooltip" data-placement="right" title="Logout">
            <a
                    data-toggle="modal"
                    data-target="#exampleModal"
                    role="button"
                    class="nav-link">
                <i style="color:whitesmoke" class="fa fa-fw fa-sign-out fa-warning"></i>
                <span style="color:whitesmoke !important;" class="nav-link-text" >Logout</span>
            </a>
        </li>
    @endauth

</ul>
<ul class="navbar-nav sidenav-toggler">
    <li class="nav-item">
        <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
        </a>
    </li>
</ul>
