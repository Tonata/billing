<ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
        <a class="nav-link" href="{{url('/home')}}">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
        </a>
    </li>

  @can('Manage Companies')
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Companies">
            <a class="nav-link" href="{{url('/companies')}}">
                <i class="fa fa-fw fa-users"></i>
                <span class="nav-link-text">Companies</span>
            </a>
        </li>

    @endcan

    {{--@can('Manage Quotations')--}}
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Quotations">
            <a class="nav-link" href="{{url('/quotations')}}">
                <i class="fa fa-fw fa-file"></i>
                <span class="nav-link-text">Quotations</span>
            </a>
        </li>

    {{--@endcan--}}

    {{--@can('Manage Invoices')--}}
    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Invoices">
        <a class="nav-link" href="{{url('/invoices')}}">
            <i class="fa fa-fw fa-file"></i>
            <span class="nav-link-text">Invoices</span>
        </a>
    </li>

    {{--@endcan--}}

    {{--@can('Manage Accounts Receivable')--}}
    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Accounts Receivable">
        <a class="nav-link" href="{{url('/accounts')}}">
            <i class="fa fa-fw fa-credit-card"></i>
            <span class="nav-link-text">Accounts Receivable</span>
        </a>
    </li>

    {{--@endcan--}}

    @can('Manage Users')
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Users">
            <a class="nav-link" href="{{url('/users')}}">
                <i class="fa fa-fw fa-users"></i>
                <span class="nav-link-text">Users</span>
            </a>
        </li>
    @endcan

    @can('Manage Vat')
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Vat">
            <a class="nav-link" href="{{url('/vat')}}">
                <i class="fa fa-fw fa-calculator"></i>
                <span class="nav-link-text">Vat</span>
            </a>
        </li>
    @endcan

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
