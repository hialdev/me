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
        <h1 class=" sm:text-xl uppercase tracking-widest whitespace-nowrap">My projects</h1>
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
            <h2 class="text-4xl mb-2">Read All My Case Studies</h2>
            <p class="text-slate-400">If my case inspire you or little usefull, plz give me applouse.. if you hate my case, just leave my site!</p>
        </div>
        <div class="inline-flex flex-col items-center gap-3 rounded-3xl">
            <div class="flex items-center flex-wrap justify-center gap-2">
                @foreach ($categories as $ctg)
                <a href="{{route('project.index', ['category' => $ctg->title])}}" class="flex items-center gap-3 p-2 group hover:bg-purple-200 hover:text-purple-950 rounded-xl bg-slate-50">
                    <span class="iconify" data-icon="uim:web-grid" data-inline="false"></span>
                    <div class="text-purple-700 font-semibold">{{$ctg->projects_count}}</div>
                    <p class="text-sm text-slate-400 whitespace-wrap max-w-[5em] group-hover:text-purple-950 truncate">{{$ctg->title}}</p>
                </a>
                @endforeach 
            </div>
            <form action="{{route('project.index')}}" method="GET" class="flex items-center gap-2 px-1 rounded-3xl overflow-hidden border-2 border-purple-700 ">
                <input type="search" name="search" minlength="4" class="p-3 px-5 outline-0 border-0 bg-transparent" placeholder="Search Project">
                <button class="flex items-center justify-center bg-purple-700 text-white p-3 rounded-3xl aspect-square">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="11" cy="11" r="8"/><path d="m21 21l-4.3-4.3"/></g></svg>
                </button>
            </form>
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

<section class="min-h-content">
    @forelse ($projects as $project)
    <div class="relative w-full mb-5 rounded-[30px] bg-indigo-100 overflow-hidden">
        <img src="{{Voyager::image($project->image)}}" alt="Image of {{$project->title}}" class="block w-full object-cover h-[83vh] sm:h-[85vh] md:aspect-video">
        <div class="absolute bottom-0 left-0 right-0 flex items-end top-0 bg-gradient-to-b from-transparent via-slate-500/25 text-white to-slate-950">
            <a href="{{route('project.show', $project->slug)}}" class="flex items-center gap-3 p-7 sm:p-9 justify-between w-full">
                <div>
                    <div class="flex flex-wrap items-center gap-1 mb-2">
                        @foreach ($project->categories as $ctg)
                        <span class="p-1 px-2 rounded-xl lowercase bg-indigo-800 text-purple-100 text-xs whitespace-nowrap truncate max-w-[7em] sm:text-sm sm:text-base">{{$ctg->title}}</span>
                        @endforeach
                    </div>
                    <h6 class="text-xl text-white font-medium line-clamp-2">{{$project->title}}</h6>
                    <p class="text-slate-400 line-clamp-2">{{$project->excerpt}}</p>
                </div>
                <div class="flex items-center justify-center p-3 bg-purple-700 text-white aspect-square w-[3em] h-[3em] rounded-3xl">
                    <svg xmlns="http://www.w3.org/2000/svg" width="0.63em" height="1em" viewBox="0 0 320 512"><path fill="currentColor" d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256L73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z"/></svg>
                </div>
            </a>
        </div>
    </div>
    @empty
    <div class="flex items-center justify-center min-h-[50vh]">
        <div>
            <div class="text-xl">Data Not Found!</div>
            <div class="text-slate-400">Sorry, i'm still cooking for content, <strong>Check Another! or Get out! and Come Back later!</strong></div>
        </div>
    </div>
    @endforelse
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
@endsection