<?php

namespace App\Http\Controllers;

use App\Models\Fornecedor;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller as BaseController;

class FornecedorController extends BaseController
{
    public function list(){
        $fornecedores = Fornecedor::all();
        return response()->json($fornecedores, Response::HTTP_OK);
    }
    public function store(Request $request){
        try{
            $fornecedor = new Fornecedor();
            $enderecoController = new EnderecoController();
            $endereco = $enderecoController->store($request);
            if ($endereco){
                $fornecedor->nome = $request->input('nome');
                $fornecedor->descricao = $request->input('descricao');
                $fornecedor->urlFoto = $request->input('urlFoto');
                $fornecedor->enderecoId = $endereco->id;
                $fornecedor->save();
            }
            return response()->json(['endereco'=>$endereco, 'fornecedor'=>$fornecedor], Response::HTTP_OK);
        }catch(Exception $e){
            return response()->json(['message' => "Erro ao tentar salvar fornecedor", 'erro'=>$e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

}
