@extends('layout.main')

@section('title', 'Home')

@section('content')
<div id="content-wrapper">
    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Siswa</a>
            </li>
            <li class="breadcrumb-item active">Data Siswa</li>
        </ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-table"></i>
                Data Siswa</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Nama</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Alamat</th>
                                <th>Agama</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datasiswa as $siswa )
                            <tr>
                                <td>{{$siswa->nis}}</td>
                                <td>{{$siswa->nama}}</td>
                                <td>{{$siswa->tempat_lahir}}</td>
                                <td>{{$siswa->tgl_lahir}}</td>
                                <td>{{$siswa->alamat}}</td>
                                <td>{{$siswa->agama}}</td>
                                <td>{{$siswa->statusdesc}}</td>
                                <td>
                                    <a href="" class="badge badge-success">edit</a>
                                    <a href="" class="badge badge-danger">hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <button type="button" class="btn btn-primary" data-toggle="modal"
                        data-target="#exampleModal">+Tambah</button>
                </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Form Data Siswa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="/siswa/create">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-5">
                                <label for="inputNis">NIS</label>
                                <input type="text" class="form-control" name="nis" placeholder="No Induk Siswa">
                            </div>
                            <div class="form-group col-md-7">
                                <label for="inputNama">Nama</label>
                                <input type="text" class="form-control" name="nama" placeholder="Nama Siswa">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-5">
                                <label for="inputTmpLahir">Tempat Lahir</label>
                                <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir">
                            </div>
                            <div class="form-group col-md-7">
                                <label for="inputTglLahir">Tanggal Lahir</label>
                                <input type="text" class="form-control" name="tgl_lahir" placeholder="YYYY-MM-DD">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="InputAlamat">Alamat</label>
                                <textarea class="form-control" name="alamat" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="inputAgama">Agama</label>
                                <select name="agama" class="form-control">
                                    <option selected>Choose...</option>
                                    <option>Islam</option>
                                    <option>Kristen</option>
                                    <option>Katolik</option>
                                    <option>Budha</option>
                                    <option>Hindu</option>
                                    <option>Konghucu</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputStatus">Status</label>
                                <select name="status" class="form-control">
                                    <option selected>Choose...</option>
                                    <option>Aktif</option>
                                    <option>Tidak Aktif</option>
                                </select>
                            </div>
                        </div><hr>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="submit" class="btn btn-danger">Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection