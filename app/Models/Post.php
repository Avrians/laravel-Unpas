<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // ini yang boleh di isi sisa nya ngga boleh
    // protected $fillable = ['title', 'excerpt', 'body'];

    // ini yang ngga boleh, sisa ny boleh
    protected $guarded = ['id'];
    protected $with = ['category', 'author'];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function author() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
