<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
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

        <div class="flex items-center justify-between mt-3"> <!-- Reduced top margin -->
            <!-- Remember Me -->
            <div class="block"> <!-- Removed margin-top class -->
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800 mr-2"> <!-- Adjusted margin -->
                    <span class="gray">{{ __('Remember me') }}</span> <!-- Removed margin classes -->
                </label>
                
            </div>
            
            <!-- Forget password? -->
            <div> <!-- Removed margin classes -->
                @if (Route::has('password.request'))
                
                    <a class="gray" href="{{ route('password.request') }}">
                        {{ __('Forget password?') }}
                    </a>
                @endif
            </div>
        </div>
        
        <div class="d-flex justify-content-center"> <!-- Reduced top margin -->
            <x-primary-button  class="btn btn-primary"> <!-- Apply red background color -->
                {{ __('Log in') }}
            </x-primary-button>

        </div>
         <span class="line">or login with</span>

            <div class="social-media d-flex justify-content-center">
                <a href=""><img src="{{asset('Images/google.png')}}" class="social-media-img m-2" alt="..."></a>
                <a href=""><img src="{{asset('Images/facebook.png')}}" class="social-media-img m-2" alt="..."></a>
            </div>
        
  
    </form>
</x-guest-layout>

        

         
           
