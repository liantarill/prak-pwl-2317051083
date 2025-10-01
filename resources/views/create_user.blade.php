@extends('layouts.app')

@section('content')
    <div class="container mt-4  ">

        <div class="d-flex mb-4 ">
            <h1 class="h3 fw-bold p-3 text-primary-emphasis bg-primary-subtle border border-primary-subtle rounded-3">Buat
                Pengguna Baru</h1>
            </a>
        </div>
        <div class="card shadow-lg border-0 rounded-3">

            <div class="card-body">
                <form action="{{ route('user.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" id="nama" name="nama" class="form-control"
                            placeholder="Masukkan nama lengkap">
                    </div>

                    <div class="mb-3">
                        <label for="nim" class="form-label">NPM</label>
                        <input type="text" id="nim" name="nim" class="form-control " placeholder="Masukkan NPM"
                            required>
                    </div>

                    <div class="mb-3">
                        <label for="kelas_id" class="form-label">Kelas</label>
                        <select name="kelas_id" id="kelas_id" class="form-select " required>
                            <option value="">Pilih Kelas</option>
                            @foreach ($kelas as $kelasItem)
                                <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                            @endforeach
                        </select>

                    </div>

                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
