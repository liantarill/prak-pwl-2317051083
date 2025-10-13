@extends('layouts.app')

@section('content')
    <div class="max-w-6xl mx-auto px-4 py-8">
        <!-- Header -->
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-2xl font-semibold text-gray-800">Daftar Mata Kuliah</h1>
            <a href="{{ route('matakuliah.create') }}"
                class="px-4 py-2 bg-sky-800 text-white text-sm font-medium rounded-lg hover:bg-sky-700 transition">
                Tambah Mata Kuliah
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
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="bg-sky-800 border-b border-sky-700">
                            <th class="px-6 py-3 text-left text-xs font-medium text-sky-100 uppercase tracking-wider">
                                ID
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-sky-100 uppercase tracking-wider">
                                Nama Mata Kuliah
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-sky-100 uppercase tracking-wider">
                                SKS
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-sky-100 uppercase tracking-wider">
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @forelse ($mks as $mk)
                            <tr class="hover:bg-sky-50 transition">
                                <td class="px-6 py-4 text-sm text-gray-600">
                                    {{ $mk->id }}
                                </td>
                                <td class="px-6 py-4 text-sm font-medium text-gray-900">
                                    {{ $mk->nama_mk }}
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-600">
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-sky-100 text-sky-800">
                                        {{ $mk->sks }} SKS
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-sm">
                                    <div class="flex space-x-2">
                                        <a href="{{ route('matakuliah.edit', $mk->id) }}"
                                            class="px-3 py-1.5 text-sky-700 bg-sky-100 rounded hover:bg-sky-200 transition">
                                            Edit
                                        </a>
                                        <form action="{{ route('matakuliah.destroy', $mk->id) }}" method="POST"
                                            class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="px-3 py-1.5 text-red-700 bg-red-50 rounded hover:bg-red-100 transition"
                                                onclick="return confirm('Yakin ingin menghapus mata kuliah {{ $mk->nama_mk }}?')">
                                                Hapus
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="px-6 py-12 text-center text-gray-400">
                                    <svg class="mx-auto h-12 w-12 text-gray-300 mb-3" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                    <p class="text-sm">Belum ada data mata kuliah</p>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Pagination -->
        @if (method_exists($mks, 'links'))
            <div class="mt-6">
                {{ $mks->links() }}
            </div>
        @endif
    </div>
@endsection
