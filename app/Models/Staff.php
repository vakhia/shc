<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    protected $guarded = false;

    public function hospitals()
    {
        return $this->belongsToMany(Hospital::class,'hospital_staff','staff_id','hospital_id');
    }


}
