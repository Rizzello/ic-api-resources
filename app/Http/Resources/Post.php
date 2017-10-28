<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Post extends Resource
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
            'title'        => $this->title,
            'subtitle'     => $this->subtitle,
            'body'         => $this->body,
            'publish_date' => $this->published_at,
            'author'       => new Author($this->author),
            'url'          => url(route('posts.show', ['id' => $this->id])),
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
