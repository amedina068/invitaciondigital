<div class="bg-white py-20 px-4 md:px-0">
    <div class="" style="background-color: {{ $backgroundColor }}">
        <div class="max-w-7xl mx-auto">
            <x-section-title :font="$titleFont" color="#D28A55">Dress Code</x-section-title>
    
            <div class="mt-16">
                <div class="grid md:grid-cols-2 gap-12 sm:gap-8">
                    <x-dress-code-item
                        :rounded="$rounded"
                        :heading-color="$itemHeadingColor"
                        :title-color="$itemTitleColor"
                        :description-color="$itemDescriptionColor"
                        title="Caballeros"
                        subtitle="Smoking"
                        note="Es importante que no sea de color azul"
                    />

                    <x-dress-code-item
                        :rounded="$rounded"
                        :heading-color="$itemHeadingColor"
                        :title-color="$itemTitleColor"
                        :description-color="$itemDescriptionColor"
                        title="Damas"
                        subtitle="Vestido largo"
                        note="Es importante que no sea de color blanco"
                    />
                </div>
            </div>
        </div>  
    </div>
</div>