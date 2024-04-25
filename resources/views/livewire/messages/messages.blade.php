<div
    class="fixed-top left-0 h-100 w-100 bg-white border lg-shadow overflow-hidden lg-top-16 lg-left-2 lg-right-2 lg-max-h-90 rounded-top-lg">
    <div class="d-none d-lg-flex position-relative w-100 md-w-25 xl-w-25 overflow-y-auto h-100 border">
        <livewire:chat.chat-list :selectedConversation="$selectedConversation" :query="$query">
    </div>
    <div class="d-grid w-100 border-start h-100 position-relative overflow-y-auto" style="contain:content">
        <livewire:chat.chat-box :selectedConversation="$selectedConversation">
    </div>
</div>
