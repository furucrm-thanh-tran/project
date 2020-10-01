<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LopHocPhan extends Model
{
    use HasFactory;

    protected $fillable = [
        'BuoiHoc',
        'TietBD',
        'SoTiet',
        'SoTuan',
        'idHP',
    ];

    public function dkyHP()
    {
        return $this->hasMany('App\Models\DkyHocPhan');
    }

    public function HocPhan()
    {
        return $this->belongsTo('App\Models\HocPhan', 'idHP');
    }
}
