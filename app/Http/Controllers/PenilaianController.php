<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class PenilaianController extends BaseController
{
    public function index()
    {
        $dataAlternatif = DB::table("alternatifs")->get();
        $data = DB::table("penilaian")->get();
        return view("penilaian.index", compact("dataAlternatif", "data"));
    }
    public function delete($id)
    {

        DB::table("penilaian")->where("id", $id)->delete();
        return redirect("/penilaian/index")->with("success", "Berhasil Menghapus Data");
    }
    public function create(Request $request)
    {
        $data = DB::table("penilaian")->where("alternatif", $request->alternatif)->first();
        if ($data != null) {
            return redirect("/penilaian/index")->with("failed", "data sudah ada");
        }


        DB::table("penilaian")->insert([
            "alternatif" => $request->alternatif,
            "curah_hujan" => $request->curah_hujan,
            "topografi" => $request->topografi,
            "tekstur_tanah" => $request->tekstur_tanah,
            "kedalaman_air" => $request->kedalaman_air,
            "harga" => $request->harga,
        ]);

        return redirect("/penilaian/index")->with("success", "data berhasil ditambahkan");
    }
}
