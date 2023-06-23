<x-layout title="Novo Cliente">

    <form action="{{ route('clientes.store') }}" method="post">
        @csrf

        <div class="row mb-3">
            <div class="col-8">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text"
                       autofocus
                       id="nome"
                       name="nome"
                       class="form-control"
                       value="{{ old('nome') }}">
            </div>

            <div class="col-4">
                <label for="nomeEvento" class="form-label">Nome do evento:</label>
                <input type="text"
                       id="nomeEvento"
                       name="nomeEvento"
                       class="form-control"
                       value="{{ old('nomeEvento') }}">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>
</x-layout>
