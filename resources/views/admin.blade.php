<!DOCTYPE html>
<html 
    lang="{{ str_replace('_', '-', app()->getLocale()) }}" 
    x-data="{ darkMode: localStorage.getItem('dark') === 'true'} " 
    x-init="$watch('darkMode', val => localStorage.setItem('dark', val))" 
    :class="{ 'dark': darkMode }">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @include('components.admin.layouts.header')

    @yield('internalStyle')

</head>
<body class="dark:bg-slate-900">

    <div>
        @include('components.admin.layouts.navigation')

        <div class="max-w-[100rem] mx-auto">

            <div class="sidebar">
                <div class="sticky top-5 -ml-0.5">
                    @include('components.admin.layouts.sidebar')
                </div>
            </div>

            <div class="sm:pl-[15.5rem]">
                <div class="p-5">
                    @yield('content')
                </div>
                @include('components.admin.layouts.credit')
            </div>
            
        </div>

        @include('components.web.layouts.footer')

        @yield('internallStyle')
        <script>
            function dropDown(e) {
                let dropdownContent = e.nextElementSibling;
                if (e.classList.contains("active-dropdown")) 
                {
                    dropdownContent.style.maxHeight = 0;
                    e.classList.remove("active-dropdown");
                } 
                else 
                {
                    dropdownContent.style.maxHeight = dropdownContent.scrollHeight + "px";
                    e.classList.add("active-dropdown");
                }
            }

        </script>
        
    </div>
</body>
</html>