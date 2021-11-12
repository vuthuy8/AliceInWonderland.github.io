<?php
$kq= mysql_connect("localhost","root","usbw");
if(!$kq)
{
	die('could not connect:'.mysql_error());
}
mysql_select_db("alice",$kq);
@mysql_query("SET NAMES utf8");
?>