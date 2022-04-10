    <?php
    require 'functions.php';
            $user = mysqli_fetch_assoc($a);
            $about = mysqli_fetch_assoc($b);
            
            $project = data("SELECT * FROM Project");
            
            if (isset($_POST["submit"])) {
                if (tambah($_POST) > 0) {
                    echo "
                    <script>
                    alert('Pesan terkirim');
                    </script>
                    ";
                } else {
                    echo "
                    <script>
                    alert('Gagal terkirim');
                    </script>
                    ";
                }
            }
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Portofolio</title>
        <!--my css-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
        <link rel="stylesheet" href="style.css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
          <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    </head>
    <body>
        <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top bg-warning">
      <div class="container">
        <a class="navbar-brand" href="#">Rznaalusiana</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto
          ">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#project">Project</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Contact">Contact</a>
            </li>
                        </li>
            <li class="nav-item">
              <a class="nav-link" href="admin/"> <i class="bi bi-app-indicator"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
       <!-- akhir navbar-->
      <!-- jumbotron -->
      <section id="home" class="jumbotron text-center">
        <img src="<?= $user["Gambar"];?>" alt="" width="200" class="rounded-circle"/>
        <h1 class="display-4" data-aos="zoom-in-up" data-aos-duration="2000"> <?= $user["Nama"];?> </h1>
        <p class="lead" data-aos="zoom-in-up" data-aos-duration="2000"><?= $user["Jabatan"];?> | <?= $user["Perusahaan"];?></p>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="WHITE" fill-opacity="1" d="M0,96L40,112C80,128,160,160,240,144C320,128,400,64,480,53.3C560,43,640,85,720,101.3C800,117,880,107,960,101.3C1040,96,1120,96,1200,106.7C1280,117,1360,139,1400,149.3L1440,160L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
      </section>
      <!-- akhir jumbotron-->
      <section id="about">
        <div class="row text-center">
          <h2>about</h2>
        </div>
        <div class="row justify-content-center fs-5">
          <div class="col-sm-4" data-aos="fade-right" data-aos-duration="2000">
            <p><?= $about["Column1"];?></p>
          </div>
          <div class="col-sm-4" data-aos="fade-left" >
            <p><?= $about["Column2"];?></p>
          </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ADFF2F" fill-opacity="1" d="M0,96L40,112C80,128,160,160,240,144C320,128,400,64,480,53.3C560,43,640,85,720,101.3C800,117,880,107,960,101.3C1040,96,1120,96,1200,106.7C1280,117,1360,139,1400,149.3L1440,160L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
      </section>
      <!--Project-->
      <section id="project">
        <div class="container">
        <div class="row text-center">
          <h2>Projects Me</h2>
        </div>
         <div class="row justify-content-center" >
            
         <?php foreach ($project as $pro):?>
         
           <div class="col-sm-4 mb-4"
            data-aos="flip-left" data-aos-duration="2000">
            <div class="card" style="width: 18rem;">
              <img src="Foto/<?= $pro["Foto"];?>" class="card-img-top" alt="Ade.jpg">
              <div class="card-body">
                <h1><?= $pro["Nama_p"];?></h1>
                <p class="card-text"><?= $pro["Ket"];?></p>
              </div>
            </div>
           </div>
          
          <?php endforeach ?>
          </div>
          </div>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ADFF2F" fill-opacity="1" d="M0,96L40,112C80,128,160,160,240,144C320,128,400,64,480,53.3C560,43,640,85,720,101.3C800,117,880,107,960,101.3C1040,96,1120,96,1200,106.7C1280,117,1360,139,1400,149.3L1440,160L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z"></path></svg>
      </section>
      <!--akhir project-->
      <!--contact-->
      <section id="Contact">
        <div class="container">
        <div class="row text-center">
          <h2>contact</h2>
        </div>
        <div class="row justify-content-center" data-aos="flip-up"data-aos-duration="2000">
          <div class="col-sm-6">
          <form method="POST">
            <div class="mb-3">
              <label for="Email" class="form-label">Email address</label>
              <input type="email" name="Email" class="form-control" id="Email" aria-describedby="emailHelp" required="">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
              <label for="Nama" class="form-label">Nama</label>
              <input type="text" class="form-control" name="Nama_k" id="Nama" required="">
            </div>
          <div class="mb-3">
                <label for="Pesan">Pesan</label>
                <textarea class="form-control" placeholder="Leave a comment here" name="Pesan" id="Pesan" style="height: 100px" required></textarea>
              </div>
              <button type="submit" name="submit" class="btn btn-primary" required>Submit</button>
            
          </form>
          </div>
        </div>
      </div>
      </section>
      <footer class="row text-center">
        <p>created with <i class="bi bi-instagram"></i></i></i></i>Rznaalusiana0603</p>
      </footer>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#black" fill-opacity="1" d="M0,96L48,117.3C96,139,192,181,288,176C384,171,480,117,576,85.3C672,53,768,43,864,64C960,85,1056,139,1152,133.3C1248,128,1344,64,1392,32L1440,0L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
        <!--akhir contact-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
          <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
    </body>
    </html>