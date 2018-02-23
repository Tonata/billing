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

  

    <!-- @can('Manage Recipients')

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Recipients">
            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseRecipients" data-parent="#exampleAccordion">
                <i class="fa fa-fw fa-address-book"></i>
                <span class="nav-link-text">Recipients</span>
            </a>
            <ul class="sidenav-second-level collapse" id="collapseRecipients">

                @can('Manage Recipients')
                    <li>
                        <a class="nav-link" href="{{url('recipients')}}">Individuals</a>
                    </li>
                @endcan

                @can('Manage Groups')

                    <li>
                        <a class="nav-link" href="{{url('groups')}}">Groups</a>
                    </li>

                @endcan
            </ul>
        </li>

    @endcan

   @can('Administer roles & permissions')

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Authorization">
            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseAuthorization" data-parent="#exampleAccordion">
                <i class="fa fa-fw fa-key"></i>
                <span class="nav-link-text">Authorization</span>
            </a>
            <ul class="sidenav-second-level collapse" id="collapseAuthorization">

                @can('Manage Roles')

                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Roles">
                        <a class="nav-link " href="{{url('/roles')}}" >
                            {{--<i class="fa fa-fw fa-key"></i>--}}
                            <span class="nav-link-text">Roles</span>
                        </a>
                    </li>

                @endcan

                @can('Manage Permissions')

                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Permissions">
                        <a class="nav-link"  href="{{url('/permissions')}}">
                            {{--<i class="fa fa-fw fa-check"></i>--}}
                            <span class="nav-link-text">Permissions</span>
                        </a>
                    </li>

                @endcan
            </ul>
        </li>

   @endcan

    @can('Manage SMS Services')
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="SMS Services">
            <a class="nav-link" href="{{url('out')}}" data-parent="#exampleAccordion">
                <i class="fa fa-fw fa-envelope"></i>
                <span class="nav-link-text">SMS Services</span>
            </a>
        </li>
    @endcan

    @can('Manage Credit')

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="SMS Credit Administration">
            <a class="nav-link" href="{{url('credits')}}" data-parent="#exampleAccordion">
                <i class="fa fa-fw fa-usd"></i>
                <span class="nav-link-text">SMS Credit Administration</span>
            </a>
        </li>

    @endcan

    @can('Manage Subscriptions')

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Subscriptions">
            <a class="nav-link" href="{{url('subscriptions')}}" data-parent="#exampleAccordion">
                <i class="fa fa-fw fa-get-pocket"></i>
                <span class="nav-link-text">Subscriptions</span>
            </a>
        </li>

    @endcan

    @can('Manage Memberships')

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Memberships">
            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMemberships" data-parent="#exampleAccordion">
                <i class="fa fa-fw fa-users"></i>
                <span class="nav-link-text">Memberships</span>
            </a>
            <ul class="sidenav-second-level collapse" id="collapseMemberships">
                @can('View Memberships')
                    <li><a href="{{url('/memberships')}}">View Memberships</a></li>
                @endcan

                {{--@can('Create Users')--}}
                {{--<li><a href="{{url('/users/create')}}">Create User</a></li>--}}
                {{--@endcan--}}
            </ul>
        </li>

    @endcan

    @can('View Billings')

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Billing">
            <a class="nav-link" href="{{url('billing')}}">
                <i class="fa fa-fw fa-money"></i>
                <span class="nav-link-text">Billing</span>
            </a>
        </li>

    @endcan -->

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
