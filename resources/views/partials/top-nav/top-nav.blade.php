<li class="dropdown">
    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button"
       aria-expanded="false">
        {{ Auth::user()->name }}
    </a>

    <ul class="dropdown-menu" role="menu">
        <li>
            <a
                    data-toggle="modal"
                    data-target="#exampleModal"
                    role="button"
            >
                Logout <i class="fa fa-fw fa-sign-out"></i>
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                  style="display: none;">
                {{ csrf_field() }}
            </form>
        </li>
        <li>
        
        </li>
        @can("View System Settings")
        <li>
            <a href="{{url('systems')}}">System Settings <i class="fa fa-fw fa-sliders" aria-hidden="true"></i> </a>
        </li>
        @endcan
    </ul>
</li>
