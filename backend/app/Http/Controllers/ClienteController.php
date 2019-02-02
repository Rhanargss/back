<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use App\Http\Resources\ClienteResource;

class ClienteController extends Controller{

    // Cadastra um cliente //

    public function store (Request $request){
        $cliente = new Cliente;

        $cliente->nome = $request->nome;
        $cliente->telefone = $request->telefone;
        $cliente->endereco = $request->endereco;
        $cliente->dataDeNascimento = $request->dataDeNascimento;
        $cliente->cpf = $request->cpf;
        $cliente->save();
        return new ClienteResource($cliente); 

    }


    // Verifica os clientes cadastrados //

    public function index(){
        return ClienteResource::collection(Cliente::all());

    }


    // Verifica um cliente cadastrado pelo id //

    public function show($id){
        $cliente = Cliente::findOrFail($id);
        return new ClienteResource($cliente);

    }


    // Edita alguma informação do cliente //

    public function update(Request $request, $id){
        $cliente = Cliente::findOrFail($id);
        if($request->nome)
            $cliente->nome = $request->nome;
        if($request->telefone)
            $cliente->telefone = $request->telefone;
        if($request->endereco)
            $cliente->endereco = $request->endereco;
        if($request->dataDeNascimento)
            $cliente->dataDeNascimento = $request->dataDeNascimento;
        if($request->cpf)
            $cliente->cpf = $request->cpf;
        $cliente->save();
        return new ClienteResource($cliente);

    }


    //Deleta algum cadastro de um cliente// 

    public function destroy($id){
        Cliente::destroy($id);
        return response()->json(['DELETADO']);

    }
    

}
