<x-layout title="Nova série">
    <h1>Nova série</h1>
    <form action="{{ route('series.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input
                type="nome"
                class="form-control"
                name="nome"
                id="nome"
                aria-describedby="nomeHelp"
                value="{{ old('nome') }}"
            >
        </div>

        <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>
</x-layout>