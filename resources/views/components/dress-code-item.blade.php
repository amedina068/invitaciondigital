<div class="flex flex-col sm:flex-row sm:space-x-8">
    <div>
        <x-rounded-default-img
            :rounded="$rounded"
            src="/img/demo-hero.png"
        />
    </div>
    <div class="space-y-2 mt-5 sm:mt-0">
        <p class="text-xl font-semibold" style="color: {{ $headingColor }}">{{ $title }}</p>
        <p class="font-bold" style="color: {{ $titleColor }}">{{ $subtitle }}</p>
        <p class="text-lg" style="color: {{ $descriptionColor }}">{{ $note }}</p>
    </div>
</div>