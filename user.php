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
            <a href="#users" class="button">Użytkownicy</a>
        </div>
    </div>
</header>

<main>
    <section id="users" class="main">
        <div class="container">
            <h2>Lista użytkowników</h2>
            <div class="underline"></div>
                <?php
                    // zmienna z przypisanym plikiem zawierającym dane użytkowników
                    $datafile = "userlist.txt";

                    // otwieranie plliku tylko do odczytu (r)
                    $ftp = fopen($datafile, "r");

                    // stworzenie tablicy na dane użytkowników
                    $dataUsers = array();

                    // odczytanie poszczególnych lini z pliku i zapisanie ich do tablicy
                    while(!feof($ftp)) {
                      $line = fgets($ftp);// Odczytywanie lini po kolei
                      $record = explode(" ", $line);//dzielenie każdej lini na rekordy za pomocą ("<spacja>")
                      $dataUsers[] = array("number" => $record[0], "name" => $record[1], "surname" => $record[2], "indexNum" => $record[3]);
                    }
                    // zamknięcie pliku 
                    fclose($ftp);
                ?>

            <div class="user-list py-5">
                <table class="table table-striped table-secondary">
                    <thead>
                      <tr>
                        <th class="col-3">#</th>
                        <th class="col-3">Imię</th>
                        <th class="col-3">Nazwisko</th>
                        <th class="col-3">Numer indeksu</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                        // wyświetlanie każdego pola z tablicy $dataUsers jako linia tabeli
                        foreach($dataUsers as $box) {
                            echo "<tr>";
                            echo "<th>" .$box["number"]. "</td>";
                            echo "<td>" .$box["name"]. "</td>";
                            echo "<td>" .$box["surname"]. "</td>";
                            echo "<td>" .$box["indexNum"]. "</td>";
                            echo "</tr>";
                        }
                      ?>
                    </tbody>
                </table>
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