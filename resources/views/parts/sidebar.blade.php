<div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header" style="background:#d98638;padding: 1em;">
                <a href="{{ route('dashboard')}}" style="color:#fff;">{{ config('app.name') }}</a>
                
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li class="{{(request()->routeIs('dashboard')) ? 'active' : '' }}">
                            <a  href="{{ route('dashboard')}}">
                               <span class="educate-icon educate-home icon-wrap"></span>
                               <span class="mini-click-non">Dashboard</span>
                            </a>
                        </li>
                        <li class="{{(request()->routeIs('company.*')) ? 'active' : '' }}">
                            <a  href="{{route('company.index')}}">
                               <span class="educate-icon educate-professor icon-wrap"></span>
                               <span class="mini-click-non">Company</span>
                            </a>
                        </li>
                        <li class="{{(request()->routeIs('employee.*')) ? 'active' : '' }}">
                            <a  href="{{route('employee.index')}}">
                               <span class="educate-icon educate-professor icon-wrap"></span>
                               <span class="mini-click-non">Employee</span>
                            </a>
                        </li>
                        
                    </ul>
                </nav>
            </div>
        </nav>
    </div>