

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sound space - Paniers</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Arizonia&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">


    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        
        <a class="navbar-brand" href="index.html"><FONT size="7pt">Reclamation</FONT> <B><span><font  size="1pt" color ="#00ffff">Demarrer votre journée avec nous !</font></span></B></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">

    <li class="nav-item  "><a href="../back/AfficherReclamation.php" class="nav-link"><i class="fa fa-suitcase"></i></a></li>
                <li class="nav-item  "><a href="AfficherReclamation.php" class="nav-link"><i class="fa fa-book "></i></a></li>
                <li class="nav-item  active"><a href="AjouterReclamation.php" class="nav-link"><i class="fa fa-question"></i></a></li>
                <li class="nav-item  active"><a href="AjouterReponse.php" class="nav-link"><i class="fa fa-question"></i></a></li>

            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_1.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Accueil <i class="fa fa-chevron-right"></i></a></span> <span>Reclamation<i class="fa fa-chevron-right"></i></span></p>
                <h1 class="mb-0 bread">Reclamation :</h1>
            </div>
        </div>
    </div>
</section>


<section class="ftco-section">
    <div class="container">


        <div class="row">


            <form  onsubmit="return validateForm()" name="myForm" method="POST" action="../../Controllers/front/AjouterReclamationC.php" >
                <div class="row align-items-stretch mb-5">
                    <div >
                        <div class="form-group">
                            <textarea class="form-control"  id="description" name="description"  type="text" placeholder="Taper votre reclamation .."/></textarea>

                        </div>
                        <input type="text" value="<?PHP echo 'description'; ?>" name="des">

                    </div>

                </div>
                <div class="text-center">
                    <div id="success"></div>
                    <button class="btn btn-primary btn-xl text-uppercase"  type="submit">Envoi</button>
                </div>
            </form>

            <script>
                function validateForm() {
                    var description = document.forms["myForm"]["description"].value;

                    if (description == "") {
                        swal("Erreur!", "Le champ Description est vide!", "error");
                        return false;
                    }


                }
            </script>


        </div>

    </div>
</section>



<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<footer class="ftco-footer bg-bottom ftco-no-pt" style="background-image: url(images/bg_3.jpg);">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md pt-5">
                <div class="ftco-footer-widget pt-md-5 mb-4">
                    <h2 class="ftco-heading-2">A propos</h2>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
                        <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
                    </ul>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-12 text-center">

                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                <div class="legal">
                    <div class="copyright">
                        &copy; 2020 - 2021 <a href="javascript:void(0);">AdminLH-SEIN SAIN centre</a>.
                    </div>
                </div>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
        </div>
    </div>
</footer>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>

</body>
</html>