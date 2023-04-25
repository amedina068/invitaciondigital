<x-guest-layout>
  <h1 class="text-4xl font-bold tracking-wide">Invitacion para evento {{ $userPlan->name }} de {{ $userPlan->user->name }}</h1>


  @if($guestsGroup)
    Invitados {{ $guestsGroup->name }}

    <form action="/invitaciones/{{$userPlan->slug}}" method="POST">
      <input type="hidden" name="guests_group_uuid" value="{{ $guestsGroup->uuid }}">
      @csrf
      @method('PATCH')
      <div>
        <label for="">Asistencia</label>
        <select name="accept" id="">
          <option value="true">Si iremos</option>
          <option value="false">No iremos</option>
        </select>
      </div>
      <div>
        <label for="">Miembros que asistirán</label>
        <select name="confirmed_members" id="">
          @for($x = 1; $x<= $guestsGroup->members; $x++)
            <option value="{{ $x }}">{{ $x }}</option>
          @endfor
        </select>
      </div>
      <div>
        <label for="">Notas</label>
        <input name="notes" id="" type="text">
      </div>
      <div>
        <button>enviar</button>
      </div>
    </form>
  @endif

</x-guest-layout>