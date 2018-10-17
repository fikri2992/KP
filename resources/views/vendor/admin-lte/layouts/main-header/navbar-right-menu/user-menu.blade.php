<!-- User Account Menu -->
<li class="dropdown user user-menu">
    <!-- Menu Toggle Button -->
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <!-- The user image in the navbar-->
        <img src="@yield('user-avatar', 'https://www.gravatar.com/avatar/?d=mm')" class="user-image" alt="User Image">
        <!-- hidden-xs hides the username on small devices so only the image appears. -->
        <span class="hidden-xs">@yield('user-name', 'Alexander Pierce')</span>
    </a>
    <ul class="dropdown-menu">
        <!-- The user image in the menu -->
        <li class="user-header">
            <img src="@yield('user-avatar', 'https://www.gravatar.com/avatar/?d=mm')" class="img-circle" alt="User Image">

            <p>
                @yield('user-name', 'Alexander Pierce') 
            </p>
        </li>
        <!-- Menu Body -->
  
        <!-- Menu Footer-->
        <li class="user-footer">
            
            <div class="pull-right">
                <form action="{{ route('logout') }}" method="POST">
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-default btn-flat">Sign Out</button>
                </form>
            </div>
        </li>
    </ul>
</li>
