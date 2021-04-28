<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Image extends Model
{
    use HasFactory;
    protected $fillable = ['imageable_id', 'imageable_type', 'filename'];

    public function imageable() {
        return $this->morphTo();
    }   
}
