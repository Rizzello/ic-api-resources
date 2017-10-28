<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Author extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request) 
    {
        return [
            'id'           => $this->id,
            'fullname'     => $this->fullname,
        ];
    }

    /**
     * The additional data that should be added to the top-level resource array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function with($request) 
    {
        return [
            'version'      => '1.0',
        ];
    }
}
