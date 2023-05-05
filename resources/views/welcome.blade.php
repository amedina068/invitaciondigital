<x-guest-layout>
    <div>
        <div class="max-w-7xl mx-auto">
            <div class="py-4 flex justify-between items-center">
                <div>
                    <img src="/img/invitacion-logo.png" alt="" class="w-40">
                </div>    
                <div>
                    <nav>
                        <ul class="flex space-x-8">
                            <li class="font-semibold underline text-primary">Home</li>
                            <li class="font-semibold underline text-primary">Nosotros</li>
                            <li class="font-semibold underline text-primary inline-flex space-x-2 items-center">
                                <span>Invitaciones</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-4 h-4">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                </svg>

                            </li>
                            <li class="font-semibold underline text-primary">FAQ's</li>
                            <li class="font-semibold underline text-primary">Contacto</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="relative h-[750px] overflow-hidden">
            <div class="absolute top-0 right-0">
                <svg width="802" height="909" viewBox="0 0 802 909" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M89.4999 384C-155 180.5 162.314 -146.199 344.048 -161.151L931.506 61.4819L954.536 908.564C723 855.5 189.5 958.5 216.967 822.297C296.079 430.008 204.315 479.562 89.4999 384Z" fill="#DEF0EB"/>
                </svg>    
            </div>
            <div class="absolute right-0 mt-20 mr-56">
                <img src="/img/novios.png" alt="">
            </div>            
            <div class="inset-0 absolute" style="background: linear-gradient(0deg, #F4F4F4 0%, rgba(255, 255, 255, 0) 100%);"></div>
            <div class="relative z-20 max-w-7xl mx-auto">
                <div>
                    <h1 class="text-primary text-5xl mt-56">
                        <span>Te ayudamos a vivir</span>
                        <span class="block font-bold">el evento de tus sueños</span>
                    </h1>
                    <p class="mt-8 text-primary max-w-xl text-lg">
                        Comparte todos los detalles de tu evento y asegúrate de vivir ese gran día con las personas que más quieres.
                    </p>

                    <a href="" class="block max-w-lg mt-8 bg-secondary py-4 text-center rounded-lg text-white font-semibold">Ver ejemplos</a>

                </div>
            </div>
            
        </div>

    </div>  
    <div class="grid grid-cols-3 py-8 max-w-7xl mx-auto gap-5">
        @foreach($demos as $demo)
            <div>
                <a href="/demos/{{ $demo->id }}" class="underline font-semibold text-indigo-700">{{ $demo->name }}</a>
            </div>
        @endforeach
    </div>
</x-guest-layout>