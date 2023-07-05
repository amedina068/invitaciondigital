<div style="background-color: #F8F9FA;" class="py-16" x-data="{ openModal: false }">
    <div class="max-w-7xl mx-auto">
        <x-section-title font="Rochester" color="#52323D">Los mejores momentos</x-section-title>
        <div class="mt-16 relative">
            <img src="/img/demo-hero.png" alt="" class="w-full h-96 object-cover">
            <button x-on:click="openModal = true" class="absolute z-10 h-16 w-16 inset-0 m-auto">
                <img src="/img/play-icon.png" alt="" class="h-16 w-16">
            </button></button>
        </div>
    </div>
    <x-video-modal src="/videos/video.mp4"></x-video-modal>
</div>