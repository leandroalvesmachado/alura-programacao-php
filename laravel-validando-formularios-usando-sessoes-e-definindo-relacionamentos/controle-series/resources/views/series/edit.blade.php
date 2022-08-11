<x-layout title="Editar série {{ $serie->nome }}">
    <h1>Editar série</h1>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <x-series.form :action="route('series.update', $serie->id)" :nome="$serie->nome" />
</x-layout>