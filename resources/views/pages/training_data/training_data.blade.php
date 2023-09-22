@extends('layouts.app')

@section('title')
    Data Training
@endsection

@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="page-header">
                    <h4 class="page-title">Data Training</h4>
                    <ul class="breadcrumbs">
                        <li class="nav-home">
                            <a href="#">
                                <i class="flaticon-home"></i>
                            </a>
                        </li>
                        <li class="separator">
                            <i class="flaticon-right-arrow"></i>
                        </li>
                        <li class="nav-item">
                            <a href="#">Data Mining</a>
                        </li>
                        <li class="separator">
                            <i class="flaticon-right-arrow"></i>
                        </li>
                        <li class="nav-item">
                            <a href="#">Data Training</a>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex align-items-center">
                                    <h4 class="card-title">Data Training</h4>
                                    <button class="btn btn-secondary btn-round ml-auto" data-toggle="modal" data-target="#addProduct">
                                        <i class="fa fa-plus mr-2"></i>
                                        Tambah Data Training
                                    </button>
                                </div>

                                <div class="modal fade" id="addProduct" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <form action="#" method="POST">
                                                @csrf
                                                @method('POST')

                                                <div class="modal-header no-bd">
                                                    <h5 class="modal-title">
                                                        <strong>
                                                            Form Tambah Produk
                                                        </strong>
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label for="variable">Nama Anggota</label>
                                                        <input type="text" class="form-control" name="variable" placeholder="Masukkan Variabel">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="criteria">Kode Koleksi</label>
                                                        <input type="text" class="form-control" name="code" placeholder="Masukkan Kode">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="criteria">Judul</label>
                                                        <input type="text" class="form-control" name="product" placeholder="Masukkan Produk">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="criteria">Jenis Buku</label>
                                                        <input type="text" class="form-control" name="price" placeholder="Masukkan Harga">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="criteria">Kelas</label>
                                                        <input type="text" class="form-control" name="stock" placeholder="Masukkan Stok">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="criteria">Status</label>
                                                        <input type="text" class="form-control" name="stock" placeholder="Masukkan Stok">
                                                    </div>
                                                </div>
                                                <div class="modal-footer no-bd">
                                                    <button type="submit" id="addRowButton" class="btn btn-primary">Tambah</button>
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="training-data-table" class="display table table-striped table-hover" >
                                        <thead>
                                            <tr>
                                                <th width="50px">No.</th>
                                                <th>Nama Anggota</th>
                                                <th>Kode Koleksi</th>
                                                <th>Judul</th>
                                                <th>Jenis Buku</th>
                                                <th>Kelas</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php $no = 1; @endphp
                                            @foreach ($training_data as $training_data)
                                                <tr>
                                                    <td>{{ $no++ }}</td>
                                                    <td>{{ $training_data->name }}</td>
                                                    <td>{{ $training_data->code }}</td>
                                                    <td>{{ $training_data->title }}</td>
                                                    <td>{{ $training_data->type }}</td>
                                                    <td>{{ $training_data->class }}</td>
                                                    <td>{{ $training_data->status }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('javascript')
    <script src="{{ asset('assets/js/pages/training_data.js') }}"></script>
@endpush
