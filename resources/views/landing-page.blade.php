<!DOCTYPE html>
<html lang="en">

<head>
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,200;6..12,300;6..12,400;6..12,500;6..12,700;6..12,800;6..12,900;6..12,1000&family=Open+Sans:wght@400;500;600;700&family=Roboto:ital,wght@0,100;1,100&display=swap"
        rel="stylesheet">

    <!-- font awesome -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css"
        integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css"
        integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/all.min.css">


    <!-- bootstrap 4 -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">


    <!-- bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- logo di judul web -->
    <link rel="icon" href="logo smasa.png">

    <!-- link ke css -->
    <link rel="stylesheet" href="style-landing-page.css">

    <title>SMA Negeri 1 Pasuruan</title>

    <script>
        //navbar transparant
        window.addEventListener('scroll', function () {
            var navbar = document.querySelector('.navbar');
            if (window.scrollY > 90) {
                navbar.style.background = 'rgba(255, 255, 255, 0.9)';
            } else {
                navbar.style.background = 'rgba(0, 0, 0, 0)';
            }
        });
    </script>

    <script>
        //change teks while hovering image
        function changeContent(element) {
            const text = element.getAttribute("data-text");
            const title = element.getAttribute("data-title");
            document.getElementById("deskripsi").textContent = text;
            document.getElementById("judul").innerHTML = '<h3>' + title + '</h3>';
        }

        function resetContent() {
            document.getElementById("deskripsi").textContent = "Siap berprestasi dengan program-program yang ada di SMASA";
            document.getElementById("judul").innerHTML = '<h3>Program SMASA</h3>';
        }
    </script>
    <script>
        // Form validation kontak
        function validateForm() {
            const name = document.getElementById('name');
            const email = document.getElementById('email');
            const message = document.getElementById('message');

            const nameValue = name.value.trim();
            const emailValue = email.value.trim();
            let valid = true;

            if (nameValue === '') {
                setError(name, 'Name is required');
                valid = false;
            } else {
                setSuccess(name);
            }

            if (emailValue === '') {
                setError(email, 'Email is required');
                valid = false;
            } else if (!isValidEmail(emailValue)) {
                setError(email, 'Provide a valid email address');
                valid = false;
            } else {
                setSuccess(email);
            }

            const messageValue = message.value.trim();
            if (messageValue === '') {
                setError(message, 'Message is required');
                valid = false;
            } else {
                setSuccess(message);
            }

            if (valid) {
                name.value = '';
                email.value = '';
                message.value = '';
            }
        }

        function setError(element, message) {
            const inputControl = element.parentElement;
            const errorDisplay = inputControl.querySelector('.error');

            if (errorDisplay) {
                errorDisplay.innerText = message;
                inputControl.classList.add('error');
                inputControl.classList.remove('success');
            }
        }

        function setSuccess(element) {
            const inputControl = element.parentElement;
            const errorDisplay = inputControl.querySelector('.error');

            if (errorDisplay) {
                errorDisplay.innerText = '';
                inputControl.classList.add('success');
                inputControl.classList.remove('error');
            }
        }

        function isValidEmail(email) {
            const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return re.test(email);
        }
    </script>


</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">
    <!-- navbar -->
    <nav class="navbar navbar-expand-sm fixed-top">
        <!-- logo -->
        <a class="navbar-brand" href="#" style="margin-left:16px">
            <img src="logo smasa.png" alt="Logo" style="width:40px;">
        </a>

        <!-- menu -->
        <ul class="navbar-nav m-auto" style="font-weight:bold">
            <li class="nav-item">
                <a class="nav-link" href="#section1" style="color:#1551AA">Beranda</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#section2" style="color:#1551AA">Profil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#section3" style="color:#1551AA">Program</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#section4" style="color:#1551AA">Berita</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#section5" style="color:#1551AA">Kontak</a>
            </li>
        </ul>

        <!-- dropdown -->
        <div class="dropdown" style="margin-right:16px">
            <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown">
                ID
            </button>
            <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="#">Indonesia</a>
                <a class="dropdown-item" href="#">Inggris</a>
            </div>
        </div>
    </nav>

    <!-- section1 -->
    <div id="section1" class="container-fluid"
        style="padding-top:0; padding-bottom:70px; padding-left:0; padding-right:0; background-color:white">
        <!-- carousel -->
        <div id="demo" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>
            <div class="carousel-inner">
                <div class="carousel-item carousel-image bg-img-1 active">
                    <!-- <img src="https://i.pinimg.com/474x/73/f1/d2/73f1d2aa0b2f6fdd8c6beffbace4ff37.jpg" alt="Gambar 1" > -->
                    <div class="carousel-caption">
                        <h3>Daftarkan Diri Anda</h3>
                        <p>Penerimaan Peserta Didik Baru 2023/2024</p>
                        <button type="button" class="btn btn-primary"
                            style="background-color:#1551AA; border-radius:20px">Daftar</button>
                    </div>
                </div>
                <div class="carousel-item carousel-image bg-img-2">
                    <!-- <img src="https://i.pinimg.com/474x/87/65/d8/8765d884ab2df957976ca9abe5f39dda.jpg" alt="Gambar 2" > -->
                </div>
                <div class="carousel-item carousel-image bg-img-3">
                    <!-- <img src="https://i.pinimg.com/474x/06/b6/ee/06b6ee347e517c25fac2aad6c2f0cfff.jpg" alt="Gambar 3" > -->
                </div>
            </div>
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>

    <!-- section2 -->
    <div id="section2" class="container-fluid" style="padding-top:70px; padding-bottom:70px; background-color:white">
        <h1 class="subjudul">Profil</h1>
        <div class="container" style="text-align:center; margin-top:25px; margin-bottom:25px">
            <span style="font-weight:bolder">Visi : </span>Berbudi pekerti luhur, berprestasi tinggi, berimtaq tangguh,
            berkompetitif dalam IPTEK (Ilmu Pengetahuan dan Teknologi), berbudaya dan berwawasan lingkungan serta
            dinamis ke arah globalisasi
        </div>

        <!-- kotak misi-tujuan -->
        <div class="row kotak-misi-tujuan">
            <div class="card-deck">
                <div class="card card-misi-tujuan" style="width: 30%">
                    <div class="card-header">
                        <h2 style="font-weight:900">Misi</h2>
                    </div>
                    <div class="card-body">
                        <ul class="a">
                            <li>Meningkatkan Imtaq dengan pembinaan kegiatan yang bersifat kompetitif, berakhlak mulia,
                                dan berkepribadian Indonesia</li>
                            <li>Mewujudkan insan yang unggul dalam Spiritual, Sosial, Pengetahuan dan Kepribadian</li>
                            <li>Meningkatkan prestasi dengan pembelajaran kreatif, inovatif, responsif yang berwawasan
                                lingkungan</li>
                        </ul>
                    </div>
                </div>

                <div class="card card-misi-tujuan" style="width: 30%">
                    <div class="card-header">
                        <h2 style="font-weight:900">Tujuan</h2>
                    </div>
                    <div class="card-body">
                        <ul class="a">
                            <li>Meningkatkan pelaksanaan kegiatan pengamalan beragama</li>
                            <li>Terbentuknya karakter warga sekolah yang jujur, disiplin, mandiri, bertanggung jawab,
                                dan mencintai budaya lokal</li>
                            <li>Terciptanya proses pembelajaran secara aktif, kreatif, dan inovatif dengan
                                mendayagunakan IPTEK dan pendidikan lingkungan hidup</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- button -->
        <div class="center-button">
            <button type="button" class="btn btn-primary button-selengkapnya">Selengkapnya ></button>
        </div>
    </div>

    <!-- section 3 -->
    <div id="section3" class="container-fluid" style="padding-top:100px;padding-bottom:70px; background-color:#85A4D2">
        <h1 class="subjudul" style="color:white">Program</h1>

        <!-- gambar program -->
        <div class="row">
            <div class="col-md-6">
                <span class="background">
                    <section class="gallery">
                        <article class="card-program">
                            <figure>
                                <img src="program adiwiyata.jpg" alt="adiwiyata"
                                    data-text="Adiwiyata, secara internasional disebut pula dengan Green School adalah salah satu program Kementerian Lingkungan Hidup dalam rangka mendorong terciptanya pengetahuan dan kesadaran warga sekolah dalam upaya pelestarian lingkungan hidup."
                                    data-title="Adiwiyata" onmouseover="changeContent(this)"
                                    onmouseout="resetContent()" />
                            </figure>
                        </article>
                        <article class="card-program">
                            <figure>
                                <img src="program model.jpg" alt="model"
                                    data-text="Sekolah model adalah sekolah yang ditetapkan dan dibina oleh Lembaga Penjaminan Mutu Pendidikan (LPMP) untuk menjadi sekolah acuan bagi sekolah lain di sekitarnya dalam penerapan penjaminan mutu pendidikan secara mandiri."
                                    data-title="Sekolah Model" onmouseover="changeContent(this)"
                                    onmouseout="resetContent()" />
                            </figure>
                        </article>
                        <article class="card-program">
                            <figure>
                                <img src="program sks.jpg" alt="sks"
                                    data-text="SKS (Sistem Kredit Semester) adalah bentuk penyelenggaraan pendidikan yang peserta didiknya menyepakati jumlah beban belajar yang diikuti dan/atau strategi belajar setiap semester pada satuan pendidikan sesuai dengan bakat, minat, dan kemampuan/kecepatan belajarnya."
                                    data-title="Sistem Kredit Semester" onmouseover="changeContent(this)"
                                    onmouseout="resetContent()" />
                            </figure>
                        </article>
                        <article class="card-program">
                            <figure>
                                <img src="program rujukan.jpg" alt="rujukan"
                                    data-text="SMA Rujukan adalah SMA yang telah memenuhi atau melampaui Standar Nasional Pendidikan (SNP) dan mengembangkan program keunggulan sesuai dengan potensi sekolah dan kebutuhan masyarakat."
                                    data-title="Sekolah Rujukan" onmouseover="changeContent(this)"
                                    onmouseout="resetContent()" />
                            </figure>
                        </article>
                    </section>
                </span>
            </div>

            <!-- deskripsi program -->
            <div class="col-md-6">
                <div class="container container-program">
                    <div id="judul">
                        <h3>Program SMASA</h3>
                    </div>
                    <div id="deskripsi">
                        <p>Siap berprestasi dengan program-program yang ada di SMASA</p>
                    </div>
                    <div class="center-button" style="justify-content:flex-start">
                        <button type="button" class="btn btn-primary button-selengkapnya">Selengkapnya ></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- section 4 -->
    <div id="section4" class="container-fluid" style="padding-top:70px; padding-bottom:70px; background-color:white">
        <h1 class="subjudul">Berita</h1>

        <!-- slider berita -->
        <div class="container container-berita" style="margin-top:35px">
            <div class="wrapper">
                <div class="card card-berita">
                    <img src="sekolah 2.jpg">
                    <div class="info">
                        <h4>Serah Terima Hibah Barang sebanyak 12 paket objek icon Pasuruan</h4>
                        <p>Serah Terima Hibah Barang sebanyak 12 paket objek icon Pasuruan Program...</p>
                        <a href="#" class="btn">Selengkapnya</a>
                    </div>
                </div>

                <div class="card card-berita">
                    <img src="program adiwiyata.jpg">
                    <div class="info">
                        <h4>Hasil Seleksi PPDB Tahap 4 (Zonasi SMA) 2022-2023</h4>
                        <p>Pengumuman hasil penerimaan PPDB Tahap 4 (Zonasi SMA) Tahun Pelajaran 2022-2023 akan...</p>
                        <a href="#" class="btn">Selengkapnya</a>
                    </div>
                </div>

                <div class="card card-berita">
                    <img src="sekolah 3.jpg">
                    <div class="info">
                        <h4>59 Siswa SMAN 1 Pasuruan Lulus SBMPTN 2021</h4>
                        <p>Pada Jumat 14 Juni 2021 Pukul 15.00 WIB, telah...</p>
                        <a href="#" class="btn">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="center-button">
            <button type="button" class="btn btn-primary button-selengkapnya">Selengkapnya ></button>
        </div>
    </div>

    <!-- section 5 -->
    <div id="section5" class="container-fluid" style="padding-top:70px;padding-bottom:70px; background-color:#85A4D2">
        <h1 class="subjudul" style="color:#fff; margin-top:30px">Hubungi Kami</h1>

        <div class="container container-kontak" style="margin-top:50px">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon"><i class="fa-solid fa-location-dot" style="color:white"></i></div>
                    <div class="text">
                        <h3>Addres</h3>
                        <p>Jl. Raya Pantura No.15,<br> Gadingrejo, Kec. Gadingrejo, <br>Kota Pasuruan, Jawa Timur
                            <br>67134
                        </p>
                    </div>
                </div>

                <div class="box">
                    <div class="icon"><i class="fa-solid fa-phone" style="color:white"></i></div>
                    <div class="text">
                        <h3>Phone</h3>
                        <p>0343-421466</p>
                    </div>
                </div>

                <div class="box">
                    <div class="icon"><i class="fa-solid fa-envelope" style="color:white"></i></div>
                    <div class="text">
                        <h3>Email</h3>
                        <p>sman1kotapasuruan@gmail.com</p>
                    </div>
                </div>
            </div>

            <div class="contactForm">
                <form id="contactForm" onsubmit="event.preventDefault(); validateForm();">
                    <h2>Kirim Pesan</h2>
                    <div class="inputBox">
                        <input id="name" type="text" name="name" required="required">
                        <span>Nama Lengkap</span>
                        <div class="error"></div>
                    </div>

                    <div class="inputBox">
                        <input id="email" type="text" name="email" required="required">
                        <span>Email</span>
                        <div class="error"></div>
                    </div>

                    <div class="inputBox">
                        <textarea id="message" type="text" name="message" required="required"></textarea>
                        <span>Pesan</span>
                    </div>

                    <div class="inputBox">
                        <input type="submit" name="submit" value="Send">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
