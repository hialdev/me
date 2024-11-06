<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @include('partials.seo', ['seo' => $seo])

    <link rel="shortcut icon" href="{{Voyager::image(setting('site.logo'))}}" type="image/x-icon">
    <!-- Owl Carousel 2 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    
    <link rel="stylesheet" href="/src/css/output.css">
    @yield('css')

</head>
<body>
    <div id="app" class="flex flex-col sm:flex-row h-screen bg-violet-50 dark:bg-slate-900 dark:text-purple-100">
        <header>
            @yield('header')
        </header>
        <div class="content-wrap w-full rounded-t-3xl md:rounded-3xl overflow-hidden sm:m-3 sm:ms-0">
            <main>
                <div class="">
                    <div id="noScrollbar" class="overflow-auto h-screen">
                     
                        @yield('content')

                        <footer>
                            <div class="flex flex-col sm:flex-row sm:items-center justify-between min-h-content w-full p-10 mb-10">
                                <div class="mb-5">
                                    <div class="text-slate-400 text-xl sm:text-3xl mb-4">Ooopsss!</div>
                                    <h5 class="text-xl sm:text-3xl mb-4">You are in End of Section <br>
                                        But <span class="text-purple-600 font-medium">Not End of My Journey!</span>
                                    </h5>
                                    <div class="text-sm text-slate-400">&copy; This is all my mine, Dont do illegal activities, im watch you and will <span class="text-rose-700 font-bold">crying..</span></div>
                                </div>
                                <div class="text-left sm:text-right flex-1 sm:flex-auto flex flex-col items-start sm:items-end gap-3 pb-10 mb-10">
                                    <h6 class="font-medium text-base sm:text-xl text-slate-400">Find Me Also in</h6>
                                    <a href="#" class="block flex items-center gap-2 underline decoration-2 decoration-purple-600 text-slate-600 dark:text-purple-100">Instagram</a>
                                    <a href="#" class="block flex items-center gap-2 underline decoration-2 decoration-purple-600 text-slate-600 dark:text-purple-100">Tiktok</a>
                                    <a href="#" class="block flex items-center gap-2 underline decoration-2 decoration-purple-600 text-slate-600 dark:text-purple-100">Youtube</a>
                                </div>
                            </div>
                        </footer>
                    </div>
                </div>
            </main>
            
        </div>
    </div>

    <!-- Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <!-- Owl Carousel 2 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="/src/js/script.js"></script>
    <script src="/src/js/carousel.js"></script>
    <script src="{{ mix('js/app.js') }}"></script>
    @yield('scripts')
    
</body>

</html>