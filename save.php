<?php
$host='localhost';
$user='root';
$pass='';
$db='student';

//create connection
$conn=new mysqli($host,$user,$pass,$db);
echo 'connection success...';

$sid=$_POST['sid'];
$sna=$_POST['sna'];

$sql="insert into student_det(sid,sna) values('$sid','$sna')";

$res=$conn->query($sql);

if($res==TRUE)
{
    echo '<br>Data insertion Success...';
}
else
{
    echo 'Error...';
}

$conn->close();
?>