@extends('template.template')

@section('content')
<script>
    function fungsiku() {
        var a = (document.getElementById("peringkat_param").value).substring(0, 1);
        var b = (document.getElementById("ukuran_param").value).substring(0, 1);
        var c = (document.getElementById("unduhan_param").value).substring(0, 1);
        var d = (document.getElementById("aktif_param").value).substring(0, 1);
        var e = (document.getElementById("manfaat_param").value).substring(0, 1);
        var f = (document.getElementById("kelebihan_param").value).substring(0, 1);
        var tes = "tes";
        var total = Number(a) + Number(b) + Number(c) + Number(d) + Number(e) + Number(f);
        document.getElementById("peringkat").value = (Number(a) / total).toFixed(2);
        document.getElementById("ukuran").value = (Number(b) / total).toFixed(2);
        document.getElementById("unduhan").value = (Number(c) / total).toFixed(2);
        document.getElementById("aktif").value = (Number(d) / total).toFixed(2);
        document.getElementById("manfaat").value = (Number(e) / total).toFixed(2);
        document.getElementById("kelebihan").value = (Number(f) / total).toFixed(2);
        document.getElementById("tes").value = ("tes");
    }
</script>
<div class="card card-info">
    <div class="card-header">
        <h3 class="card-title">Kriteria</h3>
    </div>
    <div class="card-body">
        <form class="form-validate form-horizontal" id="register_form" method="post" action="">

            <div class="form-group row">
                <label class="col-sm-2 col-form-label"><b>Kriteria</b></label>
                <div class="col-sm-3">
                    <label><b>Bobot</b></label>
                </div>
                <div class="col-sm-2">
                    <label><b>Perbaikan Bobot</b></label>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Peringkat & Ulasan</label>
                <div class="col-sm-3">
                    <select class="form-control" name="peringkat_param" id="peringkat_param">
                        <option>1. Sangat Rendah</option>
                        <option>2. Rendah</option>
                        <option>3. Cukup</option>
                        <option>4. Tinggi</option>
                        <option>5. Sangat Tinggi</option>
                    </select>
                </div>
                <div class="col-sm-1">
                    <input type="text" class="form-control" name="peringkat" id="peringkat">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Ukuran</label>
                <div class="col-sm-3">
                    <select class="form-control" name="ukuran_param" id="ukuran_param">
                        <option>1. Sangat Rendah</option>
                        <option>2. Rendah</option>
                        <option>3. Cukup</option>
                        <option>4. Tinggi</option>
                        <option>5. Sangat Tinggi</option>
                    </select>
                </div>
                <div class="col-sm-1">
                    <input type="text" class="form-control" name="ukuran" id="ukuran">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Unduhan</label>
                <div class="col-sm-3">
                    <select class="form-control" name="unduhan_param" id="unduhan_param">
                        <option>1. Sangat Rendah</option>
                        <option>2. Rendah</option>
                        <option>3. Cukup</option>
                        <option>4. Tinggi</option>
                        <option>5. Sangat Tinggi</option>
                    </select>
                </div>
                <div class="col-sm-1">
                    <input type="text" class="form-control" name="unduhan" id="unduhan">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Pengguna Aktif</label>
                <div class="col-sm-3">
                    <select class="form-control" name="aktif_param" id="aktif_param">
                        <option>1. Sangat Rendah</option>
                        <option>2. Rendah</option>
                        <option>3. Cukup</option>
                        <option>4. Tinggi</option>
                        <option>5. Sangat Tinggi</option>
                    </select>
                </div>
                <div class="col-sm-1">
                    <input type="text" class="form-control" name="aktif" id="aktif">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Manfaat</label>
                <div class="col-sm-3">
                    <select class="form-control" name="manfaat_param" id="manfaat_param">
                        <option>1. Sangat Rendah</option>
                        <option>2. Rendah</option>
                        <option>3. Cukup</option>
                        <option>4. Tinggi</option>
                        <option>5. Sangat Tinggi</option>
                    </select>
                </div>
                <div class="col-sm-1">
                    <input type="text" class="form-control" name="manfaat" id="manfaat">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Kelebihan</label>
                <div class="col-sm-3">
                    <select class="form-control" name="kelebihan_param" id="kelebihan_param">
                        <option>1. Sangat Rendah</option>
                        <option>2. Rendah</option>
                        <option>3. Cukup</option>
                        <option>4. Tinggi</option>
                        <option>5. Sangat Tinggi</option>
                    </select>
                </div>
                <div class="col-sm-1">
                    <input type="text" class="form-control" name="kelebihan" id="kelebihan">
                </div>
                <div class="col-sm-2">
                    <button class="btn btn-outline-success" type="button" id="hitung" onclick="fungsiku()" name="hitung"><i class="fa fa-calculator"></i> Hitung</button>
                </div>
            </div>
            <div class="mb-4">
                <button class="btn btn-outline-primary" type="submit" name="submit"><i class="fa fa-save"></i> Submit</button>
            </div>
        </form>
    </div>
</div>

@endsection