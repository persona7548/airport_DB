<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?
 include "db_info.php";

 $j_id=$_POST["joinid"];
 $j_pw=$_POST['joinpw'];
 $j_pw2=$_POST['joinpw2'];
 $j_name=$_POST['joinname'];
 $j_chkid=$_POST['chk_id2'];
 $j_date=$_POST['joindate'];

 if(!$j_id||!$j_pw||!$j_pw2||!$j_name||!$j_date){
  echo"<script>alert('빈칸없이 작성해 주세요.');history.back();</script>";
 }
 else if($j_chkid==0){
  echo"<script>alert('아이디 중복확인을 해주세요.');history.back();</script>";
 }
 else if($j_pw!=$j_pw2){
  echo"<script>alert('비밀번호를 정확히 입력해주세요.');history.back();</script>";
 }
else{
 $query="insert into Client(ClientID,Password,Name,DateOfBirth) values('$j_id','$j_pw','$j_name','$j_date')";
 $result=mysql_query($query,$conn);
 echo "<script>alert('회원가입을 축하드립니다.');</script>";
 echo "<meta http-equiv='refresh' content='1'; URL=login.php'>";}
?>
