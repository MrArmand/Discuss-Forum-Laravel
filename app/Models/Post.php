<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'content',
    ];

    
    public function users(){
        return $this->belongsTo(User::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function pins(){
        return $this->hasMany(Pin::class);
    }

    public function username($id){
        $user = User::find($id);
        return $user->name;

    }

    public function commentDisplay($id){
        $comment = Comment::find($id);
        return $comment->content;
    }

    public function checkComment($id){
        $value = Comment::find($id);
        return $value;
    }
}
