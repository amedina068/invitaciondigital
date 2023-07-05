<div class="bg-[#F8F9FA] py-16 px-4">
    <div class="max-w-7xl mx-auto">
        <x-section-title color="#152F4C">Los mejores momentos</x-section-title>
        <div class="grid sm:grid-cols-2 md:grid-cols-4 gap-8 mt-12">
            <div x-data="{ openModal: false }">
                <div class="relative">
                    <img src="/img/video-moments.png" class="w-full sm:w-auto">
                    <button x-on:click="openModal = true" class="absolute z-10 h-16 w-16 inset-0 m-auto">
                        <img src="/img/play-icon.png" alt="" class="h-16 w-16">
                    </button></button>
                </div>
                <x-video-modal src="/videos/video.mp4"></x-video-modal>
            </div>
            <div x-data="{ openModal: false }">
                <div class="relative">
                    <img src="/img/video-moments.png" class="w-full sm:w-auto">
                    <button x-on:click="openModal = true" class="absolute z-10 h-16 w-16 inset-0 m-auto">
                        <img src="/img/play-icon.png" alt="" class="h-16 w-16">
                    </button></button>
                </div>
                <x-video-modal src="/videos/video.mp4"></x-video-modal>
            </div>
            <div x-data="{ openModal: false }">
                <div class="relative">
                    <img src="/img/video-moments.png" class="w-full sm:w-auto">
                    <button x-on:click="openModal = true" class="absolute z-10 h-16 w-16 inset-0 m-auto">
                        <img src="/img/play-icon.png" alt="" class="h-16 w-16">
                    </button></button>
                </div>
                <x-video-modal src="/videos/video.mp4"></x-video-modal>
            </div>
            <div x-data="{ openModal: false }">
                <div class="relative">
                    <img src="/img/video-moments.png" class="w-full sm:w-auto">
                    <button x-on:click="openModal = true" class="absolute z-10 h-16 w-16 inset-0 m-auto">
                        <img src="/img/play-icon.png" alt="" class="h-16 w-16">
                    </button></button>
                </div>
                <x-video-modal src="/videos/video.mp4"></x-video-modal>
            </div>
        </div>
    </div>
</div>