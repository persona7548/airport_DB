<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?
 $conn=mysql_connect("localhost","root","apmsetup");
 mysql_select_db("airport",$conn);
 mysql_query("SET NAMES 'utf-8'");
 mysql_query("set session character_set_connection=utf8;");
 mysql_query("set session character_set_results=utf8;");
 mysql_query("set session character_set_client=utf8;");
?>
