<!DOCTYPE html>
<html>
	<?php include("dbconnect.php")?>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical; 
 width:1000px;
}
label{
    color:white;
    font-size:25px;
    text-shadow: 2px 1px grey;
}
.laby{
   border-style: 1px solid white;
      background-image: url("https://thuthuatnhanh.com/wp-content/uploads/2020/03/hinh-nen-mau-xanh-duong-1.jpg");
   background-size: cover;
   width: 1200px;
   height: 1100px;
   padding-left: 100px;
   border-radius: 5px;
   padding-top: 50px;
}
input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;

}
input[type=reset] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;  
  border-radius: 4px;
  cursor: pointer;
	}

input[type=submit]:hover {
  background-color: black;
}
input[type=reset]:hover {
  background-color: #45a049;
}


.container {
   
  border-radius: 5px;
  padding: 80px;
  background-position: right bottom, left top;
  background-repeat: no-repeat;

}
</style>
</head>
<body>
	<div id="header">
		<?php include("header.php")?>
	</div>

  <form id="form1" name="form1" method="post" action="xlylienhe.php" > 
</form>
<div class="container">
    <div class="laby">
        <p style="text-align:center;    color:white;text-transform: uppercase; font-size:35px; padding-right:50px;
    text-shadow: 2px 1px grey;" class="container">Gửi Ý Kiến Phản Hồi</p>

<form action="xlylienhe.php" method="post"> 
    <label for="tenkh">Họ và tên</label><br>
    <input type="text" id="tenkh" name="tenkh" placeholder="Họ và tên">
<br>
    <label for="diachi">Địa chỉ</label><br>
    <input type="text" id="diachi" name="diachi" placeholder="Địa chỉ">
    <br>
    <label for="dienthoai">Điện thoại</label><br>
	<input type="text" id="dienthoai" name="dienthoai" placeholder="Điện thoại">
    <br>	  
    <label for="email">Email</label><br>
	<input type="text" id="email" name="email" placeholder="Email">
    <br>
    <label for="ykien">Ý kiến</label><br>
    <textarea id="ykien" name="ykien" placeholder="Ý kiến của bạn.." style="height:200px"></textarea>
    <br>
    <input type="submit" value="Gửi ý kiến">
	<input type="reset" value="Hủy bỏ">	</form>
 </div>
</div>


	<div id="footer">
		<?php include("footer.php")?>
	</div>

</body>
</html>
