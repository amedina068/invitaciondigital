<x-guest-layout>
   {{ session('errors') }}

  <form action="/checkout" method="POST">

    @csrf
    <div>
      <label for="">name</label>
      <input type="text" name="name">
    </div>
    <div>
      <label for="">email</label>
      <input type="text" name="email">
    </div>
    <div>
      <label for="">nombre de evento</label>
      <input type="text" name="name">
    </div>
    <div>
      <label for="">plan</label>
      <select name="plan_id" id="">
        @foreach($plans as $plan)
          <option value="{{ $plan->id }}">{{ $plan->name }}</option>
        @endforeach
      </select>
    </div>
    <div>
      <button>pay</button>
    </div>
  </form> 


</x-guest-layout>