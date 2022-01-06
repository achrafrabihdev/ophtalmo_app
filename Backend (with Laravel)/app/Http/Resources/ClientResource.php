<?php

namespace App\Http\Resources;

use App\Models\Ordonnance;
use Illuminate\Http\Resources\Json\JsonResource;

class ClientResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'prenom' => $this->prenom,
            'nom' => $this->nom,
            'dateDeNaissance' => $this->dateDeNaissance,
            'ordonnances' => OrdonnanceResource::collection($this->whenLoaded('ordonnances'))
        ];
    }
}
