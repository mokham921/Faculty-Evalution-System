<?php
session_start();

?>
<?php

  include('connect.php');
 //$db=mysqli_connect("localhost","root","",'thpj');
  //mysql_select_db('thpj');

  if(isset($_POST['button']))
  {
  $email=$_POST['email'];
  $password=$_POST['password'];
  
   //echo $email." ".$password;
  
  //$select="select aemail,aps from admin";
  //$run=mysqli_query($select);

$run1=mysqli_query($conn,"SELECT aid from admin where aemail='$email' and aps='$password'");
$run2=mysqli_query($conn,"SELECT fid from faculty where femail='$email' and fps='$password'");
$run3=mysqli_query($conn,"SELECT sid from student where semail='$email' and sps='$password'");


$count1=mysqli_num_rows($run1);
$count2=mysqli_num_rows($run2);
$count3=mysqli_num_rows($run3);


     /* $run1=$run1->fetch_array();
      $stud_id=$run1[0];
      echo $stud_id;
      $run2=$run2->fetch_array();
      $run3=$run3->fetch_array();
   */
      $adminid=mysqli_fetch_array($run1);
      $aid=$adminid['aid'];

      $techid=mysqli_fetch_array($run2);
      $fid=$techid['fid'];

      $studid=mysqli_fetch_array($run3);
      $sid=$studid['sid'];






if($count1==1)

{
    $_SESSION['eid']=$aid;
     echo "<script> location.assign('admin/admin_home.php');   </script>";
    
}
elseif($count2==1)
{
    $_SESSION['eid']=$fid;
   echo "<script>
    alert('Success login');
    location.assign('teacher/teacher_home.php');
    </script>";
}
elseif($count3==1)
{
    $_SESSION['eid']=$sid;
   echo "<script>
    alert($stud_id);
    location.assign('student/student_home.php');
    </script>";
}
else
{
  echo "Invalid data";
}
  }

?>