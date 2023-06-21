<x-layout title="Editar Cliente '{{ $cliente->nome }}'">
    <x-clientes.form :action="route('clientes.update', $cliente->id)" :nome="$cliente->nome" :update="true"/>
</x-layout>
