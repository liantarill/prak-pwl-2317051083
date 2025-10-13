@extends('layouts.app')

@section('content')
    <div class="max-w-6xl mx-auto px-4 py-8">
        <!-- Header -->
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-2xl font-semibold text-gray-800">Daftar Pengguna</h1>
            <a href="{{ route('user.create') }}"
                class="px-4 py-2 bg-sky-800 text-white text-sm font-medium rounded-lg hover:bg-sky-700 transition">
                Tambah Pengguna
            </a>
        </div>

        <!-- Success Message -->
        @if (session('success'))
            <div class="mb-6 p-4 bg-sky-50 border border-sky-200 text-sky-800 rounded-lg">
                {{ session('success') }}
            </div>
        @endif

        <!-- Table -->
        <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
            <x-user-table />
        </div>
    </div>
@endsection
