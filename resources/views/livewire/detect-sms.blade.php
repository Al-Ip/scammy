<div class="chat">
    <div class="yours messages">
        <div class="message">
            Hey!
        </div>
        <div class="message">
            Not sure if your text could be spam?
        </div>
        <div class="message last">
            Enter it below and find out &#128269;
        </div>
    </div>
    <div class="mine messages">
        @if ($isScam)
            <div class="message last">
                Bad news! Your sms text is very likely spam!
            </div>
        @else
            <div class="message last">
                Good news! Your sms text is very likely not spam!
            </div>
        @endif
    </div>
    <div class="flex justify-end items-end mb-3">
        {{-- <span class="inputSms cursor-pointer overflow-auto max-h-56 block p-2.5 mt-5 w-full text-sm rounded-2xl border focus:outline-none
            text-white hover:bg-purple-400 focus:border-[#d36095] bg-[#d36095]"
            placeholder="Your message..." role="textbox" contenteditable>
            <textarea x-data="{ sms: @entangle('sms')}" x-text="sms" x-model="sms"
                class="inputSms cursor-pointer overflow-auto max-h-56 block p-2.5 mt-5 w-full text-sm rounded-2xl border focus:outline-none
                text-white hover:bg-purple-400 focus:border-[#d36095] bg-[#d36095]">
            </textarea>
        </span> --}}
        <div class="grow-wrap">
            <textarea x-data="{ sms: @entangle('sms')}" x-text="sms" x-model="sms"
                class="inputSms cursor-pointer overflow-auto max-h-56 block p-2.5 mt-5 w-full text-sm rounded-2xl border focus:outline-none
                text-white hover:bg-purple-400 focus:border-[#d36095] bg-[#d36095]"
                name="text" id="text" onInput="this.parentNode.dataset.replicatedValue = this.value">
            </textarea>
          </div>
        {{-- <textarea x-data="{ sms: @entangle('sms')}" x-text="sms" x-model="sms"
                class="inputSms cursor-pointer overflow-auto max-h-56 block p-2.5 mt-5 w-full text-sm rounded-2xl border focus:outline-none
                text-white hover:bg-purple-400 focus:border-[#d36095] bg-[#d36095]">
        </textarea> --}}
        <x-send-sms x-on:click="$wire.publishMessage" class="w-auto h-14 pl-2 text-pink-800 cursor-pointer hover:text-purple-400" />
    </div>
    <button>
</div>
