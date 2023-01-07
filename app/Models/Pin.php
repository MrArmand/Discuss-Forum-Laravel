<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pin extends Model
{
    use HasFactory;

    public function pins(){
        return $this->belongsToMany(User::class);
    }

    public function pinnedPosts(){
        return $this->belongsToMany(Post::class);
    }

    public function username($id){
        $user = User::find($id);
        return $user->name;

    }
}
