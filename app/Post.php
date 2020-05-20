<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Post extends Model
{
    protected $fillable = ['user_id', 'title', 'body', 'image'];

    //add relationship
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
