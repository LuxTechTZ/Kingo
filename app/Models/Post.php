<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'post_category_id',
        'artist_name',
        'title',
        'desc',
        'content',
        'status',
        'post_date',
        'image_url',
    ];

    public function category()
    {
        return $this->belongsTo('App\Models\PostCategory','post_category_id');
    }

    public function images()
    {
        return $this->hasMany('App\Models\PostImage');
    }
}
