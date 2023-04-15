<!DOCTYPE html>
<html>
    <head>
        <title>Event-Registration</title>
        <link href="styles.css" rel="stylesheet">
    </head>
    <body>
        <?php
         error_reporting(0);
         $connect=mysqli_connect("localhost","root","root","fest_management") or die(" Connection Failed");
         $query="select reg_no from login order by id DESC limit 1";
         $x=mysqli_query($connect,$query);
         $y=mysqli_fetch_row($x);
         foreach($y as $i=>$i_r){
            $query1="select name from registration where reg_no=$i_r";
            $x1=mysqli_query($connect,$query1);
            $y1=mysqli_fetch_row($x1);
            foreach($y1 as $i1=>$i1_r){
                $par=$i1_r;
            }
         }
         ?>
        <form method="post" action="main.php">
            <div class="form-div">
                <h1>Event Registration</h1>
                <label>Select events</label>
                <div>
                    <input type="checkbox" name="event[]" value="e1">
                    <label>Cosmos</label>
                </div>
                <div>
                    <input type="checkbox" name="event[]" value="e2">
                    <label>Aperture</label>
                </div>
                <div>
                    <input type="checkbox" name="event[]" value="e3">
                    <label>IEEE</label>
                </div>
                <button type="submit">Submit</button>
            </div>
        </form>
        <div class=par-info>
            <h3>Name:<?php echo $par;?></h3>
            <h3>Registration No:<?php echo $i_r;?></h3>
        </div>
    </body>
</html>