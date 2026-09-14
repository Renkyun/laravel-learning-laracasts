<x-layout>
  <form method ="POST" action="/ideas" >
    @csrf
      <div class="col-span-full">
        <p>
          <a href="/ideas/create" class="underline">Create an idea.</a>
        </p>
      </div>

      @if ($ideas->count()) 
        <div class="mt-6 text-white">
          <h2 class="font-bold">Your Ideas</h2>
          <ul class="mt-6 grid grid-cols-2 gap-x-4 gap-y-6">
            @foreach ($ideas as $idea)
              <x-idea-card href="/ideas/{{$idea->id}}">
                {{ $idea->description }}
              </x-idea-card>
            @endforeach
          </ul>
        </div>
      @else
        <p>No Ideas yet.</p>
      @endif
</x-layout>