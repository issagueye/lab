<?php require ('../application/views/includes/inc/lastrec_fetch.php'); ?>

<!DOCTYPE html>
<html lang="en">

<?php include('header.php');?>
<li class="nav-item dropdown notification-list">
    <a class="nav-link waves-effect waves-light right-bar-toggle" href="javascript:void(0);">
        <button class="btn btn-primary waves-effect waves-light btn-sm">Lancer une Rechercher</button>
    </a>
</li>




<div class="wrapper m-t-70">
            <div class="container">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="btn-group pull-right m-t-15">
                            
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>

                        </div>
                        <a href=javascript:history.go(-1)><button class="btn btn-primary">Retour</button></a>
                        <center><h4 class="page-title">Derniers Enregistrements : <?php if ($_GET['table']=='reception') echo 'RECEPTION'; else echo $ana; ?><b>
                                
                                <!-- obligé de mettre du php a ce niveau parce que l'affichage en dépend -->
                            </b></h4>
                            <?php if ($_GET['table'] != 'reception') {
                                # code...
                            ?>
                            <a href="index.php?page=<?php echo $page ?>" target="blank"><button class="btn btn-primary">Ajouter un enregistrement</button></a>
                            <a href="index.php?page=archivesana&table=<?php echo $_GET['table'] ?>"><button class="btn btn-dark">Consulter les archives</button></a>
                            <br><br></center>
                            <?php }  ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">
                            <h4 class="m-t-0 header-title"></h4>
                            <table id="datatable" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th >Nom & Prenom</th>
                                        <th>Age du patient</th>
                                        <th>Code d'analyse</th>
                                        <th>Numero d'examen</th>
                                        <th>Service</th>
                                        <th>Statut</th>
                                        <th>Options</th>

                                    </tr>
                                </thead>
                                
                                <?php include 'remplirTableau.php'; ?>

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
