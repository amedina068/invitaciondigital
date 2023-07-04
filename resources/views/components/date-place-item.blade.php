<div class="flex space-x-6">
    <div>
        @if($src)
        <x-rounded-default-img
            :rounded="$rounded"
            src="{{ $src }}"
        />
        @endif
    </div>
    <div class="{{ $text == 'center' ? 'text-center' : 'text-left' }}">
        <div class="space-y-2">
            <p class="text-lg" style="color: {{ $titleColor }}">{{ $title }}</p>
            <p class="font-semibold text-lg" style="color: {{ $placeColor }}">{{ $place }}</p>
            <p class="font-semibold text-lg" style="color: {{ $hourColor }}">{{ $hour }}</p>
            <p class="text-lg max-w-xs" style="color: {{ $addressColor }}">{{ $address }}</p>
        </div>
        <div class="mt-6">
            <p class="text-lg font-bold" style="color: {{ $mapsLinkColor }}">
                <a href="{{ $mapsLink }}">Ir a Maps</a>
            </p>
        </div>
    </div>
</div>