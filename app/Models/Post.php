<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Post extends Model
{
    protected $fillable = ['title', 'content'];


    public static function createFromArray($data)
    {

        $user_id = Auth::user()->id;

        $post = new Post();
        $post -> title = $data['title'];
        $post -> content = $data['content'];
        $post -> user_id =  $user_id;

        $post->save();

        return $data;

    }

    public function user() {
        return $this->belongsTo(User::class);
    }


    protected function updateFromArray($data) {
        $user_id = Auth::user()->id;


        $this->title = $data['title'];
        $this->content = $data['content'];
        $this->user_id = $user_id;

        $this->save();

        return $this;
    }


}
