<?php

$id = $_GET['id'];
$name = $_GET['name'];
$cv = $_GET['cv'];

$requestID = $_REQUEST['id'];
$requestName = $_REQUEST['name'];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Application Result</title>
</head>
<body>

<h2>=================================</h2>
<h2>APPLICATION SUCCESSFUL</h2>
<h2>=================================</h2>

Applicant ID: <?php echo $id; ?><br><br>

Name: <?php echo $name; ?><br><br>

Uploaded CV: <?php echo $cv; ?><br><br>

Application submitted successfully.

<hr>

<h3>Using PHP Superglobals</h3>

GET Applicant ID: <?php echo $_GET['id']; ?><br>

GET Name: <?php echo $_GET['name']; ?><br>

REQUEST Applicant ID: <?php echo $requestID; ?><br>

REQUEST Name: <?php echo $requestName; ?><br>

SERVER NAME:
<?php echo $_SERVER['SERVER_NAME']; ?><br>

REQUEST METHOD:
<?php echo $_SERVER['REQUEST_METHOD']; ?>

</body>
</html>