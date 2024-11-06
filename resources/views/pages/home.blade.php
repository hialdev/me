@extends('layouts.app')

@section('css')
@endsection

@section('header')
<div class="grid grid-cols-12 px-2 sm:grid-cols-1 grid-rows-1 sm:grid-rows-3 items-center justify-between sm:p-2 sm:h-screen">
    <div class="flex flex-row sm:flex-col col-span-3 items-center mb-auto">
        <div class="aspect-square object-cover sm:w-full my-3 sm:m-3">
            <img src="{{Voyager::image(setting('site.logo'))}}" alt="Logo Muhammad Nur Alif Site" class="block aspect-square rounded-[99px] h-[3em] w-[3em] sm:h-[3.5em] sm:w-[3.5em] mx-auto object-cover">
        </div>
        
    </div>
    <div class="col-span-6 mx-auto">
        <div class="flex-1 flex sm:flex-col items-center gap-0 sm:gap-3">
            <div class="dot flex items-center justify-center p-3 rounded-lg text-slate-500 hover:text-purple-600 active cursor-pointer"
                data-index="0">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"/><path d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/></g></svg>
            </div>
            <div class="dot flex items-center justify-center p-3 rounded-lg text-slate-500 hover:text-purple-600 cursor-pointer"
                data-index="1">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><rect width="18" height="12" x="3" y="7" rx="2"/><path d="M9 6a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v1H9zm1 6l.211.106a4 4 0 0 0 3.578 0L14 12"/></g></svg>
            </div>
            <div class="dot flex items-center justify-center p-3 rounded-lg text-slate-500 hover:text-purple-600 cursor-pointer"
                data-index="2">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" color="currentColor"><path d="M18 15V9c0-2.828 0-4.243-.879-5.121C16.243 3 14.828 3 12 3H8c-2.828 0-4.243 0-5.121.879C2 4.757 2 6.172 2 9v6c0 2.828 0 4.243.879 5.121C3.757 21 5.172 21 8 21h12M6 8h8m-8 4h8m-8 4h4"/><path d="M18 8h1c1.414 0 2.121 0 2.56.44c.44.439.44 1.146.44 2.56v8a2 2 0 1 1-4 0z"/></g></svg>
            </div>
            <div class="dot flex items-center justify-center p-3 rounded-lg text-slate-500 hover:text-purple-600 cursor-pointer"
                data-index="3">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="0.87em" viewBox="0 0 576 512"><path fill="currentColor" d="M512 80c8.8 0 16 7.2 16 16v320c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V96c0-8.8 7.2-16 16-16zM64 32C28.7 32 0 60.7 0 96v320c0 35.3 28.7 64 64 64h448c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64zm144 224a64 64 0 1 0 0-128a64 64 0 1 0 0 128m-32 32c-44.2 0-80 35.8-80 80c0 8.8 7.2 16 16 16h192c8.8 0 16-7.2 16-16c0-44.2-35.8-80-80-80zm200-144c-13.3 0-24 10.7-24 24s10.7 24 24 24h80c13.3 0 24-10.7 24-24s-10.7-24-24-24zm0 96c-13.3 0-24 10.7-24 24s10.7 24 24 24h80c13.3 0 24-10.7 24-24s-10.7-24-24-24z"/></svg>
            </div>
        </div>
    </div>
    <div class="ms-auto col-span-3 me-4 sm:me-0 sm:ms-0 -rotate-90 sm:rotate-0 sm:mt-auto">
        <div class="flex sm:flex-col items-center">
            
            <div class="flex items-center">
                <!-- Vertical Toggle Switch -->
                <label class="relative inline-flex flex-col-reverse items-center cursor-pointer">
                    <input id="theme-toggle" type="checkbox" class="sr-only peer">
                    <div class="w-7 h-12 bg-gray-200 dark:bg-purple-900 peer-focus:outline-none rounded-full peer peer-checked:bg-purple-800"></div>
                    <div class="absolute flex items-center justify-center top-[1px] left-[1px] w-4 h-4 p-3 bg-white dark:bg-purple-500 border border-gray-300 dark:border-purple-900 rounded-full transition-all peer-checked:translate-y-5 peer-checked:border-white">
                        <div class="flex items-center justify-center rounded-lg text-purple-400 dark:text-purple-50">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M-90.24 1.89c-5.56 0-10.09 4.53-10.09 10.09s4.53 10.09 10.09 10.09s10.09-4.53 10.09-10.09s-4.53-10.09-10.09-10.09m5.74 15.51h-11.31c-.33 0-.6-.27-.6-.6s.27-.6.6-.6h11.31c.33 0 .6.27.6.6s-.27.6-.6.6m0-2.4h-11.31c-.33 0-.6-.27-.6-.6s.27-.6.6-.6h11.31c.33 0 .6.27.6.6s-.27.6-.6.6m0-2.4h-11.31c-.33 0-.6-.27-.6-.6s.27-.6.6-.6h11.31c.33 0 .6.27.6.6s-.27.6-.6.6m0-2.4h-11.31c-.33 0-.6-.27-.6-.6s.27-.6.6-.6h11.31c.33 0 .6.27.6.6s-.27.6-.6.6m0-2.4h-11.31c-.33 0-.6-.27-.6-.6s.27-.6.6-.6h11.31c.33 0 .6.27.6.6s-.27.6-.6.6m105.69 7.96a.49.49 0 0 0-.57-.09c-1.05.52-2.16.78-3.3.78c-4.14 0-7.5-3.37-7.5-7.5c0-2.38 1.1-4.57 3.03-6.01c.17-.12.19-.34.13-.54s-.29-.35-.49-.36c-.05 0-.11-.01-.16-.01c-5.5 0-9.98 4.48-9.98 9.98s4.48 9.98 9.98 9.98c3.79 0 7.31-2.21 8.97-5.64a.55.55 0 0 0-.11-.59M17.9 5.1l.92-1.76c.02-.04.02-.09-.01-.13s-.08-.06-.12-.05l-1.96.34l-1.39-1.42c-.03-.03-.08-.05-.13-.03c-.05.01-.08.05-.08.1l-.28 1.96l-1.78.88c-.04.02-.07.06-.07.11s.03.09.07.11l1.78.88l.29 1.96c.01.05.04.09.08.1c.01 0 .03.01.04.01c.03 0 .07-.01.09-.04l1.38-1.42l1.96.33c.05.01.09-.01.12-.05s.03-.09.01-.13zm3.2 4.52l.56-1.06c.02-.04.02-.09-.01-.13s-.07-.06-.12-.05l-1.18.2l-.83-.85c-.03-.03-.08-.05-.13-.03c-.05.01-.08.05-.08.1l-.17 1.18l-1.07.53c-.04.02-.07.06-.07.11s.03.09.07.11l1.07.53l.17 1.18c.01.05.04.09.08.1c.01 0 .03.01.04.01c.03 0 .07-.01.09-.04l.83-.86l1.18.2c.05.01.09-.01.12-.05s.03-.09.01-.13zm-4.66 2.77l.56-1.06c.02-.04.02-.09-.01-.13s-.07-.06-.12-.05l-1.18.2l-.83-.85c-.03-.03-.08-.05-.13-.03c-.05.01-.08.05-.08.1l-.17 1.18l-1.07.53c-.04.02-.07.06-.07.11s.03.09.07.11l1.07.53l.17 1.18c.01.05.04.09.08.1c.01 0 .03.01.04.01c.03 0 .07-.01.09-.04l.83-.86l1.18.2c.05.01.09-.01.12-.05s.03-.09.01-.13z"/></svg>
                        </div>
                    </div>
                </label>
            </div>                                         
        </div>
    </div>
</div>
@endsection

@section('content')
<section class="h-[90vh] md:h-[96vh] p-10 bg-white dark:bg-purple-100 flex items-center justify-center">
    <div class="flex items-center flex-wrap justify-center gap-4">
        <div>
            <img src="{{Voyager::image(setting('site.logo'))}}" alt="Muhammad Nur Alif Image Profile" class="bg-purple-200 block rounded-full aspect-square w-full h-[12em] object-cover">
        </div>
        <div>
            <h1 class="text-2xl sm:text-4xl font-medium dark:text-slate-900">Hello, I am
                <span class="block text-purple-600 dark:text-purple-900">Muhammad Nur Alif</span>
            </h1>
            <a href="#" title="Click to Know Me more" class="text-purple-950 underline decoration-2 decoration-slate-950/50 hover:text-5xl hover:text-purple-950/15 hover:font-semibold">Who am I ?</a>
            <div class="flex items-center gap-3 mt-4">
                <span class="text-slate-400 dark:text-purple-900">a</span>
                <div id="job-title" class="sm:text-xl text-slate-600 dark:text-slate-950 underline decoration-2 decoration-purple-600">
                    <span id="typed-text"></span><span id="cursor"></span>
                </div>
                @php
                    $file = setting('site.cv');
                    $file = json_decode($file)[0];
                @endphp
                <a href="{{Voyager::image($file->download_link)}}" target="_blank" class="flex items-center justify-center p-3 rounded-lg text-slate-500 hover:text-purple-600 bg-violet-100 cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"/><path d="M14 2v4a2 2 0 0 0 2 2h4m-8 10v-6m-3 3l3 3l3-3"/></g></svg>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="min-h-content w-full bg-violet-100">
    <div id="projectsContainer" class="h-[85vh] md:h-[96vh] relative flex items-center justify-center overflow-hidden">
        <div
            id="loopingContainer"
            class="w-full absolute inline-flex flex-nowrap overflow-hidden [mask-image:_linear-gradient(to_right,transparent_0,_black_128px,_black_calc(100%-128px),transparent_100%)]"
        >
            <ul id="loop" class="flex items-center justify-center md:justify-start [&_li]:mx-8 [&_img]:max-w-none animate-infinite-scroll">
                @foreach ($projects as $project)
                <li class="opacity-25">
                    <img src="{{Voyager::image($project->image)}}" alt="Image of {{$project->title}} Project" />
                </li>
                @endforeach
            </ul>   
        </div>
        <!-- Box Intro Projects -->
        <div id="introBox" class="absolute h-[85vh] p-4 sm:p-8 md:h-[96vh] w-full transition-transform duration-500 ease-in-out">
            <div class="relative h-full flex items-center justify-center">
                <div class="absolute top-2 left-2 max-w-[10em] sm:max-w-[20em]">
                    <h2 class="text-xl sm:text-3xl mb-2 font-medium dark:text-violet-950">My Projects is My Cases</h2>
                    <p class="text-slate-400 dark:text-slate-400">Your needs is my missions</p>
                </div>
                <div class="absolute top-2 right-2 text-right">
                    <h3 class="text-3xl text-purple-600">13+</h3>
                    <p class="text-lg text-slate-400 dark:text-slate-400">Clients</p>
                </div>
                <div class="absolute bottom-2 left-2 text-left">
                    <h3 class="text-3xl text-purple-600">36+</h3>
                    <p class="text-lg text-slate-400 dark:text-slate-400">Cases</p>
                </div>
                <div class="absolute bottom-2 right-2 text-right">
                    <a href="{{route('project.index')}}" class="p-4 px-6 rounded-[99px] font-medium bg-slate-800 text-purple-100 inline-flex items-center gap-3">
                        <span class="hidden md:block text-white">See The Projects / Cases</span>
                        <span class="block md:hidden">See Projects</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 16 16"><path fill="currentColor" fill-rule="evenodd" d="M1.25 8A.75.75 0 0 1 2 7.25h10.19L9.47 4.53a.75.75 0 0 1 1.06-1.06l4 4a.75.75 0 0 1 0 1.06l-4 4a.75.75 0 1 1-1.06-1.06l2.72-2.72H2A.75.75 0 0 1 1.25 8" clip-rule="evenodd"/></svg>
                    </a>
                </div>

                <div class="">
                    <div class="text-purple-400 text-2xl sm:text-4xl">I Do</div>
                    <div id="analyzing-text" class="text-2xl sm:text-4xl font-medium underline decoration-3 decoration-purple-600 text-slate-800"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="min-h-full p-5 sm:p-10 bg-white dark:bg-indigo-950">
    <div class="min-h-full" id="noScrollbar">
        <h2 class="text-3xl mb-2">Just Sharing to Relaxing My Brain</h2>
        <p class="text-slate-400 dark:text-purple-300">Block if you hate, Share if you like</p>
        <div class="grid grid-cols-1 lg:grid-cols-3 md:gap-5">
            <div class="mt-7 p-5 bg-violet-50 dark:bg-slate-900/50 dark:backdrop-blur-md rounded-3xl">
                <h6 class="text-lg font-medium"><span class="font-semibold text-purple-600 dark:text-purple-400 me-3">#</span>Latest Update</h6>
                <div class="mt-4 w-full news-carousel owl-carousel owl-theme">
                    @foreach ($articles as $article)
                    <div class="rounded-3xl p-2 bg-white dark:bg-indigo-950">
                        <img src="{{Voyager::image($article->image)}}" alt="Image of {{$article->title}}" class="block rounded-2xl mb-1 w-full aspect-video object-cover">
                        <a href="{{route('article.show', $article->slug)}}" class="block p-3">
                            <div class="text-purple-500 mb-1 text-xs">{{ \Carbon\Carbon::parse($article->created_at)->translatedFormat('d F Y') }}</div>
                            <h5 class="font-medium mb-1">{{$article->title}}</h5>
                            <p class="text-slate-400 dark:text-purple-300 text-sm line-clamp-3">{{$article->excerpt}}</p>
                        </a>
                    </div>
                    @endforeach
                </div>
                <div class="news-dots"></div>
            </div>
            <div class="col-span-2 mt-7">
                <h6 class="text-lg mb-3 font-medium"><span class="font-semibold text-purple-600 dark:text-purple-400 me-3">#</span>Hot Learn Pack</h6>
                <div class="flex flex-col gap-3">
                    @foreach ($learns as $learn)
                    <div class="p-2 border-2 flex flex-col md:flex-row items-start gap-2 md:gap-4 border-purple-100 dark:border-0 dark:bg-slate-900/50 dark:backdrop-blur-md rounded-3xl">
                        <div class="w-full md:w-[40%]">
                            <img src="{{Voyager::image($learn->image)}}" alt="Image of {{$learn->title}} Learn Series" class="block rounded-2xl aspect-video object-cover w-full min-h-content">
                        </div>
                        <a href="{{route('learn.show', $learn->slug)}}" class="block flex-1 p-3 md:py-3">
                            <h5 class="font-medium">{{$learn->title}}</h5>
                            <p class="text-sm text-slate-400 dark:text-purple-300 line-clamp-2">{{$learn->excerpt}}</p>
                            <div class="inline-flex items-center gap-2 mt-3 p-2 px-3 rounded-lg bg-violet-50 dark:bg-slate-900">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24"><g fill="none"><path d="m12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035q-.016-.005-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093q.019.005.029-.008l.004-.014l-.034-.614q-.005-.018-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z"/><path fill="currentColor" d="M7 13a2 2 0 0 1 1.995 1.85L9 15v3a2 2 0 0 1-1.85 1.995L7 20H4a2 2 0 0 1-1.995-1.85L2 18v-3a2 2 0 0 1 1.85-1.995L4 13zm9 4a1 1 0 0 1 .117 1.993L16 19h-4a1 1 0 0 1-.117-1.993L12 17zm4-4a1 1 0 1 1 0 2h-8a1 1 0 1 1 0-2zM7 3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2zm9 4a1 1 0 0 1 .117 1.993L16 9h-4a1 1 0 0 1-.117-1.993L12 7zm4-4a1 1 0 0 1 .117 1.993L20 5h-8a1 1 0 0 1-.117-1.993L12 3z"/></g></svg>
                                <div>
                                    <span class="font-semibold text-purple-600">{{count($learn->articles)}}</span> <span class="text-sm text-slate-700 dark:text-slate-300">Chapters</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                    
                    <div class="flex justify-end pb-14">
                        <a href="{{route('article.index')}}" class="p-2 px-4 rounded-3xl bg-purple-600 text-white flex items-center gap-3">
                            See More
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 16 16"><path fill="currentColor" fill-rule="evenodd" d="M1.25 8A.75.75 0 0 1 2 7.25h10.19L9.47 4.53a.75.75 0 0 1 1.06-1.06l4 4a.75.75 0 0 1 0 1.06l-4 4a.75.75 0 1 1-1.06-1.06l2.72-2.72H2A.75.75 0 0 1 1.25 8" clip-rule="evenodd"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="min-h-content text-white p-10 py-12 sm:p-10 bg-gradient-to-r from-fuchsia-900 via-purple-800 to-indigo-950 rounded-3xl">
    <div class="flex flex-col sm:flex-row items-start sm:gap-[3em]">
        <div class="max-w-[30em]">
            <h2 class="text-3xl mb-2">Lets Discuss About Your Mission!</h2>
            <div id="typing-text" class="text-xl mb-5 text-purple-50/50"></div>
        </div>
        <div class="flex-1 w-full">
            <div class="grid grid-cols-2 gap-3">
                <div class="col-span-2">
                    <input type="text" name="full-name" id="" placeholder="Full Name" class="block focus:outline-0 focus:border-0 w-full p-3 px-5 rounded-3xl bg-indigo-950">
                </div>
                <div class="col-span-2 sm:col-span-1">
                    <input type="number" name="phone" id="" placeholder="Phone Number" class="block focus:outline-0 focus:border-0 w-full p-3 px-5 rounded-3xl bg-indigo-950">
                </div>
                <div class="col-span-2 sm:col-span-1">
                    <input type="email" name="email" id="" placeholder="your@mail.com" class="block focus:outline-0 focus:border-0 w-full p-3 px-5 rounded-3xl bg-indigo-950">
                </div>
                <div class="col-span-2">
                    <textarea name="message" id="" placeholder="Tell me about..." class="block focus:outline-0 focus:border-0 w-full p-5 rounded-3xl bg-indigo-950" rows="8"></textarea>
                </div>
                <div class="col-span-2">
                    <button type="submit" class="p-3 px-5 hover:shadow-xl rounded-3xl bg-purple-700 text-white flex items-center gap-3">
                        Send
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none"><g clip-path="url(#majesticonsAirplaneFlight20)"><path fill="currentColor" d="M19.02 9.121v4.271a1.346 1.346 0 0 1-2.57.557l-.965-2.12l-1.414 1.414a2 2 0 0 1-2.828 0l-1.829-1.829a1.414 1.414 0 0 1 1-2.414h1.414a2 2 0 0 0 1.415-.586l.828-.828l-2.02-.674a1.448 1.448 0 0 1 .554-2.818l4.648.31l1.768-1.768c.471-.471 1.697-1.131 2.828 0c1.132 1.131.472 2.357 0 2.828l-2.242 2.243a2 2 0 0 0-.586 1.414z"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2 14.905c.705-1.234 1.825-2.32 3-3.204M2 22.404c1.072-3.002 3.055-5.564 5.023-7.5m.477 6.5c.721-1.442 1.96-3.077 3.087-4.405"/></g><defs><clipPath id="majesticonsAirplaneFlight20"><path fill="#fff" d="M0 0h24v24H0z"/></clipPath></defs></g></svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="min-h-content p-10">
    
</section>
@endsection

@section('scripts')
<script>
    initTheme();

    const text = "Maybe I'm not as expert as you think, but if you have any problems you can contact me, except for women's problems because women's is ╣≈¥¬Ω∂π∞≠∑ ±∆√∞≠±§ :D.";
    let index = 0;
    let isDeleting = false;
    const speed = 50; // Kecepatan mengetik
    const delay = 2000; // Jeda sebelum mulai menghapus

    function typeEffect() {
        const h2Element = document.getElementById('typing-text');
        const currentText = isDeleting ? text.substring(0, index--) : text.substring(0, index++);

        h2Element.innerHTML = `${currentText}<span class="cursor"></span>`;

        if (!isDeleting && index === text.length) {
        setTimeout(() => isDeleting = true, delay); // Mulai menghapus setelah jeda
        } else if (isDeleting && index === 0) {
        isDeleting = false; // Mulai mengetik ulang
        }

        setTimeout(typeEffect, isDeleting ? speed / 2 : speed); // Menghapus lebih cepat dari mengetik
    }

    document.addEventListener('DOMContentLoaded', typeEffect);


    function initTheme(){
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    };

    function toggleDropdown(menuId) {
        console.log('clicked');
        const menu = document.getElementById(menuId);
        menu.classList.toggle('hidden');
    };
</script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
            
        // Animasi teks mengetik untuk job titles
        const typedTextSpan = document.getElementById('typed-text');
        const cursorSpan = document.getElementById('cursor');
        const jobTextArray = ["Web Developer", "Data Analyst", "UI Designer", "UX Researcher", "Mobile Developer", "System Analyst"];

        // Animasi teks mengetik untuk analyzing
        const analyzingTextSpan = document.getElementById('analyzing-text');
        const analyzingTextArray = ["Emphatizing...", "Analyzing...", "Defining...", "Designing...", "Validating...", "Developing...", "Testing...", "Drinking :D"];

        const typingDelay = 150; // Delay antara setiap karakter
        const erasingDelay = 100; // Delay antara setiap karakter saat menghapus
        const newTextDelay = 2000; // Delay antara teks saat berpindah
        let jobTextIndex = 0;
        let analyzingTextIndex = 0;

        // Fungsi untuk mengatur pengindeksan karakter
        let jobCharIndex = 0;
        let analyzingCharIndex = 0;

        function typeJobText() {
            if (jobCharIndex < jobTextArray[jobTextIndex].length) {
                typedTextSpan.textContent += jobTextArray[jobTextIndex].charAt(jobCharIndex);
                jobCharIndex++;
                setTimeout(typeJobText, typingDelay);
            } else {
                setTimeout(eraseJobText, newTextDelay);
            }
        }

        function eraseJobText() {
            if (jobCharIndex > 0) {
                typedTextSpan.textContent = jobTextArray[jobTextIndex].substring(0, jobCharIndex - 1);
                jobCharIndex--;
                setTimeout(eraseJobText, erasingDelay);
            } else {
                jobTextIndex++;
                if (jobTextIndex >= jobTextArray.length) jobTextIndex = 0;
                jobCharIndex = 0; // Reset karakter index
                setTimeout(typeJobText, typingDelay + 1100); // Tunggu sebelum mulai mengetik teks berikutnya
            }
        }

        function typeAnalyzingText() {
            if (analyzingCharIndex < analyzingTextArray[analyzingTextIndex].length) {
                analyzingTextSpan.textContent += analyzingTextArray[analyzingTextIndex].charAt(analyzingCharIndex);
                analyzingCharIndex++;
                setTimeout(typeAnalyzingText, typingDelay);
            } else {
                setTimeout(eraseAnalyzingText, newTextDelay);
            }
        }

        function eraseAnalyzingText() {
            if (analyzingCharIndex > 0) {
                analyzingTextSpan.textContent = analyzingTextArray[analyzingTextIndex].substring(0, analyzingCharIndex - 1);
                analyzingCharIndex--;
                setTimeout(eraseAnalyzingText, erasingDelay);
            } else {
                analyzingTextIndex++;
                if (analyzingTextIndex >= analyzingTextArray.length) analyzingTextIndex = 0;
                analyzingCharIndex = 0; // Reset karakter index
                setTimeout(typeAnalyzingText, typingDelay + 1100); // Tunggu sebelum mulai mengetik teks berikutnya
            }
        }

        // Mulai animasi teks setelah halaman dimuat
        if (jobTextArray.length) setTimeout(typeJobText, newTextDelay + 250);
        if (analyzingTextArray.length) setTimeout(typeAnalyzingText, newTextDelay + 250);
    });
</script>
@endsection