@extends('master2')
@section('title', 'Database Meja')

@section('judul_halaman')
    <h2>Data Meja</h2>

    <a href="/meja/tambah" class="btn btn-primary my-3"> + Tambah Data Meja Baru</a>

    <br />
@endsection

@section('konten')
    <table class="table table-striped table-hover my-4">
        <tr>
            <th>Kode</th>
            <th>Merk</th>
            <th>Stock</th>
            <th>Tersedia</th>
            <th>Opsi</th>

        </tr>
        @foreach ($meja as $m)
            <tr>
                <td>{{ $m->kodemeja }}</td>
                <td>{{ $m->merkmeja }}</td>
                <td>{{ $m->stockmeja }}</td>
                <td>
                    <input type="checkbox" {{ $m->stockmeja == true ? 'checked' : '' }} disabled>
                </td>
                <td>
                    <a href="/meja/view/{{ $m->kodemeja }}" class="btn btn-success">View</a>
                    |
                    <a href="/meja/edit/{{ $m->kodemeja }}" class="btn btn-warning">Edit</a>
                    |
                    <a href="/meja/hapus/{{ $m->kodemeja }}" class="btn btn-danger"
                        onclick="return confirmDelete()">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>

    <script>
        function confirmDelete() {
            if (confirm('Apakah Anda yakin ingin menghapus data ini?')) {
                return true;
            } else {
                return false;
            }
        }
    </script>

@endsection
