<x-layout title="Séries">
    <h1>Séries</h1>
    <a href="series/criar" class="btn btn-dark mb-3">Adicionar</a>
    <ul class="list-group">
        @foreach ($series as $serie)
        <li class="list-group-item">{{ $serie->nome }}</li>
        @endforeach
    </ul>
</x-layout>