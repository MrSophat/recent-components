@extends('web')
@section('internalStyle')
    <link rel="stylesheet" href="{{ asset('css/carousel.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css">
@endsection

{{-- Content --}}
@section('content')
    <div class="p-[5px]">
        <div class="p-2 relative">
            
            <section>
                ss
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
<script src="{{ asset('js/ncModal.js') }}"></script>
<script src="{{ asset('js/carousel.js') }}"></script>
<script>
    function clickkk() {
        NCModal({
            id          : "ncModal",    // This ID is By defualt You can change what ever you want 
            className   : "flex h-full min-h-[95vh] overflow-y-auto max-w-[500px] mx-auto w-full p-5 rounded-md shadow-md transition-all duration-300 bg-red-500/50",
            animateIn   : true,         // Better not change this option
            clickAway   : false,        // Better not change this option
            removeBTN   : "ncModalRemove"
        });
    }

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