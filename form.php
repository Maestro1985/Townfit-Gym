<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>Townfit Fitness & GYM HTML Website Template - Membership Form </title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Style CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700%7cRoboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <!-- FontAwesome CSS -->
    <link href="fontawesome/css/fontawesome-all.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

<![endif]-->
</head>

<body>
    
    <!-- header-section-->
    <div class="header-wrapper">
        <div class="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-4 col-sm-12 col-12">
                        <div class="quick-info">
                            <span class="quick-info-text"><a href="location.html" class="quick-info-link">Our Locations</a></span>
                            <span class="quick-info-text"><a href="userlogin.php" class="quick-info-link">Login</a></span>
                            <span class="quick-info-text"><a href="userform.php" class="quick-info-link">Register</a></span>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-8 col-sm-12 col-12 text-right  d-none d-xl-block d-lg-block d-md-block">
                        <div class="quick-info">
                            <p><span class="quick-info-text"> Got a Question? Give Us a Call. (800) - 132 - 4567</span> <a href="#" class="btn btn-default btn-xs">get access free</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-2 col-md-12 col-sm-12 col-12">
                        <div class="logo"> <a href="index.html"><img src="./images/logo.png" alt=""> </a> </div>
                    </div>
                    <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 col-12">
                        <!-- navigations-->
                        <div class="navigation">
                            <div id="navigation">
                                <ul>
                                    <li class="active"><a href="index.html">Home</a></li>
                                    <li class="has-sub"><a href="class-list.html">Class</a>
                                        <ul>
                                            <li><a href="class-list.html">Class List</a></li>
                                            
                                        </ul>
                                    </li>
                                    <li class="active"><a href="about.html">About us</a></li>
                                    <li class="active"><a href="membership-plan.html">Pricing</a></li>
                                   
                                    
                                    <li class="has-sub"><a href="#">Pages</a>
                                        <ul>
                                            <li><a href="membership-page.html">Membership Page</a> </li>
                                            
                                            <li><a href="membership-form.html">Membership Form</a> </li>
                                            <li><a href="time-table.html">TimeTable Page</a> </li>
                                            
                                            
                                        
                                         <li><a href="location.html">Locations</a> </li>
                                            
                                        </ul>
                                    </li>
                                    <li><a href="contact-us.html">Contact us</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /.navigations-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /. header-section-->
    
    
    
                   <center> <h3> Class Bookings</h3></center>
                    <div class="row">
                        <div class="offset-xl-4 col-xl-4 offset-lg-4 col-lg-4 col-md-12 col-sm-12 col-12">
                           
                                <form action="bookclass.php" method="post">
                                <div class="">
                                    <div class="row">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                       
                                            <div class="form-group">
                                                <label class="control-label sr-only" for="name"></label>
                                                <input id="name" type="text" placeholder="Name" class="form-control" required name="Name">
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="form-group">
                                                <label class="control-label sr-only" for="email"></label>
                                                <input id="email" type="email" placeholder="Email" class="form-control" required name="Email">
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="form-group">
                                                <label class="control-label sr-only" for="phone"></label>
                                                <input id="phone" type="number" placeholder="Phone" class="form-control" required name="Phone">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">Classes</label>
                            <div class="col-sm-10">
                                <div class="select">
                                    <select id="state" name="state" placeholder="" type="text" class="form-control">
                                        <option value="Group cycle">Group cycle</option>
                                        <option value="Yoga classes">Yoga classes</option>
                                        <option value="Strength training">Strength training</option>
                                        <option value="Kickboxing">Kickboxing</option>
                                        <option value="Pilates">Pilates</option>
                                        <option value="Cardio">Cardio</option>
                                        <option value="Boxing">Boxing</option>
                                        <option value="Core training">Core training</option>
                                        <option value="Aerobics">Aerobics</option>
                                        <option value="Karate">Karate</option>
                                      
                                        
                                        
                                        
                                    </select>
                                </div>
                            </div>
                        </div>
                                        
                                        
                                        
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt20">
                                            <button class="btn btn-default" type="submit">Book now</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                          
                            
                        
                        </div>
                    </div>






    
    </body>
</html>