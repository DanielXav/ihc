<x-layout title="Editar Evento '{{ $evento->nome }}'">
    <x-clientes.form :action="route('eventos.update', $evento->id)" :nome="$evento->nome" :update="true"/>
</x-layout>
