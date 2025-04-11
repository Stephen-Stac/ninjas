<x-layout>
    <h1> {{ $ninja->name }}</h1>
    <div class="bg-grey-200 p-4 rounded">
        <p><strong>Skill Level: </strong>{{ $ninja->skill }}</p>
        <p><strong>About Me: </strong></p>
        <p>{{ $ninja->bio }}</p>
    </div>

    {{-- dojo info --}}
    <div class="border-2 border-dashed bg-white px-4 pb-4 my-4 rounded">
        <h3>Dojo's informaton</h3>
        <p><strong>Dojo Name: </strong>{{ $ninja->dojo->name }}</p>
        <p><strong>Location: </strong>{{ $ninja->dojo->location }}</p>
        <p><strong>About The Dojo: </strong></p>
        <p>{{ $ninja->dojo->description }}</p>
    </div>

     {{-- delete button --}}
    <form action="{{ route('destroy', $ninja->id) }}" method="POST">
    @csrf
    @method('DELETE')

    <button type="submit" class="btn my-4">Delete Member</button>
    </form>
</x-layout>
 
