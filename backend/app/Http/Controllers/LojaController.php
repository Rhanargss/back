<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Loja;
use App\Http\Resources\LojaResource;

class LojaController extends Controller
{
    // Cadastra informações para a loja //

    public function store (Request $request){
        $loja = new Loja;

        $loja->idCliente = $request->idCliente;
        $loja->idProduto = $request->idProduto;
        $loja->dataDaCompra = $request->dataDaCompra;
        $loja->horaDaCompra = $request->horaDaCompra;
        $loja->quantidadeProdutosComprados = $request->quantidadeProdutosComprados;
        $loja->save();
        return new LojaResource($loja); 

    }


    // Verifica os cadastrados da loja//

    public function index(){
        return LojaResource::collection(Loja::all());

    }

    // Verifica um cadastrado da loja pelo id //

    public function show($id){
        $loja = Loja::findOrFail($id);
        return new LojaResource($loja);

    }


    // Edita alguma informação da loja //

    public function update(Request $request, $id){
        $loja = Loja::findOrFail($id);
        //if($request->idCliente)//
            $loja->idCliente = $request->idCliente;
        //if($request->idProduto)//
            $loja->idProduto = $request->idProduto;
        if($request->dataDaCompra)
            $loja->dataDaCompra = $request->dataDaCompra;
        if($request->horaDaCompra)
            $loja->horaDaCompra = $request->horaDaCompra;
        if($request->quantidadeProdutosComprados)
            $loja->quantidadeProdutosComprados = $request->quantidadeProdutosComprados;
        $loja->save();
        return new LojaResource($loja);

    }
    

    //Deleta algum cadastro da loja // 

    public function destroy($id){
        Loja::destroy($id);
        return response()->json(['DELETADO']);

    }

}
