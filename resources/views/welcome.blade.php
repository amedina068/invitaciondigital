<x-guest-layout>
    <div x-data="{menuOpen: false}">
        <div class="max-w-7xl mx-auto">
            <div class="py-4 flex justify-between items-center px-4">
                <div>
                    <img src="/img/invitacion-logo.png" alt="" class="w-32 lg:w-40">
                </div>    
                <div class="block lg:hidden">
                    <button x-on:click="menuOpen = true" class="text-secondary h-10 w-10 rounded-lg border-secondary border-2 inline-flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>
                </div>
                <div x-show="menuOpen" class="absolute z-50 w-full inset-0">
                    <div class="bg-white shadow-xl px-4 pt-4 pb-8 rounded-b-xl">
                        <div class="flex justify-between items-center">
                            <div>
                                <img src="/img/invitacion-logo.png" alt="" class="w-32 lg:w-40">
                            </div>    
                            <button x-on:click="menuOpen = false" class="text-4xl text-secondary h-10 w-10 rounded-lg border-secondary border-2 inline-flex items-center justify-center">
                                &times;
                            </button>
                        </div>
                        <ul class="mt-8 space-y-8">
                            <li><a href="" class="font-medium text-secondary">Home</a></li>
                            <li><a href="" class="font-medium text-secondary">Nosotros</a></li>
                            <li><a href="" class="font-medium text-secondary">Invitaciones</a></li>
                            <li><a href="" class="font-medium text-secondary">FAQ's</a></li>
                            <li><a href="" class="font-medium text-secondary">Contacto</a></li>
                        </ul>
                    </div>
                </div>
                <div class="lg:block hidden">
                    <nav>
                        <ul class="flex space-x-8">
                            <li class="font-semibold  text-primary">Home</li>
                            <li class="font-semibold  text-primary">Nosotros</li>
                            <li class="font-semibold  text-primary inline-flex space-x-2 items-center">
                                <span>Invitaciones</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-4 h-4">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                </svg>

                            </li>
                            <li class="font-semibold  text-primary">FAQ's</li>
                            <li class="font-semibold  text-primary">Contacto</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="relative h-[600px] px-4  lg:px-0 lg:h-[750px] overflow-hidden">
            <div class="block absolute -mt-5 lg:mt-0 top-0 right-0">
                <svg width="802" height="909" viewBox="0 0 802 909" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M89.4999 384C-155 180.5 162.314 -146.199 344.048 -161.151L931.506 61.4819L954.536 908.564C723 855.5 189.5 958.5 216.967 822.297C296.079 430.008 204.315 479.562 89.4999 384Z" fill="#DEF0EB"/>
                </svg>    
            </div>
            <div class="h-32 absolute right-0 mt-48 lg:mt-20 lg:mr-56">
                <img src="/img/novios.png" class="opacity-75 lg:opacity-100" alt="">
            </div>            
            <div class="inset-0 absolute" style="background: linear-gradient(0deg, #F4F4F4 0%, rgba(255, 255, 255, 0) 100%);"></div>
            <div class="relative z-20 max-w-7xl mx-auto">
                <div>
                    <h1 class="text-primary text-3xl lg:text-5xl mt-24 lg:mt-56">
                        <span>Te ayudamos a vivir</span>
                        <span class="mt-2 block font-bold">el evento de tus sueños</span>
                    </h1>
                    <p class="mt-8 text-primary max-w-xl text-lg">
                        Comparte todos los detalles de tu evento y asegúrate de vivir ese gran día con las personas que más quieres.
                    </p>

                    <a href="" class="inline-flex items-center justify-center text-base px-4 lg:px-6 block max-w-lg mt-8 bg-secondary py-2 lg:py-4 text-center rounded lg:rounded-lg text-white font-medium lg:font-semibold">Ver ejemplos</a>

                </div>
            </div>
            
        </div>
    </div> 

    <div class="bg-white py-24">
        <div class="max-w-7xl mx-auto">
            <div class="grid px-4 lg:px-0 lg:grid-cols-2 gap-8">
                <div class="flex items-center">
                    <p class="text-3xl lg:text-5xl font-bold text-primary tracking-wide leading-normal">Ventajas de tu <br>invitación digital</p>
                </div>
                <div>
                    <p class="text-lg lg:text-2xl text-primary">
                        Comparte con tus invitados todos los detalles de tu evento para que sea perfecto.
                    </p>
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-x-8 gap-y-12 mt-12">
                        <div class="flex flex-col lg:items-center space-y-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-secondary w-10 h-10">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                            </svg>
                            <span class="block lg:text-center font-semibold text-primary">Comparte <br>en un click</span>
                        </div>
                        <div class="flex flex-col lg:items-center space-y-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-secondary w-10 h-10">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                            </svg>
                            <span class="block lg:text-center text-primary font-semibold">Confirmación de asistencia</span>
                        </div>
                        <div class="flex flex-col lg:items-center space-y-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-secondary w-10 h-10">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                            </svg>
                            <span class="block lg:text-center text-primary font-semibold">Mapa GPS</span>
                        </div>
                        <div class="flex flex-col lg:items-center space-y-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-secondary w-10 h-10">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                            </svg>
                            <span class="block lg:text-center text-primary font-semibold">Mesa de <br>regalos</span>
                        </div>
                        <div class="flex flex-col lg:items-center space-y-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-secondary w-10 h-10">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                            </svg>
                            <span class="block lg:text-center text-primary font-semibold">Dress code</span>
                        </div>
                        <div class="flex flex-col lg:items-center space-y-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-secondary w-10 h-10">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                            </svg>
                            <span class="block lg:text-center text-primary font-semibold">Timeline <br>del evento</span>
                        </div>
                    </div>
                    <div class="mt-16">
                        <a href="" class="block w-full mt-8 bg-secondary py-4 text-center rounded-lg text-white font-semibold">Comprar</a>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <div class="bg white py-12 lgp:y-24">
        <div class="max-w-7xl mx-auto px-4 lg:px-0">
            <h2 class="lg:text-center text-3xl lg:text-5xl text-primary">La invitación perfecta para cada momento</h2>
        </div>
        <div class="mt-12 relative px-4 lg:px-0">
            <div class="h-[550px] absolute mt-24 z-0 bg-tertiary w-full -ml-32 rounded-r-xl"></div>
            <div class="max-w-7xl mx-auto">

                <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 relative z-10">
                    <div class="border border-gray-200 bg-white rounded-xl px-6 lg:px-8 py-8 lg:py-16 flex flex-col items-center justify-center">
                        <div class="h-24 w-24 bg-quatertiary rotate-45 rounded-xl"></div>
                        <div class="mt-8">
                            <p class="text-center text-primary font-semibold">XV años</p>
                        </div>
                    </div>
                    <div class="border border-gray-200 bg-white rounded-xl px-6 lg:px-8 py-8 lg:py-16 flex flex-col items-center justify-center">
                        <div class="h-24 w-24 bg-quatertiary rotate-45 rounded-xl"></div>
                        <div class="mt-8">
                            <p class="text-center text-primary font-semibold">XV años</p>
                        </div>
                    </div>
                    <div class="border border-gray-200 bg-white rounded-xl px-6 lg:px-8 py-8 lg:py-16 flex flex-col items-center justify-center">
                        <div class="h-24 w-24 bg-quatertiary rotate-45 rounded-xl"></div>
                        <div class="mt-8">
                            <p class="text-center text-primary font-semibold">XV años</p>
                        </div>
                    </div>
                    <div class="border border-gray-200 bg-white rounded-xl px-6 lg:px-8 py-8 lg:py-16 flex flex-col items-center justify-center">
                        <div class="h-24 w-24 bg-quatertiary rotate-45 rounded-xl"></div>
                        <div class="mt-8">
                            <p class="text-center text-primary font-semibold">XV años</p>
                        </div>
                    </div>
                    <div class="border border-gray-200 bg-white rounded-xl px-6 lg:px-8 py-8 lg:py-16 flex flex-col items-center justify-center">
                        <div class="h-24 w-24 bg-quatertiary rotate-45 rounded-xl"></div>
                        <div class="mt-8">
                            <p class="text-center text-primary font-semibold">XV años</p>
                        </div>
                    </div>
                    <div class="border border-gray-200 bg-white rounded-xl px-6 lg:px-8 py-8 lg:py-16 flex flex-col items-center justify-center">
                        <div class="h-24 w-24 bg-quatertiary rotate-45 rounded-xl"></div>
                        <div class="mt-8">
                            <p class="text-center text-primary font-semibold">XV años</p>
                        </div>
                    </div>
                    <div class="border border-gray-200 bg-white rounded-xl px-6 lg:px-8 py-8 lg:py-16 flex flex-col items-center justify-center">
                        <div class="h-24 w-24 bg-quatertiary rotate-45 rounded-xl"></div>
                        <div class="mt-8">
                            <p class="text-center text-primary font-semibold">XV años</p>
                        </div>
                    </div>
                    <div class="border border-gray-200 bg-white rounded-xl px-6 lg:px-8 py-8 lg:py-16 flex flex-col items-center justify-center">
                        <div class="h-24 w-24 bg-quatertiary rotate-45 rounded-xl"></div>
                        <div class="mt-8">
                            <p class="text-center text-primary font-semibold">XV años</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg white py-24">
        <div class="max-w-7xl mx-auto px-4 lg:px-0">
            <h2 class="lg:text-center text-3xl text-left lg:text-5xl text-primary">Testimonios</h2>
        </div>
    </div>
    <div class="grid grid-cols-3 py-8 max-w-7xl mx-auto gap-5">
        @foreach($demos as $demo)
            <div>
                <a href="/demos/{{ $demo->slug }}" class="underline font-semibold text-indigo-700">{{ $demo->name }}</a>
            </div>
        @endforeach
    </div>
</x-guest-layout>