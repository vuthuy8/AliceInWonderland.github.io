<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1600px;
  max-height: 520px;
  position: relative;
  margin: auto;
  margin-bottom: -25px;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}
.three_dot {
  text-align:center;
  position: absolute;
  top: 450px;
  right: 725px;


}

.active, .dot:hover {
background-color: black;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .1} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .1} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>
</head>
<body>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="./logo/2.jpg" style="width:1600px; height:520px;">

</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="https://thuthuatnhanh.com/wp-content/uploads/2020/03/hinh-nen-mau-xanh-duong-1.jpg" style="width:1600px; height:520px;">

</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="https://khohinhdep.com/wp-content/uploads/2017/11/30-hinh-nen-mau-hong-danh-cho-may-tinh-02.jpg" style="width:1600px; height:520px;">
  
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div class="three_dot">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
//khai b??o bi???n slideIndex ?????i di???n cho slide hi???n t???i
var slideIndex;
  // KHai b??o h??m hi???n th??? slide
  function showSlides() {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
         slides[i].style.display = "none";  
      }
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
      }
 
      slides[slideIndex].style.display = "block";  
      dots[slideIndex].className += " active";
      //chuy???n ?????n slide ti???p theo
      slideIndex++;
      //n???u ??ang ??? slide cu???i c??ng th?? chuy???n v??? slide ?????u
      if (slideIndex > slides.length - 1) {
        slideIndex = 0
      }    
      //t??? ?????ng chuy???n ?????i slide sau 5s
      setTimeout(showSlides, 3000);
  }
  //m???c ?????nh hi???n th??? slide ?????u ti??n 
  showSlides(slideIndex = 1);
 
 
  function currentSlide(n) {
    showSlides(slideIndex = n);
  }
</script>

</body>
</html> 
