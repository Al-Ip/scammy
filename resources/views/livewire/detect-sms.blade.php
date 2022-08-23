<div class="flex max-w-xl w-[100%]">
    <div class="chat-wrapper">
        <div class="chat pb-4" x-data="{ messages: @entangle('conversationHistory')}">
            @foreach ($conversationHistory as $message)
                <x-chat-bubble chatType="{{ $message['type'] }}" chatText="{{ $message['text'] }}" chatDelay="{{ $message['delay'] }}" />
            @endforeach
        </div>
    </div>
    <div class="flex fixed bottom-0 z-10 w-11/12 max-w-xl flex-row justify-end items-end mb-3 mr-3">
        <textarea class="inputSms overflow-auto w-full max-h-56 block p-4 mt-5 text-sm rounded-2xl border focus:outline-none
            text-white hover:bg-purple-400 focus:border-[#d36095] bg-[#d36095]" wire:model.lazy="sms"
            name="text" oninput="this.style.height = ''; this.style.height = this.scrollHeight +'px'">{{ $sms }}</textarea>
        <x-send-sms wire:click="sendSms" class="h-14 pl-2 text-pink-800 cursor-pointer hover:text-purple-400" />
    </div>
</div>
