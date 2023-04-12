<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Lead extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded=[]; //Защита таблица от записи
    //protected $table = 'my_table';

    public function area(){
        return $this->belongsToMany(Area::class, 'area_leads','lead_id','area_id');
        //return $this->belongsTo(Area::class, 'area_id','id'); $this->area->id получить текущий id
    }
}
