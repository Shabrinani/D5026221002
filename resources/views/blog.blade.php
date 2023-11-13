<!DOCTYPE html>
<html>
<head>
    <title>Tutorial Laravel</title>
</head>
<body>
    <p>
        Nama : {{$nama}} -
        Alamat : {{$alamat}}  -
        Umur : {{$umur}}
    </p>

    <a href="/pegawai/{{ date('D M Y') }}">Klik Disini</a>


</body>
</html>




