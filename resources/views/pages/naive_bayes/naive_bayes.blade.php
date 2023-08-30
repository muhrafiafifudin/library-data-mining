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
                                <div class="d-flex align-items-center">
                                    <h4 class="card-title">Pengujian Naive Bayes</h4>
                                    <button class="btn btn-secondary btn-round ml-auto" data-toggle="modal" data-target="#addProduct">
                                        <i class="fa fa-plus mr-2"></i>
                                        Pengujian Naive Bayes
                                    </button>
                                </div>

                                <div class="modal fade" id="addProduct" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <form action="{{ route('naive-bayes.store') }}" method="POST">
                                                @csrf
                                                @method('POST')

                                                <div class="modal-header no-bd">
                                                    <h5 class="modal-title">
                                                        <strong>
                                                            Form Tambah Pengujian Naive Bayes
                                                        </strong>
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label for="name">Nama Siswa</label>
                                                        <select name="name" class="form-control" id="selectName">
                                                            <option value="">Pilih Nama Siswa</option>

                                                            @foreach ($names as $name)
                                                                <option value="{{ $name }}">{{ $name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="type">Kelas</label>
                                                        <input type="text" id="nameClass" name="class" class="form-control" readonly>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="code">Kode Koleksi</label>
                                                        <select name="code" class="form-control" id="selectCode">
                                                            <option value="">Pilih Kode Koleksi</option>

                                                            @foreach ($codes as $code)
                                                                <option value="{{ $code }}">{{ $code }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="type">Judul Buku</label>
                                                        <input type="text" id="bookTitle" name="title" class="form-control" readonly>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="type">Jenis Buku</label>
                                                        <input type="text" id="bookType" name="type" class="form-control" readonly>
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
                                    <table id="naive-bayes-table" class="display table table-striped table-hover" >
                                        <thead>
                                            <tr>
                                                <th width="50px">No.</th>
                                                <th>Nama Siswa</th>
                                                <th>Kode Koleksi</th>
                                                <th>Judul Buku</th>
                                                <th>Jenis Buku</th>
                                                <th>Kelas</th>
                                                <th>Kelass</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php $no = 1; @endphp
                                            @foreach ($naive_bayes as $value)
                                                <tr>
                                                    <td>{{ $no++ }}</td>
                                                    <td>{{ $value->name }}</td>
                                                    <td>{{ $value->code }}</td>
                                                    <td>{{ $value->title }}</td>
                                                    <td>{{ $value->type }}</td>
                                                    <td>{{ $value->class }}</td>
                                                    <td>{{ $value->class }}</td>
                                                    <td>
                                                        <form action="{{ route('naive-bayes.destroy', \Crypt::encrypt($value->id)) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')

                                                            <div class="form-button-action">
                                                                <a href="{{ route('naive-bayes.show', \Crypt::encrypt($value->id)) }}" class="btn btn-link btn-primary">
                                                                    <i class="fa fa-eye"></i>
                                                                </a>

                                                                <button type="submit" class="btn btn-link btn-danger">
                                                                    <i class="fa fa-times"></i>
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </td>
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
    <script src="{{ asset('assets/js/pages/naive_bayes.js') }}"></script>
@endpush
