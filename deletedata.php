<?php

$con = mysqli_connect("localhost", "root", "", "table1");

if(!$con){
    die(mysqli_connect_error());
}   
    
    $data = mysqli_query($con, "select * from tbl_student where is_delete = 0");
    echo"<table border = 1>";
    echo"<tr>";
    echo"<th>Id</th>";
    echo"<th>Enrollment</th>";
    echo"<th>Name</th>";
    echo"<th>Password</th>";
    echo"<th>Email</th>";
    echo"<th>Semester</th>";
    echo"<th>Mobile</th>";
    echo"<th>Birthdate</th>";
    echo"<th>Address</th>";
    echo"<th>City</th>";
    echo"<th>Action</th>";
    echo"</tr>";

       
        while($row = mysqli_fetch_array($data)){
        echo"<tr>";
        echo"<td>{$row['st_id']}</td>";
        echo"<td>{$row['st_enroll']}</td>";
        echo"<td>{$row['st_name']}</td>";
        echo"<td>{$row['st_pwd']}</td>";
        echo"<td>{$row['st_email']}</td>";
        echo"<td>{$row['st_sem']}</td>";
        echo"<td>{$row['st_mobile']}</td>";
        echo"<td>{$row['st_dob']}</td>";
        echo"<td>{$row['st_ad']}</td>";
        echo"<td>{$row['st_city']}</td>";
        echo"<td><a href = 'delete.php?deleteid={$row['st_id']}'>Delete</a></td>";
        echo"</tr>";
        }
    echo"</table>";
    echo"<a href='form2.php'>insert data</a>";
    ?>

   
   
   