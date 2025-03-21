<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Http\Requests\CreateCliente;
use App\Http\Requests\UpdateCliente;
use Illuminate\Http\RedirectResponse;

class ClienteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes.index', compact('clientes'));
    }
    public function create()
    {
        return view('clientes.novo');
    }
    public function store(CreateCliente $request): RedirectResponse
    {
        $cliente = Cliente::create($request->validated());
        return redirect()->route('clientes.index')->with('success', 'Cadastrado com sucesso!');
    }
    public function show(Cliente $cliente)
    {
        return view('clientes.visualizar', compact('cliente'));
    }
    public function edit(Cliente $cliente)
    {
        return view('clientes.editar', compact('cliente'));
    }
    public function update(UpdateCliente $request, Cliente $cliente): RedirectResponse
    {
        $cliente->update($request->validated());
        return redirect()->route('clientes.index')->with('success', 'Cadastro atualizado com sucesso!');
    }
    public function destroy(Cliente $cliente): RedirectResponse
    {
        $cliente->delete();
        return redirect()->route('clientes.index')->with('success', 'Cadastro excluido com sucesso!');
    }
}
