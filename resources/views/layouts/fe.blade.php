<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>PPDB SMK TI BAZMA 2024/2025</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="assets/css/styles-fe.css" rel="stylesheet" />
        <link id="pagestyle" href="assets/css/argon-dashboard.css" rel="stylesheet" />
        
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-5">
                <a class="navbar-brand" href="#!">
                    <img src="{{ asset('img/logos/logo-smk-ti-bazma-long-putih.png') }}" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link-fe" aria-current="page" href="/">Daftar</a></li>
                        <li class="nav-item"><a class="nav-link-fe" href="/informasi">Informasi</a></li>
                        <li class="nav-item"><a class="nav-link-fe" href="/kontak">Kontak</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
        
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container px-5"><p class="m-0 text-center text-white">Copyright &copy; PPTIK SMK TI BAZMA 2023</p></div>
        </footer>
        <!-- Core theme JS-->
        <!-- <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script> -->
        <script src="assets/js/argon-dashboard.js"></script>
        <script src="assets/js/core/popper.min.js"></script>
        <script src="assets/js/core/bootstrap.min.js"></script>
        <!-- Github buttons -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>
    </body>
</html>
