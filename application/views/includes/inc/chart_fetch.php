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
    $age_0_10_a=0;
    $age_0_10_myelo=0;
    $age_0_10_coital=0;
    $age_0_10_spermo=0;

    $age_10_20=0;
    $age_10_20_a=0;
    $age_10_20_myelo=0;
    $age_10_20_coital=0;
    $age_10_20_spermo=0;

    $age_20_30=0;
    $age_20_30_a=0;
    $age_20_30_myelo=0;
    $age_20_30_coital=0;
    $age_20_30_spermo=0;

    $age_35_45=0;
    $age_35_45_a=0;
    $age_35_45_myelo=0;
    $age_35_45_coital=0;
    $age_35_45_spermo=0;

    $age_45_55=0;
    $age_45_55_a=0;
    $age_45_55_myelo=0;
    $age_45_55_coital=0;
    $age_45_55_spermo=0;

    $age_55_70=0;
    $age_55_70_a=0;
    $age_55_70_myelo=0;
    $age_55_70_coital=0;
    $age_55_70_spermo=0;

    $age_70_90=0;
    $age_70_90_a=0;
    $age_70_90_myelo=0;
    $age_70_90_coital=0;
    $age_70_90_spermo=0;

    $age_90_100=0;
    $age_90_100_a=0;
    $age_90_100_myelo=0;
    $age_90_100_coital=0;
    $age_90_100_spermo=0;

    $nbr_h=0;
    $nbr_f=0;

    $age_0_10f=0;
    $age_0_10f_a=0;
    $age_0_10f_myelo=0;
    $age_0_10f_coital=0;
    $age_0_10f_vaginal=0;
    $age_0_10f_fml=0;
    $age_0_10f_fv=0;


    $age_10_20f=0;
    $age_10_20f_a=0;
    $age_10_20f_myelo=0;
    $age_10_20f_coital=0;
    $age_10_20f_vaginal=0;
    $age_10_20f_fml=0;
    $age_10_20f_fv=0;

    $age_20_30f=0;
    $age_20_30f_a=0;
    $age_20_30f_myelo=0;
    $age_20_30f_coital=0;
    $age_20_30f_vaginal=0;
    $age_20_30f_fml=0;
    $age_20_30f_fv=0;

    $age_35_45f=0;
    $age_35_45f_a=0;
    $age_35_45f_myelo=0;
    $age_35_45f_coital=0;
    $age_35_45f_vaginal=0;
    $age_35_45f_fml=0;
    $age_35_45f_fv=0;

    $age_45_55f=0;
    $age_45_55f_a=0;
    $age_45_55f_myelo=0;
    $age_45_55f_coital=0;
    $age_45_55f_vaginal=0;
    $age_45_55f_fml=0;
    $age_45_55f_fv=0;

    $age_55_70f=0;
    $age_55_70f_a=0;
    $age_55_70f_myelo=0;
    $age_55_70f_coital=0;
    $age_55_70f_vaginal=0;
    $age_55_70f_fml=0;
    $age_55_70f_fv=0;

    $age_70_90f=0;
    $age_70_90f_a=0;
    $age_70_90f_myelo=0;
    $age_70_90f_coital=0;
    $age_70_90f_vaginal=0;
    $age_70_90f_fml=0;
    $age_70_90f_fv=0;

    $age_90_100f=0;
    $age_90_100f_a=0;
    $age_90_100f_myelo=0;
    $age_90_100f_coital=0;
    $age_90_100f_vaginal=0;
    $age_90_100f_fml=0;
    $age_90_100f_fv=0;


    $and =" ";


    $b50=0;
    $b55=0;
    $b100=0;
    $b120=0;
    $b130=0;
    $b200=0;
    $b300=0;
    $b500=0;


    if (isset($_GET['date1']) and isset($_GET['date2']) )
    {
    $date1=addslashes($_GET['date1']);
    $date2=addslashes($_GET['date2']);

    $where="WHERE datePrelevement BETWEEN '".$date1."' AND '".$date2."' ";
    $and = "AND  ";
    }


    else $where="where";

    /*---------------------------*/
    $sql1000 = "SELECT count(*) as nb FROM analyses  ".$where."  ".$and."    typeAna NOT LIKE '' ";
    $result001 = $conn->query($sql1000);
    if ($result001->num_rows > 0) {

         while($row001 = $result001->fetch_assoc()) {
                 $analyse0=$row001["nb"];
            }

        } 



    /*--------------------------------------------------*/

    $tab_result0 = array();
     $sql1001 = "SELECT nomenclature,count(*)nb FROM analyses  ".$where."  ".$and." nomenclature NOT LIKE ''    group by nomenclature ORDER BY nomenclature ASC";
    $result001 = $conn->query($sql1001);
    if ($result001->num_rows > 0) {


        

                 while($row001 =mysqli_fetch_array($result001,MYSQLI_ASSOC)) {
         if (strtolower($row001["nomenclature"])!= "") {
                $tab_result0[] = $row001;

            }   
    //var_dump($tab_result0);


                }
    } 



    /*---------------------------------------------*/
     $sql1001 = "SELECT typeAna,count(*)nb FROM analyses  ".$where."  ".$and."  typeAna NOT LIKE '' 
    group by typeAna ORDER BY typeAna ASC ";
    $result001 = $conn->query($sql1001);
    $tab_result = array();
    if ($result001->num_rows > 0) {


        // output data of each row
        while($row001 =mysqli_fetch_array($result001,MYSQLI_ASSOC)) {
         if (strtolower($row001["typeAna"])!= "") {
                $tab_result[] = $row001;

            }   
    //var_dump($tab_result);


                }
    } 

    /*---------------------------------------------*/


    $sql = "SELECT count(idAna) as ssb  FROM analyses ".$where."  ".$and." typeAna='anapath' or typeAna='   
    histologie' ";
    $result = $conn->query($sql);

    $sql1 = "SELECT count(idAna) as ssb  FROM analyses  ".$where." ".$and." typeAna='spermogramme'";
    $result1 = $conn->query($sql1);

    $sql2 = "SELECT count(idAna) as ssb  FROM analyses ".$where." ".$and." typeAna='frottismilieuliquide'";
    $result2 = $conn->query($sql2);
    $sql3 = "SELECT count(idAna) as ssb  FROM analyses ".$where." ".$and." typeAna='frottisvaginal'";
    $result3 = $conn->query($sql3);
    $sql4 = "SELECT count(idAna) as ssb  FROM analyses ".$where." ".$and." typeAna='myelo'";
    $result4 = $conn->query($sql4);

     $sql5 = "SELECT count(idAna) as ssb  FROM analyses ".$where." ".$and." typeAna='coital'";
    $result5 = $conn->query($sql5);

    /*-----------------------------------------------------------*/

    //total  service
     $total_service=0;
         $sql1000 = "SELECT count(*) as nb FROM analyses  ".$where."  ".$and."   LENGTH(service) >2   ";
    $result001 = $conn->query($sql1000);
    if ($result001->num_rows > 0) {

         while($row001 = $result001->fetch_assoc()) {
                 $total_service=$row001["nb"];
            }

        } 

        //services to  array

    $sql1001 = "SELECT service,count(*) as nb FROM analyses ".$where." ".$and." LENGTH(service) >2 GROUP by service ";
    $result001 = $conn->query($sql1001);
    $tab_result4 = array();
    if ($result001->num_rows > 0) {


        // output data of each row
        while($row001 =mysqli_fetch_array($result001,MYSQLI_ASSOC)) {
                     $tab_result4[] = $row001;

             
    //var_dump($tab_result4);


                }
    } 


    //pyramide des ages
if(isset($_GET["date1"]))  $where1= $where;else   $where1="";
    $sql1001 = "SELECT agePatient ,sexe,typeAna  from analyses  ".$where1." ";
    $result001 = $conn->query($sql1001);
   $tab_result5_h = array();
   $tab_result5_f = array();


     $sql003="SELECT agePatient,count(*) as nombre,sexe from analyses   ".$where1."    group by agePatient,sexe";
    $result005 = $conn->query($sql003);
    while($row0015 = $result005->fetch_assoc()) {
       if($row0015["sexe"]=="homme")$tab_result5_h[] = $row0015;
       if($row0015["sexe"]=="femme")$tab_result5_f[] = $row0015;

}

    $tab_result3 = array();
    $nb_patients=0;
       if ($result001->num_rows > 0) {


        // output data of each row
       while($row001 = $result001->fetch_assoc()) {

        if ( ($row001["sexe"]=="homme") ) {  $nbr_h+=1;
    
            $nb_patients+=1;
            if($row001["agePatient"]<=10){
                $age_0_10+=1;
                
                if ($row001["typeAna"]=="anapath") $age_0_10_a+=1;
                if ($row001["typeAna"]=="myelogramme") $age_0_10_myelo+=1;
                if ($row001["typeAna"]=="coital") $age_0_10_coital+=1;
                if ($row001["typeAna"]=="spermogramme") $age_0_10_spermo+=1;
            }
            if($row001["agePatient"]>10 and $row001["agePatient"]<=20  ){
                $age_10_20+=1;

                

               if ($row001["typeAna"]=="anapath") $age_10_20_a+=1;
              if ($row001["typeAna"]=="myelogramme") $age_10_20_myelo+=1;
              if ($row001["typeAna"]=="coital") $age_10_20_myelo+=1;
              if ($row001["typeAna"]=="spermogramme") $age_10_20_spermo+=1;

            }

            if($row001["agePatient"]>20 and $row001["agePatient"]<= 30 )
                {
                    $age_20_30+=1;
                   if ($row001["typeAna"]=="anapath") $age_20_30_a+=1;
                   if ($row001["typeAna"]=="myelogramme") $age_20_30_myelo+=1;
                   if ($row001["typeAna"]=="coital") $age_20_30_myelo+=1;
               if ($row001["typeAna"]=="spermogramme") $age_20_30_spermo+=1;

                }
            if($row001["agePatient"]>30 and $row001["agePatient"]<=45  )
                {
                    $age_35_45+=1;
                   if ($row001["typeAna"]=="anapath") $age_35_45_a+=1;
                   if ($row001["typeAna"]=="myelogramme") $age_35_45_myelo+=1;
                   if ($row001["typeAna"]=="coital") $age_35_45_coital+=1;
                   if ($row001["typeAna"]=="spermogramme") $age_35_45_spermo+=1;
                }
            if($row001["agePatient"]>45 and $row001["agePatient"]<=55  )
                {
                    $age_45_55+=1;
                   if ($row001["typeAna"]=="anapath") $age_45_55_a+=1;
                   if ($row001["typeAna"]=="myelogramme") $age_45_55_myelo+=1;
                   if ($row001["typeAna"]=="coital") $age_45_55_coital+=1;
                   if ($row001["typeAna"]=="spermogramme") $age_45_55_spermo+=1;
                }
            if($row001["agePatient"]>55 and $row001["agePatient"]<=70  )
                {
                    $age_55_70+=1;
                 if ($row001["typeAna"]=="anapath")   $age_55_70_a+=1;
                 if ($row001["typeAna"]=="myelogramme") $age_55_70_myelo+=1;
                 if ($row001["typeAna"]=="coital") $age_55_70_coital+=1;
                 if ($row001["typeAna"]=="spermogramme") $age_55_70_spermo+=1;
                }
            if($row001["agePatient"]>70 and $row001["agePatient"]<=90 ){
                $age_70_90+=1;
               if ($row001["typeAna"]=="anapath") $age_70_90_a+=1;
               if ($row001["typeAna"]=="myelogramme") $age_70_90_myelo+=1;
               if ($row001["typeAna"]=="coital") $age_70_90_coital+=1;
               if ($row001["typeAna"]=="spermogramme") $age_70_90_spermo+=1;
            }
            if($row001["agePatient"]>90 and $row001["agePatient"]<=100 )
                {
                    $age_90_100+=1;
                  if ($row001["typeAna"]=="anapath")  $age_90_100_a+=1;
                  if ($row001["typeAna"]=="myelogramme") $age_90_100_myelo+=1;
                  if ($row001["typeAna"]=="coital") $age_90_100_coital+=1;
                  if ($row001["typeAna"]=="spermogramme") $age_90_100_spermo+=1;
                }


            
        }
                             
        if ( ($row001["sexe"]=="femme") ) { 
            $nb_patients+=1;     $nbr_f+=1;
            if($row001["agePatient"]<=10){
                $age_0_10f+=1;
                 if ($row001["typeAna"]=="anapath") $age_0_10f_a+=1;
                 if ($row001["typeAna"]=="myelogramme") $age_0_10f_myelo+=1;
                 if ($row001["typeAna"]=="coital") $age_0_10f_coital+=1;
                 if ($row001["typeAna"]=="frottisvaginal") $age_0_10f_vaginal+=1;
                  if ($row001["typeAna"]=="frottismilieuliquide") $age_0_10f_fml+=1;
            }
            if($row001["agePatient"]>10 and $row001["agePatient"]<=20  ){
                $age_10_20f+=1;
              if ($row001["typeAna"]=="anapath")  $age_10_20f_a+=1;
              if ($row001["typeAna"]=="myelogramme") $age_10_20f_myelo+=1;
              if ($row001["typeAna"]=="coital") $age_10_20f_coital+=1;
                if ($row001["typeAna"]=="frottisvaginal") $age_10_20f_vaginal+=1;
                 if ($row001["typeAna"]=="frottismilieuliquide") $age_10_20f_fml+=1;
            }
            if($row001["agePatient"]>20 and $row001["agePatient"]<= 30 ){
                $age_20_30f+=1;
               if ($row001["typeAna"]=="anapath") $age_20_30f_a+=1;
                                if ($row001["typeAna"]=="myelogramme") $age_20_30f_myelo+=1;
                                if ($row001["typeAna"]=="coital") $age_20_30f_coital+=1;
                                  if ($row001["typeAna"]=="frottisvaginal") $age_20_30f_vaginal+=1;
                                   if ($row001["typeAna"]=="frottismilieuliquide") $age_20_30f_fml+=1;
            }
            if($row001["agePatient"]>30 and $row001["agePatient"]<=45  ){
                $age_35_45f+=1;
               if ($row001["typeAna"]=="anapath") $age_35_45f_a+=1;
                                if ($row001["typeAna"]=="myelogramme") $age_35_45f_myelo+=1;
                                if ($row001["typeAna"]=="coital") $age_35_45f_coital+=1;
                                  if ($row001["typeAna"]=="frottisvaginal") $age_35_45f_vaginal+=1;
                                   if ($row001["typeAna"]=="frottismilieuliquide") $age_35_45f_fml+=1;
            }
            if($row001["agePatient"]>45 and $row001["agePatient"]<=55  ){
                $age_45_55f+=1;
               if ($row001["typeAna"]=="anapath") $age_45_55f_a+=1;
                                if ($row001["typeAna"]=="myelogramme") $age_45_55f_myelo+=1;
                                if ($row001["typeAna"]=="coital") $age_45_55f_coital+=1;
                                  if ($row001["typeAna"]=="frottisvaginal") $age_45_55f_vaginal+=1;
                                   if ($row001["typeAna"]=="frottismilieuliquide") $age_45_55f_fml+=1;
            }
            if($row001["agePatient"]>55 and $row001["agePatient"]<=70  ){
                $age_55_70f+=1;
               if ($row001["typeAna"]=="anapath") $age_55_70f_a+=1;
                                if ($row001["typeAna"]=="myelogramme") $age_55_70f_myelo+=1;
                                if ($row001["typeAna"]=="coital") $age_55_70f_coital+=1;
                                  if ($row001["typeAna"]=="frottisvaginal") $age_55_70f_vaginal+=1;
                                   if ($row001["typeAna"]=="frottismilieuliquide") $age_55_70f_fml+=1;


            }
                if($row001["agePatient"]>70 and $row001["agePatient"]<=90 ){
                    $age_70_90f+=1;
                if ($row001["typeAna"]=="anapath")    $age_70_90f_a+=1;
                                 if ($row001["typeAna"]=="myelogramme") $age_70_90f_myelo+=1;
                                 if ($row001["typeAna"]=="coital") $age_70_90f_coital+=1;
                                 if ($row001["typeAna"]=="frottisvaginal") $age_70_90f_vaginal+=1;
                                 if ($row001["typeAna"]=="frottismilieuliquide") $age_70_90f_fml+=1;

                }
            if($row001["agePatient"]>90 and $row001["agePatient"]<=100 ){
                $age_90_100f+=1;
               if ($row001["typeAna"]=="anapath") $age_90_100f_a+=1;
                                if ($row001["typeAna"]=="myelogramme") $age_90_100f_myelo+=1;
                                if ($row001["typeAna"]=="coital") $age_90_100f_coital+=1;
                                if ($row001["typeAna"]=="frottisvaginal") $age_90_100f_vaginal+=1;
                                if ($row001["typeAna"]=="frottismilieuliquide") $age_55_70f_fml+=1;
            }
            
        }
             

                }
    } 



    ?> 