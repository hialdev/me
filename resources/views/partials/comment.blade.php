<section id="commentSection" class="min-h-content p-10 text-slate-950 border-2 dark:border-purple-700/50">
    <h2 class="text-3xl text-purple-700 mb-3">Comments</h2>
    <h3 class="text-xl dark:text-purple-100">Give Your Opinion and Discuss</h3>
    <p class="text-slate-400">Knowledge always need a question and answer, so your opinion contribute to develop knowledge for reader, give your opinion with ethic and be elegant</p>
    <p class="text-xs mt-3 text-orange-400">Refresh for comments update</p>
    <div id="vue">
        <comment-component :project-id="{{ $commentId }}" :commentable-type="`{{$commentType}}`"></comment-component>
    </div>
</section>

<div id="fixedDiv" class="fixed bottom-0 pb-2 sm:pb-4 sm:ms-12 left-[20%] right-[20%] sm:left-[40%] sm:right-[40%] flex w-content mx-auto justify-center items-center">
    <div class="flex items-center bg-white rounded-3xl gap-1 p-1 rounded-3 relative">
        <button id="applauseButton" class="group text-right p-2 px-3 rounded-3xl text-purple-100 bg-purple-700">
            <div class="flex items-center gap-2">
                <img src="/src/assets/clap.svg" alt="Icon Clap" class="group-hover:scale-150 block aspect-square h-[1.3em]">
                <div class="font-medium text-slate-200">234</div>
            </div>
        </button>
        <button id="commentBtn" class="text-left p-2 px-3 rounded-3xl text-purple-600 hover:bg-slate-100">
            <div class="flex items-center gap-2">
                <img src="/src/assets/chat.svg" alt="Icon Chat" class="block aspect-square h-[1.3em]">
                <div class="font-medium text-slate-400 ">234</div>
            </div>
        </button>
    </div>
</div>