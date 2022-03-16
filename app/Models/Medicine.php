<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    use HasFactory;

    protected $guarded = false;

    public function treatments()
    {
        return $this->belongsToMany(Treatment::class,'treatment_medicines','medicine_id','treatment_id');
    }

}
