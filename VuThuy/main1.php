<!doctype html>
<?php include("dbconnect.php");?>
<html>
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="css/main.css">
</head>

<body>
  <?php include("quangcao.php");?>
  <h1 style="
float:none;
 margin-left: auto;
 margin-right: auto;
 border:4px solid black; 
   color: white;
     width: 300px;
     height: 70px;
     padding-top: 7px;
     text-align: center;
     background-color: red;"><p class="test"> Sản Phẩm Hot     </p> </h1>
<br>
<table><td>
  <p style="color: red;
   text-shadow: 2px 1px 0px #CC0000;
    font: bold 35px 'Droid Sans', Arial, sans-serif;
     margin-left:70px;margin-top:5px;"> F⚡ASH SALE </p>
     </div>
</td><td>
    <div id="countdown">
 <div id='tiles'></div> 
   <div class="labels">
    <li>Ngày</li>
    <li>Giờ</li>
    <li>Phút</li>
    <li>Giây</li>
  </div></div>
</td>
</table>
<script>
var target_date = new Date().getTime() + (1000*3600*48); // set the countdown date
var days, hours, minutes, seconds; // variables for time units
var countdown = document.getElementById("tiles"); // get tag element
getCountdown();
setInterval(function () { getCountdown(); }, 1000);
function getCountdown(){
    // find the amount of "seconds" between now and target
    var current_date = new Date().getTime();
    var seconds_left = (target_date - current_date) / 1000;
    days = pad( parseInt(seconds_left / 86400) );
    seconds_left = seconds_left % 86400;
         
    hours = pad( parseInt(seconds_left / 3600) );
    seconds_left = seconds_left % 3600;
          
    minutes = pad( parseInt(seconds_left / 60) );
    seconds = pad( parseInt( seconds_left % 60 ) );
    // format countdown string + set tag value
    countdown.innerHTML = "<span>" + days + "</span><span>" + hours + "</span><span>" + minutes + "</span><span>" + seconds + "</span>"; 
}
function pad(n) {
    return (n < 10 ? '0' : '') + n;
}
</script>



	<div class="row1">
	<?php
	$query="select * from sanpham";
	$kq=mysql_query($query) or die(error());
	while($sp=mysql_fetch_array($kq))
	{
	?>
 
	    <div class="column">
      <div class="card">
        <img src=<?php echo $sp['anh_sp']?> height="350px">
        <div class="container">
          <h2 class="clothe"><?php echo $sp['ten_sp']?></h2>
          <p class="title">Phân Loại: <?php echo $sp['loai_sp']?></p>
         <h5 style="text-align:center;"> <del ><?php echo $sp['gia_sp']?>.000.vnđ </del></h5>
         <h4 style="color:red;text-align:center;"><?php echo $sp['gia_sp']?>.000.vnđ</h4>
          <p class="title">Khuyến mãi:<?php echo $sp['giamgia_sp']?>%</p>
          <p><button class="button">Mua Ngay </a></button></p>
        </div>
      </div>
    </div>
	<?php
	}
		?>
	</div>
	
	
</body>
</html>