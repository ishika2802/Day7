<?php
 $con = mysqli_connect("localhost", "root", "", "table1");
$id = $_GET['deleteid'];
$data1 = mysqli_query($con, "update tbl_student set is_delete = 1 where st_id='{$id}'") or die(mysqli_error($con));

if($con){
    echo"<script>alert('data deleted');window.location='deletedata.php';</script>";
}



