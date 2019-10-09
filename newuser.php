<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>The Shoppie</title>
	<meta charset="UTF-8">
	<meta name="description" content="The Plaza eCommerce Template">
	<meta name="keywords" content="plaza, eCommerce, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="css/animate.css"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
	
	<!-- Header section -->
	<header class="header-section header-normal">
		<div class="container-fluid">
			<!-- logo -->
			<div class="site-logo">
				<img src="img/logon.png" alt="logo">
			</div>
			<!-- responsive -->
			<div class="nav-switch">
				<i class="fa fa-bars"></i>
			</div>
			<div class="header-right">
				<a href="cart.html" class="card-bag"><img src="img/icons/bag.png" alt=""><span>2</span></a>
				<a href="#" class="search"><img src="img/icons/search.png" alt=""></a>
			</div>
			<!-- site menu -->
			<ul class="main-menu">
				<li><a href="index.html">Home</a></li>
				<li><a href="#">Woman</a></li>
				<li><a href="#">Man</a></li>
				<li><a href="reg1.php">Back</a></li>
				<li><a href="minnu.php">Login</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul>
		</div>
	</header>
	<!-- Header section end -->


	<!-- Page Info -->
	<div class="page-info-section page-info">
		<div class="container">
			<div class="site-breadcrumb">
				<a href="">Home</a> /
				<span>Register</span>
			</div>
			<img src="img/page-info-art.png" alt="" class="page-info-art">
		</div>
	</div>
	<!-- Page Info end -->


	<!-- Page -->
	
	</div>
<script language="javascript">
function abc()
{
if(document.form1.name.value==""||document.form1.dob.value==""||document.form1.gender.value==""||document.form1.no.value==""||document.form1.email.value==""||document.form1.pincode.value==""||document.form1.password.value==""||document.form1.hname.value==""||document.form1.street.value==""||document.form1.locality.value==""||document.form1.district.value==""||document.form1.state.value=="")
{
alert("enter the details");
return(false);
}
if((document.form1.name.value)==true)
{
alert("Enter name");
return(false);
}
if((document.form1.dob.value)==true)
{
alert("Enter date of birth");
return(false);
}
if((document.form1.gender.value)==true)
{
alert("Enter Your gender");
return(false);
}
if(isNaN(document.form1.no.value)==true)
{
alert("Phone should be numeric");
return(false);
}
if(document.form1.no.value.length<10)
{
alert("Phone should be min 10 digit");
return(false);
}
if(document.form1.email.value.indexOf("@")==-1 || document.form1.email.value.indexOf(".")==-1 || document.form1.email.value.indexOf(",")!=-1 || document.form1.email.value.indexOf(" ")!=-1)
{
alert("Invalid email");
return (false);
}
if(isNaN(document.form1.pincode.value)==true)
{
alert("Pin should be numeric");
return(false);
}
if(document.form1.pincode.value.length<6)
{
alert("Pin sholud be min 6 digit");
return(false);
}
if((document.form1.password.value)==true)
{
alert ("enter password");
return (false);
}
if((document.form1.password.value.length<8))
{
	alert("Password should min 8 character");
	return(false);
}
if(document.form1.password.value.indexOf("@")==-1 || document.form1.password.value.indexOf(",")!=-1 || document.form1.password.value.indexOf(" ")!=-1)
{
alert("Password must contain @ and not include any space and dot");
return (false);
}
if((document.form1.hname.value)==true)
{
alert("Enter your house name");
return(false);
} 
if((document.form1.street.value)==true)
{
alert("Enter your street");
return(false);
} 
if((document.form1.locality.value)==true)
{
alert("Enter your locality");
return(false);
} 
if((document.form1.district.value)==true)
{
alert("Enter your district");
return(false);
}
if((document.form1.state.value)==true)
{
alert("Enter your state");
return(false);
}  
}
 </script>
</head>
	<body>
		   <div class="align-left">

		<h1 style="text-align:center; color:white;">Register Here</h1>
        
		<form action="newregu.php" name="form1" onSubmit="return abc()" method="POST">
        
        
 
       
        
      
<table border="1" width="30%" align="center" cellspacing="10">
<tr><td>Name</td><td><input type="text" name="name" id="name"></td></tr>
<tr><td>DOB</td><td><input type="text" name="dob" id="dob"></td></tr>
<tr><td>Gender</td><td><input type="radio" name="gender" value="m" checked>Male
<input type="radio" name="gender" value="f">Female</td></tr>
<tr><td>Contact No</td><td><input type="text" name="no" id="no"></td></tr>
<tr><td>Email Id</td><td><input type="text" name="email" id="email"></td></tr>
<tr><td>Pin Code</td><td><input type="text" name="pincode" id="pincode"></td></tr>
<tr><td>Password</td><td><input type="password" name="password" id="password"></td></tr>
<tr><td>House Name</td><td><input type="text" name="hname" id="hname"></td></tr>
<tr><td>Street</td><td><input type="text" name="street" id="street"></td></tr>
<tr><td>Locality</td><td><input type="text" name="locality" id="locality"></td></tr>
<tr><td>District</td><td><select name="district">
<option>Tvm</option>
<option>Kollam</option>
<option>Pta</option>
<option>Alappuzha</option>
<option>Kottayam</option>
<option>Ekm</option>
<option>Idukki</option>
<option>Thrissur</option>
<option>Palakkad</option>
<option>Kozhikodu</option>
<option>Malappuram</option>
<option>Kannur</option>
<option>Wayanadu</option>
<option>Kazargodu</option>
<option>Chennai</option>
<tr><td>State</td><td><select name="state">
<option>Kerala</option>
<option>Tamil Nadu</option>
<option>Karnataka</option>
</select></td></tr>
<tr><td></td><td><input type="submit" name="submit" value="submit"></td></tr>
</center></table>

            
</form>
</div>

<?php


include "connection.php"; 

if(isset($_POST['submit']))
{
  $na=$_POST["name"];
$do=$_POST["dob"];
$gen=$_POST["gender"];
$no=$_POST["no"];
$em=$_POST["email"];
$pi=$_POST["pincode"];
$pa=$_POST["password"];
$hn=$_POST["hname"]; 
$st=$_POST["street"]; 
$loc=$_POST["locality"];
$di=$_POST["district"];
$sta=$_POST["state"];
$sql="insert into login(username,password,usertype,role) values('$em','$pa',1,'customer')";
$obj=new db();
$obj->execute($sql);
$sel="select loginid from login where username='$em' and password='$pa'";
$login=$obj->execute($sel);
$strr=mysqli_fetch_array($login);
$lo=$strr[0];
$sqlll="insert into registration_user(`name`,`dob`,`gender`,`mobno`,`pincode`,`hname`,`street`,`locality`,`district`,`state`,loginid) values ('$na','$do','$gen','$no','$pi','$hn','$st','$loc','$di','$sta',$lo)";
 $objj=new db();
 $objj->execute($sqlll);
 echo "<script> alert('success');
 window.location='minnu.php'</script>";
 
}
?>


            
<section class="footer-top-section home-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-8 col-sm-12">
					<div class="footer-widget about-widget">
						<img src="img/logon.png" class="footer-logo" alt="">
						<p>The Shoppie...Gives You Trendy And Good Quality Clothes For You.Come And Shop..Let's 
Make The World Looks Beautiful.</p>
						<div class="cards">
							<img src="img/cards/5.png" alt="">
							<img src="img/cards/4.png" alt="">
							<img src="img/cards/3.png" alt="">
							<img src="img/cards/2.png" alt="">
							<img src="img/cards/1.png" alt="">
						</div>
					
	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/mixitup.min.js"></script>
	<script src="js/sly.min.js"></script>
	<script src="js/jquery.nicescroll.min.js"></script>
	<script src="js/main.js"></script>
    </body>
</html>