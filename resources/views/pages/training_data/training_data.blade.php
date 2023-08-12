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
                                                        <label for="variable">Variabel</label>
                                                        <input type="text" class="form-control" name="variable" placeholder="Masukkan Variabel">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="criteria">Kode</label>
                                                        <input type="text" class="form-control" name="code" placeholder="Masukkan Kode">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="criteria">Produk</label>
                                                        <input type="text" class="form-control" name="product" placeholder="Masukkan Produk">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="criteria">Harga</label>
                                                        <input type="number" class="form-control" name="price" placeholder="Masukkan Harga">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="criteria">Tanggal Kadaluarsa</label>
                                                        <input type="date" class="form-control" name="exp_date" placeholder="Masukkan Tanggal Kadaluarsa">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="criteria">Stok</label>
                                                        <input type="number" class="form-control" name="stock" placeholder="Masukkan Stok">
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
                                    <table id="product-table" class="display table table-striped table-hover" >
                                        <thead>
                                            <tr>
                                                <th width="50px">No.</th>
                                                <th>Variabel</th>
                                                <th>Code</th>
                                                <th>Produk</th>
                                                <th>Harga Satuan</th>
                                                <th>Kadaluarsa</th>
                                                <th>Stok</th>
                                                <th width="50px">Aksi</th>
                                            </tr>
                                        </thead>
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
