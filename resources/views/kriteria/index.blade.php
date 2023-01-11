@extends('template.template')

@section('content')
<script>
    function fungsiku() {
        var a = (document.getElementById("curah_hujan_param").value).substring(0, 1);
        var b = (document.getElementById("topografi_param").value).substring(0, 1);
        var c = (document.getElementById("tekstur_tanah_param").value).substring(0, 1);
        var d = (document.getElementById("kedalaman_air_param").value).substring(0, 1);
        var e = (document.getElementById("topografi_param").value).substring(0, 1);
        var f = (document.getElementById("harga_param").value).substring(0, 1);

        var total = Number(a) + Number(b) + Number(c) + Number(d) + Number(e) + Number(f);
        document.getElementById("curah_hujan").value = (Number(a) / total).toFixed(2);
        document.getElementById("topografi").value = (Number(b) / total).toFixed(2);
        document.getElementById("tekstur_tanah").value = (Number(c) / total).toFixed(2);
        document.getElementById("kedalaman_air").value = (Number(d) / total).toFixed(2);
        document.getElementById("topografi").value = (Number(e) / total).toFixed(2);
        document.getElementById("harga").value = (Number(f) / total).toFixed(2);

    }
</script>
@if ($message = Session::get('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{$message}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@elseif ($message = Session::get('failed'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{$message}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<div class="card card-info">
    <div class="card-header">
        <h3 class="card-title">Kriteria</h3>
    </div>
    <div class="card-body">
        <form class="form-validate form-horizontal" id="register_form" method="post" action="/kriteria/create">
            @csrf
            <div class="row mb-3">
                <div class="col-3 text-bold">Kriteria</div>
                <div class="col-2 text-bold">Bobot</div>
                <div class="col-2 text-bold">Perbaikan Bobot</div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Curah Hujan</label>
                <div class="col-sm-3">
                    <select class="form-select" name="curah_hujan_param" id="curah_hujan_param">
                        <option value="1">1. Tidak baik</option>
                        <option value="2">2. Kurang baik</option>
                        <option value="3">3. Sedang</option>
                        <option value="4">4. Baik</option>
                        <option value="5">5. Sangat Baik</option>
                    </select>
                </div>
                <div class="col-sm-1">
                    <input type="text" class="form-control " name="curah_hujan" id="curah_hujan">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Topografi</label>
                <div class="col-sm-3">
                    <select class="form-select" name="topografi_param" id="topografi_param">
                        <option value="1">1. Tidak baik</option>
                        <option value="2">2. Kurang baik</option>
                        <option value="3">3. Sedang</option>
                        <option value="4">4. Baik</option>
                        <option value="5">5. Sangat Baik</option>
                    </select>
                </div>
                <div class="col-sm-1">
                    <input type="text" class="form-control" name="topografi" id="topografi">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Tekstur Tanah</label>
                <div class="col-sm-3">
                    <select class="form-select" name="tekstur_tanah_param" id="tekstur_tanah_param">
                        <option value="1">1. Tidak bagus</option>
                        <option value="2">2. Kurang bagus</option>
                        <option value="3">3. Sedang</option>
                        <option value="4">4. Baik</option>
                        <option value="5">5. Sanagt bagus</option>
                    </select>
                </div>
                <div class="col-sm-1">
                    <input type="text" class="form-control" name="tekstur_tanah" id="tekstur_tanah">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Kedalaman Air</label>
                <div class="col-sm-3">
                    <select class="form-select" name="kedalaman_air_param" id="kedalaman_air_param">
                        <option value="1">1. Tidak dalam</option>
                        <option value="2">2. Kurang dalam</option>
                        <option value="3">3. Sedang</option>
                        <option value="4">4. Dalam</option>
                        <option value="5">5. Sangat Dalam</option>
                    </select>
                </div>
                <div class="col-sm-1">
                    <input type="text" class="form-control" name="kedalaman_air" id="kedalaman_air">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Harga </label>
                <div class="col-sm-3">
                    <select class="form-select" name="harga_param" id="harga_param">
                        <option value="1">1. Sangat Murah</option>
                        <option value="2">2. Murah</option>
                        <option value="3">3. Sesuai</option>
                        <option value="4">4. Mahal</option>
                        <option value="5">5. Sangat Mahal</option>
                    </select>
                </div>
                <div class="col-sm-1">
                    <input type="text" class="form-control" name="harga" id="harga">
                </div>
                <div class="col-sm-2">
                    <button class="btn btn-success" type="button" id="hitung" onclick="fungsiku()" name="hitung"><i class="fa fa-calculator"></i> Hitung</button>
                </div>
            </div>
            <div class="mb-4">
                <button class="btn btn-primary" type="submit" name="submit"><i class="fa fa-plus"></i> Tambah</button>
            </div>
        </form>

        <div class="table-responsive">
            <table class="table table-striped">
                <thead class="text-center">

                    <th>Curah Hujan</th>
                    <th>Topografi</th>
                    <th>Tekstur Tanah</th>
                    <th>Kedalaman Air</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </thead>
                <tbody class="text-center">



                    @foreach ($data as $dt)
                    <tr class="text-center">

                        <td>{{$dt->curah_hujan}}</td>
                        <td>{{$dt->topografi}}</td>
                        <td>{{$dt->tekstur_tanah}}</td>
                        <td>{{$dt->kedalaman_air}}</td>
                        <td>{{$dt->harga}}</td>
                        <td><a href="/kriteria/delete" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a></td>

                    </tr>
                    @endforeach

                </tbody>

            </table>
        </div>
    </div>
</div>

@endsection