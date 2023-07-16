<?php
include_once(__DIR__ . "/../../services/ReclamationService.php");
include_once(__DIR__ . "/../../services/ReponseService.php");



$RecServ=new ReclamationService();

$listeProduits=$RecServ->afficherReclamation();





?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Sound Space - Produit</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-orange
 ">
<!-- Page Loader -- >
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="preloader">
            <div class="spinner-layer pl-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
        <p>Please wait...</p>
    </div>
</div>
<!-- #END# Page Loader -->
<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- #END# Overlay For Sidebars -->
<!-- Search Bar -->
<div class="search-bar">
    <div class="search-icon">
        <i class="material-icons">recherche</i>
    </div>
    <input type="text" placeholder="START TYPING...">
    <div class="close-search">
        <i class="material-icons">close</i>
    </div>
</div>
<!-- #END# Search Bar -->
<!-- Top Bar -->

<nav class="navbar">

    <div class="container-fluid">
        <div class="navbar-header">
            <div class="logo2"><img src="images/logo2.png" height="50" width="50"alt="IMG"></div>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-right">

                <a href="../front/AfficherReclamation.php" class="btn btn-danger"   >  <i class="material-icons">loop</i> </a>

                

            </ul>
        </div>

    </div>
</nav>
<!-- #Top Bar -->
<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">
            <div class="image">
            <img src="images/wiem.jpg" width="52" height="52" alt="User" />
            </div>
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><B><font size="3pt"> <?php echo 'wiem' ; ?>
                        </font> </B></div>
                <div class="email"><?php echo 'wiem.ayari@esprit.tn' ?></div>
                <div class="btn-group user-helper-dropdown">
                    <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profil</a></li>
                        <li role="seperator" class="divider"></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">group</i>Abonnés</a></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                        <li role="seperator" class="divider"></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">input</i>Se déconnecter</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">NAVIGATION PRINCIPALE</li>
                
                <li class="active" >
                    <a  href="AfficherReclamation.php">
                        <i class="material-icons">list_alt</i>
                        <span>Reclamations</span>
                    </a>
                </li> <li class="" >
                    <a  href="AfficherReponse.php">
                        <i class="material-icons">list_alt</i>
                        <span>Reponse</span>
                    </a>
                </li>


            </ul>
        </div>
        <!-- #Menu -->
        <!-- Footer -->
        <div class="legal">
            <div class="copyright">
                &copy; 2020 - 2021 <a href="javascript:void(0);">AdminLH-SEIN SAIN centre</a>.
            </div>
        </div>
        <!-- #Footer -->

    </aside>

</section>

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2><B><FONT size="6pt"> Sound Space </FONT> </B> </h2>
        </div>

        <!-- Widgets -->
       <!-- <div class="row clearfix">
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-pink ">


                    <a class="bg-pink"  href="statRec.php">     <div class="icon">
                            <i class="material-icons">star</i>
                        </div></a>
                    <div class="content">
                        <div class="text"> Statisques </div>

                    </div>


                </div>
            </div>  -->
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-cyan">
                    <div class="icon">
                        <i class="material-icons">help</i>
                    </div>
                    <div class="content">
                        <input  id="myInput" class="form-control " type="text" placeholder="Search..">
                    </div>
                </div>
            </div>

        </div>
        <!-- #END# Widgets -->
        <!-- CPU Usage -->

        <div class="row clearfix">
            <!-- Task Info -->
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                <div class="card">
                    <div class="header">
                        <h2>Les Reclamations</h2>

                    </div>
                    <div class="body">
                        <div class="table-responsive">

                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">status</th>
                                    <th scope="col">Traiter</th>
                                    <th scope="col">Delete</th>
                                </tr>
                                </thead>
                                <tbody  id="myTable">
                                <?PHP

                                foreach($listeProduits as $row){

                                    ?>
                                    <tr>
                                        <th scope="row"><?php echo $row['id_reclamation'] ?></th>
                                        
                                        <td><?php echo $row['description'] ?></td>
                                        <td><?php echo $row['status'] ?></td>

                                        <td>
                                            <?php if ($row['status'] == 0 ) { ?>
                                            <form method="POST" action="../../Controllers/TraiterReclamationC.php">

                                                <button class="btn btn-primary" type="submit"><i class="material-icons">add</i> </button>
                                                <input type="hidden" value="<?PHP echo $row['id_reclamation']; ?>" name="id_reclamation">
                                                <?php }
                                                else if ($row['status'] == 1) {
                                                ?>
                                                <form method="POST" action="../../Controllers/TraiterReclamationC2.php">
                                                    <button class="btn btn-primary" type="submit"><i class="material-icons">remove</i> </button>
                                                    <input type="hidden" value="<?PHP echo $row['id_reclamation']; ?>" name="id_reclamation">
                                                </form>
                                                <?php } ?>

                                            </form>

                                        </td>
                                        <td>
                                            <form method="POST" action="../../Controllers/DeleteReclamationC.php">
                                                <button class="btn btn-danger" type="submit"><i class="material-icons">auto_delete</i> </button>
                                                <input type="hidden" value="<?PHP echo $row['id_reclamation']; ?>" name="id_reclamation">
                                            </form>
                                        </td>
                                      



                                    </tr>
                                    <?PHP

                                }
                                ?>

                                </tbody>
                            </table>

                            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                            <script>
                                $(document).ready(function(){
                                    $("#myInput").on("keyup", function() {
                                        var value = $(this).val().toLowerCase();
                                        $("#myTable tr").filter(function() {
                                            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                                        });
                                    });
                                });
                            </script>

                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Task Info -->

            <!-- #END# Browser Usage -->
        </div>
    </div>
</section>

<!-- Jquery Core Js -->
<script src="plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap Core Js -->
<script src="plugins/bootstrap/js/bootstrap.js"></script>

<!-- Select Plugin Js -->
<script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

<!-- Slimscroll Plugin Js -->
<script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

<!-- Waves Effect Plugin Js -->
<script src="plugins/node-waves/waves.js"></script>

<!-- Jquery CountTo Plugin Js -->
<script src="plugins/jquery-countto/jquery.countTo.js"></script>

<!-- Morris Plugin Js -->
<script src="plugins/raphael/raphael.min.js"></script>
<script src="plugins/morrisjs/morris.js"></script>

<!-- ChartJs -->
<script src="plugins/chartjs/Chart.bundle.js"></script>

<!-- Flot Charts Plugin Js -->
<script src="plugins/flot-charts/jquery.flot.js"></script>
<script src="plugins/flot-charts/jquery.flot.resize.js"></script>
<script src="plugins/flot-charts/jquery.flot.pie.js"></script>
<script src="plugins/flot-charts/jquery.flot.categories.js"></script>
<script src="plugins/flot-charts/jquery.flot.time.js"></script>

<!-- Sparkline Chart Plugin Js -->
<script src="plugins/jquery-sparkline/jquery.sparkline.js"></script>

<!-- Custom Js -->
<script src="js/admin.js"></script>
<script src="js/pages/index.js"></script>

<!-- Demo Js -->
<script src="js/demo.js"></script>
</body>

</html>