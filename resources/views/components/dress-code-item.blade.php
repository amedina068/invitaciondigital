<div class="flex space-x-8">
    <div>
        <x-rounded-default-img
            :rounded="$rounded"
            src="/img/demo-hero.png"
        />
    </div>
    <div class="space-y-2">
        <p class="text-xl font-semibold" style="color: {{ $headingColor }}">{{ $title }}</p>
        <p class="font-bold" style="color: {{ $titleColor }}">{{ $subtitle }}</p>
        <p class="text-lg" style="color: {{ $descriptionColor }}">{{ $note }}</p>
    </div>
</div>