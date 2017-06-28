<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;
use DB;
use Illuminate\Support\Facades\Validator;

class EfetuaCadastro extends Controller
{
  public function cadastroSite(Request $addCadastro)
  {
    $campos = $addCadastro->except('_token');

    $rules = array(
      'nome' => 'required',
      'email' => 'required',
      'cel' => 'required',
      'cep'   => 'required'
    );

    $validaCampos =  Validator::make($campos, $rules);

    if($validaCampos->fails()) {
        return redirect()->back()->withInput()->withErrors($validaCampos);
    } else {
      DB::table('cadastro')->insert([
        'nome'              => $addCadastro->nome,
        'emailcadastro'     => $addCadastro->email,
        'celular'           => $addCadastro->cel,
        'dataNasc'          => $addCadastro->dataNasc,
        'cep'               => $addCadastro->cep,
        'rua'               => $addCadastro->rua,
        'bairro'            => $addCadastro->bairro,
        'cidade'            => $addCadastro->cidade,
        'estado'            => $addCadastro->estado
      ]);

      return redirect('/?msg=ok');
    }
  }
}
