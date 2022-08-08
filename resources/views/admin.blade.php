<!DOCTYPE html>
<html lang="en">
<head>

    @include('components.admin.layouts.header')

    @yield('internalStyle')

</head>
<body>

    <div>
        @include('components.admin.layouts.navigation')

        <div class="max-w-[100rem] mx-auto">

            <div class="sidebar">
                <div class="sticky top-5 -ml-0.5 pointer-events-none">
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

        @include('components.admin.layouts.footer')

        @yield('internallStyle')
        
    </div>
</body>
</html>