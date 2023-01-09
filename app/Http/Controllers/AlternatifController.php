<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class AlternatifController extends BaseController
{
    public function index()
    {
        $data = DB::table("alternatifs")->get();
        return view("alternatif.index", compact("data"));
    }
    public function delete($id)
    {
        DB::table("alternatifs")->where("id", $id)->delete();
        return redirect("/alternatif/index")->with("success_delete", "Berhasil Menghapus Data");
    }
    public function create(Request $request)
    {
        DB::table("alternatifs")->insert([
            "lokasi" => $request->lokasi,
            "pemilik" => $request->pemilik,
            "luas_lahan" => $request->luas_lahan,
        ]);
        return redirect("/alternatif/index")->with("success", "Berhasil Menambahkan Data");
    }
    public function edit(Request $request)
    {
        DB::table("alternatifs")->where("id", $request->id)->update([
            "lokasi" => $request->lokasi,
            "pemilik" => $request->pemilik,
            "luas_lahan" => $request->luas_lahan,
        ]);
        return redirect("/alternatif/index")->with("success", "Berhasil Edit Data");
    }
}
