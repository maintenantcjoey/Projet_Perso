<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Joey</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link rel="stylesheet" href="src/css/base.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Bangers|Dosis:300" rel="stylesheet">
    </head>

    <body class="bodyBase">


    <div class="topnav" id="myTopnav">
        <a href="index.php" class="active" id="home"><i class="fa fa-angellist"></i></a>
        <a href="portfolio.php">Portfolio</a>
        <a href="gestionProjet.php">Et plus..</a>
        <a href="#motivation.php">Lettre de Motivation</a>
        <a href="curiculum.php">CV</a>
        <a href="about.php">About</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <div class="burger" onclick="Function(this)">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>
           <!-- <i class="fas fa-hamburger"></i> PK  CA MARCHE PAS -->
        </a>
    </div>

        <nav class="navbar navbar-expand-lg">

            <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php"><i class="fa fa-angellist"></i><span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Réaliations</a>
                        <div class="dropdown-menu"> <!-- style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 40px, 0px);" -->
                            <a class="dropdown-item" href="portfolio.php">Portfolio</a>
                            <a class="dropdown-item" href="gestionProjet.php">Et plus..</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"> Lettre de Motivation </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="curiculum.php"> CV </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php"> About </a>
                    </li>
                </ul>
            </div>
        </nav>

    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
    </script>

    <script>
        function Function(x) {
            x.classList.toggle("change");
        }
    </script>

    </body>
</html>