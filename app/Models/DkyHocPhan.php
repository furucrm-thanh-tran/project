<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DkyHocPhan extends Model
{
    use HasFactory;

    protected $fillable = [
        'idLopHP',
        'idSV',
    ];

    public function lopHP()
    {
        return $this->belongsTo('App\Models\LopHocPhan', 'idLopHP');
    }

    public function SinhVien()
    {
        return $this->belongsTo('App\Models\SinhVien', 'idSV');
    }
}
