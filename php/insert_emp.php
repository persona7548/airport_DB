<meta name="utf-8">
<?
include "db_info.php";

$Name=$_POST['Name'];
$FlightTime=$_POST['FlightTime'];
$EmpNo=$_POST['EmpNo'];

$query = "insert into employee values('$Name','$FlightTime','$EmpNo')";
mysql_query($query,$conn);
echo "<script>alert('등록되었습니다.');</script>";
echo "<meta http-equiv='refresh' content='1; URL=root.php'>";
?>
