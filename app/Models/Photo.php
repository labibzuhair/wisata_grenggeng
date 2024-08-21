<?php

namespace App\Models;

use App\Models\Galery;
use App\Models\Gallery;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Photo extends Model
{
    use HasFactory;

    protected $fillable = ['gallery_id', 'image', 'is_main'];

    public function gallery()
    {
        return $this->belongsTo(Gallery::class);
    }
}
