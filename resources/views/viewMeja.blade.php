@extends('master2')

@section('konten')
    <h2>Data Meja</h2>

    <br />

    <div class="row">
        <div class="col-sm-3" style="border: 1px solid lightgrey; border-radius:5pt">
            {{-- kotak kosong untuk foto --}}
        </div>
        <div class="col-sm-1"></div>
        <div class="col-sm-8">
            @foreach ($meja as $m)
                <div class="row pb-2">
                    <div class="col-sm-1 p-2">
                        Merk
                    </div>
                    <div class="py-2 px-3">
                        :
                    </div>
                    <div class="col-sm-6 p-2" style="border: 1px solid lightgrey; border-radius:5pt">
                        {{ $m->merkmeja }}
                    </div>
                </div>
                <div class="row pb-2">
                    <div class="col-sm-1 p-2">
                        Stock
                    </div>
                    <div class="py-2 px-3">
                        :
                    </div>
                    <div class="col-sm-6 p-2" style="border: 1px solid lightgrey; border-radius:5pt">
                        {{ $m->stockmeja }}
                    </div>
                </div>
                <br />
                <div class="row pl-2">
                    <a href="/meja" class="btn btn-primary px-4">OK</a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
