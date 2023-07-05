<div class="h-32 hidden sm:block" style="background-color: {{ $backgroundColor }};">
    <nav class="max-w-7xl mx-auto h-32">
        <ul class="w-full flex items-center font-medium text-lg h-full justify-between" style="color: {{ $textColor }};">
            @if($logo)
            <div>
                <h1 class="text-5xl text-white">D&M</h1>
            </div>
            @endif
            <li><a href="#">Nuestra historia</a></li>
            <li><a href="#">Nuestros momentos</a></li>
            <li><a href="#">Save the date</a></li>
            <li><a href="#">Timeline</a></li>
            <li><a href="#">Dress code</a></li>
            <li><a href="#">Mesa de regalos</a></li>
        </ul>        
    </nav>
</div>
<div class="block sm:hidden fixed z-40 top-0 w-full px-5 mt-5" x-data="{ openMenu: false }">
    <div class="relative">
        <div class="bg-white py-5 rounded-lg shadow-lg px-5 w-full inset-x-0" x-show="openMenu">
            <div class="h-5"></div>
            <nav>
                <ul>
                    <li><a class="inline-block py-3 px-2 font-medium" href="#">Nuestra historia</a></li>
                    <li><a class="inline-block py-3 px-2 font-medium" href="#">Nuestros momentos</a></li>
                    <li><a class="inline-block py-3 px-2 font-medium" href="#">Save the date</a></li>
                    <li><a class="inline-block py-3 px-2 font-medium" href="#">Timeline</a></li>
                    <li><a class="inline-block py-3 px-2 font-medium" href="#">Dress code</a></li>
                    <li><a class="inline-block py-3 px-2 font-medium" href="#">Mesa de regalos</a></li>
                </ul>
            </nav>
        </div>
        <button x-on:click="openMenu = ! openMenu" class="top-0 right-0 absolute h-10 w-10 flex justify-center items-center rounded-lg bg-white border shadow-md">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </button>
    </div>
</div>