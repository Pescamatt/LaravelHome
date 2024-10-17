<x-layout>
    <x-slot:heading>Home Page</x-slot:heading>
    <h1>Hello this is the Home page</h1>

    @foreach($jobs as $job)
        <li>{{ $job['title'] }}</li>
    @endforeach
</x-layout>
