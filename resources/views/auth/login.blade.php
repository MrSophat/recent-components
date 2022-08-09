<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="relative min-h-screen flex flex-1 flex-col items-center justify-center">

        <img class="object-cover fixed h-full w-full -z-[1]" src="https://images.unsplash.com/photo-1550859492-d5da9d8e45f3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="">

        <svg class="mx-auto mb-10 h-20 w-auto text-slate-900 dark:text-white mr-auto" 
            height="21" 
            viewBox="0 0 60 21" 
            fill="none" 
            xmlns="http://www.w3.org/2000/svg">
                <path d="M3.34695 5.172V11.052C3.34695 11.64 3.49162 12.0927 3.78095 12.41C4.07029 12.7273 4.49495 12.886 5.05495 12.886C5.61495 12.886 6.04429 12.7273 6.34295 12.41C6.64162 12.0927 6.79095 11.64 6.79095 11.052V5.172H9.18495V11.038C9.18495 11.9153 8.99829 12.6573 8.62495 13.264C8.25162 13.8707 7.74762 14.328 7.11295 14.636C6.48762 14.944 5.78762 15.098 5.01295 15.098C4.23829 15.098 3.54295 14.9487 2.92695 14.65C2.32029 14.342 1.83962 13.8847 1.48495 13.278C1.13029 12.662 0.952953 11.9153 0.952953 11.038V5.172H3.34695ZM13.26 5.172V15H10.866V5.172H13.26Z" fill="#2D9CDB"></path>
                <path d="M21.015 15L19.013 11.99L17.249 15H14.533L17.683 10.002L14.463 5.172H17.249L19.223 8.14L20.959 5.172H23.675L20.553 10.128L23.801 15H21.015Z" fill="#EB5757"></path>
                <path d="M30.9528 9.96C31.5221 10.0813 31.9794 10.366 32.3248 10.814C32.6701 11.2527 32.8428 11.7567 32.8428 12.326C32.8428 13.1473 32.5534 13.8007 31.9748 14.286C31.4054 14.762 30.6074 15 29.5808 15H25.0028V5.172H29.4268C30.4254 5.172 31.2048 5.40067 31.7648 5.858C32.3341 6.31533 32.6188 6.936 32.6188 7.72C32.6188 8.29867 32.4648 8.77933 32.1568 9.162C31.8581 9.54467 31.4568 9.81067 30.9528 9.96ZM27.3968 9.148H28.9648C29.3568 9.148 29.6554 9.064 29.8608 8.896C30.0754 8.71867 30.1828 8.462 30.1828 8.126C30.1828 7.79 30.0754 7.53333 29.8608 7.356C29.6554 7.17867 29.3568 7.09 28.9648 7.09H27.3968V9.148ZM29.1608 13.068C29.5621 13.068 29.8701 12.9793 30.0848 12.802C30.3088 12.6153 30.4208 12.3493 30.4208 12.004C30.4208 11.6587 30.3041 11.388 30.0708 11.192C29.8468 10.996 29.5341 10.898 29.1328 10.898H27.3968V13.068H29.1608ZM40.3493 13.264H36.6813L36.0933 15H33.5873L37.1433 5.172H39.9153L43.4713 15H40.9373L40.3493 13.264ZM39.7333 11.416L38.5153 7.818L37.3113 11.416H39.7333ZM48.1095 15.098C47.3909 15.098 46.7469 14.9813 46.1775 14.748C45.6082 14.5147 45.1509 14.1693 44.8055 13.712C44.4695 13.2547 44.2922 12.704 44.2735 12.06H46.8215C46.8589 12.424 46.9849 12.704 47.1995 12.9C47.4142 13.0867 47.6942 13.18 48.0395 13.18C48.3942 13.18 48.6742 13.1007 48.8795 12.942C49.0849 12.774 49.1875 12.5453 49.1875 12.256C49.1875 12.0133 49.1035 11.8127 48.9355 11.654C48.7769 11.4953 48.5762 11.3647 48.3335 11.262C48.1002 11.1593 47.7642 11.0427 47.3255 10.912C46.6909 10.716 46.1729 10.52 45.7715 10.324C45.3702 10.128 45.0249 9.83867 44.7355 9.456C44.4462 9.07333 44.3015 8.574 44.3015 7.958C44.3015 7.04333 44.6329 6.32933 45.2955 5.816C45.9582 5.29333 46.8215 5.032 47.8855 5.032C48.9682 5.032 49.8409 5.29333 50.5035 5.816C51.1662 6.32933 51.5209 7.048 51.5675 7.972H48.9775C48.9589 7.65467 48.8422 7.40733 48.6275 7.23C48.4129 7.04333 48.1375 6.95 47.8015 6.95C47.5122 6.95 47.2789 7.02933 47.1015 7.188C46.9242 7.33733 46.8355 7.55667 46.8355 7.846C46.8355 8.16333 46.9849 8.41067 47.2835 8.588C47.5822 8.76533 48.0489 8.95667 48.6835 9.162C49.3182 9.37667 49.8315 9.582 50.2235 9.778C50.6249 9.974 50.9702 10.2587 51.2595 10.632C51.5489 11.0053 51.6935 11.486 51.6935 12.074C51.6935 12.634 51.5489 13.1427 51.2595 13.6C50.9795 14.0573 50.5689 14.4213 50.0275 14.692C49.4862 14.9627 48.8469 15.098 48.1095 15.098ZM55.5608 7.09V9.078H58.7668V10.926H55.5608V13.082H59.1868V15H53.1668V5.172H59.1868V7.09H55.5608Z" fill="#F2994A"></path>
        </svg>

    
        <h1 class="sr-only"> Log in to your Tailwind UI account </h1>
        
        
        <form method="POST" action="{{ route('login') }}" class="w-full max-w-sm">
            @csrf
            <div class="mb-2">
                <label for="email" class="block text-sm font-semibold leading-6 text-gray-900">{{ __('Email Address') }}</label>
                <input 
                    type="email" 
                    id="email" 
                    name="email" 
                    class="mt-2 appearance-none text-slate-900 bg-white rounded-md block w-full px-3 h-10 shadow-sm sm:text-sm focus:outline-none placeholder:text-slate-400 focus:ring-2 focus:ring-sky-500 ring-1 ring-slate-200 @error('email') focus:ring-red-500 @enderror" 
                    value="" 
                    autocomplete="email" 
                    autofocus>
                @error('email')
                    <span class="text-[12px] text-slate-200">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-2">
                <label for="password" class="block text-sm font-semibold leading-6 text-gray-900">{{ __('Password') }}</label>
                <input 
                    type="password" 
                    id="password" 
                    class="mt-2 appearance-none text-slate-900 bg-white rounded-md block w-full px-3 h-10 shadow-sm sm:text-sm focus:outline-none placeholder:text-slate-400 focus:ring-2 focus:ring-sky-500 ring-1 ring-slate-200 @error('password') focus:ring-red-500 @enderror" 
                    name="password" 
                    required 
                    autocomplete="current-password"
                    autofocus>
                @error('password')
                    <span class="text-[12px] text-slate-200">{{ $message }}</span>
                @enderror
            </div>
    
            <div class="mb-6">
                <div class="relative flex items-start">
                    <div class="flex items-center h-5">
                        <input id="remember"
                            name="remember" 
                            type="checkbox" 
                            {{ old('remember') ? 'checked' : '' }}
                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                    </div>
                    <div class="ml-3 text-sm">
                        <label for="remember" class="font-medium text-gray-700">{{ __('Remember Me') }}</label>
                    </div>
                </div>
            </div>
    
            <button type="submit" class="inline-flex justify-center rounded-lg text-sm font-semibold py-2.5 px-4 bg-slate-900 text-white hover:bg-slate-700 w-full">
                <span>{{ __('Login') }}</span>
            </button>
    
            <p class="mt-8 text-center">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="text-sm hover:underline">{{ __('Forgot Your Password?') }}</a>
                @endif
            </p>
        </form>
    
    
    </div>
</body>
</html>