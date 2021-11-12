<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> Tiệm Thời Trang Của Alice</title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/header.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
</head>
<body>
  <?php include("slide.php");?>
<div class="header" style="display: block;">


  <div id="navbar">
    <a class="active" href="index.php">Trang Chủ</a>
    <div class="subnav">
      <button class="subnavbtn">Phong Cách <i class="fa fa-caret-down"></i></button>
      <div class="subnav-content">
        <a href="./lolita.php">Lolita</a>
        <a href="#team">JK</a>
        <a href="#careers">Quân Nhân</a>
        <a href="#team">Vantage</a>
        <a href="#team">Rococo</a>
        <a href="#team">Baroque </a>
        <a href="#team">Gothic</a>
      </div>
    </div> 
    <div class="subnav">
      <button class="subnavbtn">Phụ Kiện <i class="fa fa-caret-down"></i></button>
      <div class="subnav-content">
        <a href="#bring"> Chocker </a>
        <a href="#deliver"> Giày </a>
        <a href="#package"> Tóc Giả </a>
        <a href="#express">Ghim cài</a>
      </div>
    </div> 
   
    <a href="./lienhe.php">Liên Hệ</a>
 <a href="./admin/login.php"> Đăng Nhập </a> 
	  <img style="margin-left: 230px; " src="logo/logo-vuong-mien-dep-01.jpg" height="50px">
	  
    <div class="search-container" style="margin-top: 7px">
      <form action="/action_page.php">
        <input type="text" placeholder="Search.." name="search" style="margin-top: 10px;">
        <button type="submit" style="margin-top: 10px; background-color:white; "><i class="fa fa-search"></i></button>
      </form>
    </div>
	  
	  
</div>
<div class="content">    
<br>
</div>
	<div class="music">
<audio controls autoplay loop>
	<source src="music/Once Upon A December - Deana Carter.mp3">
	</audio></div><br><br><br><br>
<script>
  window.onscroll = function() {myFunction()};
  
  var navbar = document.getElementById("navbar");
  var sticky = navbar.offsetTop;
  
  function myFunction() {
    if (window.pageYOffset >= sticky) {
      navbar.classList.add("sticky")
    } else {
      navbar.classList.remove("sticky");
    }
  }
  </script>

</body>
</html>
