<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class PostV2 extends Resource
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
            'header'       => [
                'title'        =>$this->title, 
                'subtitle'     => $this->subtitle,
            ],
            'meta'         => [
                'publish_date' => $this->published_at,
                'tags'         => ['tag1', 'tag2', 'tag3'],
                'url'          => url(route('posts.show', ['id' => $this->id])),
            ],
            'content'      => $this->body,
            'author'       => new Author($this->author),
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
            'version'      => '2.0',
        ];
    }
}
