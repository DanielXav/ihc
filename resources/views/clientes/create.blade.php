<x-layout title="Novo Cliente">

    <form action="{{ route('clientes.store') }}" method="post">
        @csrf

        <div class="form-group">
            <label for="cpf">CPF:</label>
            <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Digite o CPF" required
                   value="{{ old('cpf') }}">
        </div>

        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome" required
                   value="{{ old('nome') }}">
        </div>

        <div class="form-group">
            <label for="telefone">Telefone:</label>
            <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Digite o telefone" required
                   value="{{ old('telefone') }}">
        </div>

        <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Digite o e-mail" required
                   value="{{ old('email') }}">
        </div>
        <div class="form-group mt-3">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </form>
</x-layout>
