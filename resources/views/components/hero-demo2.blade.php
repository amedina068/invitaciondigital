<div x-data="{ openModal: false }">
    <div class="relative h-screen h-[650px]" style="background-image:url('/img/demo-hero.png'); background-position: center; background-size: cover; background-repeat: no-repeat;">
        <div class=" max-w-4xl mx-auto text-center w-full flex flex-col items-center">
            <button class="mt-64" x-on:click="openModal = true">
                <img src="/img/play-icon.png" alt="" class="h-16 w-16">
            </button>
            <div class="mt-12 space-x-2">
                <h2 class="inline-block text-white text-4xl" style="color:#ECA98E">Nuestra boda</h2>    
                <p class="inline-block text-white font-semibold text-4xl mt-5">17/03/2023</p>
            </div>
            <h1 class="text-8xl mt-5" style="color:#ECA98E">Martha & Alan</h1>
        </div>
    </div>
    <x-video-modal src="/videos/video.mp4"></x-video-modal>
</div>