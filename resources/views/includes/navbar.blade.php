<nav class="navbar navbar-expand-lg navbar-dark bg-dark">


    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <a class="navbar-brand logo" href="{{url('/')}}">
            <img class="logo" src="https://i2.wp.com/tech-eez.com/wp-content/uploads/2016/08/TechEEZ-Profile.jpg" style="width:50px;height:50px;">
        </a>
        <span class="navbar-text spanName" style="color:white; font-size:30px;"><b>TECH-EEZ</b></span>

        @if(!Session::has('userAuth'))
        <ul class="navbar-nav ml-5">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Join Us
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{url('signin')}}">Sign In</a>
                    <a class="dropdown-item" href="{{url('signup')}}">Sign Up</a>
                </div>
            </li>
        </ul>
        @endif
        @if(Session::has('userAuth'))
        <a class="nav-link text-danger" href="{{url('logout')}}">Logout <span class="sr-only">(current)</span></a>
        @endif
    </div>
    <form class="form-inline">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
    </form>
</nav>