<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

/* E' solo un esempio... non mi sognerei mai di chiamare una classe in questo modo */
class Pippo extends ResourceCollection
{
    /* Definisco la Resource della nostra collezione, perché Laravel 
     non è in grado (dato l'autoesplicativo nome di questa classe) di capirlo
     autonomamente.  */
    public $collects = PostV2::class;

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
