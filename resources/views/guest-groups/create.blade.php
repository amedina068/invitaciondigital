<x-app-layout>
  <x-slot:title>Agregar invitados</x-slot:title>
  <div>
    <form action="/invitados" method="POST" class="space-y-4">
    <div>
      @csrf
      <x-base-label for="name">Familia</x-base-label>
      <div class="mt-2 max-w-sm">
        <x-base-input name="name" id="name" type="text"/>  
      </div>
    </div>
    <div>
      <x-base-label for="members">Invitados</x-base-label>
      <div class="mt-2 max-w-sm">
        <x-base-input name="members" id="members" type="number"/>  
      </div>
    </div>
    <div>
      <x-base-label for="email">Email</x-base-label>
      <div class="mt-2 max-w-sm">
        <x-base-input name="email" id="email" type="email"/>  
      </div>
    </div>
    <div>
      <x-base-label for="phone">Teléfono</x-base-label>
      <div class="mt-2 max-w-sm">
        <x-base-input name="phone" id="phone" type="text"/>  
      </div>
    </div>
    <div>
      <x-base-primary-button type="submit">Guardar</x-base-primary-button>
    </div>
  </form>
  </div>
</x-guest-layout>