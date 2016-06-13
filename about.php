<?php
    session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>FasTicket About</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Html5TemplatesDreamweaver.com">

    <link href="scripts/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="scripts/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Icons -->
    <link href="scripts/icons/general/stylesheets/general_foundicons.css" media="screen" rel="stylesheet" type="text/css" />  
    <link href="scripts/icons/social/stylesheets/social_foundicons.css" media="screen" rel="stylesheet" type="text/css" />
    <!--[if lt IE 8]>
        <link href="scripts/icons/general/stylesheets/general_foundicons_ie7.css" media="screen" rel="stylesheet" type="text/css" />
        <link href="scripts/icons/social/stylesheets/social_foundicons_ie7.css" media="screen" rel="stylesheet" type="text/css" />
    <![endif]-->
    <link rel="stylesheet" href="scripts/fontawesome/css/font-awesome.min.css">
    <!--[if IE 7]>
        <link rel="stylesheet" href="scripts/fontawesome/css/font-awesome-ie7.min.css">
    <![endif]-->

    <link href="http://fonts.googleapis.com/css?family=Syncopate" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Abel" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Pontano+Sans" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet" type="text/css">

    <link href="styles/custom.css" rel="stylesheet" type="text/css" />
</head>
<body id="pageBody">

<?php
            require_once 'koneksi.php';
        ?>

<div id="divBoxed" class="container">

    <div class="transparent-bg" style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;z-index: -1;zoom: 1;"></div>

    <div class="divPanel notop nobottom">
            <div class="row-fluid">
                <div class="span12">

                    <div id="divLogo" class="pull-left">
                        <a href="homes.php" id="divSiteTitle">FasTicket L300</a><br />
                        <a href="homes.php" id="divTagLine">Fastest | Most Secure | Super Cozy</a>
                    </div>

                    <div id="divMenuRight" class="pull-right">
                    <div class="navbar">
                        <button type="button" class="btn btn-navbar-highlight btn-large btn-primary" data-toggle="collapse" data-target=".nav-collapse">
                        NAVIGATION <span class="icon-chevron-down icon-white"></span>
                        </button>
                            <div class="nav-collapse collapse">
                            <ul class="nav nav-pills ddmenu">
                            <li><a href="homes.php">Home</a></li>
                            <li  class="active"><a href="about.php">About</a></li>
                           
                            <?php
              if(isset($_SESSION['email']) && $_SESSION['email'] != ""){
 
          ?>
           <li><a href="ticket.php">Ticket</a></li>
            <?php
          }else{
            ?>
            <li><a href="signup.php">Ticket</a></li>
            
            <?php
          }
          ?>  

           <li><a href="contact.php">Contact Us</a></li>

                           <?php
              if(isset($_SESSION['email']) && $_SESSION['email'] != ""){

              
          ?>
           <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['email']; ?> <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="logout.php"><span class="fa fa-power-off fa-1x"></span>    Logout</a></li>
              
             
              </li>
               </ul>
            </li>
            
            <?php
          }else{
            ?>

            <li><a href="signup.php">Login</a></li>
            <?php
          }
          ?>  
                            </ul>
                            </div>
                    </div>
                    </div>

                </div>
            </div>

            <div class="row-fluid">
                <div class="span12">
                    <div id="contentInnerSeparator"></div>
                </div>
            </div>
    </div>

    <div class="contentArea">

        <div class="divPanel notop page-content">

            <div class="breadcrumbs">
                <a href="homes.php">Home</a> &nbsp;/&nbsp; <span>About Us</span>
            </div>


            <div class="row-fluid">
			<!--Edit Main Content Area here-->
             


                    <h1>About Us</h1>

									 
                    
			<div class="row-fluid">
		        <div class="span3">                           
                    <img src="images/1465657689022.jpg" class="img-polaroid" style="margin:5px 0px 15px;" alt="" >   </div>          
                <div class="span3">            
                    <p> Nama	: Steven Liunardi</p>
                    <p> NIM		: 1408107010048</p>
                    <p> TL 		: 3 Oktober 1996</p>
                </div>		 
            </div>
			
		                
                    
            <div class="row-fluid">     
                <div class="span3">                           
                    <img src="images/1465812441550.jpg" class="img-polaroid" style="margin:5px 0px 15px;" alt="">   </div>          
                <div class="span3">            
                    <p> Nama	: Irvaniza Patria</p>
                    <p> NIM		: 1408107010033</p>
                    <p> TL		: 10 Agustus 1996</p>
                </div>       
            </div>
            
                           
                    
            <div class="row-fluid">     
                <div class="span3">                           
                    <img src="images/1465747717695.jpg" class="img-polaroid" style="margin:5px 0px 15px;" alt="">   </div>          
                <div class="span3">            
                    <p> Nama	: Ridha Khalid</p>
                    <p> NIM		: 1408107010017</p>
                    <p> TL		: 5 Desember 1996</p>
                </div>        
            </div>
        
            
                               
                    
            <div class="row-fluid">     
                <div class="span3">                           
                    <img src="images/1464444839729.jpg" class="img-polaroid" style="margin:5px 0px 15px;" alt="">   </div>          
                <div class="span3">            
                    <p> Nama	: Putri Afrah</p>
                    <p> NIM		: 1408107010039</p>
                    <p> TL		: 29 April 1996</p>
                </div>       
            </div>
            

                              
                    
            <div class="row-fluid">     
                <div class="span3">                           
                    <img src="images/1465657851011.jpg" class="img-polaroid" style="margin:5px 0px 15px;" alt="">   </div>          
                <div class="span3">            
                    <p> Nama	: Merita</p>
                    <p> NIM		: 1408107010008</p>
                    <p> TL		: 29 November 1997</p>
                </div>       
            </div>

            <div class="row-fluid">     
                <div class="span3">                           
                    <img src="images/1465812917994.jpg" class="img-polaroid" style="margin:5px 0px 15px;" alt="">   </div>          
                <div class="span3">            
                    <p> Nama	: Desi Mardiani</p>
                    <p> NIM		: 1408107010028</p>
                    <p> TL		: 14 Desember 1996</p>
                </div>       
            </div>
            
			 
                </div>
				<!--End Main Content Area here-->
				
			
            </div>

            
<script src="scripts/jquery.min.js" type="text/javascript"></script> 
<script src="scripts/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="scripts/default.js" type="text/javascript"></script>





</body>
</html>