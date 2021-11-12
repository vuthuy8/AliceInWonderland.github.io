<html>
<head>
<meta charset="utf-8">
<title>Đăng Nhập Trang Admin</title>
</head>
    <body>
<?php include("dbconnect.php") ?>
<?php
$tenkh =$_POST[tenkh];
$diachi =$_POST[diachi];
$dienthoai =$_POST[dienthoai];
$email =$_POST[email];
$ykien =$_POST[ykien];
$result =mysql_query("INSERT INTO lienhe (ten_kh,diachi,dienthoai,email,ykien) VALUES ('$tenkh', '$diachi', '$dienthoai', '$email', '$ykien')");
echo "<script>alert('Xin cảm ơn quý khách đã đóng góp ý kiến với chúng tôi.');location='index.php';</script>"
?>
</body>
</html>