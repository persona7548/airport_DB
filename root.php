<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<!DOCTYPE html>
<?

include "db_info.php";
?>
<html>
  <head>
    <title>관리자 계정 페이지 </title>
  </head>
  <body>

<?

echo "<br /><br />
<center>
<table width='500' border='1'>
<tr>
<th colspan='3'>직원 리스트</th>
</tr>
<tr>
<td width='30%' align='center'>이름</td>
<td width='20%' align='center'>비행시간</td>
<td width='30%' align='center'>직원번호</td>
</tr>";
$result = mysql_query('select * from employee');
while($row = mysql_fetch_array($result)){
  echo("<tr>
        <td align='center'>$row[Name]</td>
        <td align='center'>$row[FlightTime]</td>
        <td align='center'>$row[EmpNo]</td>
        </tr>");}
echo '</table>';
?><br>
<form action="insert_emp.php" method="post">
<input type="text" name="Name" placeholder="이름 입력"><br>
<input type="text" name="FlightTime" placeholder="비행 시간 입력"><br>
<input type="text" name="EmpNo" placeholder="직원 번호 입력"><br>
<input type="submit" value="추가"><input type="reset" value="취소">
</form>

<?
echo "<br /><br />

<center>
<table width='500' border='1'>
<tr>
<th colspan='5'>비행기 리스트</th>
</tr>
<tr>
<td width='10%' align='center'>기종</td>
<td width='20%' align='center'>현재 위치</td>
<td width='25%' align='center'>고유번호</td>
<td width='20%' align='center'>기장번호</td>
<td width='15%' align='center'>좌석수</td>

</tr>";
$result = mysql_query('select * from airplane');
while($row = mysql_fetch_array($result)){
  echo("<tr>
        <td align='center'>$row[AirplaneType]</td>
        <td align='center'>$row[Location]</td>
        <td align='center'>$row[AirplaneID]</td>
        <td align='center'>$row[CaptainID]</td>
        <td align='center'>$row[SeatNum]</td>
        </tr>");}
echo '</table>';
?><br>
<form action="insert_airplane.php" method="post">
<input type="text" name="AirplaneType" placeholder="기종 입력"><br>
<input type="text" name="Location" placeholder="현재 위치 입력"><br>
<input type="text" name="AirplaneID" placeholder="고유 번호 입력"><br>
<input type="text" name="CaptainID" placeholder="기장 번호 입력"><br>
<input type="text" name="SeatNum" placeholder="좌석수 입력"><br>
<input type="submit" value="추가"><input type="reset" value="취소">
</form>

<?
echo "<br /><br />
<center>
<table width='1000' border='1'>
<tr>
<th colspan='9'>비행편 리스트</th>
</tr>
<tr>
<td width='10%' align='center'>비행편</td>
<td width='10%' align='center'>게이트</td>
<td width='10%' align='center'>출발지</td>
<td width='10%' align='center'>도착지</td>
<td width='10%' align='center'>출발일</td>
<td width='10%' align='center'>출발시각</td>
<td width='15%' align='center'>비행기 번호</td>
<td width='10%' align='center'>남은 좌석수</td>
<td width='15%' align='center'>예매 현황</td>
</tr>";
$result = mysql_query('select * from flight');
while($row = mysql_fetch_array($result)){
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
        <td align='center'>$row[AirplaneID]</td>
        <td align='center'>$RemainSeat</td>
        <td align='center'><a href= 'Num_flight.php?FNo=$row[FlightNo]'>예매현황</td>
        </tr>");}
echo '</table>';
?><br>
<form action="insert_flight.php" method="post">
<input type="text" name="FlightNo" placeholder="비행편 입력"><br>
<input type="text" name="Gate" placeholder="게이트 입력"><br>
<input type="text" name="From" placeholder="출발지 입력"><br>
<input type="text" name="To" placeholder="도착지 입력"><br>
<td>출발일 : </td><input type="date" name="DepartureD"><br>
<td>출발시간 : </td><input type="time" name="DepartureT" placeholder="출발시각 입력"><br>
<input type="text" name="AirplaneID" placeholder="비행기 번호 입력"><br>
<input type="submit" value="추가"><input type="reset" value="취소">
</form>

   </tr>
  </body>
</html>
