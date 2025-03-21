@extends('layouts.app')

@section('content')
<div class="container">
    <div  class="mb-3">
        <h3 class="mb-2">Ficha cadastral ({{ $cliente->nome }})</h3> 
        <h6>Cadastro realizado: {{date_format( $cliente->created_at,"Y/m/d H:i:s")}};</h5>
    </div>
    <div class="card">
         <ul class="list-group list-group-flush">
            <li class="list-group-item"><strong>CPF/CNPJ:</strong> {{ $cliente->cpf_cnpj }}</li>
            <li class="list-group-item"><strong>Telefone:</strong> {{ $cliente->telefone }}</li>
            <li class="list-group-item"><strong>Email:</strong> {{ $cliente->email }}</li>
            <li class="list-group-item"><strong>CEP:</strong> {{ $cliente->cep }}</li>
            <li class="list-group-item"><strong>Rua/Avenida:</strong> {{ $cliente->rua }}</i>
            <li class="list-group-item"><strong>Número:</strong> {{ $cliente->numero }}</li>
            <li class="list-group-item"><strong>Bairro:</strong> {{ $cliente->bairro }}</li>
            <li class="list-group-item"><strong>Cidade/Estado:</strong> {{ $cliente->cidade }} - {{ $cliente->estado }}</li>
        </ul>
        <div class="card-footer text-right">
            <a href="{{ route('clientes.index') }}" class="btn text-white  btn-sm btn-warning">Voltar</a>
        </div>
    </div>
</div>
@endsection
