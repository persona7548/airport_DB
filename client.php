<?
session_start();
include "db_info.php";
$ClientID=$_SESSION['id'];
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<!DOCTYPE html>

<html>
  <head>
    <title>회원 페이지</title>
  </head>
  <body>
  <?
  echo "<br /><br />
    <center>
    <table width='1000' border='1'>
    <tr>
    <th colspan='7'>내 예매 내역</th>
    </tr>
    <tr>
    <td width='20%' align='center'>티켓번호</td>
    <td width='20%' align='center'>비행편</td>
    <td width='10%' align='center'>게이트</td>
    <td width='10%' align='center'>출발지</td>
    <td width='10%' align='center'>도착지</td>
    <td width='20%' align='center'>출발일</td>
    <td width='10%' align='center'>출발시각</td>
    </tr>";
    $result = mysql_query("select * from reservation Inner join flight where reservation.ClientName='$ClientID' and
    reservation.FlightNo=flight.FlightNo");
    while($row = mysql_fetch_array($result)){
      echo("<tr>
            <td align='center'>$row[TicketCode]</td>
            <td align='center'>$row[FlightNo]</td>
            <td align='center'>$row[Gate]</td>
            <td align='center'>$row[FLocation]</td>
            <td align='center'>$row[TLocation]</td>
            <td align='center'>$row[DepartureD]</td>
            <td align='center'>$row[DepartureT]</td>
            </tr>");}
    echo '</table>';
    ?>
     <table cellpadding=2 cellspacing=2>
       <form action="search_flight.php" method=post>
     <center>
       <tr>
         <td align=center>항공편 검색</td>
       </tr>
    <tr>
     <td align=center>출발지</td>
       <td>
         <select name="from">
           <optgroup label="한국">
           <option value="김포">김포</option>
           <option value="인천">인천</option>
           </optgroup>
           <optgroup label="일본">
           <option value="나리타">나리타</option>
           <option value="후쿠오카">후쿠오카</option>
           </optgroup>
         </optgroup>
         <optgroup label="중국">
         <option value="베이징">베이징</option>
         <option value="상하이">상하이</option>
         </optgroup>
         </select>
       </td>
   </tr>

   <tr>
    <td align=center>도착지</td>
    <td>
      <select name="to">
        <optgroup label="한국">
        <option value="김포">김포</option>
        <option value="인천">인천</option>
        </optgroup>
        <optgroup label="일본">
        <option value="나리타">나리타</option>
        <option value="후쿠오카">후쿠오카</option>
        </optgroup>
      </optgroup>
      <optgroup label="중국">
      <option value="베이징">베이징</option>
      <option value="상하이">상하이</option>
      </optgroup>
      </select>
    </td>
  </tr>

  <tr>

   <td><input type=submit value="비행편 검색" size=10>
   </form>
     <input type=button value="취소" onclick="history.back();"></td>
 </tr>

     </table>
  </body>
</html>
