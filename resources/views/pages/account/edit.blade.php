@extends('layouts.index')

@section('body')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Edit Detail Account</h5>
            <form action="{{ route('pages.account.update', $account->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col mb-3">
                        <label class="form-label">Address</label>
                        <input type="text" name="address" class="form-control" placeholder="Address" value="{{ $account->address }}">
                    </div>
                    <div class="col mb-3">
                        <label class="form-label">Telephone</label>
                        <input type="text" name="telephone" class="form-control" placeholder="Telephone"
                            value="{{ $account->telephone }}">
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <label class="form-label">Date</label>
                        <input type="text" name="date" class="form-control" placeholder="Date" value="{{ $account->date }}">
                    </div>
                    <div class="col mb-3">
                        <label class="form-label">Picture</label>
                        <textarea class="form-control" name="picture" placeholder="Picture">{{ $account->picture }}</textarea>
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
