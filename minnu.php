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
				<li><a href="womn1.php">Woman</a></li>
				<li><a href="">Man</a></li>
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
				<span>Login</span>
			</div>
			<img src="img/page-info-art.png" alt="" class="page-info-art">
		</div>
	</div>
	<!-- Page Info end -->


	<!-- Page -->
	<script language="javascript">
function abc()
{
	if(document.form1.username.value==""||document.form1.password.value=="")
	{
		alert("Enter the details");
		return(false);
	}
	if((document.form1.username.value)==true)
{
alert("Enter username");
return(false);
}
if((document.form1.password.value)==true)
{
alert("Enter password");
return(false);
}
}
</script>

</head>
	<body>
		<div class="align-center">

		<form action="minnu.php" name="form1" onSubmit="return abc()" method="POST">

       <center><table width="25%" border="1"  align="center" cellspacing="10">
<tr>
<td colspan="2" align="center"><h3><i>Login</i></font></h3></td>
</tr>
<tr>
<td>Username</td>
<td><input name="username" type="text" id="username" title="Must match field"></td>
</tr>
<tr>
<td>Password</td>
<td><input name="password" type="password" id="password" title="Must match field"></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" name="submit" id="submit" value="Login"></td>
</tr>
<tr>
<td colspan="2">Not Have An Account!!Register Here<a href="reg1.php">sign up</a></td></tr>
       
         </table>
		 </form>
		<?php 

include("connection.php");
session_start();
 if(isset($_POST['submit']))
 {
	$em=$_POST['username'];
	echo $em;
	$pa=$_POST['password'];
	echo $pa;
	$obj=new db();
	$select="select * from login where username='$em' and password='$pa'";
	echo $select;
	$data=$obj->execute($select);
	if(mysqli_num_rows($data)>0)
	{
		while($row=mysqli_fetch_array($data))
		{
		
			if($row['role']=='admin')
			{
				$_SESSION['lid']=$row['loginid'];
				$_SESSION['role']=$row['role'];
				header("location:admin.html");
			}
			if($row['role']=='customer')
			{
				$_SESSION['lid']=$row['loginid'];
				$_SESSION['role']=$row['role'];
				header("location:userhome.php");
			}
                        if($row['role']=='shop')
			{
				$_SESSION['lid']=$row['loginid'];
				$_SESSION['role']=$row['role'];
				header("location:shop.html");
			}
                        
		}
	}
	else
	{
		?>
		<script>
		alert("check username and password");
		window.location="minnu.php";
		</script>
		<?php
		//echo "err";
		
	}
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


