<div class="fixed h-full flex bg-white lg:shadow-sm overflow-hidden inset-0 rounded-t-lg">
    <div class="hidden lg:flex relative w-full md:w-[320px] xl:w-[400px] overflow-y-auto shrink-0 h-full">
        <livewire:chat.chat-list :selectedConversation="$selectedConversation" :query="$query">
    </div>

    <div class="grid border-l w-full h-full relative overflow-y-auto" style="contain:content">
        <livewire:chat.chat-box :selectedConversation="$selectedConversation">
    </div>
</div>
