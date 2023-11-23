@extends('layouts.fe')

@section('content')
    <!-- Header-->
    <header class="bg-dark py-5">
        <div class="container px-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center my-5">
                        <h1 class="display-5 fw-bolder text-white mb-2">PPDB SMK TI BAZMA</h1>
                        <h1 class="fw-bolder text-white mb-4">Tahun Pelajaran 2024/2025</h1>
                        <p class="lead text-white-50 mb-4">
                            Langkah Awal Belajar, Bertambah, dan Berubah di Era Digital
                        </p>
                        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                            <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#formulir">Daftar</a>
                            <a class="btn btn-outline-light btn-lg px-4" href="/informasi">Informasi</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Features section-->
    <section class="py-5 border-bottom" id="features">
        <div class="container px-5 my-5">
            <div class="row gx-5">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-collection"></i></div>
                    <h2 class="h4 fw-bolder">Featured title</h2>
                    <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
                    <a class="text-decoration-none" href="#!">
                        Call to action
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-building"></i></div>
                    <h2 class="h4 fw-bolder">Featured title</h2>
                    <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
                    <a class="text-decoration-none" href="#!">
                        Call to action
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
                <div class="col-lg-4">
                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-toggles2"></i></div>
                    <h2 class="h4 fw-bolder">Featured title</h2>
                    <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
                    <a class="text-decoration-none" href="#!">
                        Call to action
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Form section-->
    <section class="bg-light py-5 border-bottom" id="formulir">
        <div class="container px-5 my-5">
            <div class="text-center mb-5">
                <h2 class="fw-bolder">Formulir Pendaftaran Peserta Didik Baru</h2>
                <p class="lead mb-0">Islamic Boarding School SMK TI BAZMA</p>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="nav-wrapper position-relative end-0 mb-3">
                    <ul class="nav nav-pills nav-fill p-1" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab" href="#data-diri" role="tab" aria-controls="profile" aria-selected="true">
                            Step 1
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#data-prestasi" role="tab" aria-controls="dashboard" aria-selected="false">
                            Step 2
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#data-orangtua" role="tab" aria-controls="dashboard" aria-selected="false">
                            Step 3
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#tempat-tinggal" role="tab" aria-controls="dashboard" aria-selected="false">
                            Step 4
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#riwayat-kesehatan" role="tab" aria-controls="dashboard" aria-selected="false">
                            Step 5
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#upload-dokumen" role="tab" aria-controls="dashboard" aria-selected="false">
                            Step 6
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#Pernyataan" role="tab" aria-controls="dashboard" aria-selected="false">
                            Step 7
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-12 mb-5 mb-lg-0">
                    <div class="card mb-5 mb-xl-0">
                        <div class="card-body p-5">
                            <div class="tab-content" id="myTabContent">
                                <!-- Data Diri -->
                                <div class="tab-pane fade show active" id="data-diri">
                                    <h4 class="fw-bolder text-center mb-4">Data Diri Calon Peserta Didik</h4>
                                    <hr class="horizontal dark mb-4">
                                    <form method="POST" action="{{ route('register.perform') }}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">NIK</label>
                                                    <input class="form-control" type="text" name="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">NISN</label>
                                                    <input class="form-control" type="email" name="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Nama Lengkap</label>
                                                    <input class="form-control" type="text" name="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Tempat Lahir</label>
                                                    <input class="form-control" type="text" name="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Tanggal Lahir</label>
                                                    <input class="form-control" type="date" name="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Alamat Saat Ini</label>
                                                    <input class="form-control" type="text" name="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Provinsi Tempat Tinggal</label>
                                                    <input class="form-control" type="text" name="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Kota/Kabupaten Tempat Tinggal</label>
                                                    <input class="form-control" type="text" name="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">No. Telephone/Hp/Whatsapp</label>
                                                    <input class="form-control" type="number" name="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Akun Media Sosial (instagram/fb/twitter jika ada)</label>
                                                    <input class="form-control" type="text" name="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Asal SMP/MTs/Sederajat</label>
                                                    <input class="form-control" type="text" name="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">NPSN</label>
                                                    <input class="form-control" type="number" name="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Tahun Lulus</label>
                                                    <select class="form-control" name="" id="">
                                                        <option value="">Pilih</option>
                                                        <option value="1">2023</option>
                                                        <option value="2">2024</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Anak ke....dari....bersaudara</label>
                                                    <input class="form-control" type="text" name="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Keadaan Orang Tua</label>
                                                    <select class="form-control" name="" id="">
                                                        <option value="">Pilih</option>
                                                        <option value="1">Orang Tua Saya Lengkap</option>
                                                        <option value="2">Saya Yatim</option>
                                                        <option value="3">Saya Piatu</option>
                                                        <option value="4">Saya Yatim Piatu</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Status dalam Keluarga</label>
                                                    <select class="form-control" name="" id="">
                                                        <option value="">Pilih</option>
                                                        <option value="1">Anak Kandung</option>
                                                        <option value="2">Anak Tiri</option>
                                                        <option value="3">Anak Angkat</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Saat Ini Tinggal Bersama</label>
                                                    <select class="form-control" name="" id="">
                                                        <option value="">Pilih</option>
                                                        <option value="1">Orang Tua</option>
                                                        <option value="2">Kakek/Nenek</option>
                                                        <option value="3">Saudara Kandung</option>
                                                        <option value="4">Panti/Pondok Pesantren</option>
                                                        <option value="5">Wali</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Penerima Bantuan Sosial | <small><i>Jika tidak, isi dengan <b>-</b></i></small></label>
                                                    <select class="form-control" name="" id="">
                                                        <option value="">Pilih</option>
                                                        <option value="1">Kartu Perlindungan Sosial (KPS)</option>
                                                        <option value="2">Kartu Indonesia Pintar (KIP)</option>
                                                        <option value="3">Kartu Indonesia Sehat (KIS)</option>
                                                        <option value="4">Program Keluarga Harapan (PKH)</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- Data prestrasi -->
                                <div class="tab-pane fade show" id="data-prestasi">
                                    <h4 class="fw-bolder text-center mb-4">Data Prestasi Calon Peserta Didik</h4>
                                    <hr class="horizontal dark mb-4">
                                    <form method="POST" action="{{ route('register.perform') }}">
                                        @csrf
                                        <div class="row">
                                            <p class="text-sm">
                                                Nilai Rapor <b>Matematika</b>
                                                Semester 3-5
                                            </p>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Semester 3</label>
                                                    <input class="form-control" type="number" name="username">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Semester 4</label>
                                                    <input class="form-control" type="number" name="email">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Semester 5</label>
                                                    <input class="form-control" type="number" name="">
                                                </div>
                                            </div>
                                            <p class="text-sm">
                                                Nilai Rapor <b>IPA</b>
                                                Semester 3-5
                                            </p>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Semester 3</label>
                                                    <input class="form-control" type="number" name="username">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Semester 4</label>
                                                    <input class="form-control" type="number" name="email">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Semester 5</label>
                                                    <input class="form-control" type="number" name="">
                                                </div>
                                            </div>
                                            <p class="text-sm">
                                                Nilai Rapor <b>Bahasa Indonesia</b>
                                                Semester 3-5
                                            </p>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Semester 3</label>
                                                    <input class="form-control" type="number" name="username">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Semester 4</label>
                                                    <input class="form-control" type="number" name="email">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Semester 5</label>
                                                    <input class="form-control" type="number" name="">
                                                </div>
                                            </div>
                                            <p class="text-sm">
                                                Nilai Rapor <b>Bahasa Inggris</b>
                                                Semester 3-5
                                            </p>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Semester 3</label>
                                                    <input class="form-control" type="number" name="username">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Semester 4</label>
                                                    <input class="form-control" type="number" name="email">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Semester 5</label>
                                                    <input class="form-control" type="number" name="">
                                                </div>
                                            </div>
                                            <p class="text-sm">
                                                Nilai Rapor <b>Agama Islam</b>
                                                Semester 3-5
                                            </p>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Semester 3</label>
                                                    <input class="form-control" type="number" name="username">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Semester 4</label>
                                                    <input class="form-control" type="number" name="email">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Semester 5</label>
                                                    <input class="form-control" type="number" name="">
                                                </div>
                                            </div>
                                            <hr class="horizontal dark mb-4 mt-4">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Bahasa Asing yang Dikuasai (Jika Ada)</label>
                                                    <input class="form-control" type="text" name="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Jumlah Hafalan (Juz)</label>
                                                    <input class="form-control" type="number" name="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Juz Yang Telah Dihafal</label>
                                                    <br><small><i>(Contoh: Juz 30, Juz 29, dll)</i></small>
                                                    <input class="form-control" type="text" name="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Riwayat Prestasi Calon Peserta Didik (Jika Ada)</label>
                                                    <br><small><i>format pengisian : Jenis prestasi - tingkat - nama prestasi - tahun - penyelenggara</i></small>
                                                    <input class="form-control" type="text" name="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Riwayat Organisasi Sekolah dan Non-Sekolah (Jika Ada)</label>
                                                    <br><small><i>(format pengisian : bidang organisasi - tingkat - nama organisasi - tahun kepengurusan)</i></small>
                                                    <input class="form-control" type="number" name="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Hal-hal Khusus</label>
                                                    <br><small><i>(Keunikan, Passion, Kebiasaan)</i></small>
                                                    <input class="form-control" type="text" name="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Cita-cita</label>
                                                    <input class="form-control" type="number" name="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Hobi</label>
                                                    <input class="form-control" type="text" name="">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- Data orangtua -->
                                <div class="tab-pane fade show" id="data-orangtua">
                                    <h4 class="fw-bolder text-center mb-4">Data Orangtua/Wali Calon Peserta Didik</h4>
                                    <hr class="horizontal dark mb-4">
                                    <form method="POST" action="{{ route('register.perform') }}">
                                        @csrf
                                        <div class="row">
                                            <!-- Data Ayah -->
                                            <div class="col-md-6">
                                                <p class="text-sm">
                                                    Data Ayah Kandung
                                                </p>
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Nama Ayang Kandung</label>
                                                    <input class="form-control" type="text" name="">
                                                </div>
                                       
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Pendidikan Terakhir</label>
                                                    <select class="form-control" name="" id="">
                                                        <option value="">Pilih</option>
                                                        <option value="1">Sarjana</option>
                                                        <option value="2">Diploma</option>
                                                        <option value="3">SMA/Sederajat</option>
                                                        <option value="4">SMP/Sederajat</option>
                                                        <option value="5">SD/Sederajat</option>
                                                    </select>
                                                </div>
                                            
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Pekerjaan Ayah Kandung</label>
                                                    <input class="form-control" type="text" name="">
                                                </div>
                                            
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Penghasilan Pokok/Pensiunan Ayah Kandung </label>
                                                    <br><small><i>(Tuliskan rata-rata penghasilan perbulan)</i></small>
                                                    <input class="form-control" type="text" name="">
                                                </div>
                                           
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Pendapatan di luar penghasilan pokok perbulan</label>
                                                    <br><small><i>(tuliskan rata-rata penghasilan perbulan),</i> Jika tidak ada isi dengan (-)</small>
                                                    <input class="form-control" type="text" name="">
                                                </div>
                                            
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Alamat Domisili Ayah Kandung</label>
                                                    <input class="form-control" type="text" name="">
                                                </div>
                                            
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Nomor Telephone/Hp/Whatsapp Ayah Kandung</label>
                                                    <input class="form-control" type="number" name="">
                                                </div>
                                            </div>
                                            <!-- Data Ibu -->
                                            <div class="col-md-6">
                                                <p class="text-sm">
                                                    Data Ibu Kandung
                                                </p>
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Nama Ibu Kandung</label>
                                                    <input class="form-control" type="text" name="">
                                                </div>
                                       
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Pendidikan Terakhir</label>
                                                    <select class="form-control" name="" id="">
                                                        <option value="">Pilih</option>
                                                        <option value="1">Sarjana</option>
                                                        <option value="2">Diploma</option>
                                                        <option value="3">SMA/Sederajat</option>
                                                        <option value="4">SMP/Sederajat</option>
                                                        <option value="5">SD/Sederajat</option>
                                                    </select>
                                                </div>
                                            
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Pekerjaan Ibu Kandung</label>
                                                    <input class="form-control" type="text" name="">
                                                </div>
                                            
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Penghasilan Pokok/Pensiunan Ibu Kandung </label>
                                                    <br><small><i>(Tuliskan rata-rata penghasilan perbulan)</i></small>
                                                    <input class="form-control" type="text" name="">
                                                </div>
                                           
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Pendapatan di luar penghasilan pokok perbulan</label>
                                                    <br><small><i>(tuliskan rata-rata penghasilan perbulan),</i> Jika tidak ada isi dengan (-)</small>
                                                    <input class="form-control" type="text" name="">
                                                </div>
                                            
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Alamat Domisili Ibu Kandung</label>
                                                    <input class="form-control" type="text" name="">
                                                </div>
                                            
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Nomor Telephone/Hp/Whatsapp Ibu Kandung</label>
                                                    <input class="form-control" type="number" name="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Harapan Orang Tua</label>
                                                    <textarea class="form-control" name="" id="" cols="30" rows="5"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="horizontal dark mb-4">
                                        <p class="text-sm">
                                            Data Wali <i>(Jika ada)</i>
                                        </p>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Nama Wali</label>
                                                    <input class="form-control" type="text" name="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Pekerjaan Wali</label>
                                                    <input class="form-control" type="text" name="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Penghasilan Wali</label>
                                                    <input class="form-control" type="text" name="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Alamat Domisili Wali</label>
                                                    <input class="form-control" type="text" name="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Hubungan dengan Wali</label>
                                                    <input class="form-control" type="text" name="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Alamat Domisili Wali</label>
                                                    <input class="form-control" type="text" name="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Email <i>(Jika ada)</i></label>
                                                    <input class="form-control" type="text" name="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Jumlah Tanggungan Dalam Keluarga</label>
                                                    <input class="form-control" type="text" name="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Sumber Penghasilan Lain</label>
                                                    <br><small><i>Jika tidak ada isi dengan (-)</i></small>
                                                    <select class="form-control" name="" id="">
                                                        <option value="">Pilih</option>
                                                        <option value="1">Kakak</option>
                                                        <option value="2">Saudara</option>
                                                        <option value="3">Kakek</option>
                                                        <option value="4">Nenek</option>
                                                        <option value="5">Kerabat</option>
                                                        <option value="6">-</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <hr class="horizontal dark mb-4">
                                            <p class="text-sm">
                                                Kerabat/Relawan yang Dapat Dihubungi
                                                <br><small><i>(Sebagai Fasilitator/Penghubung Calon Siswa dengan Sekolah Selama Proses Seleksi PPDB Berlangsung)</i></small>
                                            </p>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Nama</label> 
                                                    <input class="form-control" type="text" name="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Hubungan dengan Calon Siswa</label> 
                                                    <input class="form-control" type="text" name="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Nomor Hp/Whatsapp</label> 
                                                    <input class="form-control" type="text" name="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Alamat email Fasilitator (Jika Ada)</label> 
                                                    <input class="form-control" type="text" name="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Mengetahui informasi PPDB SMK TI BAZMA dari</label>
                                                    <select class="form-control" name="" id="">
                                                        <option value="">Pilih</option>
                                                        <option value="1">Whatsapp</option>
                                                        <option value="2">Website</option>
                                                        <option value="3">Instagram</option>
                                                        <option value="4">Kerabat</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Apakah Memiliki Saudara Yang Pernah/Masih Mendapatkan Beasiswa di SMK TI BAZMA</label>
                                                    <select class="form-control" name="" id="">
                                                        <option value="">Pilih</option>
                                                        <option value="1">Ya</option>
                                                        <option value="2">Tidak</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection