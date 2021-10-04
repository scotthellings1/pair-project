<?php include_once($_SERVER['DOCUMENT_ROOT'] . "/pair-project/inc/dbh.php");

$first   =   mysqli_real_escape_string($conn, $_POST['first']);
$last    =   mysqli_real_escape_string($conn, $_POST['last']);
$email   =   mysqli_real_escape_string($conn, $_POST['email']);
$phone   =   mysqli_real_escape_string($conn, $_POST['phone']);
$date    =   mysqli_real_escape_string($conn, date('Y-m-d H:i:s'));
$subject =   mysqli_real_escape_string($conn, $_POST['subject']);
$message =   mysqli_real_escape_string($conn, $_POST['message']);
$gdpr    =   "";

if(isset($_POST['gdpr'])) {
  $gdpr = "checked";
} else {
  $gdpr = "unchecked";
}

$sql = "INSERT INTO contact_details (first_name, last_name, email, phone_num,
   date, subject, content, gdpr) VALUES ('$first', '$last', '$email', '$phone',
     '$date', '$subject', '$message', '$gdpr');";

if ($first && $last && $email && filter_var($email, FILTER_VALIDATE_EMAIL)) {
  mysqli_query($conn, $sql);
  header("Location: ../pages/contact.php?submit=success");
} else {
  header("Location: ../pages/contact.php?submit=fail");
  // echo "<script>alert('Please check the fields with asterisks ( * ) are filled in and resubmit')</script>";
}

// ground work for email once xampp server is figured out.

// $to = "alex.mckendrick@gmail.com";
// $msg = "$message \n $first $last \n $email \n $date";
// $msg = str_replace("\n.", "\n..", $msg);
// $msg = wordwrap($msg, 70);
// mail($to, $subject, $msg);
