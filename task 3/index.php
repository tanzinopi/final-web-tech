<!DOCTYPE html>
<html>
<head>
    <title>Student Registration</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>

<div class="container">
    <h2>Student Registration Form</h2>

    <form action="submit.php" method="POST">

        <label>Student Name:</label>
        <input type="text" name="student_name" required>

        <label>Student ID:</label>
        <input type="text" name="student_id" required>

        <label>Email:</label>
        <input type="email" name="email" required>

        <label>Department:</label>
        <input type="text" name="department" required>

        <button type="submit">Register</button>

    </form>
</div>

</body>
</html>