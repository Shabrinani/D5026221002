@extends('master2')

@section('konten')
    <h2>Edit Data Meja</h2>

    @foreach ($meja as $m)
        <form action="/meja/update" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="kode" value="{{ $m->kodemeja }}"> <br />
            <div class = "form-group row">
                <label for = "merk" class = "col-sm-1 col-form-label">Merk</label>
                <div class= "col-form-label">:</div>
                <div class = "col-sm-6">
                    <input type="text" required="required" name="merk" value="{{ $m->merkmeja }}"
                        class = "form-control" id = "merk">
                </div>
            </div>
            <div class = "form-group row">
                <label for = "stock" class = "col-sm-1 col-form-label">Stock</label>
                <div class= "col-form-label">:</div>
                <div class = "col-sm-6">
                    <input type="number" required="required" name="stock" value="{{ $m->stockmeja }}"
                        class = "form-control" id = "stock">
                </div>
            </div>

            <br/>
            <a href="/meja" class="btn btn-primary"> Kembali</a>
            <input type="submit" value="Simpan Data" class="btn btn-success">
        </form>
    @endforeach
@endsection
