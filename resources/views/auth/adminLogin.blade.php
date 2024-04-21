<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://kit.fontawesome.com/cf7b2cdf0b.js" crossorigin="anonymous"></script>
    <nav id="navbar" class="navbar navbar-expand-md navbar-fixed-top head">
        <div class="container-xxl">
            <a href="/" class="navbar-brand">
                <h3 class="fw-bold primary-color">
                    <i class="fa-solid fa-truck-fa-medical" aria-hidden="true"></i>
                    <i class="fa-solid fa-truck-medical"></i>
                    Aid<span class="secondary-color">Hub</span>
                </h3>
            </a>
        </div>
    </nav>
    <link rel="stylesheet" href="/adminStyle.css">
    <link rel="stylesheet" href="/adminUtilities.css">
    <link rel="stylesheet" href="/adminRegistration.css">
    <style>

    </style>

    <title>AidHubAdmin | Login</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="hold-transition login-page">
    <div class="container container-xxl d-flex flex-column justify-content-center align-items-center">
        <h2 class="login-logo"><a href="../../index2.html"><b>Admin</b>Login</a></h2>
        <div class="login-box">
      </div>
    <div class="container container-xxl d-flex flex-column justify-content-center align-items-center">



        <div class="registration-form p-4">
          
            <x-auth-session-status class="mb-4" :status="session('status')" />
            <form method="POST" action="{{ route('adminLogin') }}">
                @csrf
                <h4 class="text-center" style="font-size: 1.4rem; font-weight: 600;">Welcome Back</h4>

                <!-- Email Address -->
        <div class="mb-3"> <!-- Added margin-bottom class -->
            <x-input-label for="email" class="form-label" :value="__('Email Address')" />
            <x-text-input id="email" class="form-control" type="email" name="email" placeholder="Name@example.com" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
                 <!-- Password -->
        <div class="mt-3"> <!-- Reduced top margin -->
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="form-control"
                            type="password"
                            name="password"
                            required autocomplete="current-password"
                            placeholder="Enter Password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>
                {{-- <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                    I agree to the <a href="">Terms of Service</a> and <a href="">Privacy Policy</a>
                    </label>
                </div> --}}
                 <!-- Forget password? -->
            <div class="mt-3 mb-3 gray d-flex justify-content-start"> <!-- Removed margin classes -->
                @if (Route::has('password.request'))
                
                    <a class="gray" href="{{ route('password.request') }}">
                        {{ __('Forget password?') }}
                    </a>
                @endif
            </div>
                
            <div class="d-flex justify-content-center"> <!-- Reduced top margin -->
                <x-primary-button  class="btn btn-primary"> <!-- Apply red background color -->
                    {{ __('Log in') }}
                </x-primary-button>
    
            </div>
                
            </form>
            </div>

        {{-- @include('layouts.customFooter') --}}

    </div>

</body>

</html>
