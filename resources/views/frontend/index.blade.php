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
                            <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#pernyataan" role="tab" aria-controls="dashboard" aria-selected="false">
                            Step 7
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-12 mb-5 mb-lg-0">
                    <div class="card mb-5 mb-xl-0">
                        <div class="card-body p-5">
                            <form method="POST" action="{{ route('register.perform') }}">
                                @csrf
                                <div class="tab-content" id="myTabContent">
                                    <!-- Data Diri -->
                                    <div class="tab-pane fade show active" id="data-diri">
                                        <h4 class="fw-bolder text-center mb-4">Data Diri Calon Peserta Didik</h4>
                                        <hr class="horizontal dark mb-4">                                        
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
                                    </div>
                                    <!-- Data Prestrasi -->
                                    <div class="tab-pane fade show" id="data-prestasi">
                                        <h4 class="fw-bolder text-center mb-4">Data Prestasi Calon Peserta Didik</h4>
                                        <hr class="horizontal dark mb-4">
                                        <div class="row">
                                            <p class="text-sm text-uppercase text-uppercase">
                                                Nilai Rapor <b>Matematika</b>
                                                Semester 3-5
                                            </p>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Semester 3</label>
                                                    <input class="form-control" type="number" name="">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Semester 4</label>
                                                    <input class="form-control" type="number" name="">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Semester 5</label>
                                                    <input class="form-control" type="number" name="">
                                                </div>
                                            </div>
                                            <p class="text-sm text-uppercase">
                                                Nilai Rapor <b>IPA</b>
                                                Semester 3-5
                                            </p>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Semester 3</label>
                                                    <input class="form-control" type="number" name="">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Semester 4</label>
                                                    <input class="form-control" type="number" name="">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Semester 5</label>
                                                    <input class="form-control" type="number" name="">
                                                </div>
                                            </div>
                                            <p class="text-sm text-uppercase">
                                                Nilai Rapor <b>Bahasa Indonesia</b>
                                                Semester 3-5
                                            </p>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Semester 3</label>
                                                    <input class="form-control" type="number" name="">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Semester 4</label>
                                                    <input class="form-control" type="number" name="">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Semester 5</label>
                                                    <input class="form-control" type="number" name="">
                                                </div>
                                            </div>
                                            <p class="text-sm text-uppercase">
                                                Nilai Rapor <b>Bahasa Inggris</b>
                                                Semester 3-5
                                            </p>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Semester 3</label>
                                                    <input class="form-control" type="number" name="">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Semester 4</label>
                                                    <input class="form-control" type="number" name="">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Semester 5</label>
                                                    <input class="form-control" type="number" name="">
                                                </div>
                                            </div>
                                            <p class="text-sm text-uppercase">
                                                Nilai Rapor <b>Agama Islam</b>
                                                Semester 3-5
                                            </p>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Semester 3</label>
                                                    <input class="form-control" type="number" name="">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Semester 4</label>
                                                    <input class="form-control" type="number" name="">
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
                                    </div>
                                    <!-- Data Orangtua/wali -->
                                    <div class="tab-pane fade show" id="data-orangtua">
                                        <h4 class="fw-bolder text-center mb-4">Data Orangtua/Wali Calon Peserta Didik</h4>
                                        <hr class="horizontal dark mb-4">
                                        <div class="row">
                                            <!-- Data Ayah -->
                                            <div class="col-md-6">
                                                <p class="text-sm text-uppercase">
                                                    Data Ayah Kandung
                                                </p>
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Nama Ayah Kandung</label>
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
                                                <p class="text-sm text-uppercase">
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
                                        <!-- Data Wali -->
                                        <p class="text-sm text-uppercase">
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
                                            <p class="text-sm text-uppercase">
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
                                    </div>
                                    <!-- Tempat Tinggal -->
                                    <div class="tab-pane fade show" id="tempat-tinggal">
                                        <h4 class="fw-bolder text-center mb-4">Rumah Tinggal dan Fasilitas Keluarga</h4>
                                        <hr class="horizontal dark mb-4">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Status Kepemilikan Rumah</label>
                                                    <select class="form-control" name="" id="">
                                                        <option value="">Pilih</option>
                                                        <option value="1">Sendiri</option>
                                                        <option value="2">Sewa Tahunan</option>
                                                        <option value="3">Sewa Bulanan</option>
                                                        <option value="4">Bebas Sewa</option>
                                                        <option value="5">Rumah Dinas</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Tahun Perolehan</label>
                                                    <input class="form-control" type="number" name="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Kualitas Rumah</label>
                                                    <select class="form-control" name="" id="">
                                                        <option value="">Pilih</option>
                                                        <option value="1">Layak Huni</option>
                                                        <option value="2">Setengah Layak Huni</option>
                                                        <option value="3">Tidak Layak Huni</option>
                                                        <option value="4">Yang Lain</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Luas Tanah</label>
                                                    <select class="form-control" name="" id="">
                                                        <option value="">Pilih</option>
                                                        <option value="1">< 25 m2</option>
                                                        <option value="1">25-50 m2</option>
                                                        <option value="1">50-99 m2</option>
                                                        <option value="1">100-200 m2</option>
                                                        <option value="1">> 200 m2</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Mandi, Cuci, dan Kakus</label>
                                                    <select class="form-control" name="" id="">
                                                        <option value="">Pilih</option>
                                                        <option value="1">Kepemilikan sendiri di dalam rumah</option>
                                                        <option value="2">Kepemilikan sendiri di luar rumah</option>
                                                        <option value="3">Berbagi pakai</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Sumber Air</label>
                                                    <select class="form-control" name="" id="">
                                                        <option value="">Pilih</option>
                                                        <option value="1">PDAM</option>
                                                        <option value="1">Sumur</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Daya Listrik</label>
                                                    <select class="form-control" name="" id="">
                                                        <option value="">Pilih</option>
                                                        <option value="1">Tidak Ada</option>
                                                        <option value="2">450 kWh</option>
                                                        <option value="3">900 kWh</option>
                                                        <option value="4">1300 kWh</option>
                                                        <option value="5">>1300 kWh</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Harta Tidak Bergerak</label>
                                                    <select class="form-control" name="" id="">
                                                        <option value="">Pilih</option>
                                                        <option value="1">Sawah</option>
                                                        <option value="2">Ladang</option>
                                                        <option value="3">Kolam</option>
                                                        <option value="4">Tanah</option>
                                                        <option value="5">Tidak Ada</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Status Kepemilikan Harta Tidak Bergerak</label>
                                                    <select class="form-control" name="" id="">
                                                        <option value="">Pilih</option>
                                                        <option value="1">Beli</option>
                                                        <option value="2">Sewa</option>
                                                        <option value="3">Warisan</option>
                                                        <option value="4">Hibah</option>
                                                        <option value="5">Tidak ada</option>
                                                        <option value="6">Lainnya</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Kendaraan Bermotor yang Dimiliki</label>
                                                    <select class="form-control" name="" id="">
                                                        <option value="">Pilih</option>
                                                        <option value="1">Motor</option>
                                                        <option value="2">Mobil</option>
                                                        <option value="3">Tidak Ada</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Status Kepemilikan Kendaraan Bermotor</label>
                                                    <select class="form-control" name="" id="">
                                                        <option value="">Pilih</option>
                                                        <option value="1">Beli</option>
                                                        <option value="2">Sewa</option>
                                                        <option value="3">Warisan</option>
                                                        <option value="4">Hibah</option>
                                                        <option value="5">Tidak ada</option>
                                                        <option value="6">Lainnya</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Riwayat Kesehatan -->
                                    <div class="tab-pane fade show" id="riwayat-kesehatan">
                                        <h4 class="fw-bolder text-center mb-4">Riwayat Kesehatan Calon Peserta Didik</h4>
                                        <hr class="horizontal dark mb-4">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Tinggi Badan</label>
                                                    <input class="form-control" type="number" name="">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Berat Badan</label>
                                                    <input class="form-control" type="number" name="">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Golongan darah</label>
                                                    <select class="form-control" name="" id="">
                                                        <option value="">Pilih</option>
                                                        <option value="1">A</option>
                                                        <option value="2">B</option>
                                                        <option value="3">O</option>
                                                        <option value="4">AB</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Penyakit yang pernah diderita/alergi</label>
                                                    <input class="form-control" type="text" name="">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Penyakit menular yang pernah diderita</label>
                                                    <input class="form-control" type="text" name="">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Apakah Anda Perokok ?</label>
                                                    <select class="form-control" name="" id="">
                                                        <option value="">Pilih</option>
                                                        <option value="1">Ya</option>
                                                        <option value="2">Tidak</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Apakah Anda Buta Warna ?</label>
                                                    <select class="form-control" name="" id="">
                                                        <option value="">Pilih</option>
                                                        <option value="1">Ya</option>
                                                        <option value="2">Tidak</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Apakah punya asuransi kesehatan seperti BPJS atau KIS ?</label>
                                                    <select class="form-control" name="" id="">
                                                        <option value="">Pilih</option>
                                                        <option value="1">Ya</option>
                                                        <option value="2">Tidak</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Silakan upload scan/foto kartu asuransi kesehatan seperti BPJS atau KIS</label>
                                                    <input class="form-control" type="file" name="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Upload Dokumen -->
                                    <div class="tab-pane fade show" id="upload-dokumen">
                                        <h4 class="fw-bolder text-center">Upload Dokumen Pendukung</h4>
                                        <center>
                                            <small class="text-center mb-4">
                                                <i>Dokumen dapat berupa foto ataupun scan (format PDF) yang jelas dan terbaca.</i>
                                            </small>
                                        </center>
                                        <hr class="horizontal dark mb-4">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Kartu Keluarga (KK)</label>
                                                    <input class="form-control" type="file" name="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Pas Foto Terbaru (Berwarna)</label>
                                                    <input class="form-control" type="file" name="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Surat Keterangan Tidak Mampu dari Masjid Terdekat (SKTM)</label>
                                                    <input class="form-control" type="file" name="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Surat Rekomendasi Kepala Sekolah/Wali Kelas/Guru SMP</label>
                                                    <input class="form-control" type="file" name="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Upload Foto Berwarna Rumah yang Ditempati (Tampak Depan, Tampak Samping, Kamar Tidur, Ruang Tamu, Dapur, dan Kamar Mandi)</label>
                                                    <input class="form-control" type="file" name="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Essay/Karangan Bebas Tentang "Peran Saya Sebagai Pemuda di Era Digital"</label>
                                                    <input class="form-control" type="file" name="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Pernyataan -->
                                    <div class="tab-pane fade show" id="pernyataan">
                                        <h4 class="fw-bolder text-center">Pernyataan</h4>
                                        <hr class="horizontal dark mb-4">
                                        <div class="row">
                                            <h6 class="fw-bolder text-center">Pernyataan Bersedia Mengikuti Rangkaian Seleksi PPDB (Online/Offline)</h6>
                                            <small class="text-center mb-4">
                                                Rangkaian seleksi PPDB SMK TI BAZMA TP 2024/2025 dilaksanakan secara online dan offline sesuai dengan kondisi yang berlaku. Silakan mengisi pilihan di bawah menyesuaikan dengan kesanggupan dan kesediaan Calon Peserta Didik.
                                            </small>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Saya bersedia mengikuti rangkaian tes yang diujikan, secara online (mempersiapkan secara mandiri device/alat dan kuota internet/jaringan). 
                                                        Jika tidak, jelaskan alasannya di bawah
                                                    </label><br><br>
                                                    <select class="form-control" name="" id="">
                                                        <option value="">Pilih</option>
                                                        <option value="1">Ya</option>
                                                        <option value="2">Yang Lain</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Saya bersedia mengikuti serangkaian tes yang diujikan secara offline di SMK TI BAZMA (Ciampea, Kab-Bogor)  bit.ly/lokasismktibazma (mengadakan akomodasi dan transportasi secara pribadi). 
                                                        Jika tidak, jelaskan alasannya di bawah
                                                    </label>
                                                    <small><i>Khususnya Calon Peserta Didik yang berdomisili di JABODETABEK </i></small>
                                                    <select class="form-control" name="" id="">
                                                        <option value="">Pilih</option>
                                                        <option value="1">Ya</option>
                                                        <option value="2">Yang Lain</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <hr class="horizontal dark mb-4 mt-4">
                                            <h6 class="fw-bolder">Pernyataan Calon  Peserta Didik</h6>
                                            <small class="mb-4">
                                                Saya dengan sungguh-sungguh menyatakan bahwa :  
                                                <ol>
                                                    <li>
                                                        Seluruh  pernyataan  data  dan  informasi  beserta  seluruh  dokumen  yang  saya lampirkan dalam berkas pendaftaran PPDB SMK TI BAZMA TP 2024-2025 adalah benar;
                                                    </li>
                                                    <li>
                                                        Apabila  diperlukan,  saya  bersedia  memberikan  informasi  lebih  lanjut  untuk melengkapi dokumen pendaftaran ini.
                                                    </li>
                                                </ol>

                                                Demikian  pernyataan  ini  saya  buat  dengan  sebenarnya  dan  penuh  rasa  tanggung jawab.
                                            </small>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <br>
                                                    <label for="example-text-input" class="form-control-label">
                                                        Saya bersedia mengikuti rangkaian tes yang diujikan, secara online (mempersiapkan secara mandiri device/alat dan kuota internet/jaringan). 
                                                        Jika tidak, jelaskan alasannya di bawah
                                                    </label>
                                                    <select class="form-control" name="" id="">
                                                        <option value="">Pilih</option>
                                                        <option value="1">Ya</option>
                                                        <option value="2">Yang Lain</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Saya bersedia mengikuti serangkaian tes yang diujikan secara offline di SMK TI BAZMA (Ciampea, Kab-Bogor)  bit.ly/lokasismktibazma (mengadakan akomodasi dan transportasi secara pribadi). 
                                                        Jika tidak, jelaskan alasannya di bawah
                                                    </label>
                                                    <small><i>Khususnya Calon Peserta Didik yang berdomisili di JABODETABEK </i></small>
                                                    <select class="form-control" name="" id="">
                                                        <option value="">Pilih</option>
                                                        <option value="1">Ya</option>
                                                        <option value="2">Yang Lain</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <hr class="horizontal dark mb-4 mt-4">
                                            <h6 class="fw-bolder">Pernyataan Calon  Peserta Didik</h6>
                                            <small class="mb-4">
                                                Saya dengan sungguh-sungguh menyatakan bahwa :  
                                                <ol>
                                                    <li>
                                                        Seluruh  pernyataan  data  dan  informasi  beserta  seluruh  dokumen  yang  dilampirkan dalam berkas pendaftaran PPDB SMK TI BAZMA TP 2024-2025 adalah benar;
                                                    </li>
                                                    <li>
                                                        Saya mendukung dan memberi izin anak/tanggungan saya dalam mengikuti keseluruhan rangkaian seleksi PPDB SMK TI BAZMA yang ditentukan, jika mengundurkan diri maka bersedia mengembalikan biaya seleksi yang telah dikeluarkan;
                                                    </li>
                                                    <li>
                                                        Apabila anak/tanggungan saya dinyatakan lolos seleksi maka saya memberi izin untuk bertempat tinggal di asrama selama masa pendidikan berlangsung.
                                                    </li>
                                                </ol>
                                                
                                                Demikian  pernyataan  ini  saya  buat  dengan  sebenarnya  dan  penuh  rasa  tanggung jawab.
                                            </small>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">
                                                        Apabila di kemudian hari ditemukan pelanggaran atas pernyataan tersebut, maka saya siap menerima keputusan yang ditetapkan oleh pihak SMK TI BAZMA.
                                                    </label>
                                                    <select class="form-control" name="" id="">
                                                        <option value="1">Ya</option>
                                                    </select>
                                                </div>
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
    </section>
@endsection