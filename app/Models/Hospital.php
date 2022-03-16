<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    use HasFactory;

    protected $guarded = false;

    public function header()
    {
        return $this->belongsTo(Staff::class, 'header_id', 'id');
    }

    public function departments()
    {
        return $this->belongsToMany(Department::class, 'hospital_departments', 'hospital_id', 'department_id');
    }

    public function staff()
    {
        return $this->belongsToMany(Staff::class, 'hospital_staff', 'hospital_id','staff_id');
    }


}
