<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Post extends Model
{
    protected $fillable = ['title', 'content'];

    public function user() {
        return $this->belongsTo(User::class);
    }

  //  public function setTitleAttribute($value)
   //{
      //  $this->attributes['title'] = $value;
   // }
}
