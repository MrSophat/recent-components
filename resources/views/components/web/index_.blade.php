@extends('web')
@section('internalStyle')
    <link rel="stylesheet" href="{{ asset('css/carousel.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css">
@endsection

{{-- Content --}}
@section('content')
    <div class="p-[5px]">
        <div class="p-2 relative">
            
            <section class="grid grid-cols-1 lg:grid-cols-2 overflow-hidden h-96 border rounded-md">
                <div class="col-span-1">
                    
                </div>
                <div class="col-span-1 w-50 grid grid-cols-3 gap-4 -skew-x-[20deg] skew-y-[20deg]">
                    <div class="col-span-1 first:col-span-2 last:col-span-2  hover:drop-shadow-xl rounded-md overflow-hidden transition-all duration-300 hover:-translate-y-2 hover:-translate-x-2">
                        <img class="w-full h-32 object-cover" src="https://images.unsplash.com/photo-1659940316181-d34bf23ae835?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80" alt="">
                    </div>
                    <div class="col-span-1 first:col-span-2 last:col-span-2  hover:drop-shadow-xl rounded-md overflow-hidden transition-all duration-300 hover:-translate-y-2 hover:-translate-x-2">
                        <img class="w-full h-32 object-cover" src="https://images.unsplash.com/photo-1659940316181-d34bf23ae835?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80" alt="">
                    </div>
                    <div class="col-span-1 first:col-span-2 last:col-span-2  hover:drop-shadow-xl rounded-md overflow-hidden transition-all duration-300 hover:-translate-y-2 hover:-translate-x-2">
                        <img class="w-full h-32 object-cover" src="https://images.unsplash.com/photo-1659940316181-d34bf23ae835?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80" alt="">
                    </div>
                    <div class="col-span-1 first:col-span-2 last:col-span-2  hover:drop-shadow-xl rounded-md overflow-hidden transition-all duration-300 hover:-translate-y-2 hover:-translate-x-2">
                        <img class="w-full h-32 object-cover" src="https://images.unsplash.com/photo-1659940316181-d34bf23ae835?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80" alt="">
                    </div>
                    <div class="col-span-1 first:col-span-2 last:col-span-2  hover:drop-shadow-xl rounded-md overflow-hidden transition-all duration-300 hover:-translate-y-2 hover:-translate-x-2">
                        <img class="w-full h-32 object-cover" src="https://images.unsplash.com/photo-1659940316181-d34bf23ae835?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80" alt="">
                    </div>
                    <div class="col-span-1 first:col-span-2 last:col-span-2  hover:drop-shadow-xl rounded-md overflow-hidden transition-all duration-300 hover:-translate-y-2 hover:-translate-x-2">
                        <img class="w-full h-32 object-cover" src="https://images.unsplash.com/photo-1659940316181-d34bf23ae835?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80" alt="">
                    </div>
                    <div class="col-span-1 first:col-span-2 last:col-span-2  hover:drop-shadow-xl rounded-md overflow-hidden transition-all duration-300 hover:-translate-y-2 hover:-translate-x-2">
                        <img class="w-full h-32 object-cover" src="https://images.unsplash.com/photo-1659940316181-d34bf23ae835?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80" alt="">
                    </div>
                </div>
            </section>

            <div class="flex flex-col gap-5">
                
                <section class="grid grid-cols-1 py-10">
                    <h1 class="text-center font-medium text-transparent text-4xl bg-clip-text bg-gradient-to-r from-[#cd762a] to-[#F2994A]">Search Your Dream Components</h1>
                </section>

                <section class="relative">
                    <div class="featured-carousel owl-carousel">
                        @foreach ($productType as $type)
                            <div class="item"> 
                                <button class="w-full p-2 text-base bg-[color:#2D9CDB] rounded-md text-white">
                                    {{ $type->name ?? '' }}
                                </button>
                            </div>
                        @endforeach
                    </div>
                </section>
    

            </div>

            {{-- <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-5 gap-2">
                
                <div class="h-72 col-span-1 rounded-md last:col-span-2 first:col-span-3 p-5 bg-slate-800">
                    sss
                </div>
            </div> --}}


        </div>
    </div>
@endsection


@section('internalScript')
<script src="{{ asset('js/carousel.js') }}"></script>
<script>
    $('.owl-carousel').owlCarousel(
        {
            stagePadding: 50,
            loop: false,
            margin: 10,
            nav: true,
            navText: [
                '<i class="fa fa-angle-left" aria-hidden="true"></i>',
                '<i class="fa fa-angle-right" aria-hidden="true"></i>'
            ],
            navContainer: '.custom-nav',
            responsive:{
                0:{
                    items: 2
                },
                600: {
                    items:5
                },
                900: {
                    items:6
                },
                1000: {
                    items:8
                }
            }
        }
    );

</script>
@endsection