<?php

namespace App\Http\Controllers;

use App\Models\Endereco;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller as BaseController;

class EnderecoController extends BaseController
{
    public function list(){
        $enderecos = Endereco::all();
        return response()->json($enderecos, Response::HTTP_OK);
    }
    public function store(Request $request){
        try{
            $endereco = new Endereco();
            $endereco->cep = $request->input('cep');
            $endereco->uf = $request->input('uf');
            $endereco->logradouro = $request->input('logradouro');
            $endereco->bairro = $request->input('bairro');
            $endereco->cidade = $request->input('cidade');
            $endereco->complemento = $request->input('complemento');
            $endereco->save();
            return $endereco;
        }catch(Exception $e){
            return response()->json(['message' => "Erro ao tentar salvar o endereço", 'erro'=>$e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

}
