<?
session_start();
include "db_info.php";
$FlightNo=$_GET['FNo'];
$ClientID=$_SESSION['id'];
$FNO=substr($FlightNo,0,2);
$TicketCode =$FNO.$ClientID;
$query="insert into reservation(TicketCode,FlightNo,ClientName) values('$TicketCode','$FlightNo','$ClientID')";
mysql_query($query,$conn);
echo "<script>alert('등록되었습니다.');</script>";
echo "<meta http-equiv='refresh' content='1; URL=client.php'>";
?>
