<?php

namespace App\Http\Resources;
use Auth;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'email' => $this->email,
            'name' => $this->name,
            'avartar'=>$this->avartar,
            'role'=>$this->role
        ];
    }
}
