@extends('layouts.app')

@section('content')
<div class="container">
    <h3 class="mb-2">Meus cadastros</h3>
    <a href="{{ route('clientes.create') }}" class="btn btn-sm btn-warning mb-3 text-white">
        <i class="bi bi-person-plus"></i> Novo Cliente
    </a>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover text-center">
            <thead class="table-light">
                <tr>
                    <th>Nome</th>
                    <th>CPF/CNPJ</th>
                    <th>Email</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clientes as $cliente)
                    <tr>
                        <td>{{ $cliente->nome }}</td>
                        <td>{{ $cliente->cpf_cnpj }}</td>
                        <td>{{ $cliente->email }}</td>
                        <td>
                            <a href="{{ route('clientes.show', $cliente) }}" class="btn text-white btn-info btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Ver detalhes">
                                <i class="bi bi-eye"></i>
                            </a>
                            
                            <a href="{{ route('clientes.edit', $cliente) }}" class="btn text-white btn-warning btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Editar">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <form action="{{ route('clientes.destroy', $cliente) }}" method="POST" style="display:inline;" onsubmit="return confirm('Tem certeza que deseja excluir este cliente?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Excluir">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
