@extends('layouts.index')

@section('body')
    <div class="card">
        <div class="profile align-items-center">
            <div class="background-img d-flex justify-content-center align-items-center"
                style="background-image: url('assets/img/background.jpg')">
            </div>

            <div class="profile-img justify-content-center align-items-center">
                <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                <h3 class="pt-4">Selamat datang, Muhammad Ilham</h3>
                <h6>Kelola info, privasi, dan keamanan Anda agar Amfibi berfungsi dengan lebih baik untuk Anda.
                    <span>Pelajari lebih lanjut</span>
                </h6>
                {{-- <div class="social-links mt-2">
                    <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                </div> --}}
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="card-border">
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>

                        {{-- <h4 class="pt-4">Info profil Anda di Amfibi</h4>
                        <h6 class="w-50">
                            Info pribadi dan opsi untuk mengelolanya. Anda dapat membuat beberapa info ini, seperti detail
                            kontak
                            Anda, dapat dilihat oleh orang lain agar mereka mudah menghubungi Anda. Anda juga dapat melihat
                            ringkasan profil Anda.
                        </h6>
                        <img src="assets/img/profile-img.jpg" alt=""> --}}
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card-border">
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
