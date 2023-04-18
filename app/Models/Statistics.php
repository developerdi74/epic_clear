<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Statistics extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function userdata(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
