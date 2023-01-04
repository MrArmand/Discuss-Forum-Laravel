<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    public function users(){
        return $this->belongsTo(User::class);
    }

    public function username($id){
        $user = User::find($id);
        return $user->name;

    }

    public function liked(){
        return 1;
    }
}
