@extends('layouts.sbadmin')
@section('isinya')

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-4">
                                {{ $judul }}
                            </div>
                            <div class="col-md-4">
    
                            </div>
                            <div class="col-md-4">
                                <form class="d-flex" role="search" method="get"
                                action="{{ url('mahasiswa/cari/data', []) }}">
                                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
                                    &nbsp;
                                    <button class="btn btn-outline-success" type="submit">Search</button>
                                </form>
                            
                            </div>
                        </div>
                        
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>NIM</th>
                                    <th>Nama</th>
                                    <th>Jurusan</th>
                                    <th>Nomor HP</th>
                                    <th>Created</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($mahasiswa as $a)
                                    <tr>
                                        <td>{{ $a->id }}</td>
                                        <td>{{ $a->nim }}</td>
                                        <td>{{ $a->nama }}</td>
                                        <td>{{ $a->jurusan }}</td>
                                        <td>{{ $a->nomor_hp }}</td>
                                        <td>{{ $a->created_at }}</td>
                                        <td>
                                            <a href="{{ url('mahasiswa/'.$a->id.'/edit', []) }}"
                                                class="btn btn-primary btn-sm">Edit</a>

                                            <form action="{{ url('mahasiswa/'.$a->id, []) }}" method="post" class="d-inline"
                                                onsubmit="return confirm('Apakah Dihapus?')">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">
                        {{ $mahasiswa->links() }}
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection