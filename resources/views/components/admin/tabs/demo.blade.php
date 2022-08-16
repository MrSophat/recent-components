<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabs Demo</title>
    @include('components.admin.layouts.header')

</head>
<body>
    <div class="p-10 text-center flex items-center justify-center min-h-screen">
        <nc-tab>
            <button data-tab="content1" class="py-1.5 px-2 animateSlideInUp bg-red-500 rounded-md text-white shadow-md focus:outline-none">Click ME</button>
            <button data-tab="content2" class="py-1.5 px-2 animateSlideInUp bg-red-500 rounded-md text-white shadow-md focus:outline-none">Click ME</button>
        </nc-tab>

        <nc-content>
            <div id="content1" hidden>Content 1</div>
            <div id="content2" hidden>Content 2</div>
        </nc-content>
    </div>

    @include('components.admin.layouts.footer')


</body>
</html>