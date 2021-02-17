<?php
require_once ('../application/config/Database.php') ;
session_start();
if(isset($_GET["nt"])
){
    $bdd= new Database();
    $bdd= $bdd->getInstance();
    $sql="update notif set etat=1  where id=".addslashes($_GET["nt"])."";
    $bdd->query($sql);

}
if ( isset($_GET['page'])){
    $page  =  $_GET['page'] ;
}else{
    $page = 'index';
}
if ($page ==='index'){
    require_once ('../application/controllers/AuthController.php');
    $controller =  new AuthController();
    $controller->home();
}elseif ($page ==='accueil'){
    require_once ('../application/controllers/AccueilController.php');
    $controller =  new AccueilController() ;
    $controller->accueil();
}
elseif ($page ==='histologie'){
    require_once('../application/controllers/HistologieController.php');
    $controller =  new HistologieControlLer() ;
    $controller->histoAccueil() ;
}
elseif ($page ==='apercu') {
    require_once('../application/controllers/apercuController.php');
    $controller = new apercuController();
    $controller->apercuAccueil();
}
elseif ($page ==='frottisM'){
    require_once('../application/controllers/FrottisMController.php');
    $controller =  new FrottisMController() ;
    $controller->FrottisMAccueil() ;
}
elseif ($page ==='frottisV'){
    require_once('../application/controllers/FrottisVController.php');
    $controller =  new frottisVController() ;
    $controller->frottisVAccueil() ;
}
elseif ($page ==='myelo'){
    require_once('../application/controllers/MyeloController.php');
    $controller =  new myeloController() ;
    $controller->myeloAccueil() ;
}
elseif ($page ==='coital'){
    require_once('../application/controllers/testPCController.php');
    $controller =  new testPCController() ;
    $controller->testPCAccueil() ;
}
elseif ($page ==='spermo'){
    require_once('../application/controllers/spermoController.php');
    $controller =  new spermoController() ;
    $controller->spermoAccueil() ;
}
elseif ($page ==='reception'){
    require_once('../application/controllers/receptionController.php');
    $controller =  new receptionController() ;
    $controller->receptionAccueil() ;
}

elseif ($page ==='formrecep'){
    require_once('../application/controllers/formrecepController.php');
    $controller =  new formrecepController() ;
    $controller->formrecepAccueil() ;
}
elseif ($page ==='lastrec'){
    require_once('../application/controllers/LastRecController.php');
    $controller =  new lastRecController() ;
    $controller->lastRecAccueil() ;
}
elseif ($page ==='charts'){
    require_once('../application/controllers/ChartController.php');
    $controller =  new ChartController() ;
    $controller->ChartAccueil() ;
}
elseif ($page ==='delete'){
    require_once('../application/controllers/deleteController.php');
    $controller =  new deleteController() ;
    $controller->deleteAccueil() ;
}
elseif ($page ==='archive'){
    require_once('../application/controllers/archiveController.php');
    $controller =  new archiveController() ;
    $controller->archiveAccueil() ;
}
elseif ($page ==='archives'){
    require_once('../application/controllers/archivesController.php');
    $controller =  new archivesController() ;
    $controller->archivesAccueil() ;
}

elseif ($page ==='archivesana'){
    require_once('../application/controllers/archivesAnalysesController.php');
    $controller =  new archivesAnalysesController() ;
    $controller->archivesAnalysesAccueil() ;
}

elseif ($page ==='accueiladmin'){
    require_once('../application/controllers/AccueilAdminController.php');
     $controller = new accueilAdminController;
    $controller->accueilAdmin();
}
elseif ($page ==='accueilMedecin') {
    require_once('../application/controllers/accueilMedecinController.php');
    $controller = new accueilMedecinController();
    $controller->accueilMedecin();
}
elseif ($page ==='imprimer'){
    require_once('../application/controllers/imprimerController.php');
    $controller =  new imprimerController() ;
    $controller->imprimerAccueil() ;
}
elseif ($page ==='accueilRecep') {
    require_once('../application/controllers/AccueilRecepControler.php');
    $controller = new accueilRecepController();
    $controller->accueilRecep();
}

elseif ($page ==='modifServ') {
    require_once('../application/controllers/modifServController.php');
    $controller = new modifServController();
    $controller->modifServ();
}

elseif ($page ==='admin') {
    require_once('../application/controllers/AdminController.php');
    
    $controller =  new AdminController() ;
    $controller->accueil_admin() ;
    $controller->add_user() ;
    $controller->add_service() ;
    $controller->blockUser() ;
    $controller->logout() ;

}
elseif ($page ==='codage') {
    require_once('../application/controllers/codage.php');
    $controller = new codageController();
    $controller->codage();
}
?>
 <!-- Right Sidebar -->
            <div class="side-bar right-bar" style="display:none;width:100%;>
                <div class="nicescroll">
                    <ul class="nav nav-tabs text-xs-center">
                       <button type="button" class="btn btn-warning waves-effect waves-light right-bar-toggle" style="float:right;
                           margin-top:10px;margin-right:10px;margin-bottom:5px
                           ">
                                           <span class="btn-label"><i class="fa fa-times"></i>
                                           </span>Fermer</button>
                       
                    </ul>

                    <div class="tab-content">
                    <h3 style="text-align:center">Lancez une Recherche
                    </h3>
                    
                    
                        <div class="tab-pane fade in active" id="home-2" >
                            <div class="search-box2" class="row">
        <input type="text" autocomplete="off" class="col-md-12" style="height:40px" placeholder="Saisir..." />
        <div class="result"></div>
        </div>
                        </div>

                        
                    </div>
                </div> <!-- end nicescroll -->
            </div>
            <!-- /Right-bar -->
            
            
<script type="text/javascript">
$(document).ready(function(){
    $('.search-box2 input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length >2){
            $.get("../application/views/includes/inc/search_fetch.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    
});
</script>

 <script src="../application/views/assets/audio/js/ion.sound.js"></script>
       
       <script>

       $(document).ready(
    
    
    
    function(){

      $('.search-box2 input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length >2){
            $.get("../application/views/inc/search_fetch.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });

      $('.btn-sm').click(function(event) {
        $('.right-bar').toggle('fast');
      });

        ion.sound({
            sounds: [
                {name: "beer_can_opening"},
                {name: "bell_ring"}
            ],
            path: "../application/views/assets/audio/sounds/",
            preload: true,
            volume: 1.0
        });


        //  ion.sound.play("beer_can_opening");
    });
       
       
       $(function() { update(); });




function update(){
$.ajax({
  url: '../application/views/includes/inc/notif_fetch.php?list=1',
  dataType: 'html',
  success: function(data) {
     
    $('.notif_elements').html(data);
  }
});
$.ajax({
  url: '../application/views/includes/inc/notif_fetch.php?count=1',
  dataType: 'html',
  success: function(data1) {
     
    $('.notif_count00').html(data1);
  }
});
$.ajax({
  url: '../application/views/includes/inc/notif_fetch.php?notifier=1',
  dataType: 'html',
  success: function(data) {
     
    eval(data);
  }
});

$.ajax({
  url: '../application/views/includes/inc/notif_fetch.php?popupwindows=1',
  dataType: 'html',
  success: function(data) {
     
    eval(data);
  }
});
}
var t=setInterval(update,1000);
    
    
    
    
document.addEventListener('DOMContentLoaded', function () 
{
    
if (Notification.permission !== "granted")
{
Notification.requestPermission();
}



});

function notifyBrowser(title,desc,url) 
{
if (!Notification) {
console.log('Desktop notifications not available in your browser..'); 
return;
}
if (Notification.permission !== "granted")
{
Notification.requestPermission();
}
else {
var notification = new Notification(title, {
icon:'https://lh3.googleusercontent.com/-aCFiK4baXX4/VjmGJojsQ_I/AAAAAAAANJg/h-sLVX1M5zA/s48-Ic42/eggsmall.png',
body: desc,
});

// Remove the notification from Notification Center when clicked.
notification.onclick = function () {
window.open(url);      
};

// Callback function when the notification is closed.
notification.onclose = function () {
console.log('Notification closed');
};

}
}
</script>