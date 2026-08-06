<?php
$studentName = "Rahim Ahmed";
$studentID   = "23-12345-1";
$choice      = 1;
$quantity    = 6;
$foodItem = "";
$price    = 0;
switch ($choice) {
    case 1:
        $foodItem = "Burger";
        $price = 5;
        break;
    case 2:
        $foodItem = "Pizza";
        $price = 8;
        break;
    case 3:
        $foodItem = "Sandwich";
        $price = 4;
        break;
    case 4:
        $foodItem = "Coffee";
        $price = 3;
        break;
    default:
        $foodItem = "Invalid Item";
        $price = 0;
        break;
}
$subtotal = $price * $quantity;
$discountPercent = 0;
if ($subtotal >= 30) {
    $discountPercent = 20;
} elseif ($subtotal >= 20) {
    $discountPercent = 10;
} else {
    $discountPercent = 0;
}
$discountAmt = ($subtotal * $discountPercent) / 100;
$finalBill   = $subtotal - $discountAmt;
echo "================================<br>";
echo " UNIVERSITY CAFETERIA<br>";
echo "================================<br>";
echo "Student Name : " . $studentName . "<br>";
echo "Student ID   : " . $studentID . "<br>";
echo "Food Item    : " . $foodItem . "<br>";
echo "Price        : $" . $price . "<br>";
echo "Quantity     : " . $quantity . "<br>";
echo "Ordered Items:<br>";
for ($i = 1; $i <= $quantity; $i++) {
    echo "Item " . $i . ": " . $foodItem . "<br>";
}
echo "Subtotal     : $" . $subtotal . "<br>";
echo "Discount     : " . $discountPercent . "%<br>";
echo "Discount Amt : $" . $discountAmt . "<br>";
echo "Final Bill   : $" . $finalBill . "<br>";
echo "Thank you for visiting!<br>";
echo "================================<br>";
?>