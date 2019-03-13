<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Clientes extends Controller
{
    /**
  * Exibir uma listagem dos registros
  *
  * @return Response
  */
public function index($id = null) {
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
public function store(Request $request) {
    $post = new Cliente;

    $post->nome = $request->input('nome');
    $post->email = $request->input('email');
    $post->telefone = $request->input('telefone');
    $post->cpf = $request->input('cpf');
    $post->save();

    return 'Cliente criado com sucesso com o id ' . $post->id;
}


/**
 * Exibir um registo específico.
 *
 * @param  int  $id
 * @return Response
 */
public function show($id) {
    return Cliente::find($id);
}


/**
 * Editar um registro específico.
 *
 * @param  Request  $request
 * @param  int  $id
 * @return Response
 */
public function update(Request $request, $id) {
    $cliente = Cliente::find($id);

    $cliente->nome = $request->input('nome');
    $cliente->email = $request->input('email');
    $cliente->telefone = $request->input('telefone');
    $cliente->cpf = $request->input('cpf');
    $cliente->save();

    return "Cliente #" . $cliente->id . " editado com sucesso.";
}


/**
 * Remover um registro específico.
 *
 * @param  int  $id
 * @return Response
 */
public function destroy(Request $request, $id) {

    $cliente = Cliente::find($id);
    $cliente->delete();

    return "Cliente #" . $id. " excluído com sucesso.";
}
}
