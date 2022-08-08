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


            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-5 gap-2">
                <div class="h-72 col-span-1 rounded-md last:col-span-2 first:col-span-3 p-5 bg-slate-800">
                    sss
                </div>
            </div>


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