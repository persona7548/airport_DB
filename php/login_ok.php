<?
  session_start();
 include "db_info.php";
 $logid=$_POST['id'];
 $logpw=$_POST['pw'];


 $query="select ClientID from Client where ClientID='$logid' && Password='$logpw'";

 $result=mysql_query($query,$conn);
 $row=mysql_fetch_array($result);
 $ID = $row[0];

 if(!$row){
  echo "<script>alert('아이디와 비밀번호를 확인해주세요.');history.back();</script>";
 }
 else if($ID == 'root'){
    echo "<meta http-equiv='refresh' content='1; URL=root.php?no=0'>";
}
else{
  $_SESSION['id']=$ID;
 echo "<meta http-equiv='refresh' content='1; URL=client.php?no=0'>";
 }

 mysql_close($conn);
?>
