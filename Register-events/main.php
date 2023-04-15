<?php
error_reporting(0);
$connect=mysqli_connect("localhost","root","root","fest_management") or die(" Connection Failed");
$query="select reg_no from login order by id DESC limit 1";
$x=mysqli_query($connect,$query);
$y=mysqli_fetch_row($x);
foreach($y as $i=>$i_r){
    $par=$i_r;
}
if(!empty($_POST['event'])){
    foreach($_POST['event'] as $value){
        $query1="select ename from events where eid='$value'";
        $x1=mysqli_query($connect,$query1);
        $y1=mysqli_fetch_row($x1);
        foreach($y1 as $i1=>$i1_r){
            $par1=$i1_r;
        }
        $query2="insert into register_events values($par,'$par1','$value')";
        mysqli_query($connect,$query2);
    }
}
?>