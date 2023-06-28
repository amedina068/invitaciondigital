<div>
    <div>
        <div class="grid grid-cols-2 gap-10">
            <div class="flex flex-col items-center">
                <x-rounded-default-img
                    :rounded="$rounded"
                    src="/img/demo-hero.png"
                />
                <p class="mt-4 text=[#152F4C] font-semibold">{{ $he }}</p>
            </div>
            <div class="flex flex-col items-center">
                <x-rounded-default-img
                    :rounded="$rounded"
                    src="/img/demo-hero.png"
                />
                <p class="mt-4 text=[#152F4C] font-semibold">{{ $she }}</p>
            </div>
        </div>
        <h4 class="text-center mt-6 text-lg text-[#D28A55]">{{ $title }}</h4>
    </div>
</div>