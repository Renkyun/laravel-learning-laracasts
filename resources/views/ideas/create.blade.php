<x-layout>
  <form method ="POST" action="/ideas" >
    @csrf
    <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4 mx-auto">
      <legend class="fieldset-legend">New Idea</legend>
    
      <label class="label" for="description">Description</label>
      <textarea id="description" name="description" class="textarea" placeholder="Your Idea"></textarea>


      <button class="btn btn-neutral mt-4">Create</button>
    </fieldset>
      </form>
</x-layout>
