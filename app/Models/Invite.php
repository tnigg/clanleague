<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invite extends Model
{
    use HasFactory;

    protected $fillable = ['inviteable_id', 'inviteable_type', 'accepted', 'declined', 'sender_id', 'receiver_id'];

    public function inviteable() {
        return $this->morphTo();
    }
}
