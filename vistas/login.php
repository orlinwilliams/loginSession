<?php 
//include_once("head.php"); 
include_once("../model/conecction.php");
$requestDB=new connectionDB();
$user=$_POST["userName"];
$email=$_POST["userEmail"];

if(isset($user) && isset($email)){
$consult="select U.nameUser,UT.typeUser from User as U
inner join usertype as UT
on U.idUserTypeFK=UT.idUserType
where U.nameUser='$user' AND passwordUser='$email'";

  if($query1=$requestDB->query($consult)){
    if($query1->num_rows==1){
      $row=$query1->fetch_assoc();
      //echo $row['typeUser'];
      //echo "si funcina";
      //echo json_encode(array("nameUser"=>$row['nameUser'],"typeUser"=> $row['typeUser']));
      echo 1;
    }
    else{
      //sleep(2);
      echo json_encode( array('ERROR'=>"ERROR"));
    }

  }
  else{
    echo json_encode(array('ERROR'=>'ERROR'));
  }




}
else{
  echo json_encode( array('ERROR'=>'ERROR'));

}

$requestDB->close();
?>



