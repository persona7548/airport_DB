<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script>
 function chid(){
  document.getElementById("chk_id2").value=0;
  var id=document.getElementById("chk_id1").value;

  if(id==""){
  alert("빈칸을 모두 작성하세요");
  exit;
  }

  ifrm1.location.href="join_chk.php?userid="+id;
 }

</script>

<html>
 <head>
 <title>Join!</title>
 </head>

 <body>
 <center>
 <form action=join_ok.php method=post name=frmjoin>
 <table cellpadding=2 cellspacing=2>
 <tr>
  <td colspan=2 align=center><b> 회 &nbsp;원&nbsp; 가 &nbsp;입</td></b>
 </tr>
 <tr>
  <td align=center>ID</td>
  <td><input type=text name=joinid id="chk_id1" autocomplete="off" placeholder="영어와 숫자만 입력가능" required>&nbsp;&nbsp;
   <input type=button value="중복검사" onclick=chid()></td>
   <input type=hidden id="chk_id2" name=chk_id2 value="0">
 </tr>
 <tr>
  <td align=center>비밀번호</td>
  <td><input type=password name=joinpw autocomplete="off" placeholder="비밀번호를 작성하세요" required></td>
 </tr>
 <tr>
  <td align=center>비밀번호 확인</td>
  <td><input type=password name=joinpw2 autocomplete="off" placeholder="비밀번호를 다시 입력하세요" required></td>
 </tr>
 <tr>
  <td align=center> 이름</td>
  <td><input type=text name=joinname autocomplete="off" placeholder="이름을 작성하세요" required></td>
 </tr>
 <tr>
  <td align=center> 생년월일</td>
  <td><input type=date name=joindate></td>
 </tr>
 <tr> <td colspan=2 align=center><input type=submit value="가입하기">&nbsp;&nbsp;
  <input type=reset value="다시작성">&nbsp;&nbsp;
 </td>
 </tr>
 </table>
 </form>
  <iframe src="" id="ifrm1" scrolling=no frameborder=no width=0 height=0 name="ifrm1"></iframe>
 </body>
</html>
