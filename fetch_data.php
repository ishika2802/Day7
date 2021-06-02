<?php
 $conn = mysqli_connect("localhost", "root", "", "table1");

 $a = mysqli_query($conn, "select * from tbl_student") or die(mysqli_error($conn));

 $row = mysqli_fetch_row($a);
 print_r($row);
 echo $row[0].$row[1].$row[2].$row[3];

 $row = mysqli_fetch_array($a);
 echo"<pre>";
 print_r($row);
 echo $row['st_id'].$row['st_enroll'].$row['st_name'].$row['st_pwd'].$row['st_email'].$row['st_sem'].$row['st_mobile'].$row['st_dob'].$row['st_ad'].$row['st_city'];

?>