@extends('layouts.index')

@section('body')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Tambah Detail Account</h5>
            <form form action="{{ route('pages.account.store') }}" method="POST">
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
                        <input type="date" name="date" class="form-control" placeholder="Date">
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
