@extends('master')
@section('title', 'Sistem Rekomendasi Jurusan')
@section('konten')
    <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="../images/logo-stmik.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="400"
                    height="150" loading="lazy">
            </div>
            <div class="col-lg-5">
                <h1 class="display-8 fw-bold lh-1 mb-3">Sistem Rekomendasi Jurusan</h1>
                <p class="lead">Website ini bertujuan untuk membantu para calon
                    mahasiswa yang masih
                    kebingungan dalam
                    menentukan jurusan yang akan dipilih dan membantu merekomendasikan jurusan berdasarkan preferensi
                    minat, bakat dan prospek kerja yang diinginkan oleh calon mahasiswa</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <a href="/login"><button type="button" class="btn btn-success btn-lg px-4 me-md-2">Login</button>
                </div>
            </div>
        </div>
    </div>
@endsection
