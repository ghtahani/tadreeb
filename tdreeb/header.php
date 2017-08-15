<?php
    include 'config.php';
    
    if (isset($_SESSION["username"])) {
        $logged = $_SESSION["username"];
    }
    
    ?>

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title> تدريب </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

  	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
  	<link rel="shortcut icon" href="favicon.ico">

  	<!-- Google Webfont -->
	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
	<!-- Themify Icons -->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="css/superfish.css">
	<!-- Easy Responsive Tabs -->
	<link rel="stylesheet" href="css/easy-responsive-tabs.css">
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Theme Style -->
	<link rel="stylesheet" href="css/style.css">   

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>




		<!-- START #fh5co-header -->
		<header id="fh5co-header-section" role="header" class="" >
			<div class="container">

				

				<!-- <div id="fh5co-menu-logo"> -->
					<!-- START #fh5co-logo -->
					<h1 id="fh5co-logo" class="pull-left"> <a href="index.html"><img src="images/logo1.png" style= "float:left;width:138px;height:158px;" ></a></h1>


					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						
						<ul class="sf-menu" id="fh5co-primary-menu">

<a style="float: right;" href="index.php">الصفحة الرئيسية </a>
<a style="float: right;" href="allOrg.php">عرض المنظمات</a>

<?php
    
    
    if(empty($logged)){
        print '<a style="float: right;" href="login.php">تسجيل الدخول</a>';
        print '<a style="float: right;" href="signIn.php">التسجيل</a>';
        
    }else{
        $getData = mysqli_query($conn, "SELECT AdminID FROM admin WHERE AdminID = '$logged' ");
        $rowData = mysqli_fetch_array($getData);
        if( count($rowData) > 0 ) {
            print '<a style="float: right" href="addOrg.php">إضافة منظمة</a>';
        }else{
            $getData = mysqli_query($conn, "SELECT StudEmail FROM student WHERE StudEmail = '$logged' ");
            $rowData = mysqli_fetch_array($getData);
            if( count($rowData) > 0 ) {
                print '<a style="float: right" href="student.php">صفحتي</a>';
            }else{
                $getData = mysqli_query($conn, "SELECT supEmail FROM supervisor WHERE supEmail = '$logged' ");
                $rowData = mysqli_fetch_array($getData);
                if( count($rowData) > 0 ) {
                    print '<a style="float: right" href="supervisor.php">صفحتي</a>';
                }
            }
        }
        print '<a style="float: right;" href="signout.php">تسجيل الخروج</a>';
    }
    mysqli_close($conn);
    ?>

		</header>



		<div id="fh5co-hero">
			<a href="#fh5co-main" class="smoothscroll fh5co-arrow to-animate hero-animate-4"><i class="ti-angle-down"></i></a>
			<!-- End fh5co-arrow -->
			<div class="container">
				<div class="col-md-8 col-md-offset-2">
					<div class="fh5co-hero-wrap">
						<div class="fh5co-hero-intro">
							<h1 class="to-animate hero-animate-1"></h1>
							<h2 class="to-animate hero-animate-2"> </h2>
						</div>
					</div>
				</div>
			</div>		
		</div>
	
