@extends('layouts.sbadmin')

@section('isinya')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    My Profile
                </div>
                <div class="card-body text-center">
                    <img src="{{ asset('gambar/gambarwanita.png') }}" alt="Your Image" class="img-fluid mb-3" style="width: 150px; height: auto;">
                    <h4>Nama: Jessie Anggasta</h4>
                    <h4>NIM: 8040220109</h4>
                    <h4>Kelas: 11MS4</h4>
                    <h4>Matakuliah : Pemograman WEB II</h4>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



