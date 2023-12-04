@extends('master2')
@section('title', 'Database Pegawai')

@section('judul_halaman')
    <h2>Data Pegawai</h2>

    <a href="/pegawai/tambah" class="btn btn-primary my-3"> + Tambah Pegawai Baru</a>

    <br />
@endsection

@section('konten')
    <p>Cari Data Pegawai :</p>
    <form action="/pegawai/cari" method="GET">
        <div class="row">
            <div class="col-sm-11">
                <input class="form-control" type="text" name="cari" placeholder="Cari Pegawai Berdasarkan Nama.."
                    value="{{ old('cari') }}">
            </div>
            <div class="col-sm-1">
                <input class="btn btn-primary btn-block" type="submit" value="CARI">
            </div>
        </div>
    </form>

    <table class="table table-striped table-hover my-4">
        <tr>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Umur</th>
            <th>Alamat</th>
            <th>Opsi</th>
        </tr>
        @foreach ($pegawai as $p)
            <tr>
                <td>{{ $p->pegawai_nama }}</td>
                <td>{{ $p->pegawai_jabatan }}</td>
                <td
                @if($p->pegawai_umur <= 20)
                class = "bg-success text-light"
                @elseif($p->pegawai_umur >= 21 && $p->pegawai_umur <= 30)
                class = "bg-warning text-danger"
                @elseif($p->pegawai_umur >= 30)
                class = "bg-primary text-light"
                @endif
                >{{ $p->pegawai_umur }}</td>
                <td>{{ $p->pegawai_alamat }}</td>
                <td>
                    <a href="/pegawai/view/{{ $p->pegawai_id }}" class="btn btn-success">View</a>
                    |
                    <a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-warning">Edit</a>
                    |
                    <a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-danger"
                        onclick="return confirmDelete()">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $pegawai->links() }}
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
