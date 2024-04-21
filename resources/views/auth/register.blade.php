<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <h4 class="text-center" style="font-size: 1.4rem; font-weight: 600;">Create Account</h4>
        <!-- Name -->
        <div  class="mb-3">
            <x-input-label for="name" class="form-label" :value="__('Name')" />
            <x-text-input id="name" class="form-control" type="text" name="name" :value="old('name')"  placeholder="Full Name" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-3">
            <x-input-label for="email" class="form-label" :value="__('Email Address')" />
            <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" placeholder="Name@example.com" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-3">
            <x-input-label for="password" class="form-label" :value="__('Password')" />

            <x-text-input id="password" class="form-control"
                            type="password"
                            name="password"
                            placeholder="Enter Password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-3">
            <x-input-label for="password_confirmation" class="form-label" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="form-control"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-between mt-3">
            <a class="mt-3 mb-3 gray d-flex justify-content-start" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>
        </div>

        <div class="d-flex justify-content-center"> 
            <x-primary-button class="btn btn-primary">
                {{ __('Register') }}
            </x-primary-button>
        </div>
        <span class="line">or register with</span>

            <div class="social-media d-flex justify-content-center">
                <a href=""><img src="{{asset('Images/google.png')}}" class="social-media-img m-2" alt="..."></a>
                <a href=""><img src="{{asset('Images/facebook.png')}}" class="social-media-img m-2" alt="..."></a>
            </div>
    </form>
</x-guest-layout>
