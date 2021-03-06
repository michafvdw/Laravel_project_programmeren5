<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    use HasFactory;
    //protected $table= 'posts';
    protected $fillable = ['title', 'body', 'category'];
    /**
     * @var mixed
     */

    public function categories()
    {
        return $this->belongsToMany(App\Category::class);
    }

    public function user(){
        return $this->belongsTo("User");
    }
    //private $title;
}
