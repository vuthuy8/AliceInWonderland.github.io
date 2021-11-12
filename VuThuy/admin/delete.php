<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
   include("connect.php");
$id=$_GET["id_login"];
mysql_query("DELETE FROM login where id_login='$id'");
 echo"<script>alert('Bạn đã xóa tài khoản thành công');location='admin.php?admin=quanly';</script>"
?>