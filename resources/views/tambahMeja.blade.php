@extends('master2')

@section('konten')
	<h2>Tambah Data Meja</h2>

	<br/>

	<form action="/meja/store" method="post" class = "form-horizontal">
		{{ csrf_field() }}
        <div class = "form-group row">
            <label for = "merk" class = "col-sm-1 col-form-label">Merk</label>
            <div class= "col-form-label">:</div>
            <div class = "col-sm-6">
               <input name="merk" type = "text" class = "form-control" id = "merk" placeholder = "Masukkan Merk Meja">
            </div>
         </div>
         <div class = "form-group row">
            <label for = "stock" class = "col-sm-1 col-form-label">Stock</label>
            <div class= "col-form-label">:</div>
            <div class = "col-sm-6">
               <input name="stock" type = "number" class = "form-control" id = "stock" placeholder = "Masukkan Stock Meja">
            </div>
         </div>

        <br/>
        <a href="/meja" class="btn btn-primary"> Kembali</a>
		<input type="submit" value="Simpan Data" class="btn btn-success">
	</form>

@endsection
