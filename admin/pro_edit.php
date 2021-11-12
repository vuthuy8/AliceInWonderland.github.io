<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
include ("connect.php");
$id=$_GET["id_login"];
$hotenmoi=$_POST["hoten"];
$matkhaumoi=$_POST["matkhau"];
$result=mysql_query("update login set hoten='".$hotenmoi."', matkhau='".$matkhaumoi."' where id_login='$id'");
echo "<script>alert('Bạn đã sửa thành công!');location='admin.php?admin=quanly'; </script>"
?>