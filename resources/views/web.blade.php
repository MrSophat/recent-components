<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" 
    x-data="{ darkMode: localStorage.getItem('dark') === 'true'} " 
    x-init="$watch('darkMode', val => localStorage.setItem('dark', val))" 
    :class="{ 'dark': darkMode }">
<head>

    @include('components.web.layouts.header')
    <title>{{ $title ?? '' }}</title>
    @yield('internalStyle')

</head>
<body class="bg-white dark:bg-slate-900">
    <div>
        @include('components.web.layouts.navigation')

        <div class="max-w-[100rem] mx-auto">
            @yield('content')
        </div>

        @include('components.web.layouts.footer')
        @yield('internalScript')
        
    </div>
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
</body>
</html>