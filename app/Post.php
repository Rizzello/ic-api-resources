<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'subtitle',
        'body',
        'published_at',
    ];

    protected $appends = [
        'is_draft',
    ];

    public function getIsDraftAttribute()
    {
        return ($this->published_at == null);
    }

    public function author()
    {
        return $this->belongsTo('App\Author');
    }
}
