<?php

if ($_SERVER["REQUEST_METHOD"] != "POST") {
    die("Invalid Request");
}

$errors = [];

$applicant_id = trim($_POST['applicant_id']);
$fullname = trim($_POST['fullname']);
$email = trim($_POST['email']);
$phone = trim($_POST['phone']);
$password = $_POST['password'];
$gender = isset($_POST['gender']) ? $_POST['gender'] : "";
$position = $_POST['position'];
$qualification = trim($_POST['qualification']);
$address = trim($_POST['address']);

if ($applicant_id == "")
    $errors[] = "Applicant ID is required.";

if ($fullname == "")
    $errors[] = "Name is required.";

if (!filter_var($email, FILTER_VALIDATE_EMAIL))
    $errors[] = "Email is invalid.";

if (!preg_match("/^[0-9]{11}$/", $phone))
    $errors[] = "Phone number must contain 11 digits.";

if (strlen($password) < 6)
    $errors[] = "Password must be at least 6 characters.";

if ($gender == "")
    $errors[] = "Please select your gender.";

if ($position == "")
    $errors[] = "Please select a job position.";

if ($qualification == "")
    $errors[] = "Qualification is required.";

if ($address == "")
    $errors[] = "Address is required.";

if ($_FILES['cv']['error'] == 4) {
    $errors[] = "Please upload your CV.";
}

$fileName = "";

if ($_FILES['cv']['error'] == 0) {

    $fileName = basename($_FILES['cv']['name']);
    $temp = $_FILES['cv']['tmp_name'];
    $size = $_FILES['cv']['size'];

    $extension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

    $allowed = array("pdf", "doc", "docx");

    if (!in_array($extension, $allowed)) {
        $errors[] = "Only PDF, DOC and DOCX files are allowed.";
    }

    if ($size > 2 * 1024 * 1024) {
        $errors[] = "Maximum file size is 2 MB.";
    }
}

if (!empty($errors)) {

    echo "<h2>Application Failed!</h2>";

    foreach ($errors as $e) {
        echo $e . "<br>";
    }

} else {

    if (!is_dir("uploads")) {
        mkdir("uploads");
    }

    move_uploaded_file($temp, "uploads/" . $fileName);

    header("Location: result.php?id=$applicant_id&name=" . urlencode($fullname) . "&cv=" . urlencode($fileName));

    exit();
}

?>