@extends('layouts.app')

@section('title')
    Detail Pengujian Naive Bayes
@endsection

@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="page-header">
                    <h4 class="page-title">Detail Pengujian Naive Bayes</h4>
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
                            <a href="#">Detail Pengujian Naive Bayes</a>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex align-items-center">
                                    <h4 class="card-title">Detail Pengujian Naive Bayes</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="display table table-striped table-hover" >
                                        <thead>
                                            <tr>
                                                <th rowspan="2">Probabilitas</th>
                                                <th colspan="2">Nama Siswa ( {{ $filtered_name_probability->name }} )</th>
                                                <th colspan="2">Kode Koleksi ( {{ $filtered_code_probability->code }} )</th>
                                                <th colspan="2">Judul Buku ( {{ $filtered_title_probability->title }} )</th>
                                                <th colspan="2">Jenis Buku ( {{ $filtered_type_probability->type }} )</th>
                                                <th colspan="2">Kelas ( {{ $filtered_class_probability->class }} )</th>
                                            </tr>
                                            <tr>
                                                <th>Minat</th>
                                                <th>Tidak Minat</th>
                                                <th>Minat</th>
                                                <th>Tidak Minat</th>
                                                <th>Minat</th>
                                                <th>Tidak Minat</th>
                                                <th>Minat</th>
                                                <th>Tidak Minat</th>
                                                <th>Minat</th>
                                                <th>Tidak Minat</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $result_a = number_format($filtered_name_probability->name_a_value*$filtered_code_probability->code_a_value*$filtered_title_probability->title_a_value*$filtered_type_probability->type_a_value*$filtered_class_probability->class_a_value, 8);
                                                $result_b = number_format($filtered_name_probability->name_b_value*$filtered_code_probability->code_b_value*$filtered_title_probability->title_b_value*$filtered_type_probability->type_b_value*$filtered_class_probability->class_b_value, 8);
                                            @endphp

                                            <tr>
                                                <td>Nilai Probabilitas</td>
                                                <td>{{ $filtered_name_probability->name_a_value }}</td>
                                                <td>{{ $filtered_name_probability->name_b_value }}</td>
                                                <td>{{ $filtered_code_probability->code_a_value }}</td>
                                                <td>{{ $filtered_code_probability->code_b_value }}</td>
                                                <td>{{ $filtered_title_probability->title_a_value }}</td>
                                                <td>{{ $filtered_title_probability->title_b_value }}</td>
                                                <td>{{ $filtered_type_probability->type_a_value }}</td>
                                                <td>{{ $filtered_type_probability->type_b_value }}</td>
                                                <td>{{ $filtered_class_probability->class_a_value }}</td>
                                                <td>{{ $filtered_class_probability->class_b_value }}</td>
                                            </tr>
                                            <tr>
                                                <td>Minat</td>
                                                <td colspan="10">{{ $filtered_name_probability->name_a_value . ' * ' . $filtered_code_probability->code_a_value . ' * ' . $filtered_title_probability->title_a_value . ' * ' . $filtered_type_probability->type_a_value . ' * ' . $filtered_class_probability->class_a_value . ' = ' }}<strong>{{ $result_a }}</strong></td>
                                            </tr>
                                            <tr>
                                                <td>Tidak Minat</td>
                                                <td colspan="10">{{ $filtered_name_probability->name_b_value . ' * ' . $filtered_code_probability->code_b_value . ' * ' . $filtered_title_probability->title_b_value . ' * ' . $filtered_type_probability->type_b_value . ' * ' . $filtered_class_probability->class_b_value . ' = ' }}<strong>{{ $result_b }}</strong></td>
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
                                    <h4 class="card-title">Kesimpulan</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="result-naive-bayes-table" class="display table table-striped table-hover" >
                                        <thead>
                                            <tr>
                                                <th>Nama Siswa</th>
                                                <th>Kode Koleksi</th>
                                                <th>Judul Buku</th>
                                                <th>Jenis Buku</th>
                                                <th>Kelas</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>{{ $naive_bayes->name }}</td>
                                                <td>{{ $naive_bayes->code }}</td>
                                                <td>{{ $naive_bayes->title }}</td>
                                                <td>{{ $naive_bayes->type }}</td>
                                                <td>{{ $naive_bayes->class }}</td>
                                                <td>{{ $naive_bayes->status }}</td>
                                            </tr>
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
    <script src="{{ asset('assets/js/pages/detail_naive_bayes.js') }}"></script>
@endpush
