<meta charset="utf-8">
<?php include("connect.php")?>
<?php 
	$taikhoan=$_POST["hoten"];
    $matkhau=md5($_POST["matkhau"]);
    $result= mysql_query("INSERT INTO login(hoten,matkhau) VALUES ('$taikhoan','$matkhau')");
   echo"<script>alert('Bạn đã thêm tài khoản thành công');location='admin.php?admin=quanly';</script>"
?>