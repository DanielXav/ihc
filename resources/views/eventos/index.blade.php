<x-layout title="Eventos">
    <a href="{{ route('eventos.create') }}" class="btn btn-dark mb-2">Adicionar Evento</a>

    @isset($mensagemSucesso)
        <div class="alert alert-success">
            {{ $mensagemSucesso }}
        </div>
    @endisset

    <ul class="list-group">
        @foreach ($eventos as $evento)
            <li class="list-group-item d-flex justify-content-between align-content-center">
                {{ $evento->nome }}

                <span class="d-flex">
                <a href="{{ route('eventos.edit', $evento->id) }}" class="btn btn-primary btn-sm">
                    E
                </a>

                <form action="{{ route('eventos.destroy', $evento->id) }}" method="post" class="ms-2">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">
                        X
                    </button>
                </form>
            </span>
            </li>
        @endforeach
    </ul>
</x-layout>
