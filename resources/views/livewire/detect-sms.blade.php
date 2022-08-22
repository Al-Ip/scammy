{{-- <div class="inline-flex max-w-xl w-[100%]">
    <div class="chat">
         <div class="yours messages">
            @foreach ($smsInfoHistory as $key => $value)
                <x-chat-bubble chatPosition="{{ $value }}" chatText="{{ $value }}" />
            @endforeach
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
            <x-chat-bubble chatPosition="message last" chatText="Hello World!" />
            @if ($smsInfoHistory != null)
                @foreach ($smsInfoHistory as $key => $value)
                    <x-chat-bubble chatPosition="{{ $value }}" chatText="{{ $value }}" />
                @endforeach
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
            @endif
        </div>


        <div class="chat__message chat__message_B" style="--delay: 18s;">
            <div class="chat__content">
                <p>Thank you.</p>
            </div>
        </div>

        <div class="chat__message chat__message_A" style="--delay: 13s;">
            <div class="chat__content">
                <p>Mr.Doe, your current balance is $19,606.76</p>
            </div>
        </div>

        <div class="chat__message chat__message_A" style="--delay: 10s;">
            <div class="chat__content">
                <p>Sure, let me check...</p>
            </div>
        </div>

        <div class="chat__message chat__message_B" style="--delay: 6s;">
            <div class="chat__content">
                <p>Hi jane, I'm John Doe. <br />
                    I need to know my current account balance</p>
            </div>
        </div>

        <div class="chat__message  chat__message_A" style="--delay: 1s;">
            <div class="chat__content">
                <p>Hello, my name is Jane.<br />-
                    How can I help you?</p>
            </div>
        </div>
    </div>
    <div class="flex fixed bottom-0 z-10 flex-row justify-end items-end mb-3 mr-3">
        <textarea class="inputSms overflow-auto w-full max-w-xl max-h-56 block p-4 mt-5 text-sm rounded-2xl border focus:outline-none
            text-white hover:bg-purple-400 focus:border-[#d36095] bg-[#d36095]" wire:model.lazy="sms"
            name="text" oninput="this.style.height = ''; this.style.height = this.scrollHeight +'px'">{{ $sms }}</textarea>
        <x-send-sms wire:click="sendSms" class="h-14 pl-2 max-h-56 text-pink-800 cursor-pointer hover:text-purple-400" />
    </div>
</div> --}}


{{-- <div class="inline-flex max-w-xl w-[100%]">
    <div class="containerwrapper inline-flex max-w-xl w-[100%]">
        <div class="container">
            <div class="chat__message chat__message_B" style="--delay: 18s;">
                <div class="chat__content">
                    <p>Thank you.</p>
                </div>
            </div>

            <div class="chat__message chat__message_A" style="--delay: 13s;">
                <div class="chat__content">
                    <p>Mr.Doe, your current balance is $19,606.76</p>
                </div>
            </div>

            <div class="chat__message chat__message_A" style="--delay: 10s;">
                <div class="chat__content">
                    <p>Sure, let me check...</p>
                </div>
            </div>

            <div class="chat__message chat__message_B" style="--delay: 6s;">
                <div class="chat__content">
                    <p>Hi jane, I'm John Doe. <br />
                        I need to know my current account balance</p>
                </div>
            </div>

            <div class="chat__message  chat__message_A" style="--delay: 1s;">
                <div class="chat__content">
                    <p>Hello, my name is Jane.<br />-
                        How can I help you?</p>
                </div>
            </div>

            <div class="chat__message chat__message_B" style="--delay: 18s;">
                <div class="chat__content">
                    <p>Thank you.</p>
                </div>
            </div>

            <div class="chat__message chat__message_A" style="--delay: 13s;">
                <div class="chat__content">
                    <p>Mr.Doe, your current balance is $19,606.76</p>
                </div>
            </div>

            <div class="chat__message chat__message_A" style="--delay: 10s;">
                <div class="chat__content">
                    <p>Sure, let me check...</p>
                </div>
            </div>

            <div class="chat__message chat__message_B" style="--delay: 6s;">
                <div class="chat__content">
                    <p>Hi jane, I'm John Doe. <br />
                        I need to know my current account balance</p>
                </div>
            </div>

            <div class="chat__message  chat__message_A" style="--delay: 1s;">
                <div class="chat__content">
                    <p>Hello, my name is Jane.<br />-
                        How can I help you?</p>
                </div>
            </div>
        </div>
    </div>
    <div class="flex fixed bottom-0 z-10 flex-row justify-end items-end mb-3 mr-3">
        <textarea class="inputSms overflow-auto w-full max-w-xl max-h-56 block p-4 mt-5 text-sm rounded-2xl border focus:outline-none
            text-white hover:bg-purple-400 focus:border-[#d36095] bg-[#d36095]" wire:model.lazy="sms"
            name="text" oninput="this.style.height = ''; this.style.height = this.scrollHeight +'px'">{{ $sms }}</textarea>
        <x-send-sms wire:click="sendSms" class="h-14 pl-2 max-h-56 text-pink-800 cursor-pointer hover:text-purple-400" />
    </div>
</div> --}}

<div class="flex max-w-xl w-[100%]">
    <div class="chat-wrapper">
        <div class="chat pb-4">
            <div class="chat__message chat__message_B" style="--delay: 18s;">
                <div class="chat__content">
                    <p>Thank you.</p>
                </div>
            </div>

            <div class="chat__message chat__message_A" style="--delay: 13s;">
                <div class="chat__content">
                    <p>Mr.Doe, your current balance is $19,606.76</p>
                </div>
            </div>

            <div class="chat__message chat__message_A" style="--delay: 10s;">
                <div class="chat__content">
                    <p>Sure, let me check...</p>
                </div>
            </div>

            <div class="chat__message chat__message_B" style="--delay: 6s;">
                <div class="chat__content">
                    <p>Hi jane, I'm John Doe. <br />
                        I need to know my current account balance</p>
                </div>
            </div>

            <div class="chat__message  chat__message_A" style="--delay: 1s;">
                <div class="chat__content">
                    <p>Hello, my name is Jane.<br />-
                        How can I help you?</p>
                </div>
            </div>
        </div>
    </div>
    <div class="flex fixed bottom-0 z-10 w-11/12 max-w-xl flex-row justify-end items-end mb-3 mr-3">
        <textarea class="inputSms overflow-auto w-full max-h-56 block p-4 mt-5 text-sm rounded-2xl border focus:outline-none
            text-white hover:bg-purple-400 focus:border-[#d36095] bg-[#d36095]" wire:model.lazy="sms"
            name="text" oninput="this.style.height = ''; this.style.height = this.scrollHeight +'px'">{{ $sms }}</textarea>
        <x-send-sms wire:click="sendSms" class="h-14 pl-2 text-pink-800 cursor-pointer hover:text-purple-400" />
    </div>
</div>
