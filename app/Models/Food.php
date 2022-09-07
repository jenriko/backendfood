<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Food extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'name', 'description', 'ingredients', 'price', 'rate',
        'types', 'picture_path'
    ];

    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->timestamp;
    }
    public function getUpdatedAtAttribute($value)
    {
        return Carbon::parse($value)->timestamp;
    }
    public function getPicturePathAttribute()
    {
        return asset("storage/" . $this->attributes['picture_path']);
        // return url('') . Storage::url($this->attributes['picture_path']);
    }
}
