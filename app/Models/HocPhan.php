<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HocPhan extends Model
{
    use HasFactory;

    protected $fillable = [
        'MaHP',
        'TenHP',
        'SoTC',
    ];

    public function LopHP()
    {
        return $this->hasMany('App\Models\LopHocPhan');
    }
}
