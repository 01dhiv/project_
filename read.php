<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <style>
        a {
            padding-right: 25px;
            text-decoration: none;
            color: gold;
        }

        #hd {
            background-color: rgb(128, 0, 75);
            color: silver;
        }
    </style>
    </head>
<body>

 <div id="hd">
        <h3>Student Details</h3>
            <hr>
        

        <div id="nav">
       <a href="Home2.html">Home</a>
            <a href="New_Student.html">New Student</a>
            <a href="Update.html">Modify Student</a>
            <a href="Remove.html">Remove Student</a>
            <a href="Read.php">View Student</a>
        </div>
    </div>
    <?php

$host='localhost';
$user='root';
$pass='';
$db='student';

$conn=new mysqli($host,$user,$pass,$db);
//echo 'Connection Success...<br>';

$sql="select * from student_det";

$res=$conn->query($sql);

if($res->num_rows>0)
{  
    echo "<table border='1' align='center'>";
    while($row=$res->fetch_assoc())
    {
        echo "<tr>";
      echo '<td>'.$row['sid'].'</td>';
      echo '<td>'.$row['sname'].'</td>';
      echo '<td>'.$row['scon'].'</td>';
    echo "</tr>";
    }
    echo "</table>";
}
else
{
    echo 'Record is empty...';
}

$conn->close();
?>
</body>
</html>