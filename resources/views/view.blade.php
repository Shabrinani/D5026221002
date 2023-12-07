@extends('master2')

@section('konten')
    <h2>Data Pegawai</h2>

    <br />

    <div class="row">
        <div class="col-sm-3" style="border: 1px solid lightgrey; border-radius:5pt">
            {{-- kotak kosong untuk foto --}}
        </div>
        <div class="col-sm-1"></div>
        <div class="col-sm-8">
            @foreach ($pegawai as $p)
                <div class="row pb-2">
                    <div class="col-sm-1 p-2">
                        Nama
                    </div>
                    <div class="py-2 px-3">
                        :
                    </div>
                    <div class="col-sm-6 p-2" style="border: 1px solid lightgrey; border-radius:5pt">
                        {{ $p->pegawai_nama }}
                    </div>
                </div>
                <div class="row pb-2">
                    <div class="col-sm-1 p-2">
                        Jabatan
                    </div>
                    <div class="py-2 px-3">
                        :
                    </div>
                    <div class="col-sm-6 p-2" style="border: 1px solid lightgrey; border-radius:5pt">
                        {{ $p->pegawai_jabatan }}
                    </div>
                </div>
                <div class="row pb-2">
                    <div class="col-sm-1 p-2">
                        Umur
                    </div>
                    <div class="py-2 px-3">
                        :
                    </div>
                    <div class="col-sm-6 p-2" style="border: 1px solid lightgrey; border-radius:5pt">
                        {{ $p->pegawai_umur }}
                    </div>
                </div>
                <div class="row pb-2">
                    <div class="col-sm-1 p-2">
                        Alamat
                    </div>
                    <div class="py-2 px-3">
                        :
                    </div>
                    <div class="col-sm-6 p-2" style="border: 1px solid lightgrey; border-radius:5pt">
                        {{ $p->pegawai_alamat }}
                    </div>
                </div>
                <br />
                <div class="row pl-2">
                    <a href="/pegawai" class="btn btn-primary px-4">OK</a>
                </div>
                {{-- <form action="/pegawai/update" method="get">
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
                </form> --}}
            @endforeach
        </div>
    </div>
@endsection
