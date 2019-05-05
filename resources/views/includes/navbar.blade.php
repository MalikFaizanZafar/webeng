<nav class="navbar navbar-expand-lg navbar-dark bg-dark">


    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <a class="navbar-brand logo" href="{{url('/')}}">
            <img class="logo" src="https://www.roughleyinsurance.com/wp-content/uploads/2011/11/Icon-Home2-150x150.png" style="width:50px;height:50px;">
        </a>
        <span class="navbar-text spanName" style="color:white; font-size:30px;"><b>TECH-EEZ</b></span>


        <ul class="navbar-nav ml-5">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
            </li>
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
    </div>
    <form class="form-inline">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
    </form>
</nav>