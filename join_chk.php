<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<?
 include "db_info.php";
 $id=$_GET['userid'];
 $query=mysql_query("select * from Client where ClientID='$id'");
 $count=mysql_num_rows($query);

?>

<script>
var row=<?=$count?>;

 if(row==1){
 parent.document.getElementById("chk_id2").value="0";
 parent.alert("이미 사용중인 아이디입니다.");
 }
 else{
 parent.document.getElementById("chk_id2").value="1";
 parent.alert("사용 가능합니다.");
 }
</script>
