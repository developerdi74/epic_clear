<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function leads(){
        return $this->belongsToMany(Lead::class, 'area_leads','area_id','lead_id');
        // return $this->hasMany(Lead::class, 'area_id', 'id');
    }

}
