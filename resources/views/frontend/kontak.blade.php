@extends('layouts.fe')

@section('content')
    <!-- Header-->
    <header class="bg-dark py-5">
        <div class="container px-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center my-5">
                        <h1 class="display-5 fw-bolder text-white mb-2">Kontak</h1>
                        <h1 class="fw-bolder text-white mb-4">PPDB SMK TI BAZMA</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- contact section-->
    <section class="py-5 border-bottom" id="features">
        <div class="container px-5 my-5">
            <div class="row gx-5">
                <div class="col-lg-2 mb-5 mb-lg-0">
                </div>
                <div class="col-lg-4 mb-5 mb-lg-0 text-center">
                    <a href="https://wa.me/628111144339" target="_blank">
                        <div class="feature bg-success bg-gradient text-white rounded-3 mb-3">
                            <i class="bi bi-whatsapp"></i>
                        </div>
                    </a>
                    <p>WhatsApp</p>
                    <h2 class="h4 fw-bolder">08 1111 4433 9</h2>
                    <!-- <a class="text-decoration-none" href="#!">
                        Call to action
                        <i class="bi bi-arrow-right"></i>
                    </a> -->
                </div>
                <div class="col-lg-4 mb-5 mb-lg-0 text-center">
                    <a href="https://www.instagram.com/smktibazma/" target="_blank">
                        <div class="feature bg-danger bg-gradient text-white rounded-3 mb-3">
                            <i class="bi bi-instagram"></i>
                        </div>
                    </a>
                    <p>Instagram</p>
                    <h2 class="h4 fw-bolder">@smktibazma</h2>
                    <!-- <a class="text-decoration-none" href="#!">
                        Call to action
                        <i class="bi bi-arrow-right"></i>
                    </a> -->
                </div>
                <div class="col-lg-2 mb-5 mb-lg-0">
                </div>
            </div>
        </div>
    </section>
    <!-- Maps section-->
    <section class="bg-light py-5 border-bottom">
        <div class="container px-5 my-5">
            <div class="text-center mb-5">
                <h2 class="fw-bolder">Lokasi Sekolah</h2>
                <p class="lead mb-0">Islamic Boarding School SMK TI BAZMA</p>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-12 mb-5 mb-lg-0">
                    <div class="card mb-5 mb-xl-0">
                        <div class="card-body p-5">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.581478949826!2d106.6861557748404!3d-6.5743848642677944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69db2b478d2725%3A0xa31558d4689b78c5!2sSMK%20TI%20BAZMA!5e0!3m2!1sid!2sid!4v1700707755655!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
@endsection