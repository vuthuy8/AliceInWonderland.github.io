<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

/* Create a column layout with Flexbox */
.row {
  display: flex;
  background-image: url("https://thuthuatnhanh.com/wp-content/uploads/2020/08/hinh-nen-dong-ho-mau-tim-cho-may-tinh.jpg");
}

/* Left column (menu) */
.left {
  flex: 35%;
  padding: 15px 0;
}

.left h2 {
  padding-left: 8px;
}

/* Right column (page content) */
.right {
  flex: 65%;
  padding: 15px;
}

/* Style the search box */
#mySearch {
  width: 100%;
  font-size: 18px;
  padding: 11px;
  border: 1px solid #ddd;
}

/* Style the navigation menu inside the left column */
#myMenu {
  list-style-type: none;
  padding: 0;
  margin: 0;

}

#myMenu li a {
  padding: 12px;
  text-decoration: none;
  color: white;
  display: block;
  
}

#myMenu li a:hover {
  background-color: #eee;
  color:black;
}
</style>
</head>
<body>
<div class="row">
  <div class="left" style="color:white;">
    <a href="?admin=menu" style="color:white;"><h2>Menu</h2></a>
    <input type="text" id="mySearch" onkeyup="myFunction()" placeholder="Search.." title="Nhập nội dung tìm kiếm...">
    <ul id="myMenu">
      <li><a href="?admin=quanly">Quản Lý</a></li>
      <li><a href="#">Sản Phẩm Hot</a></li>
      <li><a href="#">Liên Hệ</a></li>
      <li><a href="#">Quảng Cáo</a></li>
      <li><a href="#">Sản Phẩm</a></li>
      <li><a href="#">Chương Trình Ưu Đãi</a></li>
      <li><a href="#">Giới Thiệu</a></li>
     
    </ul>
  </div>
  

<script>
function myFunction() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("mySearch");
  filter = input.value.toUpperCase();
  ul = document.getElementById("myMenu");
  li = ul.getElementsByTagName("li");
  for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("a")[0];
    if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
}
</script>

</body>
</html>
