<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Cliente;

class ClienteResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'=> $this->id,
            'nome'=> $this->nome,
            'telefone'=> $this->telefone,
            'endereco'=> $this->endereco,
            'dataDeNascimento'=> $this->dataDeNascimento,
            'cpf'=> $this->cpf,
        ];
    }

}
