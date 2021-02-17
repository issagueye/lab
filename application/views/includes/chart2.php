<?php 
include 'Includes/connectDb.php'; ?>

 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "anapath2_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



$age_0_10=0;
$age_10_20=0;
$age_20_25=0;
$age_25_35=0;
$age_40_50=0;
$age_55_65=0;
$age_70_80=0;
$age_90=0;
$age_100=0;
$and =" ";


if (isset($_GET['date1']) and isset($_GET['date2']) )
{
$date1=addslashes($_GET['date1']);
$date2=addslashes($_GET['date2']);

$where="WHERE datePrelevement BETWEEN '".$date1."' AND '".$date2."' ";
$and = "AND  ";
}


else $where="where";

$sql = "SELECT count(idAna) as ssb  FROM analyses ".$where."  ".$and." typeAna='anapath'";
$result = $conn->query($sql);

$sql1 = "SELECT count(idAna) as ssb  FROM analyses  ".$where." ".$and." typeAna='spermo'";
$result1 = $conn->query($sql1);

$sql2 = "SELECT count(idAna) as ssb  FROM analyses ".$where." ".$and." typeAna='frottismilieuliquide'";
$result2 = $conn->query($sql2);
$sql3 = "SELECT count(idAna) as ssb  FROM analyses ".$where." ".$and." typeAna='frottisvaginal'";
$result3 = $conn->query($sql3);
$sql4 = "SELECT count(idAna) as ssb  FROM analyses ".$where." ".$and." typeAna='myelo'";
$result4 = $conn->query($sql4);

if (isset($_GET['date1']) and isset($_GET['date2']) )
{ 




$sql00 = "SELECT count(agePatient) as ssb  FROM analyses ".$where." ".$and."  agePatient BETWEEN  0 AND 10 and sexe='homme'";
$result00= $conn->query($sql00);

if ($result00->num_rows > 0) {
    // output data of each row
    while($row = $result00->fetch_assoc()) {
        $age_0_10= $row["ssb"];
    }
} 


$sql00 = "SELECT count(agePatient) as ssb  FROM analyses ".$where." ".$and."  agePatient BETWEEN  0 AND 10 and sexe='femme'";
$result00= $conn->query($sql00);

if ($result00->num_rows > 0) {
    // output data of each row
    while($row = $result00->fetch_assoc()) {
        $age_0_10f= $row["ssb"];
    }
} 


//-----------------------------------------
echo $sql00 = "SELECT count(agePatient) as ssb  FROM analyses ".$where." ".$and."  agePatient BETWEEN  25 AND 35 and sexe='homme'";
$result00= $conn->query($sql00);

if ($result00->num_rows > 0) {
    // output data of each row
    while($row = $result00->fetch_assoc()) {
        $age_25_35= $row["ssb"];
    }
} 







echo $sql00 = "SELECT count(agePatient) as ssb  FROM analyses ".$where." ".$and."  agePatient BETWEEN  25 AND 35 and sexe='femme'";
$result00= $conn->query($sql00);

if ($result00->num_rows > 0) {
    // output data of each row
    while($row = $result00->fetch_assoc()) {
        $age_25_35f= $row["ssb"];
    }
} 

 
//-----------------------------------------

$sql00 = "SELECT count(agePatient) as ssb  FROM analyses ".$where." ".$and."  agePatient BETWEEN  40 AND 50 and sexe='homme'";
$result00= $conn->query($sql00);

if ($result00->num_rows > 0) {
    // output data of each row
    while($row = $result00->fetch_assoc()) {
       $age_40_50= $row["ssb"];
    }
} 





//--------------------------------------------------------------------------
$sql00 = "SELECT count(agePatient) as ssb  FROM analyses ".$where." ".$and."  agePatient BETWEEN  40 AND 50 and sexe='femme'";
$result00= $conn->query($sql00);

if ($result00->num_rows > 0) {
    // output data of each row
    while($row = $result00->fetch_assoc()) {
       $age_40_50f= $row["ssb"];
    }
} 

}


?> 



       <?php include('header_start.php');?>

        <?php include('header_end.php');?>
        <?php require 'topbar-navigation.php'; ?>
    
    </div>




        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        
        <div class="wrapper">
            <div class="container">
                <a href=javascript:history.go(-1)><button class="btn btn-primary">Retour</button></a>
                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                       
                        <h4 class="page-title">Statistiques Globales </h4>
                    </div>
                </div>
    

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
                            

                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                        <div class="card-box tilebox-two">
                           <h3 class="text-muted text-uppercase m-b-15">MYELOGRAMME</h3>
                            <h2 class="m-b-20" data-plugin="counterup"><?php 
							if ($result1->num_rows > 0) {
    // output data of each row
    while($row = $result1->fetch_assoc()) {
        echo $row["ssb"];$analyse2=$row["ssb"];
    }
} else {
    echo "0 ";
}

							?></h2>
                        

                        </div>
                    </div>
                    
                     <div class="col-xs-12 col-md-6 col-lg-6 col-xl-6">
                        <div class="card-box tilebox-two">
                            <img src="../application/views/assets/images/gallery/03.png" height="64px" width="64px" style="border-radius:14px" class="pull-right"/>
                            <h3 class="text-muted text-uppercase m-b-15">FROTTIS VAGINAL</h3>
                            <h2 class="m-b-20" data-plugin="counterup" style=""><?php 
							if ($result2->num_rows > 0) {
    // output data of each row
    while($row = $result2->fetch_assoc()) {
        echo $row["ssb"];$analyse3=$row["ssb"];
    }
} else {
    echo "0 ";
}

							?></h2>
                            

                        </div>
                    </div>
                     <div class="col-xs-12 col-md-6 col-lg-6 col-xl-6">
                        <div class="card-box tilebox-two">
                           <img src="../application/views/assets/images/gallery/04.png" height="64px" width="64px" style="border-radius:14px" class="pull-right"/>
                            <h3 class="text-muted text-uppercase m-b-15">FROTTIS MILIEU LIQUIDE</h3>
                            <h2 class="m-b-20" data-plugin="counterup"><?php 
							if ($result3->num_rows > 0) {
    // output data of each row
    while($row = $result3->fetch_assoc()) {
        echo $row["ssb"];$analyse4=$row["ssb"];
    }
} else {
    echo "0 ";
}

							?></h2>
                            

                        </div>
                    </div>


                     <div class="col-xs-12 col-md-6 col-lg-6 col-xl-6" style="
    margin: 0 auto;">
                        <div class="card-box tilebox-two">
                           <img src="../application/views/assets/images/gallery/05.png" height="64px" width="64px"  style="border-radius:14px" class="pull-right"/>
                            <h3 class="text-muted text-uppercase m-b-15">SPERMOGRAMME</h3>
                            <h2 class="m-b-20" data-plugin="counterup"><?php 
							if ($result4->num_rows > 0) {
    // output data of each row
    while($row = $result4->fetch_assoc()) {
        echo $row["ssb"];$analyse5=$row["ssb"];
    }
} else {
    echo "0";
}

$analyse0=$analyse1;
						$analyse0+=	$analyse1;
						$analyse0+=	$analyse2;
						$analyse0+=	$analyse3;
						$analyse0+=	$analyse4;
						$analyse0+=	$analyse5;
						
							?></h2>
                           

                        </div>
                    </div>


                    <div class="wrapper">
                      
                            <div class="col-md-8" ><div id="container88"></div>
					<script>	Highcharts.chart('container88', {
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
            ['50', <?php echo $analyse1;?>],
            ['55', <?php echo $analyse2;?>],
            ['100', <?php echo $analyse3;?>],
            ['120', <?php echo $analyse4;?>],
            ['130', <?php echo $analyse5;?>],
            ['200', 0],
            ['300', 0],
            ['500', 0],
            
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

                             <div class="col-md-4">

							<div id="container79" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto">
							</div>
                            
							<script>
							$(document).ready(function () {

    // Build the chart
    Highcharts.chart('container79', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'TYPES D\'ANALYSES'
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
            name: 'Brands',
            colorByPoint: true,
            data: [{
                name: 'Anapath',
                y: <?php echo $analyse1*100/$analyse0;?>
            }, {
                name: 'MYELOGRAMME',
                y:  <?php echo $analyse2*100/$analyse0;?>,
                sliced: true,
                selected: true
            }, {
                name: 'MYELOGRAMME',
                y:  <?php echo $analyse3*100/$analyse0;?>
            }, {
                name: 'MYELOGRAMME',
                y:  <?php echo $analyse4*100/$analyse0;?>
            }, {
                name: 'SPERMOGRAMME',
                y:  <?php echo $analyse5*100/$analyse0;?>
            }]
        }]
    });
});
							</script>
                            </div>
							
							  
						
						<div class="col-md-8" style="margin-top:10px">
						<div id="container11" style="min-width: 310px; max-width: 
						800px; height: 400px; margin: 0 auto"></div>
<script>
          

                  // Age categories
var categories = [  '25-35',
        '40-50'
        ];
$(document).ready(function () {
    Highcharts.chart('container11', {
        chart: {
            type: 'bar'
        },
        title: {
            text: 'Pyramide des Ages des Patients'
        },
        subtitle: {
            text: 'Date du 01/12/2016 au 04/04/2017'
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
                    return Math.abs(this.value) + '%';
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
            name: 'Hommes',
            data: [-<?php echo $age_25_35;?>, -<?php echo $age_40_50;?>]
        }, {
            name: 'Femmes',
            data: [-<?php echo $age_25_35f;?>, -<?php echo $age_40_50f;?>]
        }]
    });
});



</script>
                            </div>
                        <div class="col-md-4">
						<div id="container777" style="margin-top:10px"></div>
						<script>Highcharts.chart('container777', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: 0,
        plotShadow: false
    },
    title: {
        text: 'SERVICES',
        align: 'center',
        verticalAlign: 'middle',
        y: 60
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            dataLabels: {
                enabled: true,
                distance: -50,
                style: {
                    fontWeight: 'bold',
                    color: 'white'
                }
            },
            startAngle: -90,
            endAngle: 90,
            center: ['50%', '75%']
        }
    },
    series: [{
        type: 'pie',
        name: 'Services',
        innerSize: '50%',
        data: [
            ['Interne',   10.38],
            ['Externe',       56.33],
            
            
            {
                name: 'Proprietary or Undetectable',
                y: 0.2,
                dataLabels: {
                    enabled: false
                }
            }
        ]
    }]
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

        <!-- jQuery  -->
        <script src="../application/views/assets/js/jquery.min.js"></script>
        <script src="../application/views/assets/js/tether.min.js"></script><!-- Tether for Bootstrap -->
        <script src="../application/views/assets/js/bootstrap.min.js"></script>
        <script src="../application/views/assets/js/waves.js"></script>
        <script src="../application/views/assets/js/jquery.nicescroll.js"></script>
        <script src="../application/views/assets/plugins/switchery/switchery.min.js"></script>

        <!-- Chart JS -->
        <script src="../application/views/assets/plugins/chart.js/chart.min.js"></script>
        <script src="../application/views/assets/pages/chartjs.init.js"></script>

        <!-- App js -->
        <script src="../application/views/assets/js/jquery.core.js"></script>
        <script src="../application/views/assets/js/jquery.app.js"></script>