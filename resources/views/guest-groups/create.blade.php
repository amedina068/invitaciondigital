<x-guest-layout>
  <form action="/invitados" method="POST">
    @csrf
    <div>
      <label for="">name</label>
      <input type="text" name="name">
    </div>
    <div>
      <label for="">cantidad de invitados</label>
      <input type="text" name="members">
    </div>
    <div>
      <label for="">email</label>
      <input type="text" name="email">
    </div>
    <div>
      <label for="">tel</label>
      <input type="text" name="phone">
    </div>
    <div>
      <button>guardar</button>
    </div>
  </form>
</x-guest-layout>