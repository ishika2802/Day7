<html>
<head>
<title>form without template</title>
</head>
<body>
<h2>Registration Form</h2>
    <form method="POST" action="insert.php">
    Id <input type="number" name="st_id" required>
    <br><br>
    Enrollment <input type="number" name="st_enroll" required>
    <br><br>
    Name <input type="text" name="st_name" required>
    <br><br>
    Password <input type="password" name="st_pwd" required>
    <br><br>
    Email <input type="email" name="st_email" required>
    <br><br>
    Semester <input type="number" name="st_sem" min="1" max="8" required>
    <br><br>
    Mobile <input type="number" name="st_mobile" required>
    <br><br>
    Birthdate <input type="date" name="st_dob" required>
    <br><br>
    Address <textarea name="st_ad"></textarea>
    <br><br>
    City <select name="st_city">
    <option>Ahmedabad</option>
    <option>Surat</option>
    <option>Vadodra</option>
    <option>Bharuch</option>
    <option>Rajkot</option>
    <option>Junagadh</option> 
    </select>
    <br><br>
    <input type="Submit">
    </form>
    <a href="deletedata.php">display data</a>
</body>
</html>
