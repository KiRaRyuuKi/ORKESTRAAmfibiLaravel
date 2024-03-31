@extends('layouts.index')

@section('body')
    <div class="card">
        <div class="card-body">
            <div class="row pt-4 align-items-center justify-content-between">
                <div class="col">
                    <h5 class="card-title">Tables User Account</h5>
                </div>

                <div class="col-auto">
                    <a href="{{ route('pages.account.create') }}">
                        <button class="btn btn-primary" type="button">
                            <i class="fa fa-plus"></i> Tambah
                        </button>
                    </a>
                </div>
            </div>

            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif

            {{ $dataTable->table() }}

        </div>
    </div>
@endsection

@push('scripts')
    {{ $dataTable->scripts() }}
@endpush
