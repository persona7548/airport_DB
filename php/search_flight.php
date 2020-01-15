<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<!DOCTYPE html>
<html>
  <head>
    <title>비행편 검색 페이지 </title>
  </head>
  <body>
<?
    include "db_info.php";
    $From=$_POST['from'];
    $To=$_POST['to'];

echo "
<center>
<td>$Day</td>
<table width='1000' border='1'>
<tr>
<th colspan='7'>비행편 리스트</th>
</tr>
<tr>
<td width='10%' align='center'>비행편</td>
<td width='10%' align='center'>게이트</td>
<td width='10%' align='center'>출발지</td>
<td width='10%' align='center'>도착지</td>
<td width='10%' align='center'>출발일</td>
<td width='10%' align='center'>출발시각</td>
<td width='25%' align='center'>남은 좌석수</td>
</tr>";

$query = mysql_query("select * from flight where FLocation='$From' and TLocation='$To'");
while($row=@mysql_fetch_array($query)){
  $Seat =mysql_query("select SeatNum from airplane where AirplaneID=$row[AirplaneID]");
  $Seatnum = mysql_fetch_row($Seat);
  $Remain =mysql_query("select * from reservation where FlightNo ='$row[FlightNo]'");
  $RemainSeat=$Seatnum[0]-mysql_num_rows($Remain);
echo("<tr>
          <td align='center'>$row[FlightNo]</td>
          <td align='center'>$row[Gate]</td>
          <td align='center'>$row[FLocation]</td>
          <td align='center'>$row[TLocation]</td>
          <td align='center'>$row[DepartureD]</td>
          <td align='center'>$row[DepartureT]</td>
          <td align='center'>$RemainSeat</td>
          <td><a href= 'Client_flight.php?FNo=$row[FlightNo]'>예매하기</td>
          </tr>");}
          echo '</table>';
?>

   </tr>
  </body>
</html>
