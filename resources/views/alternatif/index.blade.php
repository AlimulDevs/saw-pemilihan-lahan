@extends('template.template')

@section('content')

@if ($message = Session::get('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{$message}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@elseif ($message = Session::get('success_delete'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{$message}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@foreach ($data as $dt)

<div class="modal fade" id="edit{{$dt->id}}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Data</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal " action="/alternatif/edit" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{$dt->id}}" id="">
                    <div class="form-group row mb-4">
                        <label for="inputPassword3" class="ml-1 col-form-label">Pemilik Lahan</label>
                        <div class="col-sm-10">
                            <input type="text" name="pemilik" class="form-control" value="{{$dt->pemilik}}" id="inputPassword3" placeholder="pemilik" required>
                        </div>
                    </div>
                    <div class="form-group row mb-4 ">
                        <label for="inputEmail3" class="ml-1 col-form-label">Lokasi Lahan</label>
                        <div class="col-sm-10">
                            <input type="text" name="lokasi" class="form-control" value="{{$dt->lokasi}}" id="inputEmail3" placeholder="lokasi" required>
                        </div>
                    </div>

                    <div class="form-group  ">
                        <label for="inputPassword3" class="ml-1 col-form-label">Luas Lahan (m<sup>2</sup>)</label>
                        <div class="col-sm-10">
                            <input type="number" name="luas_lahan" class="form-control" value="{{$dt->luas_lahan}}" id="inputPassword3" placeholder="123" required>
                        </div>
                    </div>

            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
@endforeach

<div class="card card-info">
    <div class="card-header">
        <h3 class="card-title">Alternatif</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <div class="card-body">
        <form class="form-horizontal " action="/alternatif/create" method="post">
            @csrf
            <div class="form-group row mb-4">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Pemilik Lahan</label>
                <div class="col-sm-10">
                    <input type="text" name="pemilik" class="form-control col-6" id="inputPassword3" placeholder="nama pemilik" required>
                </div>
            </div>
            <div class="form-group row mb-4 ">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Lokasi Lahan</label>
                <div class="col-sm-10">
                    <input type="text" name="lokasi" class="form-control col-6" id="inputEmail3" placeholder="lokasi tanah" required>
                </div>
            </div>

            <div class="form-group row ">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Luas Lahan (m<sup>2</sup>)</label>
                <div class="col-sm-10">
                    <input type="text" name="luas_lahan" class="form-control col-6" id="inputPassword3" placeholder="215.4" required>
                </div>
            </div>
            <div class="form-group row float-left ml-1 mt-2 ">
                <input type="submit" class="btn btn-primary" value="Tambah">
            </div>
        </form>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead class="text-center">
                    <th>No</th>
                    <th>Lokasi</th>
                    <th>Pemilik</th>
                    <th>Luas Lahan</th>
                    <th>Aksi</th>
                </thead>
                <tbody class="text-center">
                    @php
                    $no =1;
                    @endphp
                    @foreach ($data as $dt )


                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$dt->lokasi}}</td>
                        <td>{{$dt->pemilik}}</td>
                        <td>{{$dt->luas_lahan}} m<sup>2</sup></td>
                        <td>
                            <a href="" class="btn btn-warning" data-toggle="modal" data-target="#edit{{$dt->id}}"> <i class="fas fa-edit"></i></a>
                            <a href="/alternatif/delete/{{$dt->id}}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                        </td>
                        @endforeach

                    </tr>
                </tbody>

            </table>
        </div>


    </div>
    <!-- /.card-body -->

    <!-- Modal -->

    <!-- /.card -->


    @endsection

    @push('scripts')


    <script>
        $(function() {
            var Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000
            });

            $('.swalDefaultSuccess').click(function() {
                Toast.fire({
                    icon: 'success',
                    title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                })
            });
        });
    </script>
    @endpush