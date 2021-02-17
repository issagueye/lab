<?php require ('../application/views/includes/includes/connectDb.php');?>

<?php require('../application/views/includes/inc/archivage_fetch.php');?>
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
        <?php require ('../application/views/includes/topbar-navigation.php');?>
        <?php require ('../application/views/includes/includes/password_modal.php');?> 
        <div class="wrapper" style="margin-bottom: 25px;">
            <div class="container">
                <a href=javascript:history.go(-1)><button class="btn btn-primary m-t-10">Retour</button></a>

                    <!-- Page-Title -->
        <!-- Page-Title -->
                <div class="row m-t-30">
            

            <!-- Modal -->
                    <div id="gestionUtilisateurs" class="modal fade" role="dialog">
                        <div class="modal-dialog">

                    <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Liste des utilisateurs </h4>
                            </div>
                        <div class="modal-body">

                            <table class="table table-striped table-hover">
                                <thead>
                                <tr>
                                    <th>Nom D'utilisateur</th>
                                   
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php


                            $db =  Database::getInstance() ;
                            $req = $db->query("SELECT * FROM users");
                            $resultats =  array() ;
                            while ($rows = $req->fetchObject()){
                                $resultats[] = $rows ;
                            }

                                foreach ($resultats as $key => $value) {
                                    echo "<tr>";
                                    echo "<td>".$value->username."</td>";
                                    
                                    ?>
                                    <td>
                                    <?php if ($value->status==0) {
                                        # code...
                                        ?>
                                        <a href="index.php?page=admin&idUser=<?php echo $value->idUser; ?>&value=1"><button type="button" class="btn btn-danger">Bloquer</button></a>
                                        <a href="index.php?page=delete&id=<?php echo $value->idUser; ?>&table=users"><button type="button" class="btn btn-dark">Supprimer</button></a>
                                        </td>
                                        <?php
                                    }
                                    else {
                                        ?>

                                        <a href="index.php?page=admin&idUser=<?php echo $value->idUser; ?>&value=0"><button type="button" class="btn btn-primary">Débloquer</button></a></td>

                                        <?php
                                    }
                                    echo "</tr>";
                                }

                                ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                        </div>

                    </div>
                </div>
                
                 
            
            

                <div id="gestionServices" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                    <!-- Modal content-->
                        <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Liste des Services </h4>
                        </div>
                        <div class="modal-body">

                            <table class="table table-striped table-hover">
                                <thead>
                                <tr>
                                    <th>Nom Du Service</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php


                            $db =  Database::getInstance() ;
                            $req = $db->query("SELECT * FROM services");
                            $resultats =  array() ;
                            while ($rows = $req->fetchObject()){
                                $resultats[] = $rows ;
                            }

                                foreach ($resultats as $key => $value) {
                                    echo "<tr>";
                                    echo "<td>".$value->nomService."</td>";
                                    ?>
                                    <td>
                                    <?php if ($value->status==0) {
                                        # code...
                                        ?>
                                        <a href="index.php?page=modifServ&id=<?php echo $value->idService ?>"><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modificationServices">Modifier</button></a>
                                        <a href="index.php?page=delete&id=<?php echo $value->idService; ?>&table=services"><button type="button" class="btn btn-dark">Supprimer</button></a>
                                        </td>
                                        <?php
                                    }
                                    else {
                                        ?>

                                        <a href="index.php?page=admin&id=<?php echo $value->idUser; ?>&value=0"><button type="button" class="btn btn-primary">Débloquer</button></a></td>

                                        <?php
                                    }
                                    echo "</tr>";
                                }

                                ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>

                </div>
            </div>

            





            <div class="col-xs-12 col-md-7 col-lg-7 col-xl-7">
                <div class="card-box tilebox-one">
                    <i class="icon-user pull-xs-right text-muted"></i>
                    <h6 class="text-muted text-uppercase m-b-20">Ajout d'un utilisateur</h6>
                    <form action="" method="post">
                        <input type="text" name="username" class="form-control" placeholder="nom d'utilisateur" required="required" title=""><br>
                        <input type="password" name="mdp" placeholder="choisissez un mot de passe" class="form-control" required="required" title=""><br>
                        <label for="mdp" class="col-sm-4">Type d'utilisateur</label>
                        <select name="typeUser">
                            <option value="0">--Selectionner--</option>
                            <option value="1">Administrateur</option>
                            <option value="2">Receptionniste</option>
                            <option value="3">Medecin</option>
                        </select>
                        <br><br><br>
                        <button type="submit" name="ajout" class="btn btn-primary">Ajouter</button>
                        <input type="reset" value="Annuler" id="annuler" class="btn btn-default">
                        <button type="button" class="btn btn-dark " data-toggle="modal" data-target="#gestionUtilisateurs">Gerer les utilisateurs</button>
                    </form>

                </div>

            </div>




                <div class="col-xs-12 col-md-7 col-lg-7 col-xl-5">
                    <div class="card-box tilebox-one">
                        <i class="icon ion-flag pull-xs-right text-muted"></i>
                        <h6 class="text-muted text-uppercase m-b-20">Ajout de services </h6>

                        <form  method="post">
                            <input type="text" name="nomServ" class="form-control" placeholder=" nom du  service" required="required" title=""><br>
                            <br>
                            <button type="submit" name="ajoutServ" class="btn btn-primary">Ajouter</button>
                            <input type="reset" value="Annuler" id="annuler" class="btn btn-default">
                            <button type="button" class="btn btn-dark " data-toggle="modal" data-target="#gestionServices">Gerer les Services</button>
                        </form>


                    </div>
                </div>
                
               

                <div class="row">


        </div>
            </div>


        <div class="row">
            <div class="col-md-12">
                <div class="card-box">
                    <div class="row">
                        <div class="col-xs-12">
                            
                            <p class="text-muted m-b-30 font-13"> </p>

                            <h1> Enregistrement en attente d'archivage  </h1>
                            <?php 
                                $req = $bdd->query("SELECT * FROM analyses WHERE status=1");
                                $donnees = $req->fetchAll();
                            ?>
                            <div class="table-rep-plugin">

                                <div class="table-responsive" data-pattern="priority-columns">

                                    <table id="datatable" class="table table-striped table-bordered" style="width:100%;" width="100%" cellspacing="0">

                                        <thead class="thead-default">

                                            <tr>

                                                <th width="20%" data-priority="1">Nom & Prenoms</th>

                                                <th data-priority="1" width="5%">Age</th>

                                                <th width="15%" data-priority="2">Code Analyse</th>

                                                <th data-priority="6" width="15%">Date du prelevement</th>

                                                <th data-priority="2" width="13%">Type d'analyse</th>

                                                <th data-priority="1" width="40%">Action</th>

                                            </tr>

                                        </thead>
                                        
                                        <tbody>
                                            <?php 
                                                foreach ($donnees as $key => $value) {
                                                echo "<tr>";
                                                echo "<td>".$value->prenomPatient." ".$value->nomPatient."</td>";
                                                echo "<td>".$value->agePatient."</td>";
                                                echo "<td>".$value->codeAna."</td>";
                                                echo "<td>".date('d-m-Y',strtotime($value->datePrelevement))."</td>";
                                                echo "<td style='text-align:center;'>".$value->typeAna."</td>";
                                                echo "<td style='text-align:center;'>";
                                            ?>
                                     <a href="index.php?page=admin&idA=<?php echo $value->idAna;?>&a=2"><button type="button" class="btn btn-primary">Approuver </button></a>
                                    <a href="index.php?page=admin&idA=<?php echo $value->idAna;?>&a=0"><button type="button" class="btn btn-danger">Rejeter </button></a>
                                            </td>
                                            <?php 
                                                echo "</tr>";
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div



    <!-- Right Sidebar -->





    </div> <!-- container -->
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