@extends('layouts.index')

@section('body')
    <div class="pagetitle">
        <h1>General Tables</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active">Edit Akun</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Edit Detail Profile</h5>
            <form action="{{ route('profile.update', $profile->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col mb-3">
                        <label class="form-label">Address</label>
                        <input type="text" name="address" class="form-control" placeholder="Address" value="{{ $profile->address }}">
                    </div>
                    <div class="col mb-3">
                        <label class="form-label">Telephone</label>
                        <input type="text" name="telephone" class="form-control" placeholder="Telephone"
                            value="{{ $profile->telephone }}">
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <label class="form-label">Date</label>
                        <input type="text" name="date" class="form-control" placeholder="Date" value="{{ $profile->date }}">
                    </div>
                    <div class="col mb-3">
                        <label class="form-label">Picture</label>
                        <textarea class="form-control" name="picture" placeholder="Picture">{{ $profile->picture }}</textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="d-grid">
                        <button class="btn btn-warning">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
