<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $guarded = false;
    protected $table = 'departments';

    public function header()
    {
        return $this->belongsTo(Staff::class,'header_id','id');
    }
}
