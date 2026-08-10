<x-layout>
    <form method ="POST" action="/ideas" >
      @csrf
        <div class="col-span-full">
          <p>
            <a href="/ideas/create" class="underline">Create an idea.</a></p>
          </div>

         
        @if ($ideas->count()) 
    <div class = "mt-6 text-white">
      <h2 class = "font-bold">Your Ideas</h2>
      <ul class = "mt-6">
        @foreach ($ideas as $idea)
           <a href="/ideas/{{$idea->id}}" class ="text-sm hover:text-blue-500">{{ $idea->description }}</a> <br>
        @endforeach
      </ul>
    </div>
    @else
      <p>No Ideas yet. </p>
    @endif
</x-layout>
