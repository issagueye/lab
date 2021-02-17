 <?php 
    include 'Includes/connectDb.php'; ?>



<?php require '../application/views/includes/includes/connectDb.php'; ?>

<?php require ('../application/views/includes/inc/chart_fetch.php');?>
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

        <!-- Highcharts -->
        <script src="http://code.highcharts.com/highcharts.js"></script>
        <script src="http://code.highcharts.com/highcharts-3d.js"></script>
        <script src="http://code.highcharts.com/modules/exporting.js"></script>
        <script src="http://code.highcharts.com/modules/offline-exporting.js"></script>
        <!-- <script src="http://code.highcharts.com/modules/export-data.js"></script> -->



    </head>


    <body>

        <?php require ('../application/views/includes/includes/header_bar.php');?>
        <?php require ('../application/views/includes/topbar-navigation.php');?>
        <?php require ('../application/views/includes/includes/password_modal.php');?> 



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->

            
            <div class="wrapper">
                <div class="container">
                    <a href=javascript:history.go(-1)><button class="btn btn-primary">Retour</button></a>
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                           
                            <h4 class="display-3">Statistiques Globales </h4>
                        </div>
                    </div>
                    <form action="index.php" method="get">
                        <div class="form-group">
                                <center>
                                    <label class="page-title">Choisir un intervalle de temps</label>
                                </center>
                                <div>
                                    <div class="input-daterange input-group" id="date-range">
                                        <input type="date" class="form-control" name="date1" placeholder="mm/jj/aaaa" />
                                        <span class="input-group-addon bg-custom b-0">au</span>
                                        <input type="date" class="form-control" name="date2" placeholder="mm/jj/aaaa"/>
                                        <input type="hidden" class="form-control" name="page" value="charts" />
                                    </div>
                                </div>
                                <center>
                                    <button type="submit" class="btn btn-dark m-t-10">Filtrer</button>
                                </center>
                        </div>
                    </form> 

                    <div class="row">
                   
                      <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                            <div class="card-box tilebox-two">
                              <img src="../application/views/assets/images/gallery/01.png" height="64px" width="64px" style="border-radius:5px"  class="pull-right"/>
                                <h3 class="text-muted text-uppercase m-b-15">Anapath</h3>
                                <h2 class="m-b-20" data-plugin="counterup">

    							<?php 
    							
    							$analyse1=0;
    							$analyse2=0;
    							$analyse3=0;
    							$analyse4=0;
                                $analyse5=0;
                                $analyse6=0;
                                $analyse7=0;
    							$analyse8=0;
    							
    							if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo $row["ssb"];$analyse1=$row["ssb"];
        }
    } else {
        echo "0 ";
    }

    							?>
    							</h2>
                             <?php if ($analyse1!="0") {
                                
                             ?> 
 <a href="#modal-details-anapath" style="float: right;padding-bottom: 3px" data-animation="blur" data-plugin="custommodal"
                                                data-overlaySpeed="100" data-overlayColor="#36404a">Voir details</a><?php } ?>
<!-- Modal Anapath -->
                <div id="modal-details-anapath" class="modal-demo">
                    <button type="button" class="close" onclick="Custombox.close();">
                        <span>&times;</span><span class="sr-only">Close</span>
                    </button>
                    <h4 class="custom-modal-title"> Anapath</h4>
                    <div class="custom-modal-text">
                    <div id="container11_a" style="min-width: 310px; max-width: 
                            800px; height: 400px; margin: 0 auto"></div>
                       <script>
              

                      // Age categories
    var categories = [  

            '0-10',
            '10-20',
            '25-30',
            '35-45',
            '45-55',
            '55-70',
            '70-90',
            '90-100'
            ];
    $(document).ready(function () {
        Highcharts.setOptions({
            lang: {
                viewFullscreen: "Voir en plein écran",
                contextButtonTitle: "Afficher les options",
                downloadCSV: "Télécharger au format CSV",
                downloadJPEG: "Télécharger au format JPEG",
                downloadPDF: "Télécharger PDF",
                downloadPNG: "Télécharger au format PNG",
                downloadSVG: "Télécharger Vecteur SVG",
                downloadXLS: "Télécharger XLS",
                printChart: "Imprimer le graphique"
            }
        });
        Highcharts.chart('container11_a', {
            chart: {
                type: 'bar'
            },
            title: {
                text: 'Pyramide des Ages des Patient(e)s'
            },
            subtitle: {
                text: 'Nombre : <?php echo  $analyse1; ?> Patient(e)s '
            },
            xAxis: [{
                categories: categories,
                reversed: false,
                labels: {
                    step: 1
                }
            }, { // mirror axis on right side
                opposite: true,
                reversed: false,
                categories: categories,
                linkedTo: 0,
                labels: {
                    step: 1
                }
            }],
            yAxis: {
                title: {
                    text: null
                },
                labels: {
                    formatter: function () {
                        return Math.abs(this.value) + '';
                    }
                }
            },

            plotOptions: {
                series: {
                    stacking: 'normal'
                }
            },

            tooltip: {
                formatter: function () {
                    return '<b>' + this.series.name + ', age ' + this.point.category + '</b><br/>' +
                        'Population: ' + Highcharts.numberFormat(Math.abs(this.point.y), 0);
                }
            },

            series: [{
                name: 'Homme',
                data: [


                -<?php echo $age_0_10_a;?>, 
                -<?php echo $age_10_20_a;?>, 
                -<?php echo $age_20_30_a;?>, 
                -<?php echo $age_35_45_a;?>, 
                -<?php echo $age_55_70_a;?>,
                -<?php echo $age_70_90_a;?>,
                -<?php echo $age_90_100_a;?>

                ]
            }, {
                name: 'Femme',
                data: [
                 <?php echo $age_0_10f_a;?>, 
                <?php echo $age_10_20f_a;?>, 
                <?php echo $age_20_30f_a;?>, 
                <?php echo $age_35_45f_a;?>, 
                <?php echo $age_55_70f_a;?>,
                <?php echo $age_70_90f_a;?>,
                <?php echo $age_90_100f_a;?>

                ]
            }]
        });
    });



    </script>
   
                    </div>
                </div> 
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-6 col-xl-4">
                            <div class="card-box tilebox-two">
                                <img src="../application/views/assets/images/gallery/04.png" height="64px" width="64px" style="border-radius:14px" class="pull-right"/>
                               <h3 class="text-muted text-uppercase m-b-15">MYELOGRAMME</h3>
                                <h2 class="m-b-20" data-plugin="counterup"><?php 
    							if ($result1->num_rows > 0) {
        // output data of each row
        while($row = $result4->fetch_assoc()) {
            echo $row["ssb"];$analyse2=$row["ssb"];
        }
    } else {
        echo "0 ";
    }

    							?></h2>
                            <?php if ($analyse2!="0") {
                                
                             ?>
 <a href="#modal-details-myelo" style="float: right;padding-bottom: 3px" data-animation="blur" data-plugin="custommodal"
                                                data-overlaySpeed="100" data-overlayColor="#36404a">Voir details</a>
                                                <?php } ?>
<!-- Modal Anapath -->
                <div id="modal-details-myelo" class="modal-demo">
                    <button type="button" class="close" onclick="Custombox.close();">
                        <span>&times;</span><span class="sr-only">Close</span>
                    </button>
                    <h4 class="custom-modal-title"> Myelogramme</h4>
                    <div class="custom-modal-text">
                    <div id="container11_myelo" style="min-width: 310px; max-width: 
                            800px; height: 400px; margin: 0 auto"></div>
                       <script>
              

                      // Age categories
    var categories = [  

            '0-10',
            '10-20',
            '25-30',
            '35-45',
            '45-55',
            '55-70',
            '70-90',
            '90-100'
            ];
    $(document).ready(function () {
        Highcharts.setOptions({
            lang: {
                viewFullscreen: "Voir en plein écran",
                contextButtonTitle: "Afficher les options",
                downloadCSV: "Télécharger au format CSV",
                downloadJPEG: "Télécharger au format JPEG",
                downloadPDF: "Télécharger PDF",
                downloadPNG: "Télécharger au format PNG",
                downloadSVG: "Télécharger Vecteur SVG",
                downloadXLS: "Télécharger XLS",
                printChart: "Imprimer le graphique"
            }
        });
        Highcharts.chart('container11_myelo', {
            chart: {
                type: 'bar'
            },
            title: {
                text: 'Pyramide des Ages des Patient(e)s'
            },
            subtitle: {
                text: 'Nombre : <?php echo  $analyse2; ?> Patient(e)s '
            },
            xAxis: [{
                categories: categories,
                reversed: false,
                labels: {
                    step: 1
                }
            }, { // mirror axis on right side
                opposite: true,
                reversed: false,
                categories: categories,
                linkedTo: 0,
                labels: {
                    step: 1
                }
            }],
            yAxis: {
                title: {
                    text: null
                },
                labels: {
                    formatter: function () {
                        return Math.abs(this.value) + '';
                    }
                }
            },

            plotOptions: {
                series: {
                    stacking: 'normal'
                }
            },

            tooltip: {
                formatter: function () {
                    return '<b>' + this.series.name + ', age ' + this.point.category + '</b><br/>' +
                        'Population: ' + Highcharts.numberFormat(Math.abs(this.point.y), 0);
                }
            },

            series: [{
                name: 'Homme',
                data: [


                -<?php echo $age_0_10_myelo;?>, 
                -<?php echo $age_10_20_myelo;?>, 
                -<?php echo $age_20_30_myelo;?>, 
                -<?php echo $age_35_45_myelo;?>, 
                -<?php echo $age_55_70_myelo;?>,
                -<?php echo $age_70_90_myelo;?>,
                -<?php echo $age_90_100_myelo;?>

                ]
            }, {
                name: 'Femme',
                data: [
                 <?php echo $age_0_10f_myelo;?>, 
                <?php echo $age_10_20f_myelo;?>, 
                <?php echo $age_20_30f_myelo;?>, 
                <?php echo $age_35_45f_myelo;?>, 
                <?php echo $age_55_70f_myelo;?>,
                <?php echo $age_70_90f_myelo;?>,
                <?php echo $age_90_100f_myelo;?>

                ]
            }]
        });
    });



    </script>

                            </div>
                        </div>
                          </div>
                        </div>
                         <div class="col-xs-12 col-md-6 col-lg-6 col-xl-5">
                            <div class="card-box tilebox-two">
                                <img src="../application/views/assets/images/gallery/03.png" height="64px" width="64px" style="border-radius:14px" class="pull-right"/>
                                <h3 class="text-muted text-uppercase m-b-15">FROTTIS VAGINAL</h3>
                                <h2 class="m-b-20" data-plugin="counterup" style=""><?php 
    							if ($result2->num_rows > 0) {
        // output data of each row
        while($row = $result3->fetch_assoc()) {
            echo $row["ssb"];$analyse3=$row["ssb"];
        }
    } else {
        echo "0 ";
    }

    							?></h2>
                             <?php if ($analyse3!="0") {
                                
                             ?>
 <a href="#modal-details-fv" style="float: right;padding-bottom: 3px" data-animation="blur" data-plugin="custommodal"
                                                data-overlaySpeed="100" data-overlayColor="#36404a">Voir details</a>
                                                <?php } ?>
<!-- Modal fv -->
                <div id="modal-details-fv" class="modal-demo">
                    <button type="button" class="close" onclick="Custombox.close();">
                        <span>&times;</span><span class="sr-only">Close</span>
                    </button>
                    <h4 class="custom-modal-title"> FROTTIS VAGINAL</h4>
                    <div class="custom-modal-text">
                    <div id="container11_fv" style="min-width: 310px; max-width: 
                            800px; height: 400px; margin: 0 auto"></div>
                       <script>
              

                      // Age categories
    var categories = [  

            '0-10',
            '10-20',
            '25-30',
            '35-45',
            '45-55',
            '55-70',
            '70-90',
            '90-100'
            ];
    $(document).ready(function () {
        Highcharts.setOptions({
            lang: {
                viewFullscreen: "Voir en plein écran",
                contextButtonTitle: "Afficher les options",
                downloadCSV: "Télécharger au format CSV",
                downloadJPEG: "Télécharger au format JPEG",
                downloadPDF: "Télécharger PDF",
                downloadPNG: "Télécharger au format PNG",
                downloadSVG: "Télécharger Vecteur SVG",
                downloadXLS: "Télécharger XLS",
                printChart: "Imprimer le graphique"
            }
        });
        Highcharts.chart('container11_fv', {
            chart: {
                type: 'bar'
            },
            title: {
                text: 'Pyramide des Ages des Patient(e)s'
            },
            subtitle: {
                text: 'Nombre : <?php echo  $analyse3; ?> Patient(e)s '
            },
            xAxis: [{
                categories: categories,
                reversed: false,
                labels: {
                    step: 1
                }
            }, { // mirror axis on right side
                opposite: true,
                reversed: false,
                categories: categories,
                linkedTo: 0,
                labels: {
                    step: 1
                }
            }],
            yAxis: {
                title: {
                    text: null
                },
                labels: {
                    formatter: function () {
                        return Math.abs(this.value) + '';
                    }
                }
            },

            plotOptions: {
                series: {
                    stacking: 'normal'
                }
            },

            tooltip: {
                formatter: function () {
                    return '<b>' + this.series.name + ', age ' + this.point.category + '</b><br/>' +
                        'Population: ' + Highcharts.numberFormat(Math.abs(this.point.y), 0);
                }
            },

            series: [{
                name: 'Femme',
                data: [
                 <?php echo $age_0_10f_vaginal;?>, 
                <?php echo $age_10_20f_vaginal;?>, 
                <?php echo $age_20_30f_vaginal;?>, 
                <?php echo $age_35_45f_vaginal;?>, 
                <?php echo $age_55_70f_vaginal;?>,
                <?php echo $age_70_90f_vaginal;?>,
                <?php echo $age_90_100f_vaginal;?>

                ]
            }]
        });
    });



    </script>


                            </div>
                        </div>  </div>
                        </div>
                         <div class="col-xs-12 col-md-6 col-lg-6 col-xl-4">
                            <div class="card-box tilebox-two">
                               <img src="../application/views/assets/images/gallery/02.png" height="64px" width="64px" style="border-radius:14px" class="pull-right"/>
                                <h3 class="text-muted text-uppercase m-b-15">FROTTIS MILIEU LIQUIDE</h3>
                                <h2 class="m-b-20" data-plugin="counterup"><?php 
    							if ($result3->num_rows > 0) {
        // output data of each row
        while($row = $result2->fetch_assoc()) {
            echo $row["ssb"];$analyse4=$row["ssb"];
        }
    } else {
        echo "0 ";
    }

    							?></h2>
                                
<?php if ($analyse4!="0") {
                                
                             ?>
 <a href="#modal-details-fml" style="float: right;padding-bottom: 3px" data-animation="blur" data-plugin="custommodal"
                                                data-overlaySpeed="100" data-overlayColor="#36404a">Voir details</a><?php } ?>
<!-- Modal fv -->
                <div id="modal-details-fml" class="modal-demo">
                    <button type="button" class="close" onclick="Custombox.close();">
                        <span>&times;</span><span class="sr-only">Close</span>
                    </button>
                    <h4 class="custom-modal-title"> FROTTIS Milieu Liquide</h4>
                    <div class="custom-modal-text">
                    <div id="container11_fml" style="min-width: 310px; max-width: 
                            800px; height: 400px; margin: 0 auto"></div>
                       <script>
              

                      // Age categories
    var categories = [  

            '0-10',
            '10-20',
            '25-30',
            '35-45',
            '45-55',
            '55-70',
            '70-90',
            '90-100'
            ];
    $(document).ready(function () {
        Highcharts.setOptions({
            lang: {
                viewFullscreen: "Voir en plein écran",
                contextButtonTitle: "Afficher les options",
                downloadCSV: "Télécharger au format CSV",
                downloadJPEG: "Télécharger au format JPEG",
                downloadPDF: "Télécharger PDF",
                downloadPNG: "Télécharger au format PNG",
                downloadSVG: "Télécharger Vecteur SVG",
                downloadXLS: "Télécharger XLS",
                printChart: "Imprimer le graphique"
            }
        });
        Highcharts.chart('container11_fml', {
            chart: {
                type: 'bar'
            },
            title: {
                text: 'Pyramide des Ages des Patient(e)s'
            },
            subtitle: {
                text: 'Nombre : <?php echo  $analyse4; ?> Patient(e)s '
            },
            xAxis: [{
                categories: categories,
                reversed: false,
                labels: {
                    step: 1
                }
            }, { // mirror axis on right side
                opposite: true,
                reversed: false,
                categories: categories,
                linkedTo: 0,
                labels: {
                    step: 1
                }
            }],
            yAxis: {
                title: {
                    text: null
                },
                labels: {
                    formatter: function () {
                        return Math.abs(this.value) + '';
                    }
                }
            },

            plotOptions: {
                series: {
                    stacking: 'normal'
                }
            },

            tooltip: {
                formatter: function () {
                    return '<b>' + this.series.name + ', age ' + this.point.category + '</b><br/>' +
                        'Population: ' + Highcharts.numberFormat(Math.abs(this.point.y), 0);
                }
            },

            series: [{
                name: 'Femme',
                data: [
                 <?php echo $age_0_10f_fml;?>, 
                <?php echo $age_10_20f_fml;?>, 
                <?php echo $age_20_30f_fml;?>, 
                <?php echo $age_35_45f_fml;?>, 
                <?php echo $age_55_70f_fml;?>,
                <?php echo $age_70_90f_fml;?>,
                <?php echo $age_90_100f_fml;?>

                ]
            }]
        });
    });



    </script>

                            </div>
                        </div>
  </div>
                        </div>

                         <div class="col-xs-12 col-md-6 col-lg-6 col-xl-4" style="
        margin: 0 auto;">
                            <div class="card-box tilebox-two">
                               <img src="../application/views/assets/images/gallery/05.png" height="64px" width="64px"  style="border-radius:14px" class="pull-right"/>
                                <h3 class="text-muted text-uppercase m-b-15">Spermogramme</h3>
                                <h2 class="m-b-20" data-plugin="counterup"><?php 
    							if ($result5->num_rows > 0) {
        // output data of each row
        while($row = $result1->fetch_assoc()) {
            echo $row["ssb"];$analyse8=$row["ssb"];
        }
    } else {
        echo "0";
    }

    						
    							?></h2>
                           <?php if ($analyse8!="0") {
                                
                             ?>
 <a href="#modal-details-spermo" style="float: right;padding-bottom: 3px" data-animation="blur" data-plugin="custommodal"
                                                data-overlaySpeed="100" data-overlayColor="#36404a">Voir details</a><?php } ?>
<!-- Modal fv -->
                <div id="modal-details-spermo" class="modal-demo">
                    <button type="button" class="close" onclick="Custombox.close();">
                        <span>&times;</span><span class="sr-only">Close</span>
                    </button>
                    <h4 class="custom-modal-title">Spermogramme</h4>
                    <div class="custom-modal-text">
                    <div id="container11_spermo" style="min-width: 310px; max-width: 
                            800px; height: 400px; margin: 0 auto"></div>
                       <script>
              

                      // Age categories
    var categories = [  

            '0-10',
            '10-20',
            '25-30',
            '35-45',
            '45-55',
            '55-70',
            '70-90',
            '90-100'
            ];
    $(document).ready(function () {
        Highcharts.setOptions({
            lang: {
                viewFullscreen: "Voir en plein écran",
                contextButtonTitle: "Afficher les options",
                downloadCSV: "Télécharger au format CSV",
                downloadJPEG: "Télécharger au format JPEG",
                downloadPDF: "Télécharger PDF",
                downloadPNG: "Télécharger au format PNG",
                downloadSVG: "Télécharger Vecteur SVG",
                downloadXLS: "Télécharger XLS",
                printChart: "Imprimer le graphique"
            }
        });
        Highcharts.chart('container11_spermo', {
            chart: {
                type: 'bar'
            },
            title: {
                text: 'Pyramide des Ages des Patient(e)s'
            },
            subtitle: {
                text: 'Nombre : <?php echo  $analyse8; ?> Patient(e)s '
            },
            xAxis: [{
                categories: categories,
                reversed: false,
                labels: {
                    step: 1
                }
            }, { // mirror axis on right side
                opposite: true,
                reversed: false,
                categories: categories,
                linkedTo: 0,
                labels: {
                    step: 1
                }
            }],
            yAxis: {
                title: {
                    text: null
                },
                labels: {
                    formatter: function () {
                        return Math.abs(this.value) + '';
                    }
                }
            },

            plotOptions: {
                series: {
                    stacking: 'normal'
                }
            },

            tooltip: {
                formatter: function () {
                    return '<b>' + this.series.name + ', age ' + this.point.category + '</b><br/>' +
                        'Population: ' + Highcharts.numberFormat(Math.abs(this.point.y), 0);
                }
            },

            series: [{
                name: 'Homme',
                data: [


                -<?php echo $age_0_10_coital;?>, 
                -<?php echo $age_10_20_coital;?>, 
                -<?php echo $age_20_30_coital;?>, 
                -<?php echo $age_35_45_coital;?>, 
                -<?php echo $age_55_70_coital;?>,
                -<?php echo $age_70_90_coital;?>,
                -<?php echo $age_90_100_coital;?>

                ]
            }]
        });
    });



    </script>
                        </div>
  </div>
                        </div>
                        </div>
  <div class="col-xs-12 col-md-6 col-lg-6 col-xl-4">
                            <div class="card-box tilebox-two">
                               <img src="../application/views/assets/images/gallery/06.png" height="64px" width="64px" style="border-radius:14px" class="pull-right"/>
                               <h3 class="text-muted text-uppercase m-b-15">Test Post Coital</h3>
                                <h2 class="m-b-20" data-plugin="counterup"><?php 
                                if ($result1->num_rows > 0) {
        // output data of each row
        while($row = $result5->fetch_assoc()) {
            echo $row["ssb"];$analyse7=$row["ssb"];
        }
    } else {
        echo "0 ";
    }

                                ?></h2>
                            <?php if ($analyse7!="0") {
                                
                             ?>
 <a href="#modal-details-Coital" style="float: right;padding-bottom: 3px" data-animation="blur" data-plugin="custommodal"
                                                data-overlaySpeed="100" data-overlayColor="#36404a">Voir details</a><?php } ?>
<!-- Modal Anapath -->
                <div id="modal-details-Coital" class="modal-demo">
                    <button type="button" class="close" onclick="Custombox.close();">
                        <span>&times;</span><span class="sr-only">Close</span>
                    </button>
                    <h4 class="custom-modal-title"> Coital</h4>
                    <div class="custom-modal-text">
                    <div id="container11_Coital" style="min-width: 310px; max-width: 
                            800px; height: 400px; margin: 0 auto"></div>
                       <script>
              

                      // Age categories
    var categories = [  

            '0-10',
            '10-20',
            '25-30',
            '35-45',
            '45-55',
            '55-70',
            '70-90',
            '90-100'
            ];
    $(document).ready(function () {
        Highcharts.setOptions({
            lang: {
                viewFullscreen: "Voir en plein écran",
                contextButtonTitle: "Afficher les options",
                downloadCSV: "Télécharger au format CSV",
                downloadJPEG: "Télécharger au format JPEG",
                downloadPDF: "Télécharger PDF",
                downloadPNG: "Télécharger au format PNG",
                downloadSVG: "Télécharger Vecteur SVG",
                downloadXLS: "Télécharger XLS",
                printChart: "Imprimer le graphique"
            }
        });
        Highcharts.chart('container11_Coital', {
            chart: {
                type: 'bar'
            },
            title: {
                text: 'Pyramide des Ages des Patient(e)s'
            },
            subtitle: {
                text: 'Nombre : <?php echo  $analyse7; ?> Patient(e)s '
            },
            xAxis: [{
                categories: categories,
                reversed: false,
                labels: {
                    step: 1
                }
            }, { // mirror axis on right side
                opposite: true,
                reversed: false,
                categories: categories,
                linkedTo: 0,
                labels: {
                    step: 1
                }
            }],
            yAxis: {
                title: {
                    text: null
                },
                labels: {
                    formatter: function () {
                        return Math.abs(this.value) + '';
                    }
                }
            },

            plotOptions: {
                series: {
                    stacking: 'normal'
                }
            },

            tooltip: {
                formatter: function () {
                    return '<b>' + this.series.name + ', age ' + this.point.category + '</b><br/>' +
                        'Population: ' + Highcharts.numberFormat(Math.abs(this.point.y), 0);
                }
            },

            series: [{
                name: 'Femme',
                data: [
                 <?php echo $age_0_10f_coital;?>, 
                <?php echo $age_10_20f_coital;?>, 
                <?php echo $age_20_30f_coital;?>, 
                <?php echo $age_35_45f_coital;?>, 
                <?php echo $age_55_70f_coital;?>,
                <?php echo $age_70_90f_coital;?>,
                <?php echo $age_90_100f_coital;?>

                ]
            }]
        });
    });



    </script>

                            </div>
                        </div>  </div>
      </div>
                        </div>
                        <div class="wrapper">
                          
                                <div class="col-md-12" ><div id="container88" style="width:100%;margin-top: 5px"></div>
    					<script>
                            
                                Highcharts.setOptions({
                                    lang: {
                                        viewFullscreen: "Voir en plein écran",
                                        contextButtonTitle: "Afficher les options",
                                        downloadCSV: "Télécharger au format CSV",
                                        downloadJPEG: "Télécharger au format JPEG",
                                        downloadPDF: "Télécharger PDF",
                                        downloadPNG: "Télécharger au format PNG",
                                        downloadSVG: "Télécharger Vecteur SVG",
                                        downloadXLS: "Télécharger XLS",
                                        printChart: "Imprimer le graphique"
                                    }
                                });
                        	Highcharts.chart('container88', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Total des Types d\'Analyses'
        },
        subtitle: {
            text: ''
        },
        xAxis: {
            type: 'category',
            labels: {
                rotation: -45,
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Nombres'
            }
        },
        legend: {
            enabled: false
        },
        tooltip: {
            pointFormat: 'Nombre : <b>{point.y:.1f} </b>'
        },
        series: [{
            name: 'Population',
            data: [
                   <?php foreach ($tab_result0 as $tbr){


            echo " ['".$tbr["nomenclature"]."',".$tbr["nb"]."],";
           }
            ?>
                
                
            ],
            dataLabels: {
                enabled: true,
                rotation: -90,
                color: '#FFFFFF',
                align: 'right',
                format: '{point.y:.1f}', // one decimal
                y: 10, // 10 pixels down from the top
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        }]
    });</script>

    						</div>
</div>

                                 <div class="col-md-12">

    							<div id="container79" style="min-width: 100%; margin: 2px 0px">
    							</div>
                                
    							<script>
    							$(document).ready(function () {

        // Build the chart
        Highcharts.setOptions({
            lang: {
                viewFullscreen: "Voir en plein écran",
                contextButtonTitle: "Afficher les options",
                downloadCSV: "Télécharger au format CSV",
                downloadJPEG: "Télécharger au format JPEG",
                downloadPDF: "Télécharger PDF",
                downloadPNG: "Télécharger au format PNG",
                downloadSVG: "Télécharger Vecteur SVG",
                downloadXLS: "Télécharger XLS",
                printChart: "Imprimer le graphique"
            }
        });
        Highcharts.chart('container79', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'TYPES D\'ANALYSES  <br><h8 style="font-size:15px;margin-top:10px">Nombre Total : <?php echo $analyse0 ?> analyses</h8>'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false
                    },
                    showInLegend: true
                }
            },
            series: [{
                name: 'Pourcentage',
                colorByPoint: true,
                data: [
           <?php foreach ($tab_result as $tbr){

            echo "{name:'".$tbr["typeAna"]." : ".$tbr["nb"]."', y: ".$tbr["nb"]*100/$analyse0."},";
           }
            ?>

                ]
            }]
        });
    });
    							</script>
                                </div>
    							
    							  
    						
    						<div class="col-md-12" style="margin-top:10px">
    						<div id="container11" style="min-width: 100%; "></div>

                              <div id="container_Sexe" style="margin-top:10px"></div>
    <script>
              

                      // Age categories
    var categories = [  

            '0-10',
            '10-20',
            '25-30',
            '35-45',
            '45-55',
            '55-70',
            '70-90',
            '90-100'
            ];
    $(document).ready(function () {
        Highcharts.setOptions({
            lang: {
                viewFullscreen: "Voir en plein écran",
                contextButtonTitle: "Afficher les options",
                downloadCSV: "Télécharger au format CSV",
                downloadJPEG: "Télécharger au format JPEG",
                downloadPDF: "Télécharger PDF",
                downloadPNG: "Télécharger au format PNG",
                downloadSVG: "Télécharger Vecteur SVG",
                downloadXLS: "Télécharger XLS",
                printChart: "Imprimer le graphique"
            }
        });
        Highcharts.chart('container11', {
            chart: {
                type: 'bar'
            },
            title: {
                text: 'Pyramide des Ages des Patient(e)s'
            },
            subtitle: {
                text: 'Nombre : <?php echo  $nb_patients; ?> Patient(e)s '
            },
            xAxis: [{
                categories: categories,
                reversed: false,
                labels: {
                    step: 1
                }
            }, { // mirror axis on right side
                opposite: true,
                reversed: false,
                categories: categories,
                linkedTo: 0,
                labels: {
                    step: 1
                }
            }],
            yAxis: {
                title: {
                    text: null
                },
                labels: {
                    formatter: function () {
                        return Math.abs(this.value) + '';
                    }
                }
            },

            plotOptions: {
                series: {
                    stacking: 'normal'
                }
            },

            tooltip: {
                formatter: function () {
                    return '<b>' + this.series.name + ', age ' + this.point.category + '</b><br/>' +
                        'Population: ' + Highcharts.numberFormat(Math.abs(this.point.y), 0);
                }
            },

            series: [{
                name: 'Homme',
                data: [


                -<?php echo $age_0_10;?>, 
                -<?php echo $age_10_20;?>, 
                -<?php echo $age_20_30;?>, 
                -<?php echo $age_35_45;?>, 
                -<?php echo $age_55_70;?>,
                -<?php echo $age_70_90;?>,
                -<?php echo $age_90_100;?>

                ]
            }, {
                name: 'Femme',
                data: [
                 <?php echo $age_0_10f;?>, 
                <?php echo $age_10_20f;?>, 
                <?php echo $age_20_30f;?>, 
                <?php echo $age_35_45f;?>, 
                <?php echo $age_55_70f;?>,
                <?php echo $age_70_90f;?>,
                <?php echo $age_90_100f;?>

                ]
            }]
        });
    });



    </script>
                                </div>
                            <div class="col-md-12">
                            <div id="container777" style="margin-top:10px;width:100%;height:500px"></div>
    						<div id="container88889" style="margin-top:10px"></div>


                          

                            <script>
                                Highcharts.setOptions({
            lang: {
                viewFullscreen: "Voir en plein écran",
                contextButtonTitle: "Afficher les options",
                downloadCSV: "Télécharger au format CSV",
                downloadJPEG: "Télécharger au format JPEG",
                downloadPDF: "Télécharger PDF",
                downloadPNG: "Télécharger au format PNG",
                downloadSVG: "Télécharger Vecteur SVG",
                downloadXLS: "Télécharger XLS",
                printChart: "Imprimer le graphique"
            }
        });
                                Highcharts.chart('container_Sexe', {
    chart: {
        type: 'scatter',
        zoomType: 'xy',
            },
    title: {
        text: 'Diagramme des Patient(e)s par Age & Sexe'
    },
    subtitle: {
        text: ''
    },
    xAxis: {
        title: {
            enabled: true,
            text: 'Nombre'
        },
        startOnTick: true,
        endOnTick: true,
        showLastLabel: true
    },
    yAxis: {
        title: {
            text: 'Age (ans)'
        }
    },
    legend: {
        layout: 'Nombre',
        align: 'left',
        verticalAlign: 'top',
        x: 100,
        y: 70,
        floating: false,
        backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF',
        borderWidth: 1
    },
    plotOptions: {
        scatter: {
            marker: {
                radius: 5,
                states: {
                    hover: {
                        enabled: true,
                        lineColor: 'rgb(100,100,100)'
                    }
                }
            },
            states: {
                hover: {
                    marker: {
                        enabled: false
                    }
                }
            },
            tooltip: {
                headerFormat: '<b>{series.name}</b><br>',
                pointFormat: 'Nombre : {point.x} , Age :{point.y} '
            }
        }
    },
    series: [{
        name: 'Femme',
        color: 'rgba(223, 83, 83, .5)',
        data: [

         <?php foreach ($tab_result5_f as $tbr){


                       echo " [".$tbr["nombre"].",".$tbr["agePatient"]."],";
           }
            ?>
                 ]

    }, {
        name: 'Homme',
        color: 'rgba(119, 152, 191, .5)',
        data: [

         <?php foreach ($tab_result5_h as $tbr){


            echo " [".$tbr["nombre"].",".$tbr["agePatient"]."],";
           }
            ?>
                 ]
    }]
});
                            </script>
    						<script>
        Highcharts.setOptions({
            lang: {
                viewFullscreen: "Voir en plein écran",
                contextButtonTitle: "Afficher les options",
                downloadCSV: "Télécharger au format CSV",
                downloadJPEG: "Télécharger au format JPEG",
                downloadPDF: "Télécharger PDF",
                downloadPNG: "Télécharger au format PNG",
                downloadSVG: "Télécharger Vecteur SVG",
                downloadXLS: "Télécharger XLS",
                printChart: "Imprimer le graphique"
            }
        });
    Highcharts.chart('container777', {
        chart: {
            type: 'pie',
            options3d: {
                enabled: true,
                alpha: 45
            }
        },
        title: {
            text: 'SERVICES'
        },
        subtitle: {
            text: ''
        },
        plotOptions: {
            pie: {
                innerSize: 100,
                depth: 45
            }
        },
        series: [{
            name: 'Nombre ',
            data: [
                <?php foreach ($tab_result4 as $tbr){


            echo " ['".$tbr["service"]."',".$tbr["nb"]."],";
           }
            ?>
            ]
        }]
    });


var chart = Highcharts.chart('container88889', {

    title: {
        text: 'Partition des Analyses/Sexe'
    },

    subtitle: {
        text: ''
    },

    xAxis: {
        categories: ['Homme', 'Femme']
    },

    series: [{
        type: 'column',
        colorByPoint: true,
        data: [<?php echo      $nbr_h; ?> , <?php echo      $nbr_f; ?>],
        showInLegend: false
    }]

});
chart.setOptions({
            lang: {
                viewFullscreen: "Voir en plein écran",
                contextButtonTitle: "Afficher les options",
                downloadCSV: "Télécharger au format CSV",
                downloadJPEG: "Télécharger au format JPEG",
                downloadPDF: "Télécharger PDF",
                downloadPNG: "Télécharger au format PNG",
                downloadSVG: "Télécharger Vecteur SVG",
                downloadXLS: "Télécharger XLS",
                printChart: "Imprimer le graphique"
            }
        });


$('#plain').click(function () {
    chart.update({
        chart: {
            inverted: false,
            polar: false
        },
        subtitle: {
            text: 'Partition des Ages'
        }
    });
});

$('#inverted').click(function () {
    chart.update({
        chart: {
            inverted: true,
            polar: false
        },
        subtitle: {
            text: 'Inverted'
        }
    });
});

$('#polar').click(function () {
    chart.update({
        chart: {
            inverted: false,
            polar: true
        },
        subtitle: {
            text: 'Polar'
        }
    });
});
    </script>
    						</div>
                                <!-- end row -->

                        </div><!-- end col-->

                    </div>
                    <!-- end row -->



                    <!-- Footer -->
                    <footer class="footer text-right">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12">
                                    2017 © Pyramide IT.
                                </div>
                            </div>
                        </div>
                    </footer>
                    <!-- End Footer -->


                </div> <!-- container -->




                <!-- Right Sidebar -->
                <div class="side-bar right-bar">
                    <div class="nicescroll">
                        <ul class="nav nav-tabs text-xs-center">
                            <li class="nav-item">
                                <a href="#home-2"  class="nav-link active" data-toggle="tab" aria-expanded="false">
                                    Activity
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#messages-2" class="nav-link" data-toggle="tab" aria-expanded="true">
                                    Settings
                                </a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="home-2">
                                <div class="timeline-2">
                                    <div class="time-item">
                                        <div class="item-info">
                                            <small class="text-muted">5 minutes ago</small>
                                            <p><strong><a href="#" class="text-info">John Doe</a></strong> Uploaded a photo <strong>"DSC000586.jpg"</strong></p>
                                        </div>
                                    </div>

                                    <div class="time-item">
                                        <div class="item-info">
                                            <small class="text-muted">30 minutes ago</small>
                                            <p><a href="#" class="text-info">Lorem</a> commented your post.</p>
                                            <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                                        </div>
                                    </div>

                                    <div class="time-item">
                                        <div class="item-info">
                                            <small class="text-muted">59 minutes ago</small>
                                            <p><a href="#" class="text-info">Jessi</a> attended a meeting with<a href="#" class="text-success">John Doe</a>.</p>
                                            <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                                        </div>
                                    </div>

                                    <div class="time-item">
                                        <div class="item-info">
                                            <small class="text-muted">1 hour ago</small>
                                            <p><strong><a href="#" class="text-info">John Doe</a></strong>Uploaded 2 new photos</p>
                                        </div>
                                    </div>

                                    <div class="time-item">
                                        <div class="item-info">
                                            <small class="text-muted">3 hours ago</small>
                                            <p><a href="#" class="text-info">Lorem</a> commented your post.</p>
                                            <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                                        </div>
                                    </div>

                                    <div class="time-item">
                                        <div class="item-info">
                                            <small class="text-muted">5 hours ago</small>
                                            <p><a href="#" class="text-info">Jessi</a> attended a meeting with<a href="#" class="text-success">John Doe</a>.</p>
                                            <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="messages-2">

                                <div class="row m-t-20">
                                    <div class="col-xs-8">
                                        <h5 class="m-0">Notifications</h5>
                                        <p class="text-muted m-b-0"><small>Do you need them?</small></p>
                                    </div>
                                    <div class="col-xs-4 text-right">
                                        <input type="checkbox" checked data-plugin="switchery" data-color="#64b0f2" data-size="small"/>
                                    </div>
                                </div>

                                <div class="row m-t-20">
                                    <div class="col-xs-8">
                                        <h5 class="m-0">API Access</h5>
                                        <p class="m-b-0 text-muted"><small>Enable/Disable access</small></p>
                                    </div>
                                    <div class="col-xs-4 text-right">
                                        <input type="checkbox" checked data-plugin="switchery" data-color="#64b0f2" data-size="small"/>
                                    </div>
                                </div>

                                <div class="row m-t-20">
                                    <div class="col-xs-8">
                                        <h5 class="m-0">Auto Updates</h5>
                                        <p class="m-b-0 text-muted"><small>Keep up to date</small></p>
                                    </div>
                                    <div class="col-xs-4 text-right">
                                        <input type="checkbox" checked data-plugin="switchery" data-color="#64b0f2" data-size="small"/>
                                    </div>
                                </div>

                                <div class="row m-t-20">
                                    <div class="col-xs-8">
                                        <h5 class="m-0">Online Status</h5>
                                        <p class="m-b-0 text-muted"><small>Show your status to all</small></p>
                                    </div>
                                    <div class="col-xs-4 text-right">
                                        <input type="checkbox" checked data-plugin="switchery" data-color="#64b0f2" data-size="small"/>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div> <!-- end nicescroll -->
                </div>
                <!-- /Right-bar -->



            </div> <!-- End wrapper -->




            

        </body>
    <?php $conn->close();?>
    </html>
    <script>
                var resizefunc = [];
            </script>
    <!-- App js -->
            <script src="../application/views/assets/js/jquery.core.js"></script>
            <script src="../application/views/assets/js/jquery.app.js"></script>
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

           
            