<div class="overflow-x-auto">
    <table class="w-full">
        <thead>
            <tr class="bg-sky-800 border-b border-sky-700">
                <th class="px-6 py-3 text-left text-xs font-medium text-sky-100 uppercase tracking-wider">
                    ID
                </th>
                <th class="px-6 py-3 text-left text-xs font-medium text-sky-100 uppercase tracking-wider">
                    Nama
                </th>
                <th class="px-6 py-3 text-left text-xs font-medium text-sky-100 uppercase tracking-wider">
                    NPM
                </th>
                <th class="px-6 py-3 text-left text-xs font-medium text-sky-100 uppercase tracking-wider">
                    Kelas
                </th>
                <th class="px-6 py-3 text-left text-xs font-medium text-sky-100 uppercase tracking-wider">
                    Aksi
                </th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
            @forelse ($users as $user)
                <tr class="hover:bg-sky-50 transition">
                    <td class="px-6 py-4 text-sm text-gray-600">
                        {{ $user->id }}
                    </td>
                    <td class="px-6 py-4 text-sm font-medium text-gray-900">
                        {{ $user->nama }}
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-600">
                        {{ $user->nim }}
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-600">
                        @if ($user->nama_kelas === 'A')
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                {{ $user->nama_kelas }}
                            </span>
                        @elseif ($user->nama_kelas === 'B')
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                {{ $user->nama_kelas }}
                            </span>
                        @elseif ($user->nama_kelas === 'C')
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                {{ $user->nama_kelas }}
                            </span>
                        @else
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                                {{ $user->nama_kelas }}
                            </span>
                        @endif
                    </td>
                    <td class="px-6 py-4 text-sm">
                        <div class="flex space-x-2">
                            <a href="{{ route('user.edit', $user->id) }}"
                                class="px-3 py-1.5 text-sky-700 bg-sky-100 rounded hover:bg-sky-200 transition">
                                Edit
                            </a>
                            <form action="{{ route('user.destroy', $user->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="px-3 py-1.5 text-red-700 bg-red-50 rounded hover:bg-red-100 transition"
                                    onclick="return confirm('Yakin ingin menghapus data {{ $user->nama }}?')">
                                    Hapus
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="px-6 py-12 text-center text-gray-400">
                        <svg class="mx-auto h-12 w-12 text-gray-300 mb-3" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                        <p class="text-sm">Belum ada data pengguna</p>
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
