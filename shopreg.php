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
				<li><a href="womenhome.php">Woman</a></li>
				<li><a href="#">Man</a></li>
				<li><a href="reg1.php">Registration</a></li>
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
	<script language="javascript">
function abc()
{
if(document.form1.name.value==""||document.form1.email.value==""||document.form1.no.value==""||document.form1.password.value==""||document.form1.shopreg.value==""||document.form1.shopowner.value==""||document.form1.street.value==""||document.form1.locality.value==""||document.form1.district.value==""||document.form1.state.value=="")
{
alert("enter the details");
return(false);
}
if((document.form1.name.value)==true)
{
alert("Enter name");
return(false);
}
if(document.form1.email.value.indexOf("@")==-1 || document.form1.email.value.indexOf(".")==-1 || document.form1.email.value.indexOf(",")!=-1 || document.form1.email.value.indexOf(" ")!=-1)
{
alert("Invalid email");
return (false);
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
if((document.form1.password.value)==true)
{
alert("Enter password");
return(false);
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
if(isNaN(document.form1.shopreg.value)==true)
{
alert("enter shop registration number");
return(false);
}
if((document.form1.shopowner.value)==true)
{
alert("enter name of owner of shop");
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
	<div class="page-area contact-page">
		<div class="container spad">
			<div class="text-center">
				<h4 class="contact-title">Get in Touch</h4>
			</div>
			<form class="contact-form" name="form1" onSubmit="return abc()" method="POST">
				<div class="row">
					<div class="col-md-6">
						<input type="text" placeholder="Name *" name="name"> 
					</div>
				
					<div class="col-md-6">
						<input type="email" placeholder="Email*" name="email">
						</div>
						<div class="col-md-6">
						<input type="text" placeholder="Contact No *" name="no"> 
					</div>
					<div class="col-md-6">
						<input type="text" placeholder="Password *" name="password"> 
					</div>
					<div class="col-md-6">
						<input type="text" placeholder="Shop Reg No *" name="shopreg"> 
					</div>
					<div class="col-md-6">
						<input type="text" placeholder="Shop Owner*" name="shopowner"> 
					</div>
					<div class="col-md-6">
						<input type="text" placeholder="Street *" name="street"> 
					</div>
					<div class="col-md-6">
						<input type="text" placeholder="locality *" name="locality"> 
					</div>
					<div class="col-md-6">
						<input type="select" placeholder="District"<div><select name="district">
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
</select></div>
<div class="col-md-6">
						<input type="select" placeholder="State"<div><select name="state">
						<option>Kerala</option>
<option>Tamil Nadu</option>
<option>Karnataka</option>
</select></div>
					</div>
					
						<div class="text-center">
							<button class="site-btn" value="submit" name="submit">Register</button>
						</div>
					</div>
				</div>
			</form>
			
		</div>
		<?php
include "connection.php";

if(isset($_POST['submit']))
{
$na=$_POST["name"];
$do=$_POST["email"];
$gen=$_POST["no"];
$em=$_POST["password"];
$pi=$_POST["shopreg"];
$pa=$_POST["shopowner"];
$st=$_POST["street"]; 
$loc=$_POST["locality"];
$di=$_POST["district"];
$sta=$_POST["state"];
$sql="insert into login(username,password,usertype,role) values('$do','$em',2,'shop')";
 $obj=new db();
$obj->execute($sql);
$sel="select loginid from login where username='$do' and password='$em'";
$login=$obj->execute($sel);
$strr=mysqli_fetch_array($login);
$lo=$strr[0];
$sqlll="insert into registration_shop(`name`,`contact_no`,`shopreg_no`,`shop_owner`,`street`,`locality`,`district`,`state`,loginid) values ('$na','$gen','$pi','$pa','$st','$loc','$di','$sta',$lo)";
 $objj=new db();
 $objj->execute($sqlll);
 echo "<script> alert('success');
 window.location='minnu.php'</script>";
 
}
?>
	
	
					
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


