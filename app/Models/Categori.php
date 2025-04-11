<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categori extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_categori',
    ];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
