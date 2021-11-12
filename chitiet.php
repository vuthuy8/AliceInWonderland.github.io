<!DOCTYPE html>
<?php include("dbconnect.php");?>
<html>
<title>sp1</title>
<meta charset="utf8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="./csssp1.css">

<body>
	<!--begin b1  -->	<?php
	$query="select * from sanpham";
	$kq=mysql_query($query) or die(error());
	while($sp=mysql_fetch_array($kq))

	{
	?>
<h1 class="w3-center" style="background-color: aquamarine;color: darkblue;">  <?php echo $sp['ten_sp']?></h1>

  <div class="clearfix">
    <img class="img1" src=<?php echo $sp['anh_sp']?> height="500px">
<h3 style="margin-left: 100px;"><?php echo $sp['ten_sp']?></h3>  
<div class="big-box">
  <div class="box-child">
    <div class="box-copy">
    <div class="box-sub-text">
        <span><?php echo $sp['khuyenmai_sp']?> .000vnđ  </span> <p><?php echo $sp['gia_sp']?>.000vnđ</p>
    </div>
      <div class="capacity"><?php echo $sp['ten_sp']?><br>Real<br><?php echo $sp['khuyenmai_sp']?>.000 vnđ </div>
      <div class="capacity"><?php echo $sp['ten_sp']?><br>Fake 1<br>Giảm 30%</div>
      <div class="capacity"><?php echo $sp['ten_sp']?><br>Fake 2<br>Giảm 50%</div>
    <div class="sale">
      <div class="sale1">Khuyến Mãi</div>
      <h3 style="text-align:center;"> Giảm giá: <?php echo $sp['giamgia_sp']?>%
      <br>Từ 15/10/2020 - 21/10/2020 <br> Chỉ 50 sản phẩm duy nhất!</h3>
      <div class="sale2"style="text-align:center;"> <h1>Nhanh tay đặt hàng nào!</h1></div>
    </div>
      <div class="form">
        <p>ĐĂNG KÝ NHẬN THÔNG TIN KHI CÓ HÀNG</p>
        <div class="contact-form">
          <input type="text" name="Họ Tên" placeholder="Họ Tên">
          <input type="text" name="Số Điện Thoại" placeholder="Số Điện Thoại">
          <input type="text" name="Email" placeholder="Email">
        </div>
          <input type="button" value="ĐĂNG KÝ ĐỂ NHẬN THÔNG TIN">
      </div>
    </div>
  </div>
  </div> 
  <?php
	}
		?>
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.4/TweenMax.min.js'></script><script  src="script.js"></script>
	
	<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>

</div>
</body>
</html>