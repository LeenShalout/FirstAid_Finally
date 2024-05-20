<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/cf7b2cdf0b.js" crossorigin="anonymous"></script>

{{--    <script src="/nav.js"></script>--}}

    {{-- <link rel="stylesheet" href="css/style.css"> --}}
    <link rel="stylesheet" href="css/utilites.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="/css/forum.css">




    <title>AidHub | @yield('title')</title>


    <style>
    </style>
    @yield('css')

</head>
<body>
@include('user.layouts.nav')

<div class="forum-container container-xxl">
    <div class="main-body p-0">
        <div class="inner-wrapper">
            <!-- Inner sidebar -->
            <div class="inner-sidebar">
                <div class="inner-sidebar-header justify-content-center">
                    @auth
                        <button class="btn btn-primary has-icon btn-block" type="button" data-bs-toggle="modal"
                                data-bs-target="#threadModal">
                            <i class="fa-solid fa-plus"></i>
                            Add Your Experience
                        </button>
                    @else
                        <button class="btn btn-primary has-icon btn-block" type="button" disabled>
                            <i class="fa-solid fa-plus"></i>
                            Add Your Experience
                        </button>
                    @endauth

                </div>

                <div class="inner-sidebar-body p-0">
                    <div class="p-3 h-100" data-simplebar="init">
                        <div class="simplebar-wrapper" style="margin: -16px;">
                            <div class="simplebar-height-auto-observer-wrapper">
                                <div class="simplebar-height-auto-observer"></div>
                            </div>
                            <div class="simplebar-mask">
                                <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                    <div class="simplebar-content-wrapper"
                                         style="height: 100%; overflow: hidden scroll;">
                                        <div class="simplebar-content" style="padding: 16px;">
                                            <nav class="nav nav-pills nav-gap-y-1 flex-column">
                                                <a href="/experienceAllPosts" class="{{ request()->is('experienceAllPosts') ? 'nav-link nav-link-faded has-icon active' : 'nav-link nav-link-faded has-icon' }}">All Posts</a>
                                                @auth
                                                    <a href="/experienceMyPosts" class="{{ request()->is('experienceMyPosts') ? 'nav-link nav-link-faded has-icon active' : 'nav-link nav-link-faded has-icon' }}">My Posts</a>
                                                @endauth
                                                <a href="/experienceLatest" class="{{ request()->is('experienceLatest') ? 'nav-link nav-link-faded has-icon active' : 'nav-link nav-link-faded has-icon' }}">Latest</a>
                                            </nav>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="inner-main">
                <div class="inner-main-header">
                    <form action="{{ route('searchExperience')}}" method="GET">
                    <span class="input-icon input-icon-sm ml-auto w-auto">
                            <input type="text" name="search" class="form-control form-control-sm bg-gray-200 shadow-none mb-4 mt-4"
                                   value="{{ request('search') }}" placeholder="Search forum" />
                    </span>
                    </form>
                </div>

                <div class="inner-main-body p-2 p-sm-3 collapse forum-content show">

                    @yield('content')


                </div>





            </div>
        </div>

    </div>

    <!-- Add Experience Modal -->
    <div class="modal fade" id="threadModal" tabindex="-1" aria-labelledby="threadModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">

                <form action="{{ route('experience.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h6 class="modal-title mb-0" id="threadModalLabel">New Experience</h6>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="threadTitle">Write Your Experience</label>
                            {{-- <textarea type="text" class="form-control" id="threadTitle" placeholder="Experience" autofocus="" /> --}}
                            <textarea class="form-control m-0 p-0 ps-2 mt-2" id="threadTitle" rows="4" placeholder="Experience"
                                      name="experience"></textarea>
                        </div>

                        <div class="img-upload mt-3">
                            <label for="formFile" class="form-label">Upload Image</label>
                            <input class="form-control" type="file" id="formFile" name="experienceImage">
                        </div>

                    </div>
                    <div class="modal-footer mt-3">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Post</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
</div>

@include('user.layouts.footer')

</body>
@yield('js')
</html>
