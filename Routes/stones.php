<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="../Assets/globalCss.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Spirit Stones</title>
</head>

<style>
    body,
    html {
        background-image: url("../Assets/default-background.jpg");
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

    /* mission-css */

    .npc-img {
        margin-top: 50px;
        width: 80%;
        min-width: 80px;
        max-width: 250px;
        object-fit: scale-down;
        max-height: 300px;
    }

    .header-text {
        width: 50%;
    }

    .general-text {
        color: black !important;
        text-align: center;
    }

    .table .thead-dark th {
        background-color: #002e5a !important;
        border: 1px solid white;
    }

    .carousel-item {
        min-height: 800px;
        height: auto;
    }

    .content-head {
        font-size: 15px;
        font-family: monospace;
        color: #fff !important;
        font-weight: 700;
    }

    .carousel-control-next-icon,
    .carousel-control-prev-icon {
        width: 50px;
        height: 50px;
    }

    .custom-btn {
        width: 150px;
        height: 50px;
        border: 3px solid white;
        border-radius: 5px;
        font-family: 'Courier New', Courier, monospace;
        font-size: clamp(12px, 1.2vw, 20px);
        font-weight: 700;
        color: #c0c0c0;
        background-color: #002e5a !important;
    }

    .custom-btn:hover {
        color: white;
    }
</style>

<body>
    <div>
        <img src="../Assets/banner_page_img_new.jpg" class="banner">
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand navbar-toggler" href="#">Aeolus Wiki</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse navbar-potition" id="navbarSupportedContent">
            <div class="server-icon d-none d-lg-block">
                <img src="../Assets/server_icon_new.png" class="img-radius" />
            </div>
            <ul class="navbar-nav mr-auto menu-text">
                <li class="nav-item">
                    <a class="nav-link" href="../wikiIndex.php">Αρχική</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://aeolus2.eu/" target="_blank">Ιστοσελίδα</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Πληροφορίες
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="Missions.html">Αποστολές</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Αντικέιμενα</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Τέρατα/Metin και Drop</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Χάρτες XP και τοποθεσίες Boss</a>
                    </div>
                </li>
            </ul>
            <ul class=" navbar-nav my-2 my-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Συστήματα
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Κατοικιδίων</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Κορδέλας</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Bonus-Λίθοι</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Κανονισμοί</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container-fluid text-center">
        <div class="pt-5 header-text ">
            <p>Παρακάτω θα βρέιτε όλα τα μπόνους και τους λιθους που μπορούν να μπουν στα αντικέιμενα, ανα κατηγορία.
                Περιηγηθείτε με τα βελάκια αριστέρα και δεξία στην αντίστοιχη καρτέλα για την πληροφορία που σας
                ενδιαφέρει.
            </p>
        </div>

        <b-row>
            <b-col class="mx-5">
                <a class="btn custom-btn mt-2" href="bonus.html">Bonus</a>
            </b-col>
            <b-col class="mx-5">
                <a class="btn custom-btn mt-2" href="stones.php">Λίθοι</a>
            </b-col>
        </b-row>


        <div class="pt-5 header-text ">
            <p>
                Οι Λίθοι ζωτικότας,Απόκρουσης και Αποφυγής βέλων αναβαθμίζονται μέχρι το επίπεδο +7, +6 και +6
                αντίστοιχα. Οι λίθοι +5 και τα αναβαθμίστικα για να γίνουν + βρίσκόνται απο drop απο τα Boss του
                παιχνιδιού που μπορείτε να βρείτε στον παρακάτω σύνδεσμο <a href="bosses.html"> ΕΔΩ </a>
            </p>
        </div>
        <div id="carouselExampleIndicators" class="carousel slide" data-interval="false">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="mb-2 mt-5 header-text">Λίθοι όπλου</div>
                    <div class="table-responsive-sm w-75 mb-5" style="margin:0 auto;">
                        <table class="table table-striped table-light">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Λίθος</th>
                                    <th scope="col">Αναβάθμιση</th>
                                    <th scope="col">Bonus</th>
                                </tr>
                            </thead>
                            <tbody class="general-text">
                                <tr>
                                    <th scope="row" class="align-middle">
                                        <div>Λίθος κατά Πολεμιστή</div>
                                        <img src="https://en-wiki.metin2.gameforge.com/images/7/78/Stone_Against_Warrior.png" />
                                    </th>
                                    <td class="align-middle">
                                        +4
                                        <hr>
                                        +5
                                    </td>
                                    <td class="align-middle">
                                        +25% Δυνατό ενάντια σε Πολεμιστές
                                        <hr>
                                        +35% Δυνατό ενάντια σε Πολεμιστές
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" class="align-middle">
                                        <div>Λίθος κατά Νίντζα</div>
                                        <img src="https://en-wiki.metin2.gameforge.com/images/f/f6/Stone_Against_Ninja.png" />
                                    </th>
                                    <td class="align-middle">
                                        +4
                                        <hr>
                                        +5
                                    </td>
                                    <td class="align-middle">
                                        +25% Δυνατό ενάντια σε Νίντζα
                                        <hr>
                                        +35% Δυνατό ενάντια σε Νίντζα
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" class="align-middle">
                                        <div>Λίθος κατά Σούρα</div>
                                        <img src="https://en-wiki.metin2.gameforge.com/images/3/35/Stone_Against_Sura.png" />
                                    </th>
                                    <td class="align-middle">
                                        +4
                                        <hr>
                                        +5
                                    </td>
                                    <td class="align-middle">
                                        +25% Δυνατό ενάντια σε Σούρα
                                        <hr>
                                        +35% Δυνατό ενάντια σε Σούρα
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" class="align-middle">
                                        <div>Λίθος κατά Σαμάνο</div>
                                        <img src="https://en-wiki.metin2.gameforge.com/images/7/77/Stone_Against_Shaman.png" />
                                    </th>
                                    <td class="align-middle">
                                        +4
                                        <hr>
                                        +5
                                    </td>
                                    <td class="align-middle">
                                        +25% Δυνατό ενάντια σε Σαμάνο
                                        <hr>
                                        +35% Δυνατό ενάντια σε Σαμάνο
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" class="align-middle">
                                        <div>Λίθος Τελικής Κρίσης</div>
                                        <img src="https://en-wiki.metin2.gameforge.com/images/4/47/Stone_of_Deathblow.png" />
                                    </th>
                                    <td class="align-middle">
                                        +4
                                        <hr>
                                        +5
                                    </td>
                                    <td class="align-middle">
                                        +8% Πιθανότητα Κρίσιμου Χτυπήματος
                                        <hr>
                                        +15% Πιθανότητα Κρίσιμου Χτυπήματος
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" class="align-middle">
                                        <div>Λίθος Κατά Τεράτων</div>
                                        <img src="https://en-wiki.metin2.gameforge.com/images/f/fc/Stone_of_Monsters.png" />
                                    </th>
                                    <td class="align-middle">
                                        +4
                                        <hr>
                                        +5
                                    </td>
                                    <td class="align-middle">
                                        +8% Δυνατό ενάντια σε Τέρατα
                                        <hr>
                                        +15% Δυνατό ενάντια σε Τέρατα
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" class="align-middle">
                                        <div>Λίθος Διάτρησης</div>
                                        <img src="https://en-wiki.metin2.gameforge.com/images/1/1b/Stone_of_Penetration.png" />
                                    </th>
                                    <td class="align-middle">
                                        +4
                                        <hr>
                                        +5
                                    </td>
                                    <td class="align-middle">
                                        +8% Πιθανότητα Χτύπημα Διάτρησης
                                        <hr>
                                        +15% Πιθανότητα Χτύπημα Διάτρησης
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" class="align-middle">
                                        <div>Λίθος του Κρυώματος</div>
                                        <img src="https://en-wiki.metin2.gameforge.com/images/1/1b/Stone_of_Cooldown.png" />
                                    </th>
                                    <td class="align-middle">
                                        +4
                                        <hr>
                                        +5
                                    </td>
                                    <td class="align-middle">
                                        +25% Ταχύτητα Μαγείας
                                        <hr>
                                        +35% Ταχύτητα Μαγείας
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="mb-2 mt-5 header-text">Λίθοι Πανοπλίας</div>
                    <div class="table-responsive-sm w-75 mb-5" style="margin:0 auto;">
                        <table class="table table-striped table-light">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Λίθος</th>
                                    <th scope="col">Αναβάθμιση</th>
                                    <th scope="col">Bonus</th>
                                </tr>
                            </thead>
                            <tbody class="general-text">
                                <tr>
                                    <th scope="row" class="align-middle">
                                        <div>Λίθος Απόκρουσης</div>
                                        <img src="https://en-wiki.metin2.gameforge.com/images/d/df/Stone_of_Evasion.png" />
                                    </th>
                                    <td class="align-middle">
                                        +4
                                        <hr>
                                        +5
                                        <hr>
                                        +6
                                    </td>
                                    <td class="align-middle">
                                        +8% Πιθανότητα Απόκρουσης
                                        <hr>
                                        +15% Πιθανότητα Απόκρουσης
                                        <hr>
                                        +20% Πιθανότητα Απόκρουσης
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" class="align-middle">
                                        <div>Λίθος Αποφυγής</div>
                                        <img src="https://en-wiki.metin2.gameforge.com/images/c/c9/Stone_of_Ducking.png" />
                                    </th>
                                    <td class="align-middle">
                                        +4
                                        <hr>
                                        +5
                                        <hr>
                                        +6
                                    </td>
                                    <td class="align-middle">
                                        +8% Πιθανότητα Αποφυγής Βέλων
                                        <hr>
                                        +15% Πιθανότητα Αποφυγής Βέλων
                                        <hr>
                                        +20% Πιθανότητα Αποφυγής Βέλων
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" class="align-middle">
                                        <div>Λίθος Ζωτικότητας </div>
                                        <img src="https://en-wiki.metin2.gameforge.com/images/1/19/Stone_of_Vitality.png" />
                                    </th>
                                    <td class="align-middle">
                                        +4
                                        <hr>
                                        +5
                                        <hr>
                                        +6
                                        <hr>
                                        +7
                                    </td>
                                    <td class="align-middle">
                                        +500 Μέγιστο HP
                                        <hr>
                                        +1000 Μέγιστο HP
                                        <hr>
                                        +4000 Μέγιστο HP
                                        <hr>
                                        +15000 Μέγιστο HP
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" class="align-middle">
                                        <div>Λίθος Βιασύνης</div>
                                        <img src="https://en-wiki.metin2.gameforge.com/images/b/b8/Stone_of_Haste.png" />
                                    </th>
                                    <td class="align-middle">
                                        +4
                                        <hr>
                                        +5
                                    </td>
                                    <td class="align-middle">
                                        +30% Ταχύτητα Κίνησης
                                        <hr>
                                        +35% Ταχύτητα Κίνησης
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" class="align-middle">
                                        <div>Λίθος Άμυνας</div>
                                        <img src="https://en-wiki.metin2.gameforge.com/images/4/43/Stone_of_Defence.png" />
                                    </th>
                                    <td class="align-middle">
                                        +4
                                        <hr>
                                        +5
                                    </td>
                                    <td class="align-middle">
                                        +15 Άμυνα
                                        <hr>
                                        +100 Άμυνα
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" class="align-middle">
                                        <div>Λίθος Μαγείας</div>
                                        <img src="https://en-wiki.metin2.gameforge.com/images/6/69/Stone_of_Magic.png" />
                                    </th>
                                    <td class="align-middle">
                                        +4
                                        <hr>
                                        +5
                                    </td>
                                    <td class="align-middle">
                                        +250 Μέγιστο SP
                                        <hr>
                                        +500 Μέγιστο SP
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

    </div>

    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>