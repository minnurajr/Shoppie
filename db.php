<html>
<body>
<?php
$server="localhost";
$user="root";
$pwd="";
$con=mysqli_connect($server,$user,$pwd);
if($con )
          {
            echo "db connected";
            $q="create database keshu";
           $db=mysqli_query($con,$q);
            echo "db created";
            }
          else
         {
           echo "connection failed";
        }
?>
</body>
</html>