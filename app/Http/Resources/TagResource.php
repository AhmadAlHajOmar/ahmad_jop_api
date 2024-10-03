<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TagResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            "Tag_id" => $this->id ,
            "Tag_name" => $this->name
            
        ];
    }
}
