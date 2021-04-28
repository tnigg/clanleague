<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'tag', 'homepage', 'country', 'logo'];

    public function users() {
        return $this->hasMany(User::class);
    }

    public function invites() {
        return $this->morphMany('App\Models\Invite', 'inviteable');
    }
    
    public function images() {
        return $this->morphMany('App\Models\Image', 'imageable');
    }

}
