<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="../Assets/globalCss.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Missions</title>
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
                    <a class="nav-link" href="bonus.html">Bonus-Λίθοι</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Κανονισμοί</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container-fluid text-center">
        <div class="pt-5 header-text ">
            <p>Το NPC Choo So Young βρίσκεται στις πρώτες πόλεις κάθε βασιλείου.
                Aφού παραδώσεις την απαιτούμενη ποσότητα των αντικειμένων, θα πρέπει να παραδώσεις και τον αντίστοιχο
                λίθο ψυχής.</p>
            <p>Μπορείς να επηρεάσεις τον χρόνο δίνοντας έναν λωτό <img src="../Assets/lotous.png" alt="" class="mt-n2">, <br>
                καθώς και να αύξησης τις πιθανότητες επιτυχους παράδωσης με το ελιξήριο του ερευνητή <img src="../Assets/pot.png" alt="" class="mt-n2">.</p>
        </div>
        <div class="row mt-5 mb-5" style="justify-content: center; overflow-x:hidden;">
            <div class="col-lg-3 d-none d-lg-block">
                <div class="header-text">Choo So Young</div>
                <img src="../Assets/npc_3.png" class="npc-img" />
            </div>
            <div class="col-lg-6 col-sm-9">
                <div class="table-responsive-sm">
                    <table class="table table-striped table-light">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Αποστολή</th>
                                <th scope="col">Αντικείμενο</th>
                                <th scope="col">Ποσότητα</th>
                                <th scope="col">Χρόνος Παράδοσης</th>
                                <th scope="col">Ανταμοιβή</th>
                            </tr>
                        </thead>
                        <tbody class="general-text">
                            <tr>
                                <th scope="row" class="align-middle">Το Κόσμημα της Choo So Young</th>
                                <td class="align-middle">
                                    <div>Πετράδι Ωκεανού</div><img src="../Assets/mission_12.png" alt="">
                                </td>
                                <td class="align-middle">10</td>
                                <td class="align-middle">1 ώρα</td>
                                <td class="align-middle">10% Ταχύτητα Μαγείας ή <br>
                                    Αναγέννηση HP 15% ή <br>
                                    Αναγέννηση SP 20%
                                </td>
                            </tr>
                            <tr>
                                <th scope="row" class="align-middle">Ο Θησαυρός της Choo So Young</th>
                                <td class="align-middle">
                                    <div>Σεντούκι Θυσαυρού</div><img src="../Assets/mission_13.png" alt="">
                                </td>
                                <td class="align-middle">20</td>
                                <td class="align-middle">1 ώρα</td>
                                <td class="align-middle">Διπλάσιο ΕΧΡ +40% (Πιθ.) ή <br>
                                    Διπλάσια YANG +40% (Πιθ.) ή <br>
                                    Διπλάσια ITEMS +40% (Πιθ.) ή <br>
                                    Απορρόφηση SP +50% (Πιθ.)

                                </td>
                            </tr>
                            <tr>
                                <th scope="row" class="align-middle">Το Πείσμα της Choo So Young</th>
                                <td class="align-middle">
                                    <div>Πετράδι της Πίστης</div><img src="../Assets/mission_14.png" alt="">
                                </td>
                                <td class="align-middle">10</td>
                                <td class="align-middle">1 ώρα</td>
                                <td class="align-middle">40 Ζωτικότητα ή <br>
                                    40 Ευφυΐα ή <br>
                                    40 Δύναμη ή <br>
                                    40 Ευκινησία ή <br>
                                    15 Ζωτικότητα & 15 Δύναμη ή <br>
                                    15 Ευφυΐα & 15 Δύναμη ή <br>
                                    15 Ευφυΐα & 15 Ευκινησία ή <br>
                                    15 Δύναμη & 15 Ευκινησία
                                </td>
                            </tr>
                            <tr>
                                <th scope="row" class="align-middle">Η Ευλογία της Choo So Young</th>
                                <td class="align-middle">
                                    <div>Σμαραγδόλιθος</div><img src="../Assets/mission_15.png" alt="">
                                </td>
                                <td class="align-middle">10</td>
                                <td class="align-middle">1 ώρα</td>
                                <td class="align-middle"> + 10.000 ΗP
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
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