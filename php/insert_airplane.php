<meta name="utf-8">
<?
include "db_info.php";

$AirplaneType=$_POST['AirplaneType'];
$Location=$_POST['Location'];
$AirplaneID=$_POST['AirplaneID'];
$CaptainID=$_POST['CaptainID'];
$SeatNum=$_POST['SeatNum'];

$query = "insert into airplane values('$AirplaneType','$Location','$AirplaneID','$CaptainID','$SeatNum')";
mysql_query($query,$conn);
echo "<script>alert('등록되었습니다.');</script>";
echo "<meta http-equiv='refresh' content='1; URL=root.php'>";
?>
