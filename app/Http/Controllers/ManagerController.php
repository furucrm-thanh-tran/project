<?php

namespace App\Http\Controllers;

use App\Models\DkyHocPhan;
use App\Models\HocPhan;
use App\Models\LopHocPhan;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    public function index()
    {
        $hocphan = HocPhan::all();

        return view('index', [
            'hocphan' => $hocphan,
        ]);
    }

    public function showtkb($id)
    {
        $tkb = LopHocPhan::where('idHP',$id)->with('HocPhan')->get();

        return view('class', [
            'tkb' => $tkb,
        ]);
    }

    public function showlist($id)
    {
        $list = DkyHocPhan::where('idLopHP',$id)->with('SinhVien')->get();

        return view('list_students', [
            'list' => $list,
        ]);
    }

}
