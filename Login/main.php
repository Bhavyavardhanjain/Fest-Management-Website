<?php
error_reporting(0);
$connect=mysqli_connect("localhost","root","root","registration") or die(" Connection Failed");
$name=$_POST["name"];
if($name){
    $query="insert into register values('$name')";
    mysqli_query($connect,$query);
}
?>