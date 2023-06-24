<x-layout title="Novo Evento">

    <form action="{{ route('eventos.store') }}" method="post">
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
                <label for="cpf_cliente" class="form-label">CPF do cliente:</label>
                <input type="number"
                       id="cpf_cliente"
                       name="cpf_cliente"
                       class="form-control"
                       value="{{ old('cpf_cliente') }}">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>
</x-layout>
