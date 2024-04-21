@extends('layouts.subMaster')

@section('title')

@endsection

@section('css')
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/registration.css">
@endsection

@section('js')
@endsection

@section('content')
      

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="container container-xxl d-flex flex-column justify-content-center align-items-center">
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
        
                    {{-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button> --}}
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