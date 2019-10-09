<html
<head>
<script>
function validate()
{
	if(document.getElementById("username").value=="")

    {

     alert("Enter Your username !!");

     document.getElementById("username").focus();

     return false;

    }

if(document.getElementById("old").value=="")

    {

     alert("Enter Your Old Password !!");

     document.getElementById("old").focus();

     return false;

    }


	if(document.getElementById("new").value=="")

    {

     alert("Enter New Password !!");

     document.getElementById("new").focus();

     return false;

    }

     if(document.getElementById("new").value.length<4)

    {

    alert("Password must be of 4 or more characters");

    document.getElementById("new").focus();

    return false;

    }

    if(document.getElementById("conf").value=="")

    {

     alert("Enter confirm password");

     document.getElementById("conf").focus();

     return false;

    }
	 var cpwd =document.getElementById("conf").value;

     var pwde=document.getElementById("new").value;

     var matchArray = pwde.match(cpwd);

     if (matchArray == null)

    {

               alert("Your confirm password seems incorrect. Enter Correct confirm password");

               document.getElementById("conf").focus();

               return false;

    }
	
return true;
}

</script>
<style>
.navbar {
    overflow: hidden;
    background-color: black;
    font-family: Arial, Helvetica, sans-serif;
}
.navbar a.active {
  background-color:green;
  color: white;
}

.navbar a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}
.navbar a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}
input[type=submit] {
    width: 40%;
  
    background-color: #4CAF50;
    color: white;
    padding: 10px 10px;
    margin: 8px 0;
    border: none;
    border-radius: 6px;
    cursor: pointer;
}

.header{
padding: 20px;
text-align: center;
background: #1abc9c;
color: white;
}
</style>
</head>
<body>
<div class="header">
<h1> The Shoppie</h1><br>
</div>
<div class="navbar">
  <a  class="active" href="index.html">Home</a>
  
 
<a href="minnu.php">Logout</a>
</div>
<?php 
include("connection.php");


if(isset($_POST['button']))
{
$uname=	$_POST["username"];
$old=$_POST["old"];
$new=$_POST["new"];
$conf=$_POST["conf"];
$obj=new db();
$select=mysqli_query($con,"select * from login where username='$uname' and password='$old'");
echo $select;
	$data=$obj->execute($select);
	
if(mysqli_num_rows($data)>0)
{
	
	if ($new==$conf)
	{ 
	mysqli_query($con,"update login set password='$new' where username='$uname'");
	?>
		<script>
		alert("successfully updated")
		</script>
		<?php
	}
	else
	{
		?>
		<script>
		alert("Password MisMatch")
		</script>
	
<?php
	}
}
else
{
	
	?>
    
    <script>
	alert("Password Does not existsss")
	</script>    
    <?php }
}?>





<body>
<form action="" method="post">
<h1 align="center">Change Password</h1>
<p></p>
<table width="446" border="0" bgcolor="#D8D8D8" align="center">
  <tr>
    <th width="205" scope="row">User Name:&nbsp;</th>
    <td width="225"><input name="username" id="username" type="text" required="true" />&nbsp;</td>
  </tr>
  <tr>
  <tr>
    <th width="205" scope="row">Old password:&nbsp;</th>
    <td width="225"><input name="old" id="old" type="text" />&nbsp;</td>
  </tr>
  <tr>
    <th scope="row">New password:&nbsp;</th>
    <td><input name="new" id="new" type="password" />&nbsp;</td>
  </tr>
  <tr>
    <th scope="row">Confirm password:&nbsp;</th>
    <td><input name="conf" id="conf" type="password" />&nbsp;</td>
  </tr>
  <tr>
    <th colspan="2" scope="row"><input name="button" type="submit" value="submit" onclick="return validate()" />&nbsp;</th>
  </tr>
</table>

</form>
</body>

</html>

