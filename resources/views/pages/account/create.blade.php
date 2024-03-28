@extends('layouts.index')

@section('body')
    <div class="pagetitle">
        <h1>General Tables</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active">Tambah Akun</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Tambah Detail Profile</h5>
            <form form action="{{ route('profile.store') }}" method="POST">
                @csrf
                <div class="row mb-3">
                    <div class="col">
                        <input type="text" name="address" class="form-control" placeholder="Address">
                    </div>
                    <div class="col">
                        <input type="text" name="telephone" class="form-control" placeholder="Telephone">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <input type="text" name="date" class="form-control" placeholder="Date">
                    </div>
                    <div class="col">
                        <textarea class="form-control" name="picture" placeholder="Picture"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="d-grid">
                        <button class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
