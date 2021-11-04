<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">

    <title>Profil</title>
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

    <!--Ini adalah header-->
    <img src="diving.png" alt="..." style="width:300%; height:350px; position: relative; z-index: 1;">
        <div class="container">
            <h1 style="position: absolute; top: 300px; z-index: 2; color: white;">Sejarah</h1>
            <h6 style="position: absolute; top: 370px; z-index: 2; color: white;">Home / Profil / Sejarah</h6>
        </div>
      <br><br>

    <!--Content-->
    <div class="container text-justify">
        <p><p> <h4>Sistem Informasi Kelautan</h4>
            <br> Program Studi Sistem Informasi Sistem Kelautan merupakan bagian dari Ilmu Kelautan yang fokus pada analisis data kelautan baik numerik maupun spasial untuk kemudian diintegrasikan berbasis sistem informasi yang dikembangkan sebagai dasar pengambilan keputusan. Bidang kajian dari prodi SIK terdiri dari Ilmu Kelautan, Ilmu Perikanan, Sistem Informasi, Sistem Informasi Geografis, serta Penginderaan Jauh Keluatan dan Ilmu Kelautan. Pembelajaran di SIK selain dilaksanakan di ruang kelas juga dilaksanakan di laboratorium, e-learning, field study ke pesisir dan laut. Pembelajaran di SIK dilaksanakan oleh dosen SIK dan dosen dari Kampus UPI Serang serta para praktisi dan profesional di bidangnya.</p><br>
        </p>
    </div>

    
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
</html>