<x-guest-layout>
    <p>Hola {{ Auth::user()->name }}</p>
    <p>este es tu dashboard</p>

    <p>
        <a href="/invitados/crear">Invitar familia</a>
    </p>

</x-guest-layout>