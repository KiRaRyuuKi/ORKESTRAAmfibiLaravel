@extends('layouts.index')

@section('body')
    <div class="pagetitle">
        <h1>Account</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active">Profile</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="row">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Tables without borders</h5>

                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif

                        <!-- Active Table -->
                        <table class="table table-borderless">
                            <a href="{{ route('profile.create') }}">
                                <button class="btn btn-primary" type="button">
                                    <i class="fa fa-plus">Tambah</i>
                                </button>
                            </a>
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Telephone</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Picture</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($profile->count() > 0)
                                    @foreach ($profile as $rs)
                                        <tr>
                                            <td class="align-middle">{{ $loop->iteration }}</td>
                                            <td class="align-middle">{{ $rs->address }}</td>
                                            <td class="align-middle">{{ $rs->telephone }}</td>
                                            <td class="align-middle">{{ $rs->date }}</td>
                                            <td class="align-middle">{{ $rs->picture }}</td>
                                            <td class="align-middle">
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <a href="{{ route('profile.show', $rs->id) }}" type="button"
                                                        class="btn btn-primary">Detail</a>
                                                    <a href="{{ route('profile.edit', $rs->id) }}" type="button"
                                                        class="btn btn-primary">Edit</a>
                                                    <form action="{{ route('profile.destroy', $rs->id) }}" method="POST"
                                                        type="button" class="btn btn-dark p-0"
                                                        onsubmit="return confirm('Delete?')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-dark m-0">Delete</button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td class="text-center" colspan="5">Profile not found</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                        <!-- End Tables without borders -->

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
