<?php 
$admin=$_GET["admin"];
switch($admin)
	{
		case "menu" :
			include ("menu1.php") ;
			break;

		case "quanly" :
		include ("quanly.php") ;
		break;
		
		case "add" :
		include ("add.php") ;
		break;
		
		case "edit" :
		include ("edit.php") ;
		break;
		
		case "delete" :
		include ("delete.php") ;
		break;
		
/*************************danh muc ********************/		
		case "danhmuc" :
		include ("danhmuc.php") ;
		break;
		
		case "edit_dm" :
		include ("edit_dm.php") ;
		break;
		
		case "add_dm" :
		include ("add_dm.php") ;
		break;
		
		case "delete_dm" :
		include ("delete_dm.php") ;
		break;
		
		
/**********************san pham**********************/		
		case "add_sanpham" :
		include ("add_sanpham.php") ;
		break;
		case "xoa_sp" :
		include ("xoa_sp.php") ;
		break;
/*************************Thoi su******/		
		case "add_ts" :
		include ("add_ts.php") ;
		break;
		
		case "xoa_ts" :
		include ("xoa_ts.php") ;
		break;
		
		
		
		case "upload" :
		include ("upload.php") ;
		break;
	}
	
?>