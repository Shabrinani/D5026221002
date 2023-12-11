@extends('master2')
@section('title', 'Database Karyawan')

@section('judul_halaman')
    <h2>Data Karyawan</h2>
@endsection

@section('konten')
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    @if (session('success'))
        <div class="alert alert-primary">
            {{ session('success') }}
        </div>
    @endif
    <table class="table table-striped table-hover my-4">
        <tr>
            <th>Kode</th>
            <th>Nama Lengkap</th>
            <th>Divisi</th>
            <th>Departemen</th>
            <th>Opsi</th>
        </tr>
        @foreach ($karyawan as $k)
            <tr>
                <td>{{ $k->kodepegawai }}</td>
                <td >{{ strtoupper($k->namalengkap) }}</td>
                <td>{{ $k->divisi }}</td>
                <td>{{ strtolower($k->departemen) }}</td>
                <td>
                    <a href="/karyawan/hapus/{{ $k->kodepegawai }}" class="btn btn-danger" onclick="return confirmDelete()">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>

    <br />
    <a href="/karyawan/tambah" class="btn btn-primary my-3"> + Tambah Karyawan Baru</a>

    <script>
        function confirmDelete() {
            if (confirm('Apakah Anda yakin ingin menghapus data ini?')) {
                return true;
            } else {
                return false;
            }
        }
    </script>
    <script type="text/css">
    $(function() {
        $('#upper').keyup(function() {
            this.value = this.value.toUpperCase();
        });
    });
    </script>

@endsection
