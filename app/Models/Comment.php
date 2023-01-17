<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\post;

class Comment extends Model
{
    use HasFactory;

    protected $table = 'comments';

    public function post() {
        return $this->belongsTo(Post::class);
    }

}
