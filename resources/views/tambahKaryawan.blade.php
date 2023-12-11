@extends('master2')

@section('konten')

    <h2>Tambah Karyawan</h2>

    <br />

    <form action="/karyawan/store" method="post" class = "form-horizontal">
        {{ csrf_field() }}
        <div class = "form-group row">
            <label for = "kode" class = "col-sm-2 col-form-label">Kode</label>
            <div class= "col-form-label">:</div>
            <div class = "col-sm-6">
                <input name="kode" type = "text" class = "form-control" id = "kode"
                    placeholder = "Masukkan Kode Karyawan">
            </div>
        </div>
        <div class = "form-group row">
            <label for = "nama" class = "col-sm-2 col-form-label">Nama Lengkap</label>
            <div class= "col-form-label">:</div>
            <div class = "col-sm-6">
                <input name="nama" type = "text" class = "form-control" id = "nama"
                    placeholder = "Masukkan Nama Karyawan">
            </div>
        </div>
        <div class = "form-group row">
            <label for = "divisi" class = "col-sm-2 col-form-label">Divisi</label>
            <div class= "col-form-label">:</div>
            <div class = "col-sm-6">
                <input name="divisi" type = "text" class = "form-control" id = "divisi" placeholder = "Masukkan Divisi">
            </div>
        </div>
        <div class = "form-group row">
            <label for = "departemen" class = "col-sm-2 col-form-label">Departemen</label>
            <div class= "col-form-label">:</div>
            <div class = "col-sm-6">
                <input name="departemen" type = "text" class = "form-control" id = "departemen"
                    placeholder = "Masukkan Departemen">
            </div>
        </div>

        <br />
        <a href="/karyawan" class="btn btn-primary"> Kembali</a>
        <input type="submit" value="Simpan Data" class="btn btn-success">
    </form>
@endsection
