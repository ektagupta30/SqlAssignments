<?php
  include "passformail.php";
  mysqli_select_db($link,"fortesting");
  $yourname = $_GET['yourname'];
  $email = $_GET['email'];
  $comments = $_GET['comments'];
$to = "pgrocer11@mail.bristol.mass.edu";
$sqlgetct = mysqli_query($link,"SELECT * from infofromform");
$numrows = mysqli_num_rows($sqlgetct);
$yourid = $numrows + 1;
$sql = "INSERT INTO infofromform values ('$yourid', '$yourname', '$email', '$comments')";
$result= mysqli_query($link, $sql) or die(mysqli_error($link));
mail( $to, "Comments From Form", $comments, "From: $email" );
header( "Location: http://cisweb.bristol.mass.edu/~pgrocer/CIT32S10/emaildb/formdb/thankyoufromform.html" );
?>
