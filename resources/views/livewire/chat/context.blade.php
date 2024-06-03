<div class="fixed h-full flex bg-white lg:shadow-sm overflow-hidden inset-0 m-auto rounded-t-lg">
    <div class="relative w-full md:w-[320px] xl:w-[400px] overflow-y-auto shrink-0 h-full">
        <livewire:chat.chat-list>
    </div>

    <div class="hidden md:grid border-l w-full h-full relative overflow-y-auto" style="contain:content">
        <div class="m-auto text-center justify-center flex flex-col gap-3">
            <img src="{{ asset('assets/img/speech-bubble-chat.png') }}" alt="" class="w-72 mx-auto">
            <h4 class="font-bold text-xl text-blue-600"> Choose a conversation to start chatting </h4>
        </div>
    </div>
</div>
