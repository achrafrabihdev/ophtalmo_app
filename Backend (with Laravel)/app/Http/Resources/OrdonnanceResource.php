<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrdonnanceResource extends JsonResource
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
            'od' => $this->od,
            'og' => $this->og,
            'desc' => $this->desc,
            'dateDeControle' => $this->created_at->format('d-m-Y'),
            'client' => new ClientResource($this->client)
        ];
    }
}
