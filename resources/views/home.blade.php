@extends('template.template')

@section('content')
<div class="row">
    <div class="col-lg-3 col-6">
        <!-- small card -->
        <div class="small-box bg-info">
            <div class="inner">
                <h3>{{$alternatif}}</h3>

                <p>Alternatif</p>
            </div>
            <div class="icon">
                <i class="fas fa-user"></i>
            </div>
            <a href="/alternatif/index" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <!-- small card -->
        <div class="small-box bg-success">
            <div class="inner">
                <h3>{{$kriteria}}</h3>

                <p>Kriteria</p>
            </div>
            <div class="icon">
                <i class="fas fa-file"></i>
            </div>
            <a href="/kriteria/index" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <!-- small card -->
        <div class="small-box bg-warning">
            <div class="inner">
                <h3>{{$penilaian}}</h3>

                <p>Penilaian</p>
            </div>
            <div class="icon">
                <i class="fas fa-list-ol"></i>
            </div>
            <a href="/penilaian/index" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <!-- small card -->
        <div class="small-box bg-danger">
            <div class="inner">
                <h3>{{$hitung}}</h3>

                <p>Hitung</p>
            </div>
            <div class="icon">
                <i class="fas fa-cogs"></i>
            </div>
            <a href="/hitung/index" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h4> Pengertian SAW</h4>
    </div>
    <div class="card-body">
        Metode SAW atau Simple Additive Weighting adalah metode yang sering dikenal dengan mentode penjumlahan terbobot. Maksud dari penjumlahan terbobot yaitu mencari penjumlahan terbobot dari rating di tiap alternatif pada seluruh atribut/ kriteria. Hasil/ Skor total yang diperoleh untuk sebuah alternatif yaitu dengan menjumlahkan semua hasil perkalian antara rating / yang dibandingkan pada lintas atribut dan bobot setiap atribut. Rating pada setiap atribut sebelumnya harus sudah melalui proses normalisasi.
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h4> SAW untuk Pemilihan Lahan Buah Naga</h4>
    </div>
    <div class="card-body">
        Manfaat buah nang melimpah membuat banyak petani berinisiatif untuk melakukam penanaman dan pengembangan buah naga. Selain itu harga buah naga yang relatif masih mahal menjadi daya tarik tersendiri sehingga banyak orang yang berlomba-lomba untuk menanamnya.
        Biasanya buah naga banyak ditanam pada halaman depan rumah sekaligus sebagai hiasan pada taman mini atau bisa juga ditanam pada halaman belakang. Namun jika petani lebih serius untuk menekuni tanaman ini, biasanya akan menanam buah naga pada lahan yang lebih luas bisa di sawah atau pekarangan yang khusus dibuat untuk menanam buah naga agar hasil panen lebih melimpah.
        Buah naga merupakan tanaman yang tergolong mudah dalam penanamannya. Tidak membutuhkan teknik khusus agar bisa menanam buah naga ini. Pada umumya, tanaman buah naga yang sering ditanam adalah buah naga yang memiliki warna kulit merah dan pada bagian dagingnya berwarna putih dengan biji-biji halus berwarna hitam.
    </div>
</div>
@endsection