<!DOCTYPE html>
<html>
<head>
    <title>Online Job Application</title>
</head>
<body>

<h2>Online Job Application Form</h2>

<form action="process.php" method="POST" enctype="multipart/form-data">

    Applicant ID:<br>
    <input type="text" name="applicant_id"><br><br>

    Full Name:<br>
    <input type="text" name="fullname"><br><br>

    Email:<br>
    <input type="email" name="email"><br><br>

    Phone Number:<br>
    <input type="text" name="phone"><br><br>

    Password:<br>
    <input type="password" name="password"><br><br>

    Gender:<br>
    <input type="radio" name="gender" value="Male"> Male
    <input type="radio" name="gender" value="Female"> Female
    <br><br>

    Job Position:<br>
    <select name="position">
        <option value="">Select Position</option>
        <option>Software Developer</option>
        <option>Web Developer</option>
        <option>Database Administrator</option>
        <option>Network Engineer</option>
    </select>
    <br><br>

    Educational Qualification:<br>
    <input type="text" name="qualification"><br><br>

    Address:<br>
    <textarea name="address"></textarea><br><br>

    Upload CV:<br>
    <input type="file" name="cv"><br><br>

    <input type="submit" value="Apply">

</form>

</body>
</html>