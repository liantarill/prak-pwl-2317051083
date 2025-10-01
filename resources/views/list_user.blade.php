@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="h3 fw-bold p-3 text-primary-emphasis bg-primary-subtle border border-primary-subtle rounded-3">Daftar
                Pengguna</h1>
            <a href="{{ route('user.create') }}" class="btn btn-primary shadow-sm">
                <i class="bi bi-person-plus-fill"></i> Add User
            </a>
        </div>


        <div class="card shadow border-0 rounded-3">
            <div class="card-body p-0">
                <x-user-table />
            </div>
        </div>
    </div>
@endsection
