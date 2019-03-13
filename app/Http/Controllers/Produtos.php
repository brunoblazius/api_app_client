<?php

namespace App\Http\Controllers;

use App\Produto;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Produtos extends Controller
{
    /**
     * Exibe todos os produtos cadastrados
     * 
     * @return Response
     */
    public function index($id = null){
        if ($id == null) {
            return Cliente::orderBy('id', 'asc')->get();
        } else {
            return $this->show($id);
        }
    }

    /**
     * Salva um registro recém-criado.
    *
    * @param  Request  $request
    * @return Response
    */
    public function store(Request $request)
    {
        $post = new Produto;

        $post->nome = $request->input('nome');
        $post->qtd = $request->input('qtd');
        $post->preco = $request->input('preco');
        $post->descricao = $request->input('descricao');
        $post->save();

        return 'Produto criado com sucesso com o id ' . $post->id;
    }

    /**
    * Exibir um registo específico.
    *
    * @param  int  $id
    * @return Response
    */
    public function show($id)
    {
        return Produto::find($id);
    }

    /**
    * Editar um registro específico.
    *
    * @param  Request  $request
    * @param  int  $id
    * @return Response
    */
    public function update(Request $request, $id) 
    {
        $produto = Produto::find($id);

        $produto->nome = $request->input('nome');
        $produto->qtd = $request->input('qtd');
        $produto->preco = $request->input('preco');
        $produto->descricao = $request->input('descricao');
        $produto->save();

        return "Produto ID".$produto->id." editado com sucesso.";
    }

    /**
    * Remover um registro específico.
    *
    * @param  int  $id
    * @return Response
    */
    public function destroy(Request $request, $id)
    {
        $produto = Produto::find($id);
        $produto->delete();

        return "Cliente #" . $id. " excluído com sucesso.";
    }


}
