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

            <div class="flex flex-col gap-5">
                
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

                <section class="grid grid-cols-2">
                    <h1 class="font-medium text-2xl dark:text-slate-300">Related Products</h1>
                    <div class="ml-auto">
                        <button class="text-base border rounded-md py-1.5 px-2 space-x-2 font-medium flex items-center justify-center">                                    
                            <span class=" dark:text-slate-300">View All</span>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path class="dark:stroke-slate-400" d="M14.4301 5.92993L20.5001 11.9999L14.4301 18.0699" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path class="dark:stroke-slate-400" d="M3.5 12H20.33" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </div>
                </section>
    
                <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                
                    <div class="col-span-1">
                        <div class="shadow-lg rounded-2xl relative group">
                            <div>
                                <img class="object-cover w-full h-44 group-hover:h-48 transition-all rounded-t-2xl" src="https://cdn-images-1.medium.com/max/800/1*3JthPwVK_yFrZ4ACi0LZyw.png" alt="">
                            </div>
                            <div class="absolute top-1/3 translate-y-1 group-hover:translate-y-4 transition-all left-5 z-10">
                                <img 
                                    class="object-cover w-16 h-16 rounded-full outline outline-white dark:outline-slate-800" 
                                    src="{{ asset('img/appstore.png') }}" alt="">
                            </div>
    
                            <div class="absolute bg-slate-50 dark:bg-slate-800 dark:text-slate-300 rounded-md top-1/3 translate-y-6 p-3 transition-all right-5 z-10">
                                <h1 class="text-lg font-medium">Price: $99.98</h1> 
                            </div>
    
                            <div class="bg-slate-50 dark:bg-slate-800 dark:text-slate-300 rounded-2xl p-5 -mt-5 min-h-[12rem] relative">
                                <h1 class="mt-8 font-semibold leading-7 text-lg">Components</h1>
                                <p class="leading-7 line-clamp-2 text-slate-600 dark:text-slate-500">The Bitcoin price is $23,944.60, a change of 3.68% over the past 24 hours as of 11:00 p.m. The recent price action in Bitcoin left the token's market</p>
                                <div class="grid grid-cols-2 space-x-2 py-2">
                                    <div>
                                       <svg class="inline-block" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M17.2902 4.13998L17.2202 7.92998C17.2102 8.44998 17.5403 9.13998 17.9603 9.44998L20.4403 11.33C22.0303 12.53 21.7703 14 19.8703 14.6L16.6403 15.61C16.1003 15.78 15.5303 16.37 15.3903 16.92L14.6203 19.86C14.0103 22.18 12.4902 22.41 11.2302 20.37L9.47024 17.52C9.15024 17 8.39024 16.61 7.79024 16.64L4.45028 16.81C2.06028 16.93 1.38027 15.55 2.94027 13.73L4.92025 11.43C5.29025 11 5.46024 10.2 5.29024 9.65999L4.28029 6.42998C3.69029 4.52998 4.75028 3.47999 6.64028 4.09999L9.59029 5.06999C10.0903 5.22999 10.8403 5.11998 11.2603 4.80998L14.3403 2.58998C16.0003 1.38998 17.3302 2.08998 17.2902 4.13998Z" fill="#F2994A"/>
                                            <path opacity="0.4" d="M21.4403 20.4699L18.4103 17.4399C18.1203 17.1499 17.6403 17.1499 17.3503 17.4399C17.0603 17.7299 17.0603 18.2099 17.3503 18.4999L20.3803 21.5299C20.5303 21.6799 20.7203 21.7499 20.9103 21.7499C21.1003 21.7499 21.2903 21.6799 21.4403 21.5299C21.7303 21.2399 21.7303 20.7599 21.4403 20.4699Z" fill="#F2994A"/>
                                        </svg>
                                       <svg class="inline-block" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M17.2902 4.13998L17.2202 7.92998C17.2102 8.44998 17.5403 9.13998 17.9603 9.44998L20.4403 11.33C22.0303 12.53 21.7703 14 19.8703 14.6L16.6403 15.61C16.1003 15.78 15.5303 16.37 15.3903 16.92L14.6203 19.86C14.0103 22.18 12.4902 22.41 11.2302 20.37L9.47024 17.52C9.15024 17 8.39024 16.61 7.79024 16.64L4.45028 16.81C2.06028 16.93 1.38027 15.55 2.94027 13.73L4.92025 11.43C5.29025 11 5.46024 10.2 5.29024 9.65999L4.28029 6.42998C3.69029 4.52998 4.75028 3.47999 6.64028 4.09999L9.59029 5.06999C10.0903 5.22999 10.8403 5.11998 11.2603 4.80998L14.3403 2.58998C16.0003 1.38998 17.3302 2.08998 17.2902 4.13998Z" fill="#F2994A"/>
                                            <path opacity="0.4" d="M21.4403 20.4699L18.4103 17.4399C18.1203 17.1499 17.6403 17.1499 17.3503 17.4399C17.0603 17.7299 17.0603 18.2099 17.3503 18.4999L20.3803 21.5299C20.5303 21.6799 20.7203 21.7499 20.9103 21.7499C21.1003 21.7499 21.2903 21.6799 21.4403 21.5299C21.7303 21.2399 21.7303 20.7599 21.4403 20.4699Z" fill="#F2994A"/>
                                        </svg>
                                       <svg class="inline-block" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M17.2902 4.13998L17.2202 7.92998C17.2102 8.44998 17.5403 9.13998 17.9603 9.44998L20.4403 11.33C22.0303 12.53 21.7703 14 19.8703 14.6L16.6403 15.61C16.1003 15.78 15.5303 16.37 15.3903 16.92L14.6203 19.86C14.0103 22.18 12.4902 22.41 11.2302 20.37L9.47024 17.52C9.15024 17 8.39024 16.61 7.79024 16.64L4.45028 16.81C2.06028 16.93 1.38027 15.55 2.94027 13.73L4.92025 11.43C5.29025 11 5.46024 10.2 5.29024 9.65999L4.28029 6.42998C3.69029 4.52998 4.75028 3.47999 6.64028 4.09999L9.59029 5.06999C10.0903 5.22999 10.8403 5.11998 11.2603 4.80998L14.3403 2.58998C16.0003 1.38998 17.3302 2.08998 17.2902 4.13998Z" fill="#F2994A"/>
                                            <path opacity="0.4" d="M21.4403 20.4699L18.4103 17.4399C18.1203 17.1499 17.6403 17.1499 17.3503 17.4399C17.0603 17.7299 17.0603 18.2099 17.3503 18.4999L20.3803 21.5299C20.5303 21.6799 20.7203 21.7499 20.9103 21.7499C21.1003 21.7499 21.2903 21.6799 21.4403 21.5299C21.7303 21.2399 21.7303 20.7599 21.4403 20.4699Z" fill="#F2994A"/>
                                        </svg>
                                       <svg class="inline-block" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M17.2902 4.13998L17.2202 7.92998C17.2102 8.44998 17.5403 9.13998 17.9603 9.44998L20.4403 11.33C22.0303 12.53 21.7703 14 19.8703 14.6L16.6403 15.61C16.1003 15.78 15.5303 16.37 15.3903 16.92L14.6203 19.86C14.0103 22.18 12.4902 22.41 11.2302 20.37L9.47024 17.52C9.15024 17 8.39024 16.61 7.79024 16.64L4.45028 16.81C2.06028 16.93 1.38027 15.55 2.94027 13.73L4.92025 11.43C5.29025 11 5.46024 10.2 5.29024 9.65999L4.28029 6.42998C3.69029 4.52998 4.75028 3.47999 6.64028 4.09999L9.59029 5.06999C10.0903 5.22999 10.8403 5.11998 11.2603 4.80998L14.3403 2.58998C16.0003 1.38998 17.3302 2.08998 17.2902 4.13998Z" fill="#F2994A"/>
                                            <path opacity="0.4" d="M21.4403 20.4699L18.4103 17.4399C18.1203 17.1499 17.6403 17.1499 17.3503 17.4399C17.0603 17.7299 17.0603 18.2099 17.3503 18.4999L20.3803 21.5299C20.5303 21.6799 20.7203 21.7499 20.9103 21.7499C21.1003 21.7499 21.2903 21.6799 21.4403 21.5299C21.7303 21.2399 21.7303 20.7599 21.4403 20.4699Z" fill="#F2994A"/>
                                        </svg>
                                       <svg class="inline-block" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M17.2902 4.13998L17.2202 7.92998C17.2102 8.44998 17.5403 9.13998 17.9603 9.44998L20.4403 11.33C22.0303 12.53 21.7703 14 19.8703 14.6L16.6403 15.61C16.1003 15.78 15.5303 16.37 15.3903 16.92L14.6203 19.86C14.0103 22.18 12.4902 22.41 11.2302 20.37L9.47024 17.52C9.15024 17 8.39024 16.61 7.79024 16.64L4.45028 16.81C2.06028 16.93 1.38027 15.55 2.94027 13.73L4.92025 11.43C5.29025 11 5.46024 10.2 5.29024 9.65999L4.28029 6.42998C3.69029 4.52998 4.75028 3.47999 6.64028 4.09999L9.59029 5.06999C10.0903 5.22999 10.8403 5.11998 11.2603 4.80998L14.3403 2.58998C16.0003 1.38998 17.3302 2.08998 17.2902 4.13998Z" fill="#F2994A"/>
                                            <path opacity="0.4" d="M21.4403 20.4699L18.4103 17.4399C18.1203 17.1499 17.6403 17.1499 17.3503 17.4399C17.0603 17.7299 17.0603 18.2099 17.3503 18.4999L20.3803 21.5299C20.5303 21.6799 20.7203 21.7499 20.9103 21.7499C21.1003 21.7499 21.2903 21.6799 21.4403 21.5299C21.7303 21.2399 21.7303 20.7599 21.4403 20.4699Z" fill="#F2994A"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <span class="w-full text-[14px] text-slate-600">
                                            2K (Reviewers)
                                        </span> 
                                    </div>
                                </div>
                                <div class="grid grid-cols-2 space-x-1 border-t dark:border-slate-600 pt-2 mt-2 justify-center items-center">
                                    <button class="transition-all hover:bg-slate-200 dark:hover:bg-slate-700 py-1.5 px-1 rounded-md h-full space-x-2 flex justify-center items-center">
                                        <svg width="27" height="27" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M21.01 11.22V15.71C21.01 20.2 19.22 22 14.72 22H9.33002C8.75002 22 8.21998 21.97 7.72998 21.9" stroke="#F2994A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M3.03998 15.52V11.22" stroke="#F2994A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M12.03 12C13.86 12 15.21 10.5101 15.03 8.68005L14.36 2H9.69001L9.02003 8.68005C8.84003 10.5101 10.2 12 12.03 12Z" stroke="#F2994A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M18.33 12C20.35 12 21.83 10.36 21.63 8.34998L21.35 5.59998C20.99 2.99998 19.99 2 17.37 2H14.32L15.02 9.01001C15.2 10.66 16.68 12 18.33 12Z" stroke="#F2994A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M5.66998 12C7.31998 12 8.80996 10.66 8.96996 9.01001L9.19 6.80005L9.66998 2H6.61999C3.99999 2 3.00001 2.99998 2.64001 5.59998L2.35998 8.34998C2.15998 10.36 3.64998 12 5.66998 12Z" stroke="#F2994A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M9 19C9 19.75 8.78998 20.4601 8.41998 21.0601C8.22998 21.3801 7.99998 21.67 7.72998 21.9C7.69998 21.94 7.67 21.97 7.63 22C6.93 22.63 6.01 23 5 23C3.78 23 2.68997 22.45 1.96997 21.59C1.94997 21.56 1.92002 21.54 1.90002 21.51C1.78002 21.37 1.67002 21.2201 1.58002 21.0601C1.21002 20.4601 1 19.75 1 19C1 17.74 1.58 16.61 2.5 15.88C2.67 15.74 2.84998 15.62 3.03998 15.52C3.61998 15.19 4.29 15 5 15C6 15 6.89998 15.36 7.59998 15.97C7.71998 16.06 7.82999 16.17 7.92999 16.28C8.58999 17 9 17.95 9 19Z" stroke="#F2994A" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M6.48999 18.98H3.51001" stroke="#F2994A" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M5 17.52V20.51" stroke="#F2994A" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        <span class="text-[16px] uppercase">Add to Cart</span>
                                    </button>
                                    <button class="transition-all hover:bg-slate-200 dark:hover:bg-slate-700 py-1.5 px-1 rounded-md h-full flex space-x-2 justify-center items-center">
                                        <svg width="27" height="27" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#F2994A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M8.5 12H14.5" stroke="#F2994A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M12.5 15L15.5 12L12.5 9" stroke="#F2994A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        <span class="text-[16px] uppercase">View Detail</span>
                                    </button>
                                </div>
                            </div>
    
    
    
                        </div>
    
                    </div>
    
                </section>
    
                <section class="grid grid-cols-2">
                    <h1 class="font-medium text-2xl dark:text-slate-300">Related Products</h1>
                    <div class="ml-auto">
                        <button class="text-base border rounded-md py-1.5 px-2 space-x-2 font-medium flex items-center justify-center">                                    
                            <span class=" dark:text-slate-300">View All</span>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path class="dark:stroke-slate-400" d="M14.4301 5.92993L20.5001 11.9999L14.4301 18.0699" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path class="dark:stroke-slate-400" d="M3.5 12H20.33" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </div>
                </section>

                <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                
                    <div class="col-span-1">
                        <div class="shadow-lg rounded-2xl relative group">
                            <div>
                                <img class="object-cover w-full h-44 group-hover:h-48 transition-all rounded-t-2xl" src="https://cdn-images-1.medium.com/max/800/1*3JthPwVK_yFrZ4ACi0LZyw.png" alt="">
                            </div>
                            <div class="absolute top-1/3 translate-y-1 group-hover:translate-y-4 transition-all left-5 z-10">
                                <img 
                                    class="object-cover w-16 h-16 rounded-full outline outline-white dark:outline-slate-800" 
                                    src="{{ asset('img/appstore.png') }}" alt="">
                            </div>
    
                            <div class="absolute bg-slate-50 dark:bg-slate-800 dark:text-slate-300 rounded-md top-1/3 translate-y-6 p-3 transition-all right-5 z-10">
                                <h1 class="text-lg font-medium">Price: $99.98</h1> 
                            </div>
    
                            <div class="bg-slate-50 dark:bg-slate-800 dark:text-slate-300 rounded-2xl p-5 -mt-5 min-h-[12rem] relative">
                                <h1 class="mt-8 font-semibold leading-7 text-lg">Components</h1>
                                <p class="leading-7 line-clamp-2 text-slate-600 dark:text-slate-500">The Bitcoin price is $23,944.60, a change of 3.68% over the past 24 hours as of 11:00 p.m. The recent price action in Bitcoin left the token's market</p>
                                <div class="grid grid-cols-2 space-x-2 py-2">
                                    <div>
                                       <svg class="inline-block" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M17.2902 4.13998L17.2202 7.92998C17.2102 8.44998 17.5403 9.13998 17.9603 9.44998L20.4403 11.33C22.0303 12.53 21.7703 14 19.8703 14.6L16.6403 15.61C16.1003 15.78 15.5303 16.37 15.3903 16.92L14.6203 19.86C14.0103 22.18 12.4902 22.41 11.2302 20.37L9.47024 17.52C9.15024 17 8.39024 16.61 7.79024 16.64L4.45028 16.81C2.06028 16.93 1.38027 15.55 2.94027 13.73L4.92025 11.43C5.29025 11 5.46024 10.2 5.29024 9.65999L4.28029 6.42998C3.69029 4.52998 4.75028 3.47999 6.64028 4.09999L9.59029 5.06999C10.0903 5.22999 10.8403 5.11998 11.2603 4.80998L14.3403 2.58998C16.0003 1.38998 17.3302 2.08998 17.2902 4.13998Z" fill="#F2994A"/>
                                            <path opacity="0.4" d="M21.4403 20.4699L18.4103 17.4399C18.1203 17.1499 17.6403 17.1499 17.3503 17.4399C17.0603 17.7299 17.0603 18.2099 17.3503 18.4999L20.3803 21.5299C20.5303 21.6799 20.7203 21.7499 20.9103 21.7499C21.1003 21.7499 21.2903 21.6799 21.4403 21.5299C21.7303 21.2399 21.7303 20.7599 21.4403 20.4699Z" fill="#F2994A"/>
                                        </svg>
                                       <svg class="inline-block" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M17.2902 4.13998L17.2202 7.92998C17.2102 8.44998 17.5403 9.13998 17.9603 9.44998L20.4403 11.33C22.0303 12.53 21.7703 14 19.8703 14.6L16.6403 15.61C16.1003 15.78 15.5303 16.37 15.3903 16.92L14.6203 19.86C14.0103 22.18 12.4902 22.41 11.2302 20.37L9.47024 17.52C9.15024 17 8.39024 16.61 7.79024 16.64L4.45028 16.81C2.06028 16.93 1.38027 15.55 2.94027 13.73L4.92025 11.43C5.29025 11 5.46024 10.2 5.29024 9.65999L4.28029 6.42998C3.69029 4.52998 4.75028 3.47999 6.64028 4.09999L9.59029 5.06999C10.0903 5.22999 10.8403 5.11998 11.2603 4.80998L14.3403 2.58998C16.0003 1.38998 17.3302 2.08998 17.2902 4.13998Z" fill="#F2994A"/>
                                            <path opacity="0.4" d="M21.4403 20.4699L18.4103 17.4399C18.1203 17.1499 17.6403 17.1499 17.3503 17.4399C17.0603 17.7299 17.0603 18.2099 17.3503 18.4999L20.3803 21.5299C20.5303 21.6799 20.7203 21.7499 20.9103 21.7499C21.1003 21.7499 21.2903 21.6799 21.4403 21.5299C21.7303 21.2399 21.7303 20.7599 21.4403 20.4699Z" fill="#F2994A"/>
                                        </svg>
                                       <svg class="inline-block" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M17.2902 4.13998L17.2202 7.92998C17.2102 8.44998 17.5403 9.13998 17.9603 9.44998L20.4403 11.33C22.0303 12.53 21.7703 14 19.8703 14.6L16.6403 15.61C16.1003 15.78 15.5303 16.37 15.3903 16.92L14.6203 19.86C14.0103 22.18 12.4902 22.41 11.2302 20.37L9.47024 17.52C9.15024 17 8.39024 16.61 7.79024 16.64L4.45028 16.81C2.06028 16.93 1.38027 15.55 2.94027 13.73L4.92025 11.43C5.29025 11 5.46024 10.2 5.29024 9.65999L4.28029 6.42998C3.69029 4.52998 4.75028 3.47999 6.64028 4.09999L9.59029 5.06999C10.0903 5.22999 10.8403 5.11998 11.2603 4.80998L14.3403 2.58998C16.0003 1.38998 17.3302 2.08998 17.2902 4.13998Z" fill="#F2994A"/>
                                            <path opacity="0.4" d="M21.4403 20.4699L18.4103 17.4399C18.1203 17.1499 17.6403 17.1499 17.3503 17.4399C17.0603 17.7299 17.0603 18.2099 17.3503 18.4999L20.3803 21.5299C20.5303 21.6799 20.7203 21.7499 20.9103 21.7499C21.1003 21.7499 21.2903 21.6799 21.4403 21.5299C21.7303 21.2399 21.7303 20.7599 21.4403 20.4699Z" fill="#F2994A"/>
                                        </svg>
                                       <svg class="inline-block" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M17.2902 4.13998L17.2202 7.92998C17.2102 8.44998 17.5403 9.13998 17.9603 9.44998L20.4403 11.33C22.0303 12.53 21.7703 14 19.8703 14.6L16.6403 15.61C16.1003 15.78 15.5303 16.37 15.3903 16.92L14.6203 19.86C14.0103 22.18 12.4902 22.41 11.2302 20.37L9.47024 17.52C9.15024 17 8.39024 16.61 7.79024 16.64L4.45028 16.81C2.06028 16.93 1.38027 15.55 2.94027 13.73L4.92025 11.43C5.29025 11 5.46024 10.2 5.29024 9.65999L4.28029 6.42998C3.69029 4.52998 4.75028 3.47999 6.64028 4.09999L9.59029 5.06999C10.0903 5.22999 10.8403 5.11998 11.2603 4.80998L14.3403 2.58998C16.0003 1.38998 17.3302 2.08998 17.2902 4.13998Z" fill="#F2994A"/>
                                            <path opacity="0.4" d="M21.4403 20.4699L18.4103 17.4399C18.1203 17.1499 17.6403 17.1499 17.3503 17.4399C17.0603 17.7299 17.0603 18.2099 17.3503 18.4999L20.3803 21.5299C20.5303 21.6799 20.7203 21.7499 20.9103 21.7499C21.1003 21.7499 21.2903 21.6799 21.4403 21.5299C21.7303 21.2399 21.7303 20.7599 21.4403 20.4699Z" fill="#F2994A"/>
                                        </svg>
                                       <svg class="inline-block" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M17.2902 4.13998L17.2202 7.92998C17.2102 8.44998 17.5403 9.13998 17.9603 9.44998L20.4403 11.33C22.0303 12.53 21.7703 14 19.8703 14.6L16.6403 15.61C16.1003 15.78 15.5303 16.37 15.3903 16.92L14.6203 19.86C14.0103 22.18 12.4902 22.41 11.2302 20.37L9.47024 17.52C9.15024 17 8.39024 16.61 7.79024 16.64L4.45028 16.81C2.06028 16.93 1.38027 15.55 2.94027 13.73L4.92025 11.43C5.29025 11 5.46024 10.2 5.29024 9.65999L4.28029 6.42998C3.69029 4.52998 4.75028 3.47999 6.64028 4.09999L9.59029 5.06999C10.0903 5.22999 10.8403 5.11998 11.2603 4.80998L14.3403 2.58998C16.0003 1.38998 17.3302 2.08998 17.2902 4.13998Z" fill="#F2994A"/>
                                            <path opacity="0.4" d="M21.4403 20.4699L18.4103 17.4399C18.1203 17.1499 17.6403 17.1499 17.3503 17.4399C17.0603 17.7299 17.0603 18.2099 17.3503 18.4999L20.3803 21.5299C20.5303 21.6799 20.7203 21.7499 20.9103 21.7499C21.1003 21.7499 21.2903 21.6799 21.4403 21.5299C21.7303 21.2399 21.7303 20.7599 21.4403 20.4699Z" fill="#F2994A"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <span class="w-full text-[14px] text-slate-600">
                                            2K (Reviewers)
                                        </span> 
                                    </div>
                                </div>
                                <div class="grid grid-cols-2 space-x-1 border-t dark:border-slate-600 pt-2 mt-2 justify-center items-center">
                                    <button class="transition-all hover:bg-slate-200 dark:hover:bg-slate-700 py-1.5 px-1 rounded-md h-full space-x-2 flex justify-center items-center">
                                        <svg width="27" height="27" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M21.01 11.22V15.71C21.01 20.2 19.22 22 14.72 22H9.33002C8.75002 22 8.21998 21.97 7.72998 21.9" stroke="#F2994A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M3.03998 15.52V11.22" stroke="#F2994A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M12.03 12C13.86 12 15.21 10.5101 15.03 8.68005L14.36 2H9.69001L9.02003 8.68005C8.84003 10.5101 10.2 12 12.03 12Z" stroke="#F2994A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M18.33 12C20.35 12 21.83 10.36 21.63 8.34998L21.35 5.59998C20.99 2.99998 19.99 2 17.37 2H14.32L15.02 9.01001C15.2 10.66 16.68 12 18.33 12Z" stroke="#F2994A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M5.66998 12C7.31998 12 8.80996 10.66 8.96996 9.01001L9.19 6.80005L9.66998 2H6.61999C3.99999 2 3.00001 2.99998 2.64001 5.59998L2.35998 8.34998C2.15998 10.36 3.64998 12 5.66998 12Z" stroke="#F2994A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M9 19C9 19.75 8.78998 20.4601 8.41998 21.0601C8.22998 21.3801 7.99998 21.67 7.72998 21.9C7.69998 21.94 7.67 21.97 7.63 22C6.93 22.63 6.01 23 5 23C3.78 23 2.68997 22.45 1.96997 21.59C1.94997 21.56 1.92002 21.54 1.90002 21.51C1.78002 21.37 1.67002 21.2201 1.58002 21.0601C1.21002 20.4601 1 19.75 1 19C1 17.74 1.58 16.61 2.5 15.88C2.67 15.74 2.84998 15.62 3.03998 15.52C3.61998 15.19 4.29 15 5 15C6 15 6.89998 15.36 7.59998 15.97C7.71998 16.06 7.82999 16.17 7.92999 16.28C8.58999 17 9 17.95 9 19Z" stroke="#F2994A" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M6.48999 18.98H3.51001" stroke="#F2994A" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M5 17.52V20.51" stroke="#F2994A" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        <span class="text-[16px] uppercase">Add to Cart</span>
                                    </button>
    
    
                                    <button class="transition-all hover:bg-slate-200 dark:hover:bg-slate-700 py-1.5 px-1 rounded-md h-full flex space-x-2 justify-center items-center">
                                        <svg width="27" height="27" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#F2994A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M8.5 12H14.5" stroke="#F2994A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M12.5 15L15.5 12L12.5 9" stroke="#F2994A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        <span class="text-[16px] uppercase">View Detail</span>
                                    </button>
                                </div>
                            </div>
    
    
    
                        </div>
    
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