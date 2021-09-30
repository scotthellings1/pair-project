<?php include_once($_SERVER['DOCUMENT_ROOT'] . "/pair-project/inc/dbh.php");

$first = $_POST['first'];
$last = $_POST['last'];
$email = $_POST['email'];
$date = date('Y-m-d H:i:s');
$subject = $_POST['subject'];
$message = $_POST['message'];


$sql = "INSERT INTO contact_details (first_name, last_name, email, date,
  subject, content) VALUES ('$first', '$last', '$email', '$date', '$subject',
  '$message');";
mysqli_query($conn, $sql);

$to = "alex.mckendrick@gmail.com";
$msg = "$message \n $first $last \n $email \n $date";
$msg = str_replace("\n.", "\n..", $msg);
$msg = wordwrap($msg, 70);
mail($to, $subject, $msg);

header("Location: ../pages/contact.php?submit=success");
