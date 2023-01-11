<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\isEmpty;

class HitungController extends BaseController
{
    public function index()
    {
        $dataKriteria = DB::table("kriteria")->first();
        $dataNormalisasi = DB::table("penilaian")->get();

        if ($dataKriteria == null) {
            return redirect("/kriteria/index",)->with("failed", "isi data kriteria terlebih dahulu");
        }
        if ($dataNormalisasi->isEmpty()) {
            return redirect("/penilaian/index",)->with("failed", "isi data penilaian terlebih dahulu");
        }

        $dataMatrix = DB::table("penilaian")->orderBy("alternatif", "asc")->get();
        $curah_hujan = DB::table("penilaian")->orderBy("curah_hujan", "desc")->first();
        $topografi = DB::table("penilaian")->orderBy("topografi", "desc")->first();
        $tekstur_tanah = DB::table("penilaian")->orderBy("tekstur_tanah", "desc")->first();
        $kedalaman_air = DB::table("penilaian")->orderBy("kedalaman_air", "desc")->first();
        $harga = DB::table("penilaian")->orderBy("harga", "asc")->first();

        $C1 = $curah_hujan->curah_hujan;
        $C2 = $topografi->topografi;
        $C3 = $tekstur_tanah->tekstur_tanah;
        $C4 = $kedalaman_air->kedalaman_air;
        $C5 = $harga->harga;

        foreach ($dataNormalisasi as $data) {
            $data->curah_hujan = $data->curah_hujan / $C1;
            $data->topografi = $data->topografi / $C2;
            $data->tekstur_tanah = $data->tekstur_tanah / $C3;
            $data->kedalaman_air = $C4 / $data->kedalaman_air;
            $data->harga = $C5 / $data->harga;
        }

        $K1 = $dataKriteria->curah_hujan;
        $K2 = $dataKriteria->topografi;
        $K3 = $dataKriteria->tekstur_tanah;
        $K4 = $dataKriteria->kedalaman_air;
        $K5 = $dataKriteria->harga;
        DB::table('ranking')->truncate();

        $dataPenilaian = DB::table("penilaian")->get();
        foreach ($dataPenilaian as $dp) {
            $nilai = round(
                (($dp->curah_hujan / $C1) * $K1)
                    + (($dp->topografi / $C2) * $K2)
                    + (($dp->tekstur_tanah / $C3) * $K3)
                    + (($dp->kedalaman_air / $C4) * $K4)
                    + (($dp->harga / $C5) * $K5),
                3
            );
            DB::table("ranking")->insert([
                "alternatif" => $dp->alternatif,
                "nilai" => $nilai,
            ]);
        }
        $dataRanking = DB::table("ranking")->orderBy("nilai", "desc")->get();


        return view("hitung.index", compact("dataMatrix", "dataNormalisasi", "dataRanking"));
    }
}
