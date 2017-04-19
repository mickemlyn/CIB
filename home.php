<?php
session_start();
if (isset($_SESSION['user']) && (time() - $_SESSION['LAST_ACTIVITY'] < 900))
   // last request was less than 15 minutes ago 
{
   $_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp
 ?>
<!DOCTYPE html>
<html>   
<head>
<meta charset="utf-8"> 
<title>Admin Profile</title>
<link href="bootstrap-3.3.6-dist/css/bootstrap-theme.css" rel="stylesheet" type="text/css"/>
<link href="bootstrap-3.3.6-dist/css/bootstrap.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css" >    
<script src="bootstrap-3.3.6-dist/js/jquery-2.2.2.min.js"></script>
<script src="bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
<style type="text/css">
.content{
        height: auto;
        color: white;
        background-color:#083B4C;
        background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGUlEQVQ4y2NgoBJwoJAedcGoC0ZdMOAuAABF0hABJ/8lyQAAAABJRU5ErkJggg==);
        background-attachment: fixed;
        padding-top: 50px;
    }
    
 .hovv:hover{ border:5px solid #083B4C; }
 
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
.btn-file {
        position: relative;
        overflow: hidden;
  }
.btn-file input[type=file] {
        position: absolute;
        top: 0;
        right: 0;
        min-width: 100%;
        min-height: 100%;
        font-size: 100px;
        text-align: right;
        filter: alpha(opacity=0);
        opacity: 0;
        outline: none;
        background: white;
        cursor: inherit;
        display: block;
    }
    /*absolute div - suuccessfade*/
    div.absolute {
    position: absolute;
    width: 550px;
    margin: auto;
     left: 42%;
}   
/* search list*/
* {
  box-sizing: border-box;
}

#myInput {
background-image: url('searchiconw3.png');
background-position: 10px 12px;
background-repeat: no-repeat;
font-size: 16px;
padding: 8px 20px 8px 40px;
border: 1px solid #ddd;
border-radius: 17px;
margin-bottom: 5px;
width: 230px;
-webkit-transition: width 0.4s ease-in-out;
transition: width 0.4s ease-in-out;
}
#myInput:focus {
    width: 40%;
}
#myUL {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

#myUL li a {
  border: 1px solid #ddd;
  margin-top: -1px; /* Prevent double borders */
  background-color: #f6f6f6;
  padding: 5px 5px 5px 20px;
  text-decoration: none;
  font-size: 14px;
  color: black;
  display: block
}

#myUL li a.header {
padding: 8px;
font-size: 16px;
background-color: #e2e2e2;
}

#myUL li a:hover:not(.header) {
background-image: -webkit-linear-gradient(top, #dff0d8 0%, #c8e5bc 100%);
background-image: -o-linear-gradient(top, #dff0d8 0%, #c8e5bc 100%);
background-image: -webkit-gradient(linear, left top, left bottom, from(#dff0d8), to(#c8e5bc));
background-image: linear-gradient(to bottom, #dff0d8 0%, #c8e5bc 100%);
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffdff0d8', endColorstr='#ffc8e5bc', GradientType=0);
background-repeat: repeat-x;
border-color: #b2dba1;
}

#mytblInput {
  background-image: url('searchiconw3.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 8px 20px 8px 40px;
  border: 1px solid #ddd;
  margin-bottom: 5px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 15px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 8px;
}
#myTable tr.header{ background-color: #e2e2e2; }
#myTable tr:hover:not(.header) {
background-image: -webkit-linear-gradient(top, #dff0d8 0%, #c8e5bc 100%);
background-image: -o-linear-gradient(top, #dff0d8 0%, #c8e5bc 100%);
background-image: -webkit-gradient(linear, left top, left bottom, from(#dff0d8), to(#c8e5bc));
background-image: linear-gradient(to bottom, #dff0d8 0%, #c8e5bc 100%);
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffdff0d8', endColorstr='#ffc8e5bc', GradientType=0);
background-repeat: repeat-x;
border-color: #b2dba1;
}
 </style> 
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
           
          <a class="navbar-brand" href="#" style="margin-top:0px;"><img src="Capital%20inestments%20bank%20brand.png" height="40" class="pull-left img-rounded"></a>
             </div> </div>
          <div class="col-xs-8">
        <div id="navbar" class="navbar-collapse collapse">
           <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home </a></li>
               <li ><a href="#"> Shop </a></li>
                <li class="dropdown"><a href="viewusers.php" class="dropdown">Requisitions <span class="caret"></span> </a>
               <div class="dropdown-content">
                    <a href="adduserform.php" target="_blank">Requisitions</a>
                    <a href="viewusers.php">Receiving</a>
                    </div> </li> 
               <li><a href="#">Contractors</a></li>
               <li><a href="#contact">Profile</a></li>
               <li><a href="#contact">Reports</a></li>
               <li><a href="#contact">Help</a></li>
               <li><a href="logout.php" title="LogOut"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span></a></li>
            </ul>
        </div>
         </div>
        <!--/.navbar-collapse --> </nav> 
    <div class="content" id="spec">
        <div class="container" style="background-color: rgba(255, 255, 255, 0.3)">
        <div class="row">
            <div class="col-sm-8"><h2  class="lead text-center" ><b>REQUISITION PAGE</b></h2></div>
            <div class="col-sm-4" >
            <h6  class="lead pull-right" ><b ><small style="color: white;"> <img src="<?php echo $_SESSION['profilePic'] ?>" class="img-rounded" style="height:45px;"> <?php echo $_SESSION['user']; ?></small></b></h6> 
            </div> 
           <?php if(isset($_SESSION['PasswordChangeSuccess'])){ ?> <div class="absolute text-center" id="successfade">
            <div class="alert alert-success alert-dismissable" >
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Success!</strong> Your Password has been Changed
        </div></div><?php } unset($_SESSION['PasswordChangeSuccess']) ?>            
            </div>
            
<input class="text-muted" type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Items by Category..." title="Type in a category">

<div class="well">
    <div class="row"> <div class="col-sm-2">
    <p class="lead text-muted"> <span  style="cursor:pointer; cursor:hand; font-size: 20px;"> <span class="glyphicon glyphicon-tasks" aria-hidden="true"></span> Search Items</span></p> </div>
    <div class="col-sm-10">
     <ol class="breadcrumb">
        <li><a href="#">Desktop Accessories</a></li>
        <li><a href="#">Desktop Stationery</a></li>
        <li><a href="#">Filing and Archiving</a></li>
        <li><a href="#">Office Machines and Electronics</a></li>
        <li class="active">Paper Products</a></li>
      </ol>
        </div>
    </div>
                        <!--APA-->
<div id="div1">
<div class="col-sm-9 text-muted">
<ul id="myUL">
 <li><a href="#" class="header">Desktop Accessories</a></li>
  <li><a href="#">Bookends</a></li>
  <li><a href="#">Card Holders</a></li>
  <li><a href="#">Calenders</a></li>
  <li><a href="#">Desk Mats</a></li>
  <li><a href="#">Drawer Sets</a></li>
  <li><a href="#">Letter Trays</a></li>
  <li><a href="#">Office Bins</a></li>
  <li><a href="#">Trimmers</a></li>
    
   
    
 <li><a href="#" class="header">Desktop Stationery</a></li>
  <li><a href="#">Clips</a></li>
  <li><a href="#">Desk Sets And Tidies</a></li>
  <li><a href="#">Drawing Pins</a></li>
  <li><a href="#">Glues and Adhesives</a></li>
  <li><a href="#">Highlighters</a></li>
  <li><a href="#">Hole Punches</a></li>
  <li><a href="#">Staplers</a></li>
  <li><a href="#">Stamps</a></li>
  <li><a href="#">Stationery</a></li>
  <li><a href="#">Post-It And Re-move Products</a></li>


  <li><a href="#" class="header">Filing and Archiving</a></li>
  <li><a href="#">Office Storage Solutions</a></li>
  <li><a href="#">Bankers Stands</a></li>
  <li><a href="#">Foolscaps and Box Files</a></li>
       
  <li><a href="#" class="header">Office Machines and Electronics</a></li>
  <li><a href="#">Calculators</a></li>
  <li><a href="#">Cameras</a></li>
  <li><a href="#">Ink Cartridges</a></li>
  <li><a href="#">Printers</a></li>
  <li><a href="#">Projectors</a></li>
  <li><a href="#">Scanners</a></li>
    
  <li><a href="#" class="header">Paper Products</a></li>
  <li><a href="#">Colour Imaging Paper</a></li>
  <li><a href="#">Printing Paper</a></li>
  <li><a href="#">Envelopes</a></li>

</ul>
    </div></div> 
<div id="div2" style="display:none;">
<div class="col-sm-9" style="color:black;">
<input type="text" id="mytblInput" onkeyup="mytblFunction()" placeholder="Search for names.." title="Type in a name">

<table id="myTable" class="table table-hover table-condensed table-bordered table-responsive">
  <tr class="header">
    <th >Name</th>
    <th>Country</th>
  </tr>
  <tr>
    <td>Alfreds Futterkiste</td>
    <td>Germany</td>
  </tr>
  <tr>
    <td>Berglunds snabbkop</td>
    <td>Sweden</td>
  </tr>
  <tr>
    <td>Island Trading</td>
    <td>UK</td>
  </tr>
  <tr>
    <td>Koniglich Essen</td>
    <td>Germany</td>
  </tr>
  <tr>
    <td>Laughing Bacchus Winecellars</td>
    <td>Canada</td>
  </tr>
  <tr>
    <td>Magazzini Alimentari Riuniti</td>
    <td>Italy</td>
  </tr>
  <tr>
    <td>North/South</td>
    <td>UK</td>
  </tr>
  <tr>
    <td>Paris specialites</td>
    <td>France</td>
  </tr>
</table>
        </div></div>
        
    <div class="row text-muted">   
    <div class="col-sm-3"><img src="<?php echo $_SESSION['profilePic']?>" class="img-rounded" height="300">
    </div></div>
                 
    </div>  
      </div>
        </div>
    </div>  
<!-- </div>

      FOOTER -->
      <footer id="contact"class="text-center" style="height:200px; background-color:#333; color:white;">
        <div class="container"> <div class="row" style="padding-top:10px;">
        <div  class="col-sm-3"><img src="media/map25-redish.png" height="20" ><p>CIB House,</p> 
           <p>Standard street,</p>
            <p>Nairobi-CBD,</p>
            <p>Kenya</p></div>
        <div  class="col-sm-3"><img src="media/envelope4-green.png" height="20" ><p>info@cib.co.ke</p></div>  
        <div  class="col-sm-3"> <img src="media/telephone65-blue.png"  height="20" ><p><a href="tel://+254710533607"> +254710533607</a></p></div> 
           
           <div  class="col-sm-3" style="background-color:#083B4C;height:150px;">
            <p>
                <i class="fa fa-facebook" aria-hidden="true"  style="font-size:15px;"></i>
                <i class="fa fa-twitter" aria-hidden="true" style="font-size:15px; padding-left:10px;"></i>
                <i class="fa fa-linkedIn" aria-hidden="true" style="font-size:15px; padding-left:10px;"></i>
            </p>
            <p>&copy; <?php echo " ".date("Y"); ?> CIB</p>
           <footer class="pull-right" style="padding-top:100px;">By &copy;Mickemlyn</footer>
           </div>
        </div>
        </div>
      </footer>
 </div><!-- /.container -->
<script>
function myFunction() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";           
            
        } else {
            li[i].style.display = "none";

        }
    }
}
</script>

<script type="text/javascript">
$('#triggerButton').click(function(e){
    e.preventDefault();
    $('#div1').fadeOut('fast', function(){
        $('#div2').fadeIn('fast');
    });
});
   
$('#triggerlink').click(function(e){
    e.preventDefault();
    $('#div1').fadeOut('fast', function(){
        $('#div2').fadeIn('fast');
    });
});
 
</script>
  <script>
 $(document).ready (function(){ 
     $("#successfade").hide().fadeIn('normal');
   $("#successfade").fadeTo(4000, 500).slideUp("slow", function(){
    $("#successfade").slideUp("slow");
                });   
            });

</script>
<script>
$('#myUL').children().on('click', function (e) {
    e.preventDefault();
    $('#div1').fadeOut('fast', function(){
        $('#div2').fadeIn('fast');
    });

});
</script>
<script>
function mytblFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("mytblInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByClassName("thedata")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
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