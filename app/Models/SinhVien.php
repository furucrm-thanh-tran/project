<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SinhVien extends Model
{
    use HasFactory;

    protected $fillable = [
        'mssv',
        'HoTen',
        'GioiTinh',
        'Email',
    ];

    public function dkyHP()
    {
        return $this->hasMany('App\Models\DkyHocPhan');
    }
}
