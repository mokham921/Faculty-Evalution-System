<?php
session_start();
include("../connect.php");

$qid=$_SESSION['id'];
$ques=$_SESSION['ques'];



$sql="UPDATE question set question='$ques' where qid='$qid'";
$result=mysqli_query($conn,$sql);
header("Location:admin_giveQuestion(select).php");


?>