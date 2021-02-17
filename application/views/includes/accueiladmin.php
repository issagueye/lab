<?php require('../application/views/includes/inc/table_fetch.php');?>

<?php require ('../application/views/includes/inc/password_edit.php');?>



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
        <?php require ('../application/views/includes/includes/password_modal.php');?>
    
 
        
        <div class="wrapper m-t-70">
            <div class="container">
                    <div class="row" >
                        <div class="col-sm-4 col-xs-12">
                        <div class="card card-block text-xs-center">
                            
                            <a href="index.php?page=accueilMedecin" class="thumb">
                             <img src="../application/views/assets/images/gallery/12.png" alt="Histologie" class="thumb-img card-img-bottom img-fluid"></a>
                            <a href="index.php?page=accueilMedecin" class="btn btn-purple m-t-2">Panel Analyse</a>
                        </div>
                    </div>

                    <div class="col-sm-4 col-xs-12 ">
                        <div class="card card-block text-xs-center">
                            
                            <a href="index.php?page=charts" class="thumb">
                            <img src="../application/views/assets/images/gallery/10.png" alt="Frottis en milieu liquide" class="card-img-bottom img-fluid thumb-img"></a>
                            <a href="index.php?page=charts" class="btn btn-info m-t-2">Panel Statistiques</a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12 ">
                        <div class="card card-block text-xs-center">
                            
                            <a href="index.php?page=admin" class="thumb" data-plugin="custommodal1">
                            <img src="../application/views/assets/images/gallery/11.png" alt="Frottis en milieu liquide" class="card-img-bottom img-fluid thumb-img"></a>
                            <a href="index.php?page=admin" class="btn btn-warning m-t-2" data-plugin="custommodal1" data-toggle="custommodal1">Panel Administration</a>
                        </div>
                    </div>
                   
                    </div>
            </div>
        </div>
            
                <!-- end row -->




                <!-- End Footer -->

            <footer class="footer text-right">
                    
                <div class="container">
                    <div class="row">
                         <div class="col-xs-12">
                                2017 © Pyramide IT.
                         </div>
                    </div>
                </div>
            </footer>







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