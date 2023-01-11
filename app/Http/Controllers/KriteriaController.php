<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class KriteriaController extends BaseController
{
    public function index()
    {
        $data = DB::table("kriteria")->get();
        return view("kriteria.index", compact("data"));
    }
    public function create(Request $request)
    {
        if ($request->curah_hujan == null) {
            return redirect("/kriteria/index")->with("failed", "Gagal Menambah Kriteria , data wajib di isi");
        }
        $data = DB::table('kriteria')->get();

        if ($data->isEmpty()) {
            DB::table("kriteria")->insert([
                "curah_hujan" => $request->curah_hujan,
                "topografi" => $request->topografi,
                "tekstur_tanah" => $request->tekstur_tanah,
                "kedalaman_air" => $request->kedalaman_air,
                "harga" => $request->harga,
            ]);
            return redirect("/kriteria/index")->with("success", "Berhasil Menambah Kriteria");
        } else {
            return redirect("/kriteria/index")->with("failed", "Gagal Menambah Kriteria , Hapus terlebih dahulu");
        }

        return redirect("/kriteria/index");
    }
    public function delete()
    {

        $data = DB::table('kriteria')->delete();


        return redirect("/kriteria/index")->with("success", "Success Delete Data Kriteria");
    }
}
