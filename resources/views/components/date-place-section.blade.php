<div class="py-20 px-4 md:px-0" style="background-color: {{ $backgroundColor }}">
    <div class="max-w-6xl mx-auto">
        <x-section-title color="{{ $titleColor }}">Lugar y fecha</x-section-title>

        @if($subtitle)
            <div class="pt-8 text-center text-2xl">
                {{ $subtitle }}
            </div>
        @endif

        <div class="mt-20">
            <div class="flex flex-col items-center md:grid md:grid-cols-2 gap-8">
                <x-date-place-item
                    title-color="{{ $itemTitleColor }}"
                    place-color="{{ $itemPlaceColor }}"
                    hour-color="{{ $itemHourColor }}"
                    address-color="{{ $itemAddressColor }}"
                    maps-link-color="{{ $itemMapsLinkColor }}"
                    :rounded="$rounded"
                    title="Ceremonia"
                    place="Basílica de San Fernando"
                    hour="19:00"
                    text="{{ $text }}"
                    address="Madero Ote #85, Centro, Querétaro, Qro"
                    maps-link="#"
                />
                <div class="md:flex justify-end">
                    <x-date-place-item
                        :rounded="$rounded"
                        title="Recepción"
                        title-color="{{ $itemTitleColor }}"
                        place-color="{{ $itemPlaceColor }}"
                        hour-color="{{ $itemHourColor }}"
                        address-color="{{ $itemAddressColor }}"
                        maps-link-color="{{ $itemMapsLinkColor }}"
                        place="Quinta las Gardenias"
                        hour="21:00"
                        address="Prol. Constituyentes Ote #1202, Querétaro, Qro."
                        maps-link="#"
                        text="{{ $text }}"
                    />
                </div>
            </div>
        </div>
    </div>
</div>