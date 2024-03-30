@extends('layouts.index')

@section('body')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title"></h5>
            <div class="row">
                <div class="col mb-3">
                    <label class="form-label">Address</label>
                    <input type="text" name="address" class="form-control" placeholder="Address"
                        value="{{ $account->address }}" readonly>
                </div>
                <div class="col mb-3">
                    <label class="form-label">Telephone</label>
                    <input type="text" name="telephone" class="form-control" placeholder="Telephone"
                        value="{{ $account->telephone }}" readonly>
                </div>
            </div>
            <div class="row">
                <div class="col mb-3">
                    <label class="form-label">Date</label>
                    <input type="text" name="date" class="form-control" placeholder="Date"
                        value="{{ $account->date }}" readonly>
                </div>
                <div class="col mb-3">
                    <label class="form-label">Picture</label>
                    <textarea class="form-control" name="picture" placeholder="Picture" readonly>{{ $account->picture }}</textarea>
                </div>
            </div>
            <div class="row">
                <div class="col mb-3">
                    <label class="form-label">Created At</label>
                    <input type="text" name="created_at" class="form-control" placeholder="Created At"
                        value="{{ $account->created_at }}" readonly>
                </div>
                <div class="col mb-3">
                    <label class="form-label">Updated At</label>
                    <input type="text" name="updated_at" class="form-control" placeholder="Updated At"
                        value="{{ $account->updated_at }}" readonly>
                </div>
            </div>
        </div>
    </div>
@endsection
