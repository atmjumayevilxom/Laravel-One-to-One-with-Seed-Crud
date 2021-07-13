<?php

namespace App\Http\Resources;


use App\Http\Resources\DirectorResource;
use Illuminate\Http\Resources\Json\JsonResource;

class FilmResource extends JsonResource
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
            'name' => $this->name,
            'director' => new DirectorResource($this->director)
        ];
    }
}
