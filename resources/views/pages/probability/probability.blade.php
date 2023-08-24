@extends('layouts.app')

@section('title')
    Probabilitas
@endsection

@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="page-header">
                    <h4 class="page-title">Probabilitas</h4>
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
                            <a href="#">Probabilitas</a>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex align-items-center">
                                    <h4 class="card-title">Probabilitas Status Peminjaman</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="probability" class="display table table-striped table-hover" >
                                        <thead>
                                            <tr>
                                                <th rowspan="2">Probabilitas</th>
                                                <th colspan="2">Jumlah Probabilitas</th>
                                                <th colspan="2">Nilai Probabilitas</th>
                                            </tr>
                                            <tr>
                                                <th>Telah Kembali</th>
                                                <th>Belum Kembali</th>
                                                <th>Telah Kembali</th>
                                                <th>Belum Kembali</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Status Peminjaman</td>
                                                <td>{{ $probability->probability_a }}</td>
                                                <td>{{ $probability->probability_b }}</td>
                                                <td>{{ $probability->probability_a_value }}</td>
                                                <td>{{ $probability->probability_b_value }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex align-items-center">
                                    <h4 class="card-title">Probabilitas Nama Anggota</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="name-probability" class="display table table-striped table-hover" >
                                        <thead>
                                            <tr>
                                                <th rowspan="2">Probabilitas</th>
                                                <th colspan="2">Jumlah Probabilitas</th>
                                                <th colspan="2">Nilai Probabilitas</th>
                                            </tr>
                                            <tr>
                                                <th>Telah Kembali</th>
                                                <th>Belum Kembali</th>
                                                <th>Telah Kembali</th>
                                                <th>Belum Kembali</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($name_probability as $value)
                                                <tr>
                                                    <td>{{ $value->name }}</td>
                                                    <td>{{ $value->name_a }}</td>
                                                    <td>{{ $value->name_b }}</td>
                                                    <td>{{ $value->name_a_value }}</td>
                                                    <td>{{ $value->name_b_value }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex align-items-center">
                                    <h4 class="card-title">Probabilitas Kode Koleksi</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="code-probability" class="display table table-striped table-hover" >
                                        <thead>
                                            <tr>
                                                <th rowspan="2">Probabilitas</th>
                                                <th colspan="2">Jumlah Probabilitas</th>
                                                <th colspan="2">Nilai Probabilitas</th>
                                            </tr>
                                            <tr>
                                                <th>Telah Kembali</th>
                                                <th>Belum Kembali</th>
                                                <th>Telah Kembali</th>
                                                <th>Belum Kembali</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($code_probability as $value)
                                                <tr>
                                                    <td>{{ $value->code }}</td>
                                                    <td>{{ $value->code_a }}</td>
                                                    <td>{{ $value->code_b }}</td>
                                                    <td>{{ $value->code_a_value }}</td>
                                                    <td>{{ $value->code_b_value }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex align-items-center">
                                    <h4 class="card-title">Probabilitas Judul Buku</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="title-probability" class="display table table-striped table-hover" >
                                        <thead>
                                            <tr>
                                                <th rowspan="2">Probabilitas</th>
                                                <th colspan="2">Jumlah Probabilitas</th>
                                                <th colspan="2">Nilai Probabilitas</th>
                                            </tr>
                                            <tr>
                                                <th>Telah Kembali</th>
                                                <th>Belum Kembali</th>
                                                <th>Telah Kembali</th>
                                                <th>Belum Kembali</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($title_probability as $value)
                                                <tr>
                                                    <td>{{ $value->title }}</td>
                                                    <td>{{ $value->title_a }}</td>
                                                    <td>{{ $value->title_b }}</td>
                                                    <td>{{ $value->title_a_value }}</td>
                                                    <td>{{ $value->title_b_value }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex align-items-center">
                                    <h4 class="card-title">Probabilitas Jenis Buku</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="type-probability" class="display table table-striped table-hover" >
                                        <thead>
                                            <tr>
                                                <th rowspan="2">Probabilitas</th>
                                                <th colspan="2">Jumlah Probabilitas</th>
                                                <th colspan="2">Nilai Probabilitas</th>
                                            </tr>
                                            <tr>
                                                <th>Telah Kembali</th>
                                                <th>Belum Kembali</th>
                                                <th>Telah Kembali</th>
                                                <th>Belum Kembali</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($type_probability as $value)
                                                <tr>
                                                    <td>{{ $value->type }}</td>
                                                    <td>{{ $value->type_a }}</td>
                                                    <td>{{ $value->type_b }}</td>
                                                    <td>{{ $value->type_a_value }}</td>
                                                    <td>{{ $value->type_b_value }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex align-items-center">
                                    <h4 class="card-title">Probabilitas Kelas</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="class-probability" class="display table table-striped table-hover" >
                                        <thead>
                                            <tr>
                                                <th rowspan="2">Probabilitas</th>
                                                <th colspan="2">Jumlah Probabilitas</th>
                                                <th colspan="2">Nilai Probabilitas</th>
                                            </tr>
                                            <tr>
                                                <th>Telah Kembali</th>
                                                <th>Belum Kembali</th>
                                                <th>Telah Kembali</th>
                                                <th>Belum Kembali</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($class_probability as $value)
                                                <tr>
                                                    <td>{{ $value->class }}</td>
                                                    <td>{{ $value->class_a }}</td>
                                                    <td>{{ $value->class_b }}</td>
                                                    <td>{{ $value->class_a_value }}</td>
                                                    <td>{{ $value->class_b_value }}</td>
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
    <script src="{{ asset('assets/js/pages/probability.js') }}"></script>
@endpush
