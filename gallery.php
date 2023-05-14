<!-- Cichy Sebastian / Grupa: D2 / nr.indexu: 150676 / sem: IV -->
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikacje Internetowe</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7eec2f261f.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg position-fixed top-0 w-100 py-2">
  <div class="container">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fa-solid fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link "href="index.php">Home</a>
        <a class="nav-link" href="user.php">Użytkownicy</a>
        <a class="nav-link" href="gallery.php">Galeria</a>
      </div>
    </div>
  </div>
</nav>
    
<header>
    <div class="hero-img">
        <div class="hero-shadow"></div>
        <div class="hero-text">
            <h1>Aplikacje internetowe</h1>
            <a href="#gallery" class="button">Galeria</a>
        </div>
    </div>
</header>

<main>
    <section id="gallery" class="main">
        <div class="container">
            <h2>Galeria</h2>
            <div class="underline"></div>
            <div class="gallery-list py-5 ">
            <?php
                // zmienna z folderem "images"
                $folder = "images/";

                // odczytanie plików z folderu które posiadają rozszerzenie .jpg 
                $photos = glob($folder . "*.jpg");

                // wyświetlenie galeri ze zdjęciami
                echo '<div class="gallery">';
                foreach ($photos as $photo) {
                    echo '<img class="m-1" src="'.$photo.'"alt="zdjęcie"">';
                }
                echo '</div>';
            ?>
            </div>

        </div>
    </section>

    
</main>

<footer>
    <div class="container pt-3">
        <h2>CS</h2>
        <div class="underline"></div>
        <p class="data">        
            <?php
                $data=date("Y-m-d");
                echo " $data ";
            ?></p>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>