<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Loja;

class LojaResource extends JsonResource
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
            'idCliente'=> $this->idCliente,
            'idProduto'=> $this->idProduto,
            'dataDaCompra'=> $this->dataDaCompra,
            'horaDaCompra'=> $this->horaDaCompra,
            'quantidadeProdutosComprados'=> $this->quantidadeProdutosComprados,
        ];

    }
    
}
