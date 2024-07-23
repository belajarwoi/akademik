@extends('layouts.medilab')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card">
                    <div class="card-header">
                        <h3>Registrasi Data Mahasiswa</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('mahasiswa', []) }}" method="POST">
                            @method('POST')
                            @csrf
                            <div class="form-group">
                                <label for="my-input">NIM</label>
                                <input id="my-input" class="form-control" type="text" name="id_mahasiswa" value="{{ old('id_mahasiswa') }}">
                                <span class="text-danger">{{ $errors->first('id_mahasiswa') }}</span>
                            </div>
                            <div class="form-group">
                                <label for="my-input">Nama</label>
                                <input id="my-input" class="form-control" type="text" name="nama" value="{{ old('nama') }}">
                                <span class="text-danger">{{ $errors->first('nama') }}</span>
                            </div>
                            <div class="form-group">
                                <label for="my-select">Jurusan</label>
                                <select id="my-select" class="form-control" name="jurusan">
                                <option value="">Pilih Jurusan</option>
                                    @foreach ( $list_js as $a )
                                        <option value="{{ $a }}" @selected($a==old('jurusan'))>{{ $a }}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger">{{ $errors->first('jurusan') }}</span>
                            </div>
                            <div class="form-group">
                                <label for="my-input">Nomor Hp</label>
                                <input id="my-input" class="form-control" type="number" name="nomor_hp" 
                                value="{{ old('nomor_hp') }}">
                                <span class="text-danger">{{ $errors->first('nomor_hp') }}</span>
                            </div>
                            <div class="card-footer">
                                <button type="sumbit" class="btn btn-primary">Register</button>
                                </form>
                            </div>
                    </div>
                    <div class="card-footer">

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection