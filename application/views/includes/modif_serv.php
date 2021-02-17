<?php require ('../application/views/includes/includes/connectDb.php');
 require('../application/views/includes/inc/archivage_fetch.php');
 require('../application/views/includes/inc/table_fetch.php');
 require ('../application/views/includes/inc/password_edit.php');
if (isset($_POST['ajoutServ'])) {
    $newServ = htmlspecialchars($_POST['nomServ']);
    $id = $_GET['id'];
    $rec = $bdd->prepare("UPDATE services SET nomService=:new WHERE idService=:id");
    if ($rec->execute( array(
        'new' => $newServ,
        'id' => $id
        ) )) {
        echo "<script>alert('Service modifié avec succès')
        window.location.replace('index.php?page=admin')</script>";
    }
    else
        echo "<script>alert('erreur lors de la modification')</script>";
}
 ?>



<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App Favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App title -->
        <title>LAB+</title>

        <!-- Switchery css -->
        <link href="../application/views/assets/plugins/switchery/switchery.min.css" rel="stylesheet" />
            <!--Morris Chart CSS -->
        <link rel="stylesheet" href="../application/views/assets/plugins/morris/morris.css">
        

        <link href="../application/views/assets/plugins/switchery/switchery.min.css" rel="stylesheet" />

        <!-- Custom box css -->
        <link href="../application/views/assets/plugins/custombox/css/custombox.min.css" rel="stylesheet">
         <!-- DataTables -->
        <link href="../application/views/assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="../application/views/assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="../application/views/assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- App CSS -->
        <link href="../application/views/assets/css/style.css" rel="stylesheet" type="text/css" />
          <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        <!-- Modernizr js -->
        <script src="../application/views/assets/js/modernizr.min.js"></script>

        <!-- Custom box css -->
        <link href="../application/views/assets/plugins/custombox/css/custombox.min.css" rel="stylesheet">

        <!-- App CSS -->
        <link href="../application/views/assets/css/style.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        <!-- Modernizr js -->
        <script src="../application/views/assets/js/modernizr.min.js"></script>
    </head>


    <body>

        <?php require ('../application/views/includes/includes/header_bar.php');?>
        <?php require ('../application/views/includes/topbar-navigation.php');?>
        <?php require ('../application/views/includes/includes/password_modal.php');?> 

        </div> <!-- container -->
        <div class="row">
            <div class="wrapper m-t-70" >

            <div class="container">
            <a href=javascript:history.go(-1)><button class="btn btn-primary m-t-10 m-l-1">Retour</button></a> <br><br>
                <div class="col-xs-12 col-md-8 col-lg-8 col-xl-6">
                    <div class="card-box tilebox-one">
                        <i class="icon ion-flag pull-xs-right text-muted"></i>
                        <h6 class="text-muted text-uppercase m-b-20">Modification de service</h6>


                        <form  method="post">
                            <input type="text" name="nomServ" class="form-control" placeholder=" nom du  service" required="required" title=""><br>
                            <br>
                            <button type="submit" name="ajoutServ" class="btn btn-primary">Modifier</button>
                            <input type="reset" value="Annuler" id="annuler" class="btn btn-default">
                           
                        </form>


                    </div>
                </div>
            </div>
            </div>
        </div>
        

    <!-- Right Sidebar -->





        </div> <!-- End wrapper -->




        </div>
        </div>
        </div>

           <footer class="footer text-right">
                    
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                                2017 © Pyramide IT.
                    </div>
                </div>
            </div>
           </footer>


</div>
</div>




        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="../application/views/assets/js/jquery.min.js"></script>
        <script src="../application/views/assets/js/tether.min.js"></script><!-- Tether for Bootstrap -->
        <script src="../application/views/assets/js/bootstrap.min.js"></script>
        <script src="../application/views/assets/js/waves.js"></script>
        <script src="../application/views/assets/js/jquery.nicescroll.js"></script>
        <script src="../application/views/assets/plugins/switchery/switchery.min.js"></script>

        <!-- Modal-Effect -->
        <script src="../application/views/assets/plugins/custombox/js/custombox.min.js"></script>
        <script src="../application/views/assets/plugins/custombox/js/legacy.min.js"></script>

        <!-- App js -->
        <script src="../application/views/assets/js/jquery.core.js"></script>
        <script src="../application/views/assets/js/jquery.app.js"></script>

        <!-- Required datatable js -->
        <script src="../application/views/assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="../application/views/assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="../application/views/assets/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="../application/views/assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
        <script src="../application/views/assets/plugins/datatables/jszip.min.js"></script>
        <script src="../application/views/assets/plugins/datatables/pdfmake.min.js"></script>
        <script src="../application/views/assets/plugins/datatables/vfs_fonts.js"></script>
        <script src="../application/views/assets/plugins/datatables/buttons.html5.min.js"></script>
        <script src="../application/views/assets/plugins/datatables/buttons.print.min.js"></script>
        <script src="../application/views/assets/plugins/datatables/buttons.colVis.min.js"></script>
        <!-- Responsive examples -->
        <script src="../application/views/assets/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="../application/views/assets/plugins/datatables/responsive.bootstrap4.min.js"></script>

    </body>
</html>
<script>
    $(document).ready(function() {
        $("#datatable").dataTable({
            "bJQueryUI": false,
            "bAutoWidth": false,
            "oLanguage": {
        "sEmptyTable": "Aucun enregistrement trouvé!", //when empty
                    "sSearch": "<span>Filtre:</span> _INPUT_", //search
                    "sLengthMenu": "<span>Montrer </span> _MENU_<span> enregistrements: </span>", //label
                    "oPaginate": { "sFirst": "First", "sLast": "Last", "sNext": ">", "sPrevious": "<" } //pagination
            }
        });
        $('.zmdi').tooltip({
            classes: {
            'ui-tooltip':"ui-corner-all"
        }
        });
        
    });
</script>
<style>
    table th:nth-child(1), table td:nth-child(1),table th:nth-last-child(1), table td:nth-last-child(1) 
    {
        position: relative;
        width: 30%;
    }
</style>