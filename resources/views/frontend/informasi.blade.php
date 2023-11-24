@extends('layouts.fe')

@section('content')
    <!-- Header-->
    <header class="bg-dark py-5">
        <div class="container px-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center my-5">
                        <h1 class="display-5 fw-bolder text-white mb-2">Informasi</h1>
                        <h1 class="fw-bolder text-white mb-4">PPDB SMK TI BAZMA</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Tahapan section-->
    <section class="bg-light py-5 border-bottom">
        <div class="container px-5 my-5">
            <div class="text-center mb-5">
                <h2 class="fw-bolder">Tahapan Seleksi</h2>
                <p class="lead mb-0">Islamic Boarding School SMK TI BAZMA</p>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-12 mb-5 mb-lg-0">
                    <div class="card mb-5 mb-xl-0">
                        <div class="card-body p-5">
                            <img src="{{ asset('img/tahapan-seleksi-ppdb.png') }}" alt="" width="100%">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Informasi section-->
    <section class="py-5 border-bottom">
        <div class="container px-5 my-5">
            <div class="text-center mb-5">
                <h2 class="fw-bolder">Informasi Pendaftaran</h2>
                <p class="lead mb-0">Islamic Boarding School SMK TI BAZMA</p>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-12 mb-5 mb-lg-0">
                    <div class="card mb-5 mb-xl-0">
                        <div class="card-body p-5">
                            <p>
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
                            </p>
                            <a class="btn btn-primary btn-lg px-4 me-sm-3 mt-2" href="/">Daftar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact section-->
    <section class="bg-light py-5 border-bottom">
        <div class="container px-5 my-5 px-5">
            <div class="text-center mb-5">
                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-whatsapp"></i></div>
                <h2 class="fw-bolder">Hubungi Admin PPDB</h2>
                <p class="lead mb-4">Kami siap membantu</p>
                <a class="btn btn-success btn-lg px-4 me-sm-3" href="https://wa.me/628111144339" target="_blank">WhatsApp</a>
            </div>
        </div>
    </section>
@endsection