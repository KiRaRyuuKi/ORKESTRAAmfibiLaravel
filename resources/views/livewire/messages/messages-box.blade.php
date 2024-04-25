<div
    x-data="{
        height:0,
        conversationElement:null,
        markAsRead:null
    }"
    x-init="
        conversationElement = $el.querySelector('#conversation');
        height = conversationElement.scrollHeight;
        $nextTick(() => conversationElement.scrollTop = height);

        Echo.private('users.{{ auth()->id() }}')
            .notification((notification) => {
                if (notification.type == 'App\\Notifications\\MessageRead' && notification.conversation_id == {{ $this->selectedConversation->id }}) {
                    markAsRead = true;
                }
            });
    "
    @scroll-bottom.window="
        $nextTick(() => conversationElement.scrollTop = conversationElement.scrollHeight);
    "
    class="w-full overflow-hidden"
>
    <div class="border-bottom flex flex-col overflow-auto h-full">
        {{-- header --}}
        <header class="sticky top-0 z-10 bg-white border-b">
            <div class="flex items-center px-2 lg:px-4 gap-2 md:gap-5 w-full">
                <a class="shrink-0 lg:hidden" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75" />
                    </svg>
                </a>
                {{-- avatar --}}
                <div class="shrink-0">
                    <x-avatar class="h-9 w-9 lg:w-11 lg:h-11" />
                </div>
                <h6 class="font-bold truncate"> {{ $selectedConversation->getReceiver()->email }} </h6>
            </div>
        </header>
        {{-- body --}}
        <main id="conversation" class="flex flex-col gap-3 p-2.5 overflow-auto flex-grow w-full my-auto">
            @if ($loadedMessages)
                @php $previousMessage = null; @endphp
                @foreach ($loadedMessages as $key => $message)
                    {{-- keep track of the previous message --}}
                    @if ($key > 0)
                        @php $previousMessage = $loadedMessages->get($key - 1); @endphp
                    @endif
                    <div wire:key="{{ time() . $key }}" class="max-w-[85%] md:max-w-[78%] flex gap-2 relative mt-2 {{ $message->sender_id === auth()->id() ? 'ml-auto' : '' }}">
                        {{-- avatar --}}
                        <div class="{{ $previousMessage && $previousMessage->sender_id == $message->sender_id ? 'invisible' : 'hidden' }} shrink-0">
                            <x-avatar />
                        </div>
                        {{-- message body --}}
                        <div class="flex flex-col rounded-xl p-2.5 text-black bg-light {{ $message->sender_id !== auth()->id() ? 'border border-gray-200' : 'bg-primary text-white' }}">
                            <p class="whitespace-normal truncate text-sm md:text-base tracking-wide lg:tracking-normal">
                                {{ $message->body }}
                            </p>
                            <div class="ml-auto flex gap-2">
                                <p class="{{ $message->sender_id !== auth()->id() ? 'text-gray-500' : 'text-white' }} text-xs">
                                    {{ $message->created_at->format('g:i a') }}
                                </p>
                                {{-- message status , only show if message belongs to auth --}}
                                @if ($message->sender_id === auth()->id())
                                    <div x-data="{ markAsRead: @json($message->isRead()) }">
                                        {{-- double ticks --}}
                                        <span x-cloak x-show="markAsRead" class="text-gray-200">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2-all" viewBox="0 0 16 16">
                                                <path d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0l7-7zm-4.208 7-.896-.897.707-.707.543.543 6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0z"/>
                                                <path d="m5.354 7.146.896.897-.707.707-.897-.896a.5.5 0 1 1 .708-.708z"/>
                                            </svg>
                                        </span>
                                        {{-- single ticks --}}
                                        <span x-show="!markAsRead" class="text-gray-200">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                                                <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
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
        {{-- send message --}}
        <footer class="fixed bottom-0 left-0 w-full bg-white border-t border-gray-200">
            <div class="container mx-auto py-3">
                <form x-data="{ body: @entangle('body').defer }" @submit.prevent="$wire.sendMessage" method="POST" autocapitalize="off">
                    @csrf
                    <div class="input-group">
                        <input x-model="body" type="text" autocomplete="off" autofocus placeholder="Write your message here" maxlength="1700" class="form-control rounded-start">
                        <button x-bind:disabled="!body.trim()" class="btn btn-primary rounded-end" type="submit">Send</button>
                    </div>
                </form>
                @error('body')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
        </footer>
    </div>
</div>
