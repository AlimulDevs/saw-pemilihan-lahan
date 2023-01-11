<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    public function homeIndex()
    {
        $alternatif = DB::table("alternatifs")->get()->count();
        $penilaian = DB::table("penilaian")->get()->count();
        $kriteria = DB::table("kriteria")->get()->count();
        $hitung = DB::table("ranking")->get()->count();
        return view("home", compact("alternatif", "penilaian", "kriteria", "hitung"));
    }
}
