@extends('layouts.app')

@section('title')
    Pengujian Naive Bayes
@endsection

@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="page-header">
                    <h4 class="page-title">Pengujian Naive Bayes</h4>
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
                            <a href="#">Pengujian Naive Bayes</a>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Pengujian Naive Bayes</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <form action="#" method="POST">
                                        @csrf
                                        @method('POST')

                                        <table id="ahp-weighting-table" class="display table table-striped table-hover" >
                                            <thead>
                                                <tr>
                                                    <th>Kriteria</th>
                                                    <th>Nilai Perbandingan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <input type="number" step="any" class="form-control" placeholder="Masukkan Bobot" required>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <div class="text-center mt-5">
                                            <button type="submit" class="btn btn-secondary">Lakukan Pembobotan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
