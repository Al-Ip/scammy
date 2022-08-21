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
        @endif
        @if ($isNotScam)
            <div class="message last">
                Good news! Your sms text is very likely not spam!
            </div>
        @endif
    </div>
    <div class="flex justify-end items-end mb-3">
        <textarea class="inputSms overflow-auto max-h-56 block p-2.5 mt-5 w-full text-sm rounded-2xl border focus:outline-none
            text-white hover:bg-purple-400 focus:border-[#d36095] bg-[#d36095]" wire:model.lazy="sms">{{ $sms }}</textarea>
        <x-send-sms wire:click="detect" class="w-auto h-14 pl-2 max-h-56 text-pink-800 cursor-pointer hover:text-purple-400" />
    </div>
    <button>

    <script>
        const tx = document.getElementsByTagName("textarea");
        for (let i = 0; i < tx.length; i++) {
        tx[i].setAttribute("style", "height:" + (tx[i].scrollHeight) + "px;overflow-y:hidden;");
        tx[i].addEventListener("input", OnInput, false);
        }

        function OnInput() {
        this.style.height = "auto";
        this.style.height = (this.scrollHeight) + "px";
        }
    </script>
</div>
