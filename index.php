<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Dog-company</title>
  <meta name="Gaming clan." content="Arma 3 gaming clan."> 
  <meta http-equiv="content-type" content="text/html;charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
  <title>GroundworkCSS &hearts; A Responsive HTML5, CSS &amp; Javascript Toolkit</title>
  <link rel="apple-touch-icon" href="./images/apple-icons/apple-touch-icon-precomposed.png" />
  <link rel="apple-touch-icon" sizes="57x57" href="./images/apple-icons/apple-touch-icon-57x57-precomposed.png" />
  <link rel="apple-touch-icon" sizes="72x72" href="./images/apple-icons/apple-touch-icon-72x72-precomposed.png" />
  <link rel="apple-touch-icon" sizes="114x114" href="./images/apple-icons/apple-touch-icon-114x114-precomposed.png" />
  <link rel="apple-touch-icon" sizes="144x144" href="./images/apple-icons/apple-touch-icon-144x144-precomposed.png" />
  <!-- Modernizr -->
  <script src="./js/libs/modernizr-2.6.2.min.js"></script>
  <!-- jQuery -->
  <script type="text/javascript" src="./js/libs/jquery-1.9.1.min.js"></script>
  <!-- GroundworkCSS -->
  <link type="text/css" rel="stylesheet" href="./css/groundwork.css">
  <!--[if IE]>
  <link type="text/css" rel="stylesheet" href="./css/groundwork-ie.css">
  <![endif]-->
  <!--[if lt IE 9]>
  <script type="text/javascript" src="./js/libs/html5shiv.min.js"></script>
  <![endif]-->
  <!--[if IE 7]>
  <link type="text/css" rel="stylesheet" href="./css/font-awesome-ie7.min.css">
  <![endif]-->
  <link rel="stylesheet" href="css/style.css" />
</head>
<body>
<!-- header starts here -->
  <div id="container">
    <div id="header">
      <div id="logo">
      </div>
      <div id="countdown">
      </div>
      <div id="nav-bar">
        <ul>
          <li>Home</li>
          <li>Forum</li>
          <li>About us</li>
          <li>contact us</li>
        </ul>
        <ul>
          <li>Sign in</li>
          <li>Register</li>
       </ul>
      </div>
    </div>
<!-- end of header -->
<!-- start of horizontal sidebar -->
  <div id="horizontal-sidebar">
  </div>
<!-- end horizontal sidebar -->
<!-- start main content -->
  <div id="content">
    <div id="main">
      <?php 
        if ( have_posts() ) {
      		while ( have_posts() ) {
      			the_post(); 
      			//
      			// Post Content here
      			//
      		} // end while
      	} // end if
      ?>
    </div>
    <!-- sidebar -->
    <div id="sidebar">
    </div>
    <!-- end sidebar -->
  </div>
  <!-- start footer -->
  <div id="footer">
  </div>
  <!-- end footer -->  
  </div>
  </div>
</body>
</html>
