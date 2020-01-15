<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?
include "db_info.php";

$FlightNo=$_POST['FlightNo'];
$Gate=$_POST['Gate'];
$From=$_POST['From'];
$To=$_POST['To'];
$DepartureD=$_POST['DepartureD'];
$DepartureT=$_POST['DepartureT'];
$AirplaneID=$_POST['AirplaneID'];

$query="insert into flight values('$FlightNo','$Gate','$From','$DepartureT','$To','$AirplaneID','$DepartureD')";
mysql_query($query,$conn);
echo "<script>alert('등록되었습니다.')</script>";
echo "<meta http-equiv='refresh' content='1; URL=root.php'>";
?>
