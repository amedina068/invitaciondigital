<div>
    <div>
        <div class="grid grid-cols-2 gap-10">
            <div class="flex flex-col items-center">
                <x-rounded-default-img
                    :rounded="$rounded"
                    src="/img/demo-hero.png"
                />
                <p class="mt-4 font-semibold"  style="color: {{ $heColor }}">{{ $he }}</p>
            </div>
            <div class="flex flex-col items-center">
                <x-rounded-default-img
                    :rounded="$rounded"
                    src="/img/demo-hero.png"
                />
                <p class="mt-4 font-semibold" style="color: {{ $sheColor }}">{{ $she }}</p>
            </div>
        </div>
        <h4 class="text-center mt-6 text-lg" style="color: {{ $titleColor }}">{{ $title }}</h4>
    </div>
</div>