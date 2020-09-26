<?php
include 'Misc.php';
include 'db.php';
class Admin {


  public function login($user,$pass){
    $res=[];
    $misc=new Misc();
    $db=new Database();
    $db=$db->link;

    $sql = "SELECT * FROM `admin` WHERE `username`='".$user."' AND `password`='".$misc->dec_enc('encrypt',$pass)."'";
$result = $db->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
  $_SESSION['user']=['id'=>$row['id'],'name'=>$row['name'],'email'=>$row['email']];

  }
$res=['error'=>false,'msg'=>'Logged in Successfully'];
} else {
$res=['error'=>true,'msg'=>'Unable to Login'];

}
$db->close();


    return $res;
  }
}
?>