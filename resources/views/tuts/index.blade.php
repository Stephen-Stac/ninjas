<x-layout>
    <h2>Currently available Crown members</h2>
    

    <ul>
        @foreach ($ninjas as $ninja)
            <li>
                <x-card href="{{ route('show', $ninja->id) }}" :highlight="$ninja['skills'] > 70">
                    <div>
                        <h3>{{ $ninja->name }}</h3>
                        <p>{{ $ninja->dojo->name }}</p>
                    </div>
                </x-card>
            </li>
        @endforeach
    </ul>
    {{-- pagination --}}
    {{ $ninjas->links() }} 
</x-layout>