@extends('layouts.app')

@section('content')
    <main class="main-content  mt-0">
        <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg"
            style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/signup-cover.jpg'); background-position: top;">
            <span class="mask bg-gradient-dark opacity-6"></span>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5 text-center mx-auto">
                        <h1 class="text-white mb-2 mt-5">
                            <img src="{{ asset('img/logos/logo-smk-ti-bazma-putih.png') }}" alt="" width="50%">
                            <br>
                            Selamat Datang
                        </h1>
                        <p class="text-lead text-white">
                            SMK TI BAZMA Tahun Ajar 2024/2025
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
                <div class="col-xl-8 col-lg-10 col-md-12 mx-auto">
                    <div class="card z-index-0">
                        <div class="card-body">
                            <div class="card-header text-center pt-4">
                                <h4>Informasi</h4>
                            </div>
                            <p class="text-lead text-black">
                                Islamic Boarding School SMK TI BAZMA merupakan sekolah unggulan berasrama yang dikelola oleh Yayasan BAZMA dan diperuntukkan bagi peserta didik lulusan SMP/MTs/Sederajat khususnya anak-anak dhuafa berprestasi dari seluruh Indonesia.
                                <br><br>
                                Kami membuka Pendaftaran Peserta Didik Baru (PPDB) Angkatan 4  Tahun Pelajaran 2024/2025.  Disediakan beasiswa hingga 100%.
                                <br><br>
                                Untuk Kompetensi Keahlian :
                                Sistem Informatika, Jaringan dan Aplikasi (SIJA) yang akan ditempuh selama 4 tahun
                                <br><br>
                                ⚠️  Persiapkan seluruh dokumen pendukung sebelum mengisi formulir ini.
                                <br><br>
                                🔔  Upload Dokumen Pendukung :
                                <ol>
                                    <li>Scan Kartu Keluarga;</li>
                                    <li>Pas foto berwarna terbaru;</li>
                                    <li>Scan SKTM(download format);</li>
                                    <li>Surat Rekomendasi Kepala Sekolah/Guru (download format);</li>
                                    <li>Scan BPJS/KIS;</li>
                                    <li>Foto berwarna rumah yang ditempati (tampak depan, tampak samping, kamar tidur, ruang tamu dan kamar mandi);</li>
                                    <li>Membuat essay/karangan bebas tentang diri sendiri dan motivasi mendaftar PPDB SMK TI BAZMA dengan tema "Kontribusi saya untuk Masyarakat di era Teknologi";</li>
                                    <li>Input nilai rapor semester 3-5.</li>
                                </ol>
                                Pendaftar yang memiliki kesulitan atau keterbatasan dalam melakukan pendaftaran dapat menghubungi pihak narahubung.
                                <br>
                                _____________<br>
                                Narahubung :<br>
                                WA : 08 1111 4433 9<br>
                                IG  : @smktibazma<br>
                                www.smktibazma.sch.id
                            </p>
                        </div>
                    </div>
                </div>
                <!-- --------------- -->
                <div class="col-xl-8 col-lg-10 col-md-12 mx-auto mt-4">
                    <div class="card z-index-0">
                        <div class="card-body">
                            <div class="card-header text-center pt-4">
                                <h5>Form PPDB SMK TI BAZMA</h5>
                            </div>
                            <form method="POST" action="{{ route('register.perform') }}">
                                @csrf
                                <!-- <div class="card-header pb-0">
                                    <div class="d-flex align-items-center">
                                        <p class="mb-0">Edit Profile</p>
                                        <button type="submit" class="btn btn-primary btn-sm ms-auto">Save</button>
                                    </div>
                                </div> -->
                                <div class="card-body">
                                    <p class="text-uppercase text-sm">Data Diri Calon Peserta Didik</p>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">NIK</label>
                                                <input class="form-control" type="text" name="username" value="#">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">NISN</label>
                                                <input class="form-control" type="email" name="email" value="#">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Nama Lengkap</label>
                                                <input class="form-control" type="text" name="firstname"  value="#">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Tempat Lahir</label>
                                                <input class="form-control" type="text" name="lastname" value="#">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Tanggal Lahir</label>
                                                <input class="form-control" type="text" name="username" value="#">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Alamat Saat Ini</label>
                                                <input class="form-control" type="email" name="email" value="#">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Provinsi Tempat Tinggal</label>
                                                <input class="form-control" type="text" name="firstname"  value="#">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Kota/Kabupaten Tempat Tinggal</label>
                                                <input class="form-control" type="text" name="lastname" value="#">
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="horizontal dark">
                                    <p class="text-uppercase text-sm">Contact Information</p>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Address</label>
                                                <input class="form-control" type="text" name="address"
                                                    value="#">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">City</label>
                                                <input class="form-control" type="text" name="city" value="#">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Country</label>
                                                <input class="form-control" type="text" name="country" value="#">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Postal code</label>
                                                <input class="form-control" type="text" name="postal" value="#">
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="horizontal dark">
                                    <p class="text-uppercase text-sm">About me</p>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">About me</label>
                                                <input class="form-control" type="text" name="about"
                                                    value="#">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </main>
    @include('layouts.footers.guest.footer')
@endsection
