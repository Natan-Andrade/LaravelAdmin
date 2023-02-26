<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Produto;


class ProdutoController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $produtos = Produto::all();
        return view('produtos/produtos', compact('produtos'));
    }

    public function novo()
    {
        return view('produtos/novo_produto');
    }

    public function visualizar($id)
    {
        $produto = Produto::find($id);
        return view('produtos/visualizar_produto', compact('produto'));
    }

    public function editar($id)
    {
        $produto = Produto::find($id);
        return view('produtos/editar_produto', compact('produto'));
    }

    public function deletar($id)
    {
        $produto = Produto::find($id);

        if ($produto) {
            $produto->delete();
            return redirect()->back();
        } else {
            return redirect()->back();
        }
    }

    public function store(Request $request)
    {
        $dados = $request->all();

        if(isset($dados['id'])) {
            $item = Produto::find($dados['id']);
            $item->update($dados);
        }else {
            Produto::create($dados);
        }

        return redirect()->route('produtos');
    }

}
