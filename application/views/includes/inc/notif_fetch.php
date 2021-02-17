<?php
session_start();

$con=mysqli_connect("localhost","root","","anapath2_db");

if(isset($_GET["list"]) AND $_SESSION['type'] != '0'
){
 $sql="SELECT *  FROM notif  where etat=0  AND type=1 ORDER BY id desc";

if ($result=mysqli_query($con,$sql))
  {
while($row = $result->fetch_array())
  {
	  $time = strtotime($row['date']);

$newformat = date('d-m-Y à H:i',$time);
?>
 <a href="index.php?page=lastrec&table=<?php echo $row['typeAna']?>&nt=<?php echo $row['id']?>" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-faded">
                                            <img src="../application/views/assets/images/users/02.png" alt="img" class="img-circle img-fluid">
                                        </div>
                                        <p class="notify-details">
                                            <b>Nouvel ajout</b>
                                            <span>Une demande d'édition d'analyse | validation necessaire</span>
                                            <small class="text-muted"><?php echo $newformat;?></small>
                                        </p>
                                    </a>
									
			<?php
 
  }
}
}

$count=0;
if(isset($_GET["count"])){
 $sql="SELECT count(*) as abb  FROM notif  where etat=0 AND type=1 ORDER BY id desc";

if ($result=mysqli_query($con,$sql))
  {
while($row = $result->fetch_array())
  {
	  $count+=$row['abb'];
?>

<?php //echo $row['abb'];?>
									
			<?php
 
  }
}
}


if(isset($_GET["notifier"])){
 $sql="SELECT count(*) as abb  FROM notif  where etat=0 and alerteOk=0 AND type=1 ORDER BY id desc";

if ($result=mysqli_query($con,$sql))
  {
while($row = $result->fetch_array())
  { $update="update notif set alerteOk=1";mysqli_query($con,$update);

	  
?>
<?php if( $row['abb']>0) echo  

'

ion.sound.play("bell_ring");





';?>
									
			<?php
 
  }
}
}

if(isset($_GET["popupwindows"])){
 $sql="SELECT *  FROM notif  where etat=0 and alerteOk=0 AND type=1 ORDER BY id desc";

if ($result=mysqli_query($con,$sql))
  {
while($row = $result->fetch_array())
  {
	  $time = strtotime($row['date']);

$newformat = date('d-m-Y à H:i',$time);

echo "notifyBrowser('Une demande d\'édition d\'analyse','veuillez cliquez sur le lien pour consulter ','http://localhost/labora/public/index.php?page=lastrec&table=".$row['typeAna']."&nt=".$row['id']."')";
 
  }
}
}
if(isset($_GET["list"]) AND $_SESSION['type'] == '1'
){
 $sql="SELECT *  FROM notif  where etat=0   ORDER BY id desc";

if ($result=mysqli_query($con,$sql))
  {
while($row = $result->fetch_array())
  {
    $time = strtotime($row['date']);

$newformat = date('d-m-Y à H:i',$time);
?>
 <a href="index.php?page=admin&nt=<?php echo $row['id']?>" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-faded">
                                            <img src="../application/views/assets/images/users/03.png" alt="img" class="img-circle img-fluid">
                                        </div>
                                        <p class="notify-details">
                                            <b>Nouvel ajout</b>
                                            <span>Une demande d'archivage| validation necessaire</span>
                                            <small class="text-muted"><?php echo $newformat;?></small>
                                        </p>
                                    </a>
                  
      <?php
 
  }
}
}

if(isset($_GET["count"])){
 $sql="SELECT count(*) as abb  FROM notif  where etat=0  ORDER BY id desc";

if ($result=mysqli_query($con,$sql))
  {
while($row = $result->fetch_array())
  {
     $count+=$row['abb'];
?>

<?php //echo $row['abb'];?>
                  
      <?php
 
  }
}

echo  $count;
}

if(isset($_GET["notifier"])){
 $sql="SELECT count(*) as abb  FROM notif  where etat=0 and alerteOk=0  ORDER BY id desc";

if ($result=mysqli_query($con,$sql))
  {
while($row = $result->fetch_array())
  { $update="update notif set alerteOk=1";mysqli_query($con,$update);

    
?>
<?php if( $row['abb']>0) echo  

'

ion.sound.play("bell_ring");





';?>
                  
      <?php
 
  }
}
}

if(isset($_GET["popupwindows"])){
 $sql="SELECT *  FROM notif  where etat=0 and alerteOk=0  ORDER BY id desc";

if ($result=mysqli_query($con,$sql))
  {
while($row = $result->fetch_array())
  {
    $time = strtotime($row['date']);

$newformat = date('d-m-Y à H:i',$time);

echo "notifyBrowser('Validation d\'archivage necessaire','veuillez cliquez sur le lien pour consulter ','http://localhost/labora/public/index.php?page=admin&nt=".$row['id']."')";
 
  }
}
}

mysqli_close($con);
?>




