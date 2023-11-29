@extends('master2')

@section('konten')
    <h2>Edit Pegawai</h2>

    @foreach ($pegawai as $p)
        <form action="/pegawai/update" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br />
            <div class = "form-group row">
                <label for = "nama" class = "col-sm-1 col-form-label">Nama</label>
                <div class= "col-form-label">:</div>
                <div class = "col-sm-6">
                    <input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}"
                        class = "form-control" id = "nama">
                </div>
            </div>
            <div class = "form-group row">
                <label for = "jabatan" class = "col-sm-1 col-form-label">Jabatan</label>
                <div class= "col-form-label">:</div>
                <div class = "col-sm-6">
                    <input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}"
                        class = "form-control" id = "jabatan">
                </div>
            </div>
            <div class = "form-group row">
                <label for = "umur" class = "col-sm-1 col-form-label">Umur</label>
                <div class= "col-form-label">:</div>
                <div class = "col-sm-6">
                    <input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}"
                        class = "form-control" id = "umur">
                </div>
            </div>
            <div class = "form-group row">
                <label for = "alamat" class = "col-sm-1 col-form-label">Alamat</label>
                <div class= "col-form-label">:</div>
                <div class = "col-sm-6">
                    <textarea required="required" name="alamat" class = "form-control" id = "alamat">{{ $p->pegawai_alamat }}</textarea>
                </div>
            </div>


            {{-- Nama <input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}"> <br />
            Jabatan <input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}"> <br />
            Umur <input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}"> <br />
            Alamat
            <textarea required="required" name="alamat">{{ $p->pegawai_alamat }}</textarea> <br /> --}}
            <br/>
            <a href="/pegawai" class="btn btn-primary"> Kembali</a>
            <input type="submit" value="Simpan Data" class="btn btn-success">
        </form>
    @endforeach
@endsection
