<x-app-layout>
    <x-slot:title>Dashboard</x-slot:title>
    
    <p>Hola {{ Auth::user()->name }}</p>
    
    <p>
        <a href="/invitados/crear">Invitar familia</a>
    </p>

</x-app-layout>