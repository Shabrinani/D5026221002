<html>
<head>
    <title>Style</title>
    <link rel="stylesheet" href="style.css">
    <style>
        h2 {
            color: greenyellow;
            text-align:center;
            text-decoration:dotted;
        }

        .ratakanan /* ini untuk bikin paragraf jadi rata kanan*/{
        color: yellow;
        font-weight: bold;
        }
    </style>
</head>

<body>
    <!--CSS dengan cara inline [biasanya khusus hanya ini saya yang kan berubah]-->
    <h1 style="
        color:#0394fc;
        text-align:center;
        text-decoration: underline;
        ">Judul H1</h1>

    <!--CSS dengan cara inpage [khusus hanya halaman ini saja yang berubah, perintahnya di taruh di head]-->
    <h2> Judul H2 </h2>

    <!--CSS dengan cara external file [bisa dari manapun file htm, tetapi harus membuat perintah di luar file dengan css]-->
    <h3> Judul H3 </h3>
    <p> Ini paragraf </p>
    <div class="kotaku1">Ini di dalam kotak</div>
    <div class="ratakanan" style="color:black;">Ini rata kanan</div>
    <img src="fotoku.jpeg" class="fotolingkaran">
    <img src="fotoku.jpeg" class="fotorounded">
</body>
</html>
