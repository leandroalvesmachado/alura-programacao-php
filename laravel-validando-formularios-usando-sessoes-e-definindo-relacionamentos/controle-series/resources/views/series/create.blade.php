<x-layout title="Nova série">
    <h1>Nova série</h1>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <x-series.form :action="route('series.store')" />
</x-layout>