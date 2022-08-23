@props([
    'chatType',
    'chatText',
    'chatDelay'
])

<div class="chat__message  chat__message_{{ $chatType }}" style="--delay: {{ $chatDelay }};">
    <div class="chat__content">
        <p>{{ $chatText }}</p>
    </div>
</div>
