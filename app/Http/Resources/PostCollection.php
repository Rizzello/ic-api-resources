<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class PostCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
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
