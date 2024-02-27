<?php
$host='localhost';
$user='root';
$pass='';
$db='student';

$conn=new mysqli($host,$user,$pass,$db);
echo 'Connection Success...<br>';

$sid=$_POST['sid'];
$sna=$_POST['sna'];
$scon=$_POST['scon'];

$sql="update student_det set sid='$sid',sna='$sna' where scon='$scon'";

$res=$conn->query($sql);

if($res==TRUE)
{
    echo 'Data updation Success...';
}
else 
{
    echo 'Error...';
}

$conn->close();
?>