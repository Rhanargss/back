<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Produto;

class ProdutoResource extends JsonResource
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
            'item'=> $this->item,
            'preco'=> $this->preco,
            'categoria'=> $this->categoria,
            'quantidadeEstoque'=> $this->quantidadeEstoque,
            'quantidadeVendida'=> $this->quantidadeVendida,
        ];

    }
    
}
