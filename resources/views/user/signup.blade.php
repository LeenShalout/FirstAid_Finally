@extends('user.layouts.subMaster')

@section('title')
    Sign Up
@endsection

@section('css')
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/registration.css">
@endsection

@section('js')
@endsection



@section('content')
    <div class="container container-xxl d-flex flex-column justify-content-center align-items-center">
        {{-- <div class="registration-img"> --}}
            {{-- <img src="{{asset('Images/boy.png')}}" alt="">
        <img src="{{asset('Images/girl.jpg')}}" alt=""> --}}

            {{-- <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('Images/boy.png') }}" class="d-block" alt="">
                    </div>

                    <div class="carousel-item">
                        <img src="{{ asset('Images/girl.jpg') }}" class="d-block" alt="">
                    </div>
                </div> --}}

                {{-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button> --}}
            {{-- </div> --}}

            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active registration-img">
                        <img src="{{ asset('Images/boy.png') }}" class="d-block" alt="...">
                    </div>
                    <div class="carousel-item registration-img">
                        <img src="{{ asset('Images/girl.jpg') }}" class="d-block" alt="...">
                    </div>

                </div>
            </div>
        {{-- </div> --}}

        <div class="triangle-up"></div>

        <div class="registration-form p-4">
            <form>
                <h4 class="text-center">Create Account</h4>
                <div class="">
                    <label for="exampleFormControlInput1" class="form-label">Name</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Full Name">
                </div>
                <div class="">
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Name@example.com">
                </div>
                <div class="">
                    <label for="exampleFormControlInput1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Enter Password">
                </div>
                {{-- <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                I agree to the <a href="">Terms of Service</a> and <a href="">Privacy Policy</a>
                </label>
            </div> --}}
                <div class="mt-3 mb-3 gray d-flex justify-content-start">
                    <a href="/login">Already have an account?</a>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="button" class="btn btn-primary" style="width: 100px;">Sign Up</button>
                </div>
                <span class="line">or sign up with</span>

                <div class="social-media d-flex justify-content-center">
                    <a href=""><img src="{{ asset('Images/google.png') }}" class="social-media-img m-2"
                            alt="..."></a>
                    <a href=""><img src="{{ asset('Images/facebook.png') }}" class="social-media-img m-2"
                            alt="..."></a>
                </div>

            </form>
        </div>


    </div>
@endsection
