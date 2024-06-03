<div x-data="{
    height: 0,
    conversationElement: document.getElementById('conversation'),
    markAsRead: null
}" x-init="height = conversationElement.scrollHeight;
$nextTick(() => conversationElement.scrollTop = height);

Echo.private('users.{{ Auth()->User()->id }}').notification((notification) => {
    if (notification['type'] == 'App\\Notifications\\MessageRead' && notification['conversation_id'] == {{ $this->selectedConversation->id }}) {
        markAsRead = true;
    }
});"
    @scroll-bottom.window="$nextTick(()=>conversationElement.scrollTop= conversationElement.scrollHeight);"
    class="w-full overflow-hidden">

    <div class="border-b flex flex-col overflow-y-scroll grow h-full">
        {{-- header --}}
        <header class="w-full sticky inset-x-0 flex pb-[5px] pt-[5px] top-0 z-10 bg-white border-b ">
            <div class="flex w-full items-center p-2 lg:px-2 gap-2 md:gap-2">
                <a class="shrink-0 lg:hidden" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75" />
                    </svg>
                </a>

                {{-- avatar --}}
                <x-avatar src="{{ $selectedConversation->getReceiver()->profile_photo }}"
                    class="h-10 w-10 lg:w-12 lg:h-12" />

                <h6 class="font-bold truncate"> {{ $selectedConversation->getReceiver()->email }} </h6>
            </div>
        </header>

        {{-- body --}}
        <main
            @scroll="
            scropTop = $el.scrollTop;

            if(scropTop <= 0){
                window.livewire.emit('loadMore');
            }
            "
            @update-chat-height.window="
                newHeight= $el.scrollHeight;
                oldHeight= height;
                $el.scrollTop= newHeight- oldHeight;
                height=newHeight;
            "
            id="conversation"
            class="flex flex-col gap-3 p-2.5 overflow-y-auto  flex-grow overscroll-contain overflow-x-hidden w-full my-auto">

            @if ($loadedMessages)
                @php
                    $previousMessage = null;
                @endphp

                @foreach ($loadedMessages as $key => $message)
                    {{-- keep track of the previous message --}}
                    @if ($key > 0)
                        @php
                            $previousMessage = $loadedMessages->get($key - 1);
                        @endphp
                    @endif

                    <div wire:key="{{ time() . $key }}" @class([
                        'max-w-[85%] md:max-w-[78%] flex items-start gap-2.5 relative mt-2',
                        'ml-auto' => $message->sender_id === auth()->id(),
                    ])>

                        {{-- avatar --}}
                        <div @class([
                            'shrink-0',
                            'invisible' => $previousMessage?->sender_id == $message->sender_id,
                            'hidden' => $message->sender_id === auth()->id(),
                        ])>
                            <x-avatar src="{{ $selectedConversation->getReceiver()->profile_photo }}" />
                        </div>

                        {{-- messsage body --}}
                        <div @class([
                            'flex flex-col w-full max-w-[320px] leading-1.5 p-4 rounded-xl drop-shadow',
                            'rounded-tl-none bg-gradient-to-r from-gray-100 via-gray-100 to-gray-200' => !(
                                $message->sender_id === auth()->id()
                            ),
                            'rounded-tr-none bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 text-white' =>
                                $message->sender_id === auth()->id(),
                        ])>

                            <p class="text-sm font-normal pb-2.5">
                                {{ $message->body }}
                            </p>

                            <div class="ml-auto flex gap-2">
                                <span @class([
                                    'text-xs ',
                                    'text-gray-500' => !($message->sender_id === auth()->id()),
                                    'text-white' => $message->sender_id === auth()->id(),
                                    'dark:text-gray-400',
                                ])>
                                    {{ $message->created_at->format('g:i a') }}
                                </span>

                                {{-- message status , only show if message belongs auth --}}
                                @if ($message->sender_id === auth()->id())
                                    <div x-data="{ markAsRead: @json($message->isRead()) }">
                                        {{-- double ticks --}}
                                        <span x-cloak x-show="markAsRead" @class('text-gray-200')>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-check2-all" viewBox="0 0 16 16">
                                                <path
                                                    d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0l7-7zm-4.208 7-.896-.897.707-.707.543.543 6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0z" />
                                                <path
                                                    d="m5.354 7.146.896.897-.707.707-.897-.896a.5.5 0 1 1 .708-.708z" />
                                            </svg>
                                        </span>

                                        {{-- single ticks --}}
                                        <span x-show="!markAsRead" @class('text-gray-200')>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                                                <path
                                                    d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
                                            </svg>
                                        </span>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </main>

        {{-- send message  --}}
        <footer class="shrink-0 z-10 bg-white inset-x-0">
            <div class=" p-2 border-t">
                <form x-data="{ body: @entangle('body').defer }" @submit.prevent="$wire.sendMessage" method="POST" autocapitalize="off">
                    @csrf

                    <input type="hidden" autocomplete="false" style="display:none">
                    <label for="chat" class="sr-only">Your message</label>

                    <div class="flex items-center px-3 py-2 rounded-lg bg-gray-100 dark:bg-gray-700">
                        <button type="button"
                            class="inline-flex justify-center p-2 text-gray-500 rounded-lg cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 20 18">
                                <path fill="currentColor"
                                    d="M13 5.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0ZM7.565 7.423 4.5 14h11.518l-2.516-3.71L11 13 7.565 7.423Z" />
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M18 1H2a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1Z" />
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M13 5.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0ZM7.565 7.423 4.5 14h11.518l-2.516-3.71L11 13 7.565 7.423Z" />
                            </svg>
                            <span class="sr-only">Upload image</span>
                        </button>
                        <button type="button"
                            class="p-2 text-gray-500 rounded-lg cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M13.408 7.5h.01m-6.876 0h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0ZM4.6 11a5.5 5.5 0 0 0 10.81 0H4.6Z" />
                            </svg>
                            <span class="sr-only">Add emoji</span>
                        </button>

                        <input x-model="body" type="text" autocomplete="off" autofocus
                            placeholder="Write your message here..." maxlength="1700"
                            class="block mx-4 p-2.5 w-full text-sm text-gray-900 bg-white rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                        <button x-bind:disabled="!body.trim()" type="submit"
                            class="inline-flex justify-center p-2 text-blue-600 rounded-full cursor-pointer hover:bg-blue-100 dark:text-blue-500 dark:hover:bg-gray-600">
                            <svg class="w-5 h-5 rotate-90 rtl:-rotate-90" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                                <path
                                    d="m17.914 18.594-8-18a1 1 0 0 0-1.828 0l-8 18a1 1 0 0 0 1.157 1.376L8 18.281V9a1 1 0 0 1 2 0v9.281l6.758 1.689a1 1 0 0 0 1.156-1.376Z" />
                            </svg>
                            <span class="sr-only">Send message</span>
                        </button>
                    </div>
                </form>

                @error('body')
                    <p> {{ $message }} </p>
                @enderror
            </div>
        </footer>
    </div>
</div>
