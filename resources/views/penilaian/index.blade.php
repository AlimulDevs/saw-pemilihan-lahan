@extends('template.template')

@section('content')

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
        <h3 class="card-title">Penilaian</h3>
    </div>
    <div class="card-body">
        <form class="form-validate form-horizontal" id="register_form" method="post" action="/penilaian/create">
            @csrf

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Alternatif</label>
                <div class="col-sm-3">
                    <select class="form-select" name="alternatif" id="alternatif" required>
                        <option value="">--Alternatif--</option>
                        @foreach ($dataAlternatif as $dta )
                        <option value="{{$dta->pemilik}}">{{$dta->pemilik}}</option>
                        @endforeach
                    </select>
                </div>

            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Curah Hujan</label>
                <div class="col-sm-3">
                    <select class="form-select" name="curah_hujan" id="curah_hujan">
                        <option value="1">1. Tidak baik</option>
                        <option value="2">2. Kurang baik</option>
                        <option value="3">3. Sedang</option>
                        <option value="4">4. Baik</option>
                        <option value="5">5. Sangat Baik</option>
                    </select>
                </div>

            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Topografi</label>
                <div class="col-sm-3">
                    <select class="form-select" name="topografi" id="topografi">
                        <option value="1">1. Tidak baik</option>
                        <option value="2">2. Kurang baik</option>
                        <option value="3">3. Sedang</option>
                        <option value="4">4. Baik</option>
                        <option value="5">5. Sangat Baik</option>
                    </select>
                </div>

            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Tekstur Tanah</label>
                <div class="col-sm-3">
                    <select class="form-select" name="tekstur_tanah" id="tekstur_tanah">
                        <option value="1">1. Tidak bagus</option>
                        <option value="2">2. Kurang bagus</option>
                        <option value="3">3. Sedang</option>
                        <option value="4">4. Baik</option>
                        <option value="5">5. Sanagt bagus</option>
                    </select>
                </div>

            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Kedalaman Air</label>
                <div class="col-sm-3">
                    <select class="form-select" name="kedalaman_air" id="kedalaman_air">
                        <option value="1">1. Tidak dalam</option>
                        <option value="2">2. Kurang dalam</option>
                        <option value="3">3. Sedang</option>
                        <option value="4">4. Dalam</option>
                        <option value="5">5. Sangat Dalam</option>
                    </select>
                </div>

            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Harga </label>
                <div class="col-sm-3">
                    <select class="form-select" name="harga" id="harga">
                        <option value="1">1. Sangat Murah</option>
                        <option value="2">2. Murah</option>
                        <option value="3">3. Sesuai</option>
                        <option value="4">4. Mahal</option>
                        <option value="5">5. Sangat Mahal</option>
                    </select>
                </div>


            </div>
            <div class="mb-4">
                <button class="btn btn-primary" type="submit" name="submit"><i class="fa fa-plus"></i> Tambah</button>
            </div>
        </form>

        <div class="table-responsive">
            <table class="table table-striped">
                <thead class="text-center">
                    <th>No</th>
                    <th>Alternatif</th>
                    <th>Curah Hujan</th>
                    <th>Topografi</th>
                    <th>Tekstur Tanah</th>
                    <th>Kedalaman Air</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </thead>
                <tbody class="text-center">
                    @php
                    $no =1;
                    @endphp
                    @foreach ($data as $dt)
                    <tr class="text-center">
                        <td>{{$no++}}</td>
                        <td>{{$dt->alternatif}}</td>
                        <td>{{$dt->curah_hujan}}</td>
                        <td>{{$dt->topografi}}</td>
                        <td>{{$dt->tekstur_tanah}}</td>
                        <td>{{$dt->kedalaman_air}}</td>
                        <td>{{$dt->harga}}</td>
                        <td>
                            <a href="/penilaian/delete/{{$dt->id}}" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach



                </tbody>

            </table>
        </div>
    </div>
</div>

@endsection