@extends('user.layouts.subMaster')

@section('title')
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/style.css') }}" >
<link rel="stylesheet" href="{{ asset('css/registration.css') }}" >

@endsection

@section('js')
@endsection

@section('content')


        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <div class="registration-container container-xxl d-flex flex-column justify-content-center align-items-center">
            <div class="registration-img">
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{asset('Images/boy.png')}}" class="d-block" alt="">
                        </div>

                        <div class="carousel-item">
                            <img src="{{asset('Images/girl.jpg')}}" class="d-block" alt="">
                        </div>
                    </div>

                </div>
            </div>
            <div class="triangle-up"></div>
            <div class="registration-form p-4">
                {{ $slot }}
            </div>

        </div>

    </body>
</html>
@endsection
