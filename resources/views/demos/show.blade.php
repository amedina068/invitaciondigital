<x-guest-layout>
  <h1 class="text-4xl font-bold tracking-wide">This is {{  $demo->name }}</h1>

  <div class="mt-8">
    @foreach($plans as $plan)
      <div>
        <a href="/planes/{{ $plan->id }}/checkout" class="underline text-indigo-700 font-semibold">Comprar {{ $plan->name }}</a>
      </div>
    @endforeach
  </div>
</x-guest-layout>