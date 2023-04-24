<x-guest-layout>
    <div class="grid grid-cols-3 py-8 max-w-7xl mx-auto gap-5">
        @foreach($demos as $demo)
            <div>
                <a href="/demos/{{ $demo->id }}" class="underline font-semibold text-indigo-700">{{ $demo->name }}</a>
            </div>
        @endforeach
    </div>
</x-guest-layout>