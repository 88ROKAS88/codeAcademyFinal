<?php

namespace App\Http\Resources\Games;

use Illuminate\Http\Resources\Json\JsonResource;

class CatGameResource extends JsonResource
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
            'user_id' => $this->user_id,
            'user_name' => $this->user_name,
            'lvl1' => $this->lvl1,
            'lvl2' =>  $this->lvl2,
            'lvl3' => $this->lvl3,
            'overall' => $this->overall,
        ];
    }
}
