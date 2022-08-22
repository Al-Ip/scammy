@props([
    'chatPosition',
    'chatText'
])

<div class="{{ $chatPosition }} ease-in duration-900">
    {{ $chatText }}
</div>
