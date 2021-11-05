<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;


    protected $table = 'blogs';

     /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'user_id',
        'slug',
        'title',
        'blog_text',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
