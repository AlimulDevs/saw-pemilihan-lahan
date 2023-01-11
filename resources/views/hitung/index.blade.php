@extends('template.template')

@section('content')
<div class="card card-info">
    <div class="card-header">
        <h3 class="card-title text-bold">Hitung</h3>
    </div>




    <div class="card-body">
        <h3 class="card-title text-bold">MATRIX X</h3>
        <div class="table-responsive">
            <table class="table ">
                <thead class="text-center">
                    <th>No</th>
                    <th>Alternatif</th>
                    <th>Curah Hujan</th>
                    <th>Topografi</th>
                    <th>Tekstur Tanah</th>
                    <th>Kedalaman Air</th>
                    <th>Harga</th>

                </thead>
                <tbody class="text-center">
                    @php
                    $no =1;
                    @endphp
                    @foreach ($dataMatrix as $dmp)
                    <tr class="text-center">
                        <td>{{$no++}}</td>
                        <td>{{$dmp->alternatif}}</td>
                        <td>{{$dmp->curah_hujan}}</td>
                        <td>{{$dmp->topografi}}</td>
                        <td>{{$dmp->tekstur_tanah}}</td>
                        <td>{{$dmp->kedalaman_air}}</td>
                        <td>{{$dmp->harga}}</td>

                    </tr>
                    @endforeach



                </tbody>

            </table>
        </div>
    </div>
    <div class="card-body">
        <h3 class="card-title text-bold">NORMALISASI</h3>
        <div class="table-responsive">
            <table class="table ">
                <thead class="text-center">
                    <th>No</th>
                    <th>Alternatif</th>
                    <th>Curah Hujan</th>
                    <th>Topografi</th>
                    <th>Tekstur Tanah</th>
                    <th>Kedalaman Air</th>
                    <th>Harga</th>

                </thead>
                <tbody class="text-center">
                    @php
                    $no =1;
                    @endphp
                    @foreach ($dataNormalisasi as $dtn)
                    <tr class="text-center">


                        <td>{{$no++}}</td>
                        <td>{{$dtn->alternatif}} </td>
                        <td>{{round($dtn->curah_hujan,2)}} </td>
                        <td>{{round($dtn->topografi,2)}} </td>
                        <td>{{round($dtn->tekstur_tanah,2)}} </td>
                        <td>{{round($dtn->kedalaman_air,2)}} </td>
                        <td>{{round($dtn->harga,2)}} </td>

                    </tr>
                    @endforeach



                </tbody>

            </table>
        </div>
    </div>
    <div class="card-body">
        <h3 class="card-title text-bold">NILAI PREFERENSI</h3>
        <div class="table-responsive">
            <table class="table ">
                <thead class="text-center">
                    <th>No</th>
                    <th>Alternatif</th>
                    <th>Nilai Akhir</th>


                </thead>
                <tbody class="text-center">
                    @php
                    $no =1;
                    @endphp
                    @foreach ($dataRanking as $dtr)
                    <tr class="text-center">


                        <td>{{$no++}}</td>
                        <td>{{$dtr->alternatif}}</td>
                        <td>{{$dtr->nilai}}</td>


                    </tr>
                    @endforeach



                </tbody>

            </table>
        </div>
    </div>
    <div class="card-body">
        <h3 class="card-title text-bold">PERANKINGAN</h3>
        <div class="table-responsive">
            <table class="table ">
                <thead class="text-center">
                    <th>No</th>
                    <th>Alternatif</th>
                    <th>Nilai Akhir</th>


                </thead>
                <tbody class="text-center">
                    @php
                    $no =1;
                    @endphp
                    @foreach ($dataRanking as $dtr)
                    <tr class="text-center">


                        <td>{{$no++}}</td>
                        <td>{{$dtr->alternatif}}</td>
                        <td>{{$dtr->nilai}}</td>


                    </tr>
                    @endforeach



                </tbody>

            </table>
        </div>
    </div>
</div>
@endsection