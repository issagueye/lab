<?php require ('../application/views/includes/includes/connectDb.php');?>

<?php require('../application/views/includes/inc/archivage_fetch.php');?>
<?php require('../application/views/includes/inc/table_fetch.php');?>

<?php require ('../application/views/includes/inc/password_edit.php');?>
<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

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
        <?php require ('../application/views/includes/includes/topbar-navigation-receptionniste.php');?>
        <?php require ('../application/views/includes/includes/password_modal.php');?> 

        <!-- End Navigation Bar-->

        <div class="wrapper">

            <div class="container">



                <!-- Page-Title -->

                <div class="row m-t-30" >

                    

                         <a href=javascript:history.go(-1)><button class="btn btn-primary">Retour</button></a>

                </div>

                <center>

                <?php 

                    $type = $_GET['type'];

                    $texte = '';

                    switch ($type) {

                        case 'anapath':

                            $texte = 'ANAPATH';

                            break;

                        case 'cytologie':

                            $texte = 'CYTOLOGIE';

                            break;

                        

                        default:

                            # code...

                            break;

                    }

                 ?>

                    <h4 class="display-4 m-t-70">Archives: <?php echo $texte; ?></h4>

                   

                    

                </center>

                <div class="row m-t-3" >

                    <div class="col-xs-12">

                        <div class="card-box">

                            <div class="table-rep-plugin">

                                <div class="table-responsive" data-pattern="priority-columns">

                                    <table id="datatable" class="table table-striped table-bordered" style="width:100%;" width="100%" cellspacing="0">

                                        <thead class="thead-default">

                                            <tr>

                                                <th width="25%">Nom & Prenoms</th>

                                                <th data-priority="1" width="5%">Age</th>

                                                <th width="17%" data-priority="2">Date de prelevement</th>

                                                <th data-priority="6" width="5%">Service</th>

                                                <th data-priority="2" width="18%">Code d'analyse</th>

                                                <th data-priority="3">Status</th>

                                                <th data-priority="1" width="25%">Options</th>

                                            </tr>

                                        </thead>

                                        

                                         <tbody>



                                         <?php 

                                         include 'includes/connectDb.php';

                                         $req = $bdd->query("SELECT * FROM analyses WHERE (status=1 or status=2) AND recep='$type'");

                                         $donnees = $req->fetchAll();

                                         foreach ($donnees as $key => $value) {

                                             

                                         

                                          ?>

                                            <tr>

                                                <th><?php echo $value->prenomPatient." ".$value->nomPatient ?></th>

                                                <td><?php echo $value->agePatient." ".$value->nb;?></td>

                                                <td><?php echo date('d-m-Y',strtotime($value->datePrelevement)) ?></td>

                                                <td><?php echo $value->service ?></td>

                                                <td><?php echo $value->codeAna ?></td>

                                                <td>

                                                    <?php 

                                                        if ($value->status==1) echo "En cours d'archivage";

                                                        else echo "Archivé";

                                                     ?>

                                                        

                                                </td>

                                                <td>

                                                    <a href="index.php?page=formrecep&type=<?php echo $type ?>&id=<?php echo $value->idAna ?>"><button class="btn"><i class="zmdi zmdi-edit" title="Modifier"></i></button></a>



                                                    <a href="index.php?page=apercu&type=<?php echo $type ?>&id=<?php echo $value->idAna ?>&recep=1"><button class="btn "><i class="zmdi zmdi-loupe" title="Aperçu"></i></button></a>



                                                    

                                                </td>

                                                

                                            </tr>

                                            <?php } ?>

                                           

                                          </tbody>

                                    </table>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>



            </div>

        </div>













        



        <!-- Debut Footer -->

        <footer class="footer text-right">

                    

        <div class="container">

            <div class="row">

                    <div class="col-xs-12">

                                2017 © Pyramide IT.

                    </div>

            </div>

        </div>

        </footer>

        <!-- Fin Footer -->   

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

    function archiver()

    {

        if (!confirm("vous etes sur le point d'archiver l'enregistrement")) 

            return false;

    }



    function supprimer()

    {

        if (!confirm("êtes vous sûre de vouloir supprimer l'enregistrement?"))

            return false;

    }

</script>

<style>

    table th:nth-child(1), table td:nth-child(1),table th:nth-last-child(1), table td:nth-last-child(1) 

    {

        position: relative;

        width: 30%;

    }

</style>