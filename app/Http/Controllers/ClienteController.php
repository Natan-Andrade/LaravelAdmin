<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Cliente;


class ClienteController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes/clientes', compact('clientes'));
    }

    public function novo()
    {
        return view('clientes/novo_cliente');
    }

    public function visualizar($id)
    {
        $cliente = Cliente::find($id);
        return view('clientes/visualizar_cliente', compact('cliente'));
    }

    public function editar($id)
    {
        $cliente = Cliente::find($id);
        return view('clientes/editar_cliente', compact('cliente'));
    }

    public function deletar($id)
    {
        $cliente = Cliente::find($id);

        if ($cliente) {
            $cliente->delete();
            return redirect()->back();
        } else {
            return redirect()->back();
        }
    }

    public function store(Request $request)
    {
        $dados = $request->all();

        if(isset($dados['id'])) {
            $item = Cliente::find($dados['id']);
            $item->update($dados);
        }else {
            Cliente::create($dados);
        }

        return redirect()->route('clientes');
    }

}
