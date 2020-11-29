<?php

$name=$_POST['a'];
$mob_no=$_POST['b'];
$visitor_email=$_POST['c'];
$occpt=$_POST['d'];
$query=$_POST['e'];


$to = "sales@enersum.in";
$subject = "Query from $name";
$txt = "Name: $name \n
Mobile No: $mob_no \n
Email ID: $visitor_email \n
Occupation: $occpt \n
\n
$name wants to know,
$query

";
$headers = "From: $visitor_email";

mail($to,$subject,$txt,$headers);
header("location: index.html");
?>