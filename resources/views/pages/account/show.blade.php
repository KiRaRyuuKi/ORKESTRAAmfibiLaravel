@extends('layouts.index')

@section('body')
    <div class="pagetitle">
        <h1>General Tables</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active">Detail Profile</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="card">
        <div class="card-body">
            <h5 class="card-title"></h5>
            <div class="row">
                <div class="col mb-3">
                    <label class="form-label">Address</label>
                    <input type="text" name="address" class="form-control" placeholder="Address"
                        value="{{ $profile->address }}" readonly>
                </div>
                <div class="col mb-3">
                    <label class="form-label">Telephone</label>
                    <input type="text" name="telephone" class="form-control" placeholder="Telephone"
                        value="{{ $profile->telephone }}" readonly>
                </div>
            </div>
            <div class="row">
                <div class="col mb-3">
                    <label class="form-label">Date</label>
                    <input type="text" name="date" class="form-control" placeholder="Date"
                        value="{{ $profile->date }}" readonly>
                </div>
                <div class="col mb-3">
                    <label class="form-label">Picture</label>
                    <textarea class="form-control" name="picture" placeholder="Picture" readonly>{{ $profile->picture }}</textarea>
                </div>
            </div>
            <div class="row">
                <div class="col mb-3">
                    <label class="form-label">Created At</label>
                    <input type="text" name="created_at" class="form-control" placeholder="Created At"
                        value="{{ $profile->created_at }}" readonly>
                </div>
                <div class="col mb-3">
                    <label class="form-label">Updated At</label>
                    <input type="text" name="updated_at" class="form-control" placeholder="Updated At"
                        value="{{ $profile->updated_at }}" readonly>
                </div>
            </div>
        </div>
    </div>
@endsection
