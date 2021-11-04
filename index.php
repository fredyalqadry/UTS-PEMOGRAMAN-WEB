<!doctype.php>
.php lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">

    <title>Selamat Datang - Sistem Informasi Kelautan</title>
    <link href="index.css" rel="stylesheet" type="text/css">
    <script type="text/javascript">
      function hapus_section(){
       let tombol=document.getElementById("Java");
       tombol.hidden(tombol.remove);
       
      }
    </script>
  </head>
  <body>
      <!--Ini adalah Navbar-->
    <section>
    <nav class="navbar navbar-expand-lg navbar-light"  style="background-color: light;">
        <div class="container">
          <a href="https://www.upi.edu/" class="navbar-brand fixed">
            <img src="LOGO-UPI.jpg" width="50" lang="50" alt="Sistem Informasi Kelautan" class="img-responsive">
        </a>
          <a class="navbar-brand" href="#">Sistem Informasi Kelautan</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav my-2 my-lg-0 navbar-nav-scroll ms-auto" style="--bs-scroll-height: 100px;">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Beranda</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Profil
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                  <li><a class="dropdown-item" href="Sejarah.php">Sejarah</a></li>
                  <li><a class="dropdown-item" href="Visi-Misi.php">Visi Misi</a></li>
                  <li><a class="dropdown-item" href="Struktur Organisasi.php">Struktur Organisasi</a></li>
                  <li><a class="dropdown-item" href="Dosen.php">Dosen</a></li>
                  <li><hr class="dropdown-divider"></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Akademik
                </a>
              <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                <li><a class="dropdown-item" href="Kurikulum.php">Kurikulum</a></li>
                <li><a class="dropdown-item" href="Laboratorium.php">Laboratorium</a></li>
                <li><hr class="dropdown-divider"></li>
              </ul>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Akreditasi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Download</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">FAQ</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Himataska
                </a>
              <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                <li><a class="dropdown-item" href="https://www.himataska.web.id/"> Tentang Himataska</a></li>
                <li><hr class="dropdown-divider"></li>
              </ul>
            </ul>
          </div>
        </div>
      </nav>
    </section>
</br>

    <!--Ini adalah Carousel-->
    <section>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="diving.png" class="d-block w-100" alt="Mahasiswa Diving">
            <div class="carousel-caption d-none d-md-block">
              <h2>Kegiatan Mahasiswa</h2>
              <p>MATAKA (Mata HIMATASKA) merupakan salah satu program unggulan dari program kerja HIMATASKA (Himpunan Mahasiswa Sistem Informasi Kelautan) yang juga kolaborasi antara himpunan mahasiswa dengan Prodi. Dilakukan melalui platform Google Meet dan MATAKA merupakan sebuah kegiatan yang sangat produktif semoga kedepannya dapat bersama-sama saling bersinergi untuk membangun Prodi Sistem Informasi Kelautan yang memiliki akreditasi unggul.</p>
              <a class="btn btn-primary left" href="#" role="button" >Selengkapnya</a>
            </div>
          </div>
          <div class="carousel-item">
            <img src="library.jpeg" class="d-block w-100" alt="Perpustakaan Upi">
            <div class="carousel-caption d-none d-md-block">
              <h2>Perpustakaan</h2>
              <p>Perpustakaan Kampus UPI Serang membuat Kolaborasi dengan Perpustakaan dalam Kegiatan Bincang Santai bersama Pustakawan. Perpustakan UPi Serang menfasilitasi adanya Loker, Mushola dan Library Lounge. Layanan Perpustakaan UPI Serang mengadakan layanan Sirkulasi yang Bebas Pinjam. Untuk dapat melakukan Bebas Pinjam Buku Perpustakaan perlu adanya Kartu Keanggotaan.</p>
              <a class="btn btn-primary" href="#" role="button">Selengkapnya</a>
            </div>
          </div>
          <div class="carousel-item">
            <img src="upiserang.jpeg" class="d-block w-100" alt="Kantor Administrasi Upi">
            <div class="carousel-caption d-none d-md-block">  
              <h2>Tentang Kampus</h2>
              <p>Tahun 2019 UPI Kampus Serang membuka Program Studi Baru yaitu S1 Sistem Informasi Kelautan (SIK). Lulusan prodi S1 SIK memiliki kompetensi untuk mempersiapkan sumberdaya manusia sektor kemaritiman pada era revolusi industri 4.0.</p>
              <a class="btn btn-primary" href="#" role="button">Selengkapnya</a>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </br>

    <!--Tampilan Update 3 Colom 1 Baris-->
    
    <div class="container" id="update">
    <div class="row text-justify">
        <div class="col-md-4 mb-3">
            <h2>Berita</h2>
              <p class="card-text">Mahasiswa Sistem Informasi Kelautan (SIK) angkatan 2019 Alya Dina Wilujeung berhasil diterima pada Research Fellowship Program (RFP).  RFP adalah pemberian hibah skala kecil dan transfer knowledge kepada mahasiswa S1 yang memiliki passion atau minat dalam penelitian pengelolaan perikanan berkelanjutan khususnya pada perikanan trawl yang ada di wilayah Lampung Timur (MGM, Margasari), Tulang Bawang (Kuala Teladas, Sungai Burung) dan Lampung Tengah (Kuala Seputih). Beberapa topik yang ditawarkan dalam program ini mencakup aspek-askep keberlanjutan pengelolaan perikanan seperti biologi, sosial, ekonomi dan kelembagaan.</p>
            </div>
        <div class="col-md-4 mb-3">
            <h2>Kemahasiswaan</h2>
              <p class="card-text">MATAKA merupakan salah satu program unggulan yang diprakarsai oleh HIMATASKA dan berkolaborasi dengan pihak program studi. MATAKA diadakan dengan mengusung tema “Sosialisasi Kurikulum Mbkm dan Konsep UAS Program Studi Sistem Informasi Kelautan” guna memberikan informasi kepada mahasiswa untuk mempersiapkan diri sejak saat ini sebelum memasuki awal semester baru. Dan membahas perihal template pembuatan CV khusus mahasiswa program studi SIK yang akan dijadikan logbook CV mahasiswa guna mempromosikan mahasiswa kepada instansi terkait untuk keperluan magang atau lain sebagainya.</p>
            </div>
        <div class="col-md-4 mb-3">
            <h2>Himataska</h2>
              <p class="card-text">Program Kerja HIMATASKA yang unggul dan dilakukan secara rutin antara lain PSDM PATIN (Rapat Rutin), Himataska Reward, Marinespot, Herminia, Mataka, Training Pengurus, Gathering, Pengabdian Masyarakat Asrama Ceria (Ramadhan), Desa Binaan, Sosial Project, Taskafarm, EKOBIS Open Jasa Paid Promote, Himataska Wirausaha, Sayembara Marchandise, Marinepreneur, ADKSEMA Hearing, Podcastik, Bedah Buku, Bedah Film, Harassment Hotline, dan Informasi Himataska dapat diakses di Instagram Himataska, Line Official Himataska, Line Group Himataska, Website. Email Himataskaupi.kdserang@gmail.com. Contact Person Admin Himataska 0896-3871-7478.</p>
          </div>  
      </div>
    </div>
  </section>
</br> 

    <!--Youtube dan text-->
    <section>
        <div class="container">
            <div class="row">
                <div class="col"><iframe width="500" height="315" src="https://www.youtube.com/embed/uSpL9GR0QaI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col bg-fff text-dark text-left"><h3>Tentang Kami</h3>
            <p>Program Studi Sistem Informasi Kelautan merupakan bagian dari Ilmu Kelautan yang fokus pada analisis data kelautan baik numerik maupun spasial untuk kemudian diintegrasikan berbasis sistem informasi yang dikembangkan sebagai dasar pengambilan keputusan. Bidang kajian dari prodi SIK terdiri dari Ilmu Kelautan, Ilmu Perikanan, Sistem Informasi, Sistem Informasi Geografis, serta Penginderaan Jauh Keluatan dan Ilmu Kelautan. Pembelajaran di SIK selain dilaksanakan di ruang kelas juga dilaksanakan di laboratorium, e-learning, field study ke pesisir dan laut. Pembelajaran di SIK dilaksanakan oleh dosen SIK dan dosen dari Kampus UPI Serang serta para praktisi dan professional di bidangnya</p>
            </div>
           </div>
         </div>
        </br>


    
    <!--Contact dan keterangan serta lokasi-->
    <section>
        <div class="container" id="contact">
            <div class="row justify-content-center fs-6">
                <div class="col-4">
                  <form>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Nama</label>
                      <input type="text" class="form-control" id="exampleInputName" aria-describedby="name">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email</label>
                      <input type="email" class="form-control" id="exampleInputEmail" aria-describedby="EmailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Pesan</label>
                      <textarea class="form-control" name="kirimpesan" id="pesan" cols="6" rows="3"></textarea>                    
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
                <div class="col-8 justify-content-center">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.0370422558126!2d106.14447451464727!3d-6.12571766176979!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e418adaa4f7f563%3A0x950ec58123df8596!2sUniversitas%20Pendidikan%20Indonesia%20(UPI)%20Kampus%20Serang!5e0!3m2!1sid!2sid!4v1633591953122!5m2!1sid!2sid" width="800" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </section>


    <!--Footer-->
    <div class="container">
      <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <div class="col-md-4 d-flex align-items-center">
          <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
            <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
          </a>
          <span class="text-muted">© 2021, Fredy Al Qadry (2009733)</span>
        </div>
      </footer>
    </div>


    


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.min.js" integrity="sha384-PsUw7Xwds7x08Ew3exXhqzbhuEYmA2xnwc8BuD6SEr+UmEHlX8/MCltYEodzWA4u" crossorigin="anonymous"></script>
    -->
  </body>
<.php>