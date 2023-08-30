@extends('layouts.app')

@section('title')
    Nilai Akurasi
@endsection

@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="page-header">
                    <h4 class="page-title">Nilai Akurasi</h4>
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
                            <a href="#">Nilai Akurasi</a>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex align-items-center">
                                    <h4 class="card-title">Data Testing / Data Uji</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="real-data-table" class="display table table-striped table-hover" >
                                        <thead>
                                            <tr>
                                                <th width="50px">No.</th>
                                                <th>Nama Siswa</th>
                                                <th>Kode Koleksi</th>
                                                <th>Judul Buku</th>
                                                <th>Jenis Buku</th>
                                                <th>Kelas</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php $no = 1; @endphp
                                            @foreach ($naive_bayes as $value)
                                                <tr>
                                                    <td>{{ $no++ }}</td>
                                                    <td>{{ \App\Models\TrainingData::where([['name', $value->name], ['code', $value->code], ['title', $value->title], ['type', $value->type], ['class', $value->class]])->first()->name }}</td>
                                                    <td>{{ \App\Models\TrainingData::where([['name', $value->name], ['code', $value->code], ['title', $value->title], ['type', $value->type], ['class', $value->class]])->first()->code }}</td>
                                                    <td>{{ \App\Models\TrainingData::where([['name', $value->name], ['code', $value->code], ['title', $value->title], ['type', $value->type], ['class', $value->class]])->first()->title }}</td>
                                                    <td>{{ \App\Models\TrainingData::where([['name', $value->name], ['code', $value->code], ['title', $value->title], ['type', $value->type], ['class', $value->class]])->first()->type }}</td>
                                                    <td>{{ \App\Models\TrainingData::where([['name', $value->name], ['code', $value->code], ['title', $value->title], ['type', $value->type], ['class', $value->class]])->first()->class }}</td>
                                                    <td>{{ \App\Models\TrainingData::where([['name', $value->name], ['code', $value->code], ['title', $value->title], ['type', $value->type], ['class', $value->class]])->first()->status }}</td>
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
                                    <h4 class="card-title">Data Prediksi</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="prediction-data-table" class="display table table-striped table-hover" >
                                        <thead>
                                            <tr>
                                                <th width="50px">No.</th>
                                                <th>Kelas Prediksi</th>
                                                <th>Minat</th>
                                                <th>Tidak Minat</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php $no = 1; @endphp
                                            @foreach ($naive_bayes as $value)
                                                <tr>
                                                    <td>{{ $no++ }}</td>
                                                    <td>{{ $value->status }}</td>
                                                    <td>{{ $value->result_a }}</td>
                                                    <td>{{ $value->result_b }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex align-items-center">
                                    <h4 class="card-title">Confusion Matrix</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="real-data-table" class="display table table-striped table-hover" >
                                        <thead>
                                            <tr>
                                                <th colspan="3">Confusion Matrix</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Data</td>
                                                <td colspan="2">Prediksi</td>
                                            </tr>
                                            <tr>
                                                <td>Aktual</td>
                                                <td>Minat</td>
                                                <td>Tidak Minat</td>
                                            </tr>
                                            <tr>
                                                <td>Minat</td>
                                                <td>{{ $confusion_matrix->true_positive }}</td>
                                                <td>{{ $confusion_matrix->true_negative }}</td>
                                            </tr>
                                            <tr>
                                                <td>Tidak Minat</td>
                                                <td>{{ $confusion_matrix->false_positive }}</td>
                                                <td>{{ $confusion_matrix->false_negative }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex align-items-center">
                                    <h4 class="card-title">Nilai Akurasi</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="real-data-table" class="display table table-striped table-hover" >
                                        <thead>
                                            <tr>
                                                <th>Nilai Akurasi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Precission</td>
                                                <td>{{ $accuracy->precision }}</td>
                                            </tr>
                                            <tr>
                                                <td>Recall</td>
                                                <td>{{ $accuracy->recall }}</td>
                                            </tr>
                                            <tr>
                                                <td>F-Measure</td>
                                                <td>{{ $accuracy->f1Score }}</td>
                                            </tr>
                                            <tr>
                                                <td>Accuracy</td>
                                                <td>{{ $accuracy->accuracy }}</td>
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
    <script src="{{ asset('assets/js/pages/accuracy.js') }}"></script>
@endpush
