<?
include "db_info.php";
$FlightNo=$_GET['FNo'];

echo "<br /><br />
<center>
<table width='1000' border='1'>
<tr>
<th colspan='4'>예약 현황</th>
</tr>
<tr>
<td width='20%' align='center'>티켓명</td>
<td width='30%' align='center'>회원 아이디</td>
<td width='20%' align='center'>이름</td>
<td width='30%' align='center'>생년월일</td>

</tr>";
$result = mysql_query("select * from reservation where FlightNo ='$FlightNo'");
while($row = mysql_fetch_array($result)){
  $client = mysql_query("select * from client where ClientID ='$row[ClientName]'");
  $Client_info=mysql_fetch_array($client);
  echo("<tr>
        <td align='center'>$row[TicketCode]</td>
        <td align='center'>$Client_info[ClientID]</td>
        <td align='center'>$Client_info[Name]</td>
        <td align='center'>$Client_info[DateOfBirth]</td>
        </tr>");}
echo '</table>';
?><br>
