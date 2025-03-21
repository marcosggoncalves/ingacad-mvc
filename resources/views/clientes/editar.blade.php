@extends('layouts.app')
@vite([ 'resources/js/cadastro.js'])
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">{{ __('Ficha Cadastral') }}  <b> - Alterção Cadastral</b></div>
            <form  class="p-3" action="{{ route('clientes.update', $cliente) }}" method="POST">
                @csrf
                @method('PUT')
                @include('clientes.components.formulario', ['cliente' => $cliente])

                <div class="mt-3">
                    <button type="submit" id="cadastrar" class="btn text-white btn-sm btn-warning">Salvar</button>

                    <a href="{{ route('clientes.index') }}" class="btn btn-sm">Voltar</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
