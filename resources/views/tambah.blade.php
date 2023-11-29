@extends('master2')

@section('konten')
	<h2>Tambah Pegawai</h2>

	<br/>

	<form action="/pegawai/store" method="post" class = "form-horizontal">
		{{ csrf_field() }}
        <div class = "form-group row">
            <label for = "nama" class = "col-sm-1 col-form-label">Nama</label>
            <div class= "col-form-label">:</div>
            <div class = "col-sm-6">
               <input name="nama" type = "text" class = "form-control" id = "nama" placeholder = "Masukkan Nama Pegawai">
            </div>
         </div>
         <div class = "form-group row">
            <label for = "jabatan" class = "col-sm-1 col-form-label">Jabatan</label>
            <div class= "col-form-label">:</div>
            <div class = "col-sm-6">
               <input name="jabatan" type = "text" class = "form-control" id = "jabatan" placeholder = "Masukkan Jabatan">
            </div>
         </div>
         <div class = "form-group row">
            <label for = "umur" class = "col-sm-1 col-form-label">Umur</label>
            <div class= "col-form-label">:</div>
            <div class = "col-sm-6">
               <input name="umur" type = "number" class = "form-control" id = "umur" placeholder = "Masukkan Umur">
            </div>
         </div>
         <div class = "form-group row">
            <label for = "alamat" class = "col-sm-1 col-form-label">Alamat</label>
            <div class= "col-form-label">:</div>
            <div class = "col-sm-6">
               <textarea name="alamat" class = "form-control" id = "alamat" placeholder = "Masukkan Alamat"></textarea>
            </div>
         </div>

		{{-- Nama <input type="text" name="nama" required="required"> <br/>
		Jabatan <input type="text" name="jabatan" required="required"> <br/>
		Umur <input type="number" name="umur" required="required"> <br/>
		Alamat <textarea name="alamat" required="required"></textarea> <br/> --}}
        <br/>
        <a href="/pegawai" class="btn btn-primary"> Kembali</a>
		<input type="submit" value="Simpan Data" class="btn btn-success">
	</form>

@endsection
