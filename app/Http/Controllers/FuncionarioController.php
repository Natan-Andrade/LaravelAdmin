<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Funcionario;


class FuncionarioController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $funcionarios = Funcionario::all();
        return view('funcionarios/funcionarios', compact('funcionarios'));
    }

    public function novo()
    {
        return view('funcionarios/novo_funcionario');
    }

    public function visualizar($id)
    {
        $funcionario = Funcionario::find($id);
        return view('funcionarios/visualizar_funcionario', compact('funcionario'));
    }

    public function editar($id)
    {
        $funcionario = Funcionario::find($id);
        return view('funcionarios/editar_funcionario', compact('funcionario'));
    }

    public function deletar($id)
    {
        $funcionario = Funcionario::find($id);

        if ($funcionario) {
            $funcionario->delete();
            return redirect()->back();
        } else {
            return redirect()->back();
        }
    }

    public function store(Request $request)
    {
        $dados = $request->all();

        if(isset($dados['id'])) {
            $item = Funcionario::find($dados['id']);
            $item->update($dados);
        }else {
            Funcionario::create($dados);
        }

        return redirect()->route('funcionarios');
    }

}