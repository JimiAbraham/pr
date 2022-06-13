<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Like;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'category',
        'visibility',
        'body',
        'media',
        'path',
        'status',
    ];


// public function likedBy ( User $user)
//   {
//       return $this->likes()->contains('user_id', $user->id);
//   }

public function user()
    {
        return $this->belongsTo( User::class);
    }

public function likes()
   {
       return $this->hasMany(Like::class);
   }

   public function isAuthUserLikedPost()
   
   {
    return $this->likes()->where('user_id',  auth()->id())->exists();
     
    }

    
}
