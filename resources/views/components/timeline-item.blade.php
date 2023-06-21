<div class="max-w-lg w-full mx-auto grid grid-cols-5">
    <div class="col-span-2">
        @if(! $right)
        <div class="{{ $right ? 'pl-4' : 'pr-4' }}">
            <div class="space-y-1 max-w-[16rem]">
                <p class="{{ $right ? '' : 'text-right' }} font-bold text-lg text-[#D28A55]">{{ $title }}</p>
                <p class="{{ $right ? '' : 'text-right' }} font-bold text-white">{{ $place }}</p>
                <p class="{{ $right ? '' : 'text-right' }} text-white">{{ $time }}</p>
            </div>
            <p class="mt-2 {{ $right ? '' : 'text-right' }}">
                <a href="{{ $mapsLink }}" class="text-[#D28A55] font-bold">Ir a Maps</a>
            </p>
        </div>
        @endif
    </div>
    <div class="col-span-1 flex justify-center">
        <img src="/img/church-icon.png" class="h-20" alt="">
    </div>
    <div class="col-span-2">
        @if($right)
        <div class="{{ $right ? 'pl-4' : 'pr-4' }}">
            <div class="space-y-1 max-w-[16rem]">
                <p class="{{ $right ? '' : 'text-right' }} font-bold text-lg text-[#D28A55]">{{ $title }}</p>
                <p class="{{ $right ? '' : 'text-right' }} font-bold text-white">{{ $place }}</p>
                <p class="{{ $right ? '' : 'text-right' }} text-white">{{ $time }}</p>
            </div>
            <p class="mt-2 {{ $right ? '' : 'text-right' }}">
                <a href="{{ $mapsLink }}" class="text-[#D28A55] font-bold">Ir a Maps</a>
            </p>
        </div>
        @endif
    </div>
</div>