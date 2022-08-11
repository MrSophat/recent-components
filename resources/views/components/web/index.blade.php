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
            
            <div class="featured-carousel owl-carousel">
                <div class="item">
                   <img src="https://images.unsplash.com/photo-1659940316181-d34bf23ae835?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80" alt="">
                </div>
                <div class="item">
                   <img src="https://images.unsplash.com/photo-1659923183026-0721b7b6b053?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=735&q=80" alt="">
                </div>
                <div class="item">
                   <img src="https://images.unsplash.com/photo-1659830686710-9c6df95f8cf3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2076&q=80" alt="">
                </div>
                <div class="item">
                   <img src="https://images.unsplash.com/photo-1659892972074-b7707000415d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1204&q=80" alt="">
                </div>
            </div>

            <div class="grid grid-cols-4 gap-5 ">
                <div class="col-span-1">

                    <div class="shadow-lg rounded-2xl relative bg-red-500 pt-14">

                        <div class="absolute top-6 left-5 z-10">
                            <img class="object-cover w-16 h-16 rounded-full outline outline-white" src="https://cdn.dribbble.com/userupload/2776604/file/original-6683b4718849db80771553e606fc52d8.png?compress=1&resize=1024x768" alt="">
                        </div>

                        <div class="bg-slate-400 rounded-2xl p-5 min-h-[12rem] relative">
                            <h1 class="mt-5 font-semibold leading-7 text-lg">BitCoins</h1>
                            <p class="leading-7 line-clamp-2 text-slate-600">The Bitcoin price is $23,944.60, a change of 3.68% over the past 24 hours as of 11:00 p.m. The recent price action in Bitcoin left the token's market</p>
                        </div>

                        {{-- <div class="bg-red-500 translate-y-14 rounded-xl">
                            <div class="px-5">
                                <img class="object-cover w-20 h-20 rounded-full -translate-y-10 outline outline-white" src="https://cdn.dribbble.com/userupload/2776604/file/original-6683b4718849db80771553e606fc52d8.png?compress=1&resize=1024x768" alt="">
                                <h1>Title Product</h1>
                            </div>
                        </div> --}}



                    </div>

                </div>
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
            loop: true,
            margin: 10,
            nav: true,
            navText: [
                '<i class="fa fa-angle-left" aria-hidden="true"></i>',
                '<i class="fa fa-angle-right" aria-hidden="true"></i>'
            ],
            navContainer: '.custom-nav',
            responsive:{
                0:{
                    items: 1
                }
            }
        }
    );

</script>
@endsection