
    <nav id="navbar" class="navbar navbar-expand-md">
        <div class="container-xxl d-flex ">
            <a href="/#home" class="navbar-brand">
                <h3 class="fw-bold primary-color">
                    <i class="fa-solid fa-truck-medical"></i>
                    Aid<span class="secondary-color">Hub</span>
                </h3>
            </a>


            <!-- Toggle button for mobile navbar -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav"
                aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>



            <!-- navbar links -->
            <div class="collapse navbar-collapse justify-content-center align-items-center" id="main-nav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="/#home" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="/#about" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="/#cases" class="nav-link">Cases</a>
                    </li>
                    <li class="nav-item">
                        <a href="/#blogs" class="nav-link">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a href="/#workshop" class="nav-link">Workshop</a>
                    </li>

                    <li class="nav-item">
                        <a href="/#contact" class="nav-link">Contact</a>
                    </li>
                </ul>
            </div>
            @if(Auth::user())

                <div class="dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                       aria-expanded="false">
                        <img class="user-image" src="{{ Auth::user()->img ? asset('storage/image/'.Auth::user()->img) : asset('image/profile.jpg') }}" alt="{{ Auth::user()->name }}">
                    </a>

                    <ul class="dropdown-menu dropdown-menu-end mt-2" style="margin-left: -65px;">
                        <li class="ps-3 fw-bold primary-color fs-5">{{Auth::user()->name}}</li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="/profile">Profile</a></li>
                        <li>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item" style="width: 100%">Logout</button>
                            </form>
                        </li>
                    </ul>
                </div>




                {{--            <h4 class="d-block"style="color: #828583;" >Welcome {{Auth::user()->name}}</h4>&nbsp;&nbsp;--}}

{{--                <img class="img-circle elevation-2" src="{{ asset(Auth::user()->img ? 'storage/image/'.Auth::user()->img : 'storage/image/profile.jpg') }}" alt="{{ Auth::user()->name }}" style="height: 50px; width: 50px;">--}}
{{--                <img class="img-circle elevation-2" src="{{ asset(Auth::user()->img)}}" alt="{{ Auth::user()->name }}" style="height: 50px; width: 50px;">--}}
{{--                @if(Auth::user()->img)--}}
{{--                    <img class="img-circle elevation-2" src="{{asset('/storage/image/'.Auth::user()->img)}}" alt="{{ Auth::user()->name }}" style="height: 50px; width: 50px;">--}}
{{--                @endif--}}




                {{--            <form method="POST" action="{{ route('logout') }}" style="display: inline;">--}}
{{--                @csrf--}}
{{--                @method('POST')--}}
{{--                <button style="background-color: #e13300; border-color: #e13300;color: white;  float: left;" class="btn btn-outline-primary" >--}}
{{--                    Logout--}}
{{--                    <i class="bi bi-box-arrow-right"></i>--}}
{{--                </button>--}}
{{--            </form>--}}
            @else
            <div class="signup">
                <button class="btn btn-outline-primary"><a href="{{route('login')}}">Sign In </a><i
                        class="bi bi-person-fill"></i></button>
            </div>
            @endif

        </div>
    </nav>

