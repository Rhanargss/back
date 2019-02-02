<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use App\Http\Resources\ProdutoResource;

class ProdutoController extends Controller{

    // Cadastra um produto //

    public function store (Request $request){
        $produto = new Produto;

        $produto->item = $request->item;
        $produto->preco = $request->preco;
        $produto->categoria = $request->categoria;
        $produto->quantidadeEstoque = $request->quantidadeEstoque;
        $produto->quantidadeVendida = $request->quantidadeVendida;
        $produto->save();
        return new ProdutoResource($produto); 

    }


    // Verifica os produto cadastrados //

    public function index(){
        return ProdutoResource::collection(Produto::all());

    }


    // Verifica um produto cadastrado pelo id //

    public function show($id){
        $produto = Produto::findOrFail($id);
        return new ProdutoResource($produto);

    }


    // Edita alguma informação do produto //

    public function update(Request $request, $id){
        $produto = Produto::findOrFail($id);
        if($request->item)
            $produto->item = $request->item;
        if($request->preco)
            $produto->preco = $request->preco;
        if($request->categoria)
            $produto->categoria = $request->categoria;
        if($request->quantidadeEstoque)
            $produto->quantidadeEstoque = $request->quantidadeEstoque;
        if($request->quantidadeVendida)
            $produto->quantidadeVendida = $request->quantidadeVendida;
        $produto->save();
        return new ProdutoResource($produto);

    }

    
    //Deleta algum cadastro de um produto// 

    public function destroy($id){
        Produto::destroy($id);
        return response()->json(['DELETADO']);

    }

}
