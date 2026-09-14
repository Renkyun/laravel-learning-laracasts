<a {{$attributes->merge(['class' => 'card bg-neutral text-neutral-content w-96 transition-colors duration-200 hover:bg-blue-500 hover:text-primary-content']) }}>
  <div class="card-body">
    <h2 class="card-title">{{ $slot }}</h2>
  </div>
</a>