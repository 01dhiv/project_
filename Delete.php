<?php
$host='localhost';
$user='root';
$pass='';
$db='student';


//connection
$conn=new mysqli($host,$user,$pass,$db);
echo 'Connection Success...<br>';

$id=$_POST['sid'];
$sql="delete from studemnt_det where sid='$sid'";
$res=$conn->query($sql);
if($res==TRUE)
{
    echo 'Data Deletion Success...';
}
else
{
    echo 'Error...';
}

$conn->close();

?>