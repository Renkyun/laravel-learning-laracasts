<x-layout>
<!-- directives -->

{{-- @dump($tasks)

@if ($tasks)                IF 
    <p>yes if works</p> 
@endif

 @foreach($tasks as $task) FOR EACH
    <li>{{ $task }}</li>    
 @endforeach --}}

{{-- @forelse ($tasks as $task) FOR ELSE WITH EMPTY
    <li>{{$task}}</li>
@empty
    <p>There is no active tasks.</p>    
@endforelse --}}

{{-- @auth                  FOR AUTHORIZATION
@endauth --}}

{{-- @guest             FOR GUESTS (AUTHORIZATION)
    
@endguest --}}

{{-- @can('edit', $post)            
    <a href="/posts/1/edit">Edit</a>
@endcan --}}
</x-layout>

<!-- and many more-->