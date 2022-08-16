@extends('admin')
@section('content')

<div class="p-5">
    <h1 class="text-3xl font-medium dark:text-slate-200">Modal Dialog</h1>
    <p class="mt-2 animateSlideInUp">Modals offer an easy way to build custom, accessible modal componnet </p>
    <section 
        class="relative mt-5 mb-12 flex flex-col 
            items-center justify-center overflow-hidden 
            rounded-xl bg-gradient-to-r
            from-orange-200 to-red-200
            dark:from-orange-500 dark:to-red-500
        ">
        
        <iframe 
            src="{{ route('modal.demo') }}" 
            class="w-full min-h-[20rem] h-full" 
            frameborder="0">
        </iframe>
    </section>

    <h1 class="text-3xl font-medium dark:text-slate-200">Installation</h1>
    <p class="mt-2 animateSlideInUp">To get started, install NCModal via npm:</p>

    


</div>

@endsection
