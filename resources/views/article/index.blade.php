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
        <h1 class=" sm:text-xl uppercase tracking-widest whitespace-nowrap">Articles</h1>
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
            <h2 class="text-4xl mb-2">Oooh... My Brain was Burned &#x1F92F;, Thats Sick Bro! Sharing Saved Me</h2>
            <p class="text-slate-400">Like or not like, i don't care! I wanna just type more whole planets in my brain. But if it usefull, you must share it!</p>
        </div>
        <div class="inline-flex items-center gap-7 rounded-3xl">
            <div class="text-right">
                <div class="text-4xl font-medium text-purple-700">{{$count->article}}</div>
                <div class="text-sm">Total Articles</div>
            </div>
            <div class="">
                <div class="text-4xl font-medium text-purple-700">{{$count->learn}}</div>
                <div class="text-sm">Learn Series</div>
            </div>
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

<section class="min-h-content p-10 bg-purple-600 text-white">
    <a href="{{route('learn.index')}}" class=" flex items-center justify-between gap-7">
        <div>
            <h2 class="text-2xl">See Learn Series</h2>
            <p class="text-slate-100">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptate minus in quisquam odit eos, inventore incidunt non ipsam</p>
        </div>
        <div class="text-purple-950">
            <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 16 16"><path fill="currentColor" fill-rule="evenodd" d="M10.159 10.72a.75.75 0 1 0 1.06 1.06l3.25-3.25L15 8l-.53-.53l-3.25-3.25a.75.75 0 0 0-1.061 1.06l1.97 1.97H1.75a.75.75 0 1 0 0 1.5h10.379z" clip-rule="evenodd"/></svg>
        </div>
    </a>
</section>

<section class="min-h-content p-5 py-8 sm:p-10 bg-stone-50 dark:bg-slate-950/50">
    <div class="pb-6">
        <h2 class="text-2xl mb-2">Enjoy My Articles</h2>
        <p class="text-slate-400 mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo excepturi sapiente accusantium cupiditate esse architecto quis</p>
        <div class="flex items-center gap-2 px-1 rounded-3xl overflow-hidden border-2 border-purple-700 ">
            <input type="search" class="p-3 px-5 outline-0 border-0 bg-transparent w-full" placeholder="Search Articles">
            <button class="flex items-center justify-center bg-purple-700 text-white p-3 rounded-3xl aspect-square">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="11" cy="11" r="8"/><path d="m21 21l-4.3-4.3"/></g></svg>
            </button>
        </div>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
        @foreach ($articles as $article)
        <div class="rounded-3xl p-2 bg-white dark:bg-indigo-950">
            <img src="{{Voyager::image($article->image)}}" alt="Image Article {{$article->title}}" class="block rounded-2xl mb-1 w-full aspect-video object-cover">
            <a href="{{route('article.show', $article->slug)}}" class="block p-3">
                <div class="text-purple-500 mb-1 text-xs">{{ \Carbon\Carbon::parse($article->created_at)->translatedFormat('d F Y') }}</div>
                <h5 class="font-medium mb-1">{{$article->title}}</h5>
                <p class="text-slate-400 dark:text-purple-300 text-sm line-clamp-3">{{$article->excerpt}}</p>
            </a>
        </div>
        @endforeach
        
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