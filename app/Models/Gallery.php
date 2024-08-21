<?php

namespace App\Models;

use App\Models\Photo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Gallery extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function photos()
    {
        return $this->hasMany(Photo::class);
    }

    public function mainPhoto()
    {
        return $this->hasOne(Photo::class)->where('is_main', true);
    }
}
