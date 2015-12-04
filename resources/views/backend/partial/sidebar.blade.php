<!--Leftbar Start Here-->
<aside class="leftbar material-leftbar">
    <div class="left-aside-container">
        <div class="user-profile-container">
            <div class="user-profile clearfix">
                <div class="admin-user-thumb">
                    <img src="{!! Settings::get('site_url') !!}{{ Auth::user()->image }}" alt="admin">
                </div>
                <div class="admin-user-info">
                    <ul>
                        <li><a href="#">{{ Auth::user()->name }}</a></li>
                        <li><a href="#">{{ Auth::user()->email }}</a></li>
                    </ul>
                </div>
            </div>
            <div class="admin-bar">
                <ul>
                    <li><a href="{{ url('auth/logout') }}"><i class="zmdi zmdi-power"></i>
                    </a>
                    </li>
                    <li><a href="{{ url('/admin/users') }}"><i class="zmdi zmdi-account"></i>
                    </a>
                    </li>
                    <li><a href="{{ url('/admin/users/edit') }}/{{ Auth::user()->id }}"><i class="zmdi zmdi-key"></i>
                    </a>
                    </li>
                    <li><a href="{{ url('/admin/settings') }}"><i class="zmdi zmdi-settings"></i>
                    </a>
                    </li>
                </ul>
            </div>
        </div>
        <ul class="list-accordion">
            <li class="list-title">Navigation</li>
                        <li><a href="{{ url('/') }}"><i class='fa fa-link'></i> <span>View Site</span></a></li>
            <li {{ Request::is('/admin') ? 'active' : '' }}><a href="{{ url('/admin')}}"><i class='fa fa-home'></i> <span>Dashboard</span></a></li>
            <li{{ Request::is('/admin/news') ? 'active' : '' }}  class="treeview">
                <a href="#news"><i class='fa fa-bullhorn'></i> <span>News & Artikel</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li {{ Request::is('/admin/news') ? 'active' : 'active' }}><a href="{{ url('/admin/news')}}">Show All</a></li>
                    <li class="divider"></li>
                    <li {{ Request::is('/admin/news/category') ? 'active' : '' }}><a href="{{ url('/admin/news/category')}}">Categories</a></li>
                </ul>
                <li {{ Request::is('/admin/booking') ? 'active' : '' }} class="treeview">
                <a href="{{ url('/admin/booking') }}"><i class='fa fa-shopping-cart'></i> <span>Bookings</span></a>
                </li>
            <li {{ Request::is('/admin/charters') ? 'active' : '' }} class="treeview">
                <a href="#charters"><i class='fa fa-plane'></i> <span>Charters</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li {{ Request::is('/admin/charters') ? 'active' : '' }}><a href="{{ url('/admin/charters')}}">Show All</a></li>
                    <li {{ Request::is('/admin/charters/location') ? 'active' : '' }}><a href="{{ url('/admin/charters/location')}}">Location</a></li>
                </ul>
            </li>
            <li {{ Request::is('/admin/destination') ? 'active' : '' }} class="treeview">
                <a href="#destination"><i class='fa fa-plane'></i> <span>Destination</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li {{ Request::is('/admin/destination') ? 'active' : '' }}><a href="{{ url('/admin/destination')}}">Show All</a></li>
                    <li {{ Request::is('/admin/destination/schedule') ? 'active' : '' }}><a href="{{ url('/admin/destination/schedule')}}">Schedule</a></li>
                </ul>
            </li>
            <li {{ Request::is('/admin/testimonial') ? 'active' : '' }} class="treeview">
                <a href="{{ url('/admin/testimonial') }}"><i class='fa fa-comment'></i> <span>Testimonial</span></a>
            </li>
            <li {{ Request::is('/admin/users') ? 'active' : '' }}><a href="{{ url('/admin/users')}}"><i class='fa fa-users'></i> <span>Users</span></a>
            <li {{ Request::is('/admin/settings') ? 'active' : '' }}><a href="{{ url('/admin/settings')}}"><i class='fa fa-gear'></i> <span>Settings</span></a></li>

        </ul>
    </div>
</aside>
<!--Leftbar End Here-->