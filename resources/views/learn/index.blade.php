@extends('layouts.app')

@section('css')

@endsection

@section('header')
<div class="grid w-full sm:w-[4em] grid-cols-12 px-2 sm:grid-cols-1 grid-rows-1 sm:grid-rows-3 items-center justify-between sm:p-2 sm:h-screen">
    <div class="flex flex-row sm:flex-col col-span-3 items-center mb-auto">
        <a href="{{route('home')}}" class="aspect-square object-cover flex items-center justify-center p-2 rounded-full bg-purple-700 w-[3em] h-[3em] my-3 sm:m-3 text-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="1.4em" height="1.4em" viewBox="0 0 16 16"><path fill="currentColor" fill-rule="evenodd" d="M5.841 5.28a.75.75 0 0 0-1.06-1.06L1.53 7.47L1 8l.53.53l3.25 3.25a.75.75 0 0 0 1.061-1.06l-1.97-1.97H14.25a.75.75 0 0 0 0-1.5H3.871z" clip-rule="evenodd"/></svg>
        </a>
        
    </div>
    <div class="col-span-6 flex items-center justify-center sm:-rotate-90 my-auto">
        <h1 class=" sm:text-xl uppercase tracking-widest whitespace-nowrap">Learn Series</h1>
    </div>
    <div class="ms-auto col-span-3 me-4 sm:me-0 sm:ms-0 -rotate-90 sm:rotate-0 sm:mt-auto">
        <div class="flex sm:flex-col items-center">
            
            <div class="flex items-center">
                <!-- Vertical Toggle Switch -->
                <label class="relative inline-flex flex-col-reverse items-center cursor-pointer">
                    <input id="theme-toggle" type="checkbox" class="sr-only peer">
                    <div class="w-7 h-12 bg-gray-200 dark:bg-purple-900 peer-focus:outline-none rounded-full peer peer-checked:bg-purple-800"></div>
                    <div class="absolute flex items-center justify-center top-[1px] left-[1px] w-4 h-4 p-3 bg-white border border-gray-300 peer-checked:dark:border-purple-900 rounded-full transition-all peer-checked:translate-y-5 peer-checked:border-white">
                        <div class="flex items-center justify-center rounded-lg text-purple-400 dark:text-purple-950">
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
<section class="min-h-content mb-8">
    <!-- Filtering -->
    <div class="bg-white dark:bg-indigo-950 rounded-3xl relative flex flex-col items-center justify-center min-h-[86vh] p-10">
        <div class="text-center max-w-[30em] mb-5">
            <h2 class="text-4xl mb-2">Learn Series for More Funnies and Level Up The Salaries &#x1F92D;</h2>
            <p class="text-slate-400">Just hit a applouse for appriciate or give me a coffee, Dont stop learn or you will get no earn :D</p>
        </div>
        
        <div class="absolute bottom-0 -mb-6">
            <div class="text-center font-medium">Scroll</div>
            <div class="rounded-[30px] p-2 bg-white dark:bg-indigo-950">
                <div class="icon-mouse flex items-center justify-center border-[3px] border-slate-900 dark:border-purple-100">
                    <div class="scroll bg-slate-900 dark:bg-purple-100 mb-7"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="min-h-content p-10 bg-violet-100 dark:text-slate-950">
    <h2 class="text-2xl">See Learn Series</h2>
    <p class="text-slate-400 mb-5">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptate minus in quisquam odit eos, inventore incidunt non ipsam</p>
    <div class="mb-4 flex items-center mb-6 gap-2 px-1 rounded-3xl overflow-hidden border-2 border-purple-700 ">
        <input type="search" class="p-3 px-5 outline-0 border-0 bg-transparent w-full" placeholder="Search..">
        <button class="flex items-center justify-center bg-purple-700 text-white p-3 rounded-3xl aspect-square">
            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="11" cy="11" r="8"/><path d="m21 21l-4.3-4.3"/></g></svg>
        </button>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-7">
        @forelse ($learns as $learn)
        <a href="{{route('learn.show', $learn->slug)}}" class="flex flex-col items-start gap-2 md:gap-4">
            <img src="{{Voyager::image($learn->imaeg)}}" alt="Image Learn {{$learn->title}}" class="block rounded-2xl aspect-video object-cover w-full">
            <div class="">
                <h5 class="font-medium">{{$learn->title}}</h5>
                <p class="text-sm text-slate-400 line-clamp-2">{{$learn->excerpt}}</p>
                <div class="inline-flex items-center gap-2 mt-3 p-2 px-3 rounded-lg bg-violet-200">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24"><g fill="none"><path d="m12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035q-.016-.005-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093q.019.005.029-.008l.004-.014l-.034-.614q-.005-.018-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z"/><path fill="currentColor" d="M7 13a2 2 0 0 1 1.995 1.85L9 15v3a2 2 0 0 1-1.85 1.995L7 20H4a2 2 0 0 1-1.995-1.85L2 18v-3a2 2 0 0 1 1.85-1.995L4 13zm9 4a1 1 0 0 1 .117 1.993L16 19h-4a1 1 0 0 1-.117-1.993L12 17zm4-4a1 1 0 1 1 0 2h-8a1 1 0 1 1 0-2zM7 3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2zm9 4a1 1 0 0 1 .117 1.993L16 9h-4a1 1 0 0 1-.117-1.993L12 7zm4-4a1 1 0 0 1 .117 1.993L20 5h-8a1 1 0 0 1-.117-1.993L12 3z"/></g></svg>
                    <div>
                        <span class="font-semibold text-purple-600">{{count($learn->articles)}}</span> <span class="text-sm text-slate-800">Chapters</span>
                    </div>
                </div>
            </div>
        </a>
        @empty
            
        @endforelse
        
    </div>
</section>
@endsection

@section('scripts')
<script>
    initTheme();

    function initTheme(){
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    };
</script>
@endsection