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
        {{-- <div class="container-xxl">
            <a href="/" class="navbar-brand">
                <h3 class="fw-bold primary-color">
                    <i class="fa-solid fa-truck-fa-medical" aria-hidden="true"></i>
                    <i class="fa-solid fa-truck-medical"></i>
                    Aid<span class="secondary-color">Hub</span>
                </h3>
            </a>
        </div> --}}
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
    {{-- <div class="container container-xxl d-flex flex-column justify-content-center align-items-center">
        <h2 class="login-logo"><a href="../../index2.html"><b>Admin</b>Login</a></h2>
        <div class="login-box">
      </div> --}}
    <div class="container container-xxl d-flex flex-column justify-content-center align-items-center">

        <h1 class="fw-bold primary-color" style="
        font-size: 27px;
    ">
            <i class="fa-solid fa-truck-fa-medical" aria-hidden="true"></i>
            <i class="fa-solid fa-truck-medical"></i>
            Aid<span class="secondary-color">Hub</span>
        </h1>
        <h2 class="login-logo"><a href="../../index2.html"><b>Admin</b>Login</a></h2>

        <div class="registration-form p-4"  style="
        box-shadow: 2px 2px 41px rgb(178, 185, 187);
    ">
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="btn btn-primary">
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>

