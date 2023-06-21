<x-layout title="Novo Cliente">
    <x-clientes.form :action="route('clientes.store')" :nome="old('nome')" :update="false"/>
</x-layout>
