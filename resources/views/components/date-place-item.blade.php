<div class="flex space-x-6">
    <div>
        <x-rounded-default-img
            :rounded="$rounded"
            src="/img/demo-hero.png"
        />
    </div>
    <div>
        <div class="space-y-2">
            <p class="text-[#D28A55] text-lg">{{ $title }}</p>
            <p class="font-semibold text-lg text-[#152F4C]">{{ $place }}</p>
            <p class="font-semibold text-lg text-[#152F4C]">{{ $hour }}</p>
            <p class="text-lg text-[#152F4C] max-w-xs">{{ $address }}</p>
        </div>
        <div class="mt-6">
            <p class="text-[#D28A55] text-lg font-bold">
                <a href="{{ $mapsLink }}">Ir a Maps</a>
            </p>
        </div>
    </div>
</div>