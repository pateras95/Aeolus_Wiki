<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="./Assets/globalCss.css" >

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <title>Aeolus Wiki</title>
</head>

<style>

  body,
  html {
    background-image: url("./Assets/default-background.jpg");
    height: 100%;
    margin: 0;
    padding: 0;
    background-position: center;
    /* background-repeat: no-repeat; */
    background-size: cover;
  }

  .bg-dark {
    background-color: #002e5a !important;
  }

  .custom-iframe {
    margin-top: 10%;
    /* height: 100%;*/
    /* width: 50vw; */
    /* width: 100%;  */
  }
</style>

<body>
  <div>
    <img src="./Assets/banner_page_img_new.jpg" class="banner">
  </div>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand navbar-toggler" href="#">Aeolus Wiki</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse navbar-potition" id="navbarSupportedContent">
      <div class="server-icon d-none d-lg-block">
        <img src="./Assets/server_icon_new.png" class="img-radius" />
      </div>
      <ul class="navbar-nav mr-auto menu-text">
        <li class="nav-item">
          <a class="nav-link" href="#">Αρχική</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://aeolus2.eu/" target="_blank">Ιστοσελίδα</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Πληροφορίες
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="./Routes/Missions.html">Αποστολές</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Αντικέιμενα</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Τοποθεσίες Boss και Drop</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Χάρτες XP και τοποθεσίες Boss</a>
          </div>
        </li>
      </ul>
      <ul class=" navbar-nav my-2 my-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Συστήματα
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Κατοικιδίων</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Κορδέλας</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./Routes/bonus.html">Bonus-Λίθοι</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Κανονισμοί</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="container-fluid">
    <div class="row" style="justify-content: center; overflow-x:hidden;">
      <div class="col-lg-6 col-sm-9">
        <div class="pt-5 header-text">
          <p> Καλώς ήρθατε στο Wiki του παχνιδιού. Αν είσαι νέος παίχτης, ελπίζουμε οι πληροφορίες
            που σου δίνουμε να είναι αρκετές και αναλυτικές για να μπορέσεις να εξελιχθείς μέσα στο παιχνίδι.
          </p>
          <p>
            Τα rates του Server είναι σταθερά 1000% σε EXP, yang και αντικείμενα. Ο Server είναι 24/7 Online και παρέχει
            διαδικτυακή εξυπηρέτηση πελατών για οποιαδήποτε απορία η πρόβλημα που αντιμετωπίζετε μην διστάσετε να
            επικοινωνήσετε μαζί μας.
          </p>
          <p>
            Το παιχνίδι είναι 100% μεταφρασμένο στα ελληνικά καθώς και έχουν γίνει διορθώσεις σε πολλά bug. Παρ' όλα
            αυτά,
            αν
            συναντήσεις οτιδήποτε που μπορεί να μας ξέφυγε, θα θέλαμε να μας ενημερώσεις άμεσα.
            Τρόπους επικοινωνίας μπορείς να βρεις στη σελίδα Επικοινωνία.
          </p>
          <p>
            Καλή διαμονή στον Server μας.
          </p>
        </div>
      </div>
      <div col="col-lg-6 col-sm-3">
        <iframe class="custom-iframe pt-5" src="https://www.youtube.com/embed/kwAtMAvTJTY" frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen></iframe>
      </div>
    </div>

  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
    crossorigin="anonymous"></script>

  <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>