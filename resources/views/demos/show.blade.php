<x-guest-layout>
  <h1 class="text-4xl font-bold tracking-wide">This is {{  $demo->name }}</h1>

  <div class="mt-8">
    @foreach($plans as $plan)
      <div>
        <form action="/planes/{{ $plan->id }}/checkout" method="POST">
          @csrf
          <input type="hidden" name="demo_id" value="{{ $demo->id }}">
          <button class="underline text-indigo-700 font-semibold">Comprar {{ $plan->name }}</button>
        </form>
      </div>
    @endforeach
  </div>
</x-guest-layout>