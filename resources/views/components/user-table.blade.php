<table class="table table-striped table-hover mb-0 align-middle text-center">
    <thead class="table-dark">
        <tr>
            <th scope="col">id</th>
            <th scope="col">Nama</th>
            <th scope="col">NPM</th>
            <th scope="col">Kelas</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($users as $index => $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td class="fw-semibold">{{ $user->nama }}</td>
                <td>{{ $user->nim }}</td>
                <td>
                    @if ($user->nama_kelas === 'A')
                        <span class="badge bg-primary">
                            {{ $user->nama_kelas }}
                        </span>
                    @elseif ($user->nama_kelas === 'B')
                        <span class="badge bg-success">
                            {{ $user->nama_kelas }}
                        </span>
                    @elseif ($user->nama_kelas === 'C')
                        <span class="badge bg-danger">
                            {{ $user->nama_kelas }}
                        </span>
                    @else
                        <span class="badge bg-secondary">
                            {{ $user->nama_kelas }}
                        </span>
                    @endif
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="4" class="text-muted py-3">
                    <em>Belum ada data pengguna</em>
                </td>
            </tr>
        @endforelse
    </tbody>
</table>
