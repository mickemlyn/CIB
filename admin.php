<?php
session_start();
if (isset($_SESSION['user']) && (time() - $_SESSION['LAST_ACTIVITY'] < 900))
   // last request was less than 15 minutes ago 
    {
   $_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp
 ?>
<! doctype html>
<html>   
<head>
    <title>CAPITAL INVESTMENTS BANK</title>
    
  <link href="bootstrap-3.3.6-dist/css/bootstrap-theme.css" rel="stylesheet" type="text/css"/>
    
    <link href="bootstrap-3.3.6-dist/css/bootstrap.css" rel="stylesheet" type="text/css"/>
    
    <link href="navbar.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css" >

    
<style type="text/css">
   
     a.back-to-top {
	display: none;
	width: 50px;
	height: 50px;
	text-indent: -9999px;
	position: fixed;
	z-index: 999;
	right: 20px;
	bottom: 20px;
	background: #27AE61 url("up-arrow.png") no-repeat center 43%;
	-webkit-border-radius: 30px;
	-moz-border-radius: 30px;
	border-radius: 30px;
}
a:hover.back-to-top {
	background-color: #000;
}

.content{
    
        height: auto;
    color: white;
    background-color:#083B4C;
  background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGUlEQVQ4y2NgoBJwoJAedcGoC0ZdMOAuAABF0hABJ/8lyQAAAABJRU5ErkJggg==);
  background-attachment: fixed;
    padding-top: 30px;
    }
    

 .hovv:hover{
     border:5px solid #fd0000;}
 .hov1:hover{
    border:5px solid #36b44a;
}
 .hov2:hover{
    border:5px solid #004f8c;
}  
 .hov3:hover{
    border:5px solid #ffff00;
}

 

/* The container <div> - needed to position the dropdown content */
.dropdown {
    position: relative;
    display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 120px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

/* Links inside the dropdown */
.dropdown-content a {
    padding: 12px 12px;
    text-decoration: none;
    display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #f1f1f1}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
    display: block;
}


        </style>
    <script type="text/javascript">
    $('#myCarousel').carousel();
    </script>
    
    </head>
  
<body>
   
<nav class="navbar  navbar-fixed-top " style="background-color:white;">
         <div class="col-xs-4">  
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
           
          <a class="navbar-brand" href="#" style="margin-top:0px;"><img src="Capital%20inestments%20bank%20brand.png" height="40" class="pull-left" ></a>
        </div>
          </div>
          <div class="col-xs-8">
        <div id="navbar" class="navbar-collapse collapse">
           <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home </a></li>
                <li ><a href="#about"> Orders </a></li>
               <li><a href="#">Suppliers</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown">Users <span class="caret"></span> </a>
               <div class="dropdown-content">
                    <a href="adduserform.php" target="_blank">Add User</a>
                    <a href="viewusers.php">View Users</a>
                    <a href="viewusers.php">Update Info</a>
                   <a href="viewusers.php">Delete User</a>
                    </div>     
               </li> 
               <li><a href="adminprofile.php">Profile</a></li>
               <li><a href="#contact">Performance</a></li>
               <li><a href="#contact">Reports</a></li>
               <li><a href="logout.php" title="LogOut"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span></a></li>
            </ul>
        </div>
         </div>
          
              <!--/.navbar-collapse -->
        
        </nav>
    
    
    <div class="content" id="spec">
        <div class="container" style="background-color: rgba(255, 255, 255, 0.3)">
        <div class="row">
            <div class="col-sm-8"><h2  class="lead text-center" ><b>ADMIN HOME PAGE</b></h2></div>
            <div class="col-sm-4" >
            <h6  class="lead pull-right" ><b ><small style="color: white;"> <img src="<?php echo $_SESSION['profilePic'] ?>" class="img-rounded" style="height:45px;"><?php echo $_SESSION['user']; ?></small></b></h6> 
            </div>
            </div>
            <div class="row">
            <div class="col-sm-3"><center><img src="media/Computer-Security-Icon.png" height="100" width="100" class="img-circle hovv"></center>
            <br><p class="lead text-center">Cyber Security</p>
                <p class="text-justify">
                    We will make sure your staff has security systems and processes in place that they need. We will test your infastructure and your processes so you can be sure you're well prepared and monitor your key systems, website and network to ensure your data is safe. 
    
                </p><hr>
            </div>
           <div class="col-sm-3"><center><img src="media/train5.jpg" height="100" width="100" class="img-circle hov1"></center>
            <br><p class="lead text-center">ICT Training</p>
               <p class="text-center">eHub is where high-potential, pro-active students learn to code from a world-class curriculum with top quality 
                   instructors and mentors to support them in the process: 95% graduate hiring.
               </p><br><br><p></p><hr>
            </div>
            <div class="col-sm-3"><center><img src="media/tech.jpg" height="100" width="100" class="img-circle hov2"></center>
            <br><p class="lead text-center">Technology Consultancy</p>
                <p class="text-justify">
                    We deliver full-featured technology consulting services:
                    IT Infrastructure Audit,
                    IT Strategy Development,
                    Software Architecture Review,
                    Application Security Consulting,
                    Project Requirements Design.
                </p><hr>
            </div>
            <div class="col-sm-3"><center><img src="media/comp.jpg" height="100" width="100" class="img-circle hov3"></center>
            <br><p class="lead text-center">Software.Websites.Apps</p>
                
                <p class="text-justify">
                We help our customers create innovative services and solutions with our software outsourcing services ranging from technology consulting to business analysis, application maintenance 
                and solution integration.
                </p><hr>
            </div>
        </div>
        </div>
    </div>
    
    
<!-- </div>
      FOOTER -->
      <footer id="contact"class="text-center" style="height:200px; background-color:#333; color:white;">
        <div class="container">
       <div class="row" style="padding-top:10px;">
        <div  class="col-sm-3"><img src="media/map25-redish.png" height="20" ><p>eHub House,</p> 
           <p>Muindi Mbingu Lane,</p>
            <p>Machakos,</p>
            <p>Kenya</p>
           </div>
        <div  class="col-sm-3"><img src="media/envelope4-green.png" height="20" ><p>info@ehub.co.ke</p></div>  
        <div  class="col-sm-3"> <img src="media/telephone65-blue.png"  height="20" ><p><a href="tel://+254716715768"> +254716715768</a></p></div> 
           
        <div  class="col-sm-3" style="background-color:black;height:180px;">
            <p>
                <i class="fa fa-facebook" aria-hidden="true"  style="font-size:15px;"></i>
                <i class="fa fa-twitter" aria-hidden="true" style="font-size:15px; padding-left:10px;"></i>
                <i class="fa fa-linkedIn" aria-hidden="true" style="font-size:15px; padding-left:10px;"></i>
            </p>
            
      <p>&copy; <?php echo " ".date("Y"); ?> eHub</p>
           <footer class="pull-right" style="padding-top:100px;">By &copy;Mickemlyn</footer>
           </div>
        </div>
        </div>
      </footer>

    </div><!-- /.container -->

<script type="text/javascript">
// create the back to top button
$('body').prepend('<a href="#" class="back-to-top">Back to Top</a>');

var amountScrolled = 300;

$(window).scroll(function() {
	if ( $(window).scrollTop() > amountScrolled ) {
		$('a.back-to-top').fadeIn('slow');
	} else {
		$('a.back-to-top').fadeOut('slow');
	}
});

$('a.back-to-top, a.simple-back-to-top').click(function() {
	$('html, body').animate({
		scrollTop: 0
	}, 700);
	return false;
});
</script>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   <script src="bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
    
  <script>window.jQuery || document.write('<script src="bootstrap-3.3.6-dist/js/jquery-2.2.2.min.js"><\/script>')</script>

</body>
</html>
<?php }
else{
    unset($_SESSION['user']);
    unset($_SESSION['LAST_ACTIVITY']);
    
  $_SESSION['notloggederror'] = "Kindly log in to proceed!";
    header("location: index.php");
    exit();
}
?>