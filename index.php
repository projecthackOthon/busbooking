<html>
	<head>
		<title>Pravasan || Track'n'Go</title>
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
		<link href="assets/css/bootstrap.css" rel="stylesheet">
		<link href="assets/css/truebus.css" rel="stylesheet">
      	<link href="assets/css/parsley.css" rel="stylesheet">
      	<link href="assets/css/datepick.css" rel="stylesheet">
        <link href="assets/css/jquery-datepicker" rel="stylesheet">
      	<script src="assets/js/jquery.js"></script> 
      	<script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js" ></script>
   		<script src="assets/js/jquery.raty.js"></script>
         <script src="assets/js/quickLinks.js"></script>
   		
   		<link href="assets/css/autoComplete.css" rel="stylesheet">
     </head>
<body>
<div class="tb_header">
            <div class="container">
               <div class="col-md-6" style="padding:0;">
                  <div class="tb_logo"> <a href="index.php"><img src="assets/uploads/logo/1469446049_TrueBus.png"> </a> </div>
               </div>
               <div class="col-md-4" style="padding:0;">
                  <div class="tb_navbar">
                     <ul>
                        <li><a href="index.php">Home &nbsp;<span style="color:#f0a2a3;"> |</span></a></li>
                        <li><a href="print.php">Print/SMS Ticket &nbsp;  <span style="color:#f0a2a3;"> |</span></a></li>
                        <li><a href="cancellation.php">Easy Cancel/Refund</a> </li>
                     </ul>
                  </div>
               </div>
               <div class="col-md-2" style="padding:0;">
			   
				                  <div class="signin_up">
                     <ul>
                        <li><a href="login.php" >Sign In</a>  <span style="color:#f0a2a3;">/</span></li>
                        <li><a href="signUp.php" >Sign Up</a></li>
                     </ul>
                  </div>
				                               <!------logged end---------------->
               </div>
            </div>
            <div class="shadow"><img src="assets/images/shadow.png"></div>
         </div>
<div class="container" ng-controller="search">
            <div class="row" style="min-height:400px;margin-top:120px;">
               <div class="col-md-6">
            <form id="myForm" method="post" data-parsley-validate="" autocomplete="off" >
                  <section id="Search" class="LB XXCN  P20">
                     <h1 class="bookTic XCN TextSemiBold" >Online Bus Tickets Booking with Zero Booking Fees</h1>
                     <div class="searchRow clearfix">
                        <div class="LB">
                           <label class="inputLabel">From</label>
                           
                           <input id="myInput"  class="XXinput searching" placeholder="Enter a city" type="text"  data-id="board_point"  data-parsley-error-message="Please select a source city" name="myCountry" tabindex="1" required/>
                           <div class="errorMessageFixed"> </div>
                        </div>
                        <span class="switchButton" id="switchButton"></span>
                        <div class="searchRight NoPaddingRight ">
                           <label class="inputLabel">To</label>
                           <input id="myInp" class="XXinput searching" placeholder="Enter a city" type="text" tabindex="2" data-id="drop_point"   data-parsley-error-message="Please select a destination city" name="myCountry" required />
                           <div class="errorMessageFixed"> </div>
                        </div>
                     </div>
                     <div class="searchRow clearfix">
                        <div class="LB">
                           <label class="inputLabel">Date of Journey</label>
                           <span class="blackTextSmall"></span>
                           <input  class="XXinput  date-pick  pickup_date pickup_datef " placeholder="dd-mm-yyyy"  type="date" title="Date in the format dd-mmm-yyyy" tabindex="3" />
                        </div>
                        <div class="searchRight retJouney">
                           <label class="inputLabel">Date of Return<span class="opt">&nbsp;(Optional)</span></label>
                           <input class="XXinput  date-pick  pickup_date pickup_datef" placeholder="dd-mm-yyyy" type="date" title="Date in the format dd-mmm-yyyy" tabindex="4" />
                        </div>
                     </div>
                     <div class="dateError">Onward date should be before return date</div>
                     <button class="RB Xbutton" id="searchBtn" ng-click="homesearch()">Search Buses</button>
                  </section>
              </form>
              <script src="assets/js/autoComplete.js"></script>
               </div>
               <div class="col-md-6">
                  <div class="tb_bus">
                     <img src="assets/images/bus.png">
                  </div>
               </div>
            </div>
         </div>
         <!--SEARCH-BAR-END-->
         <!--operator-BAR-->
         <div class="tb_operator">
            <div class="container">
               <div class="tb_inner">
                  <div class="row">
                     <div class="wrapper">
                        <div class="col-md-4 col-sm-12 col-xs-12">
                           <div class="tb_operator">
                              <img src="assets/images/routte.png"> &nbsp;<span class="tb_operator1">67000 <small class="smalls">ROUTES</small></span>
                           </div>
                        </div>
                        <div class="col-md-4  col-sm-12 col-xs-12">
                           <div class="tb_operator left"> 
                              <img src="assets/images/route.png">  &nbsp;<span class="tb_operator2">1800<small class="smalls"> BUS OPERATORS</small></span>
                           </div>
                        </div>
                        <div class="col-md-4  col-sm-12 col-xs-12">
                           <div class="tb_operator right"> 
                              <img src="assets/images/ticket.png">  &nbsp;<span class="tb_operator3">6,00,000 + <small class="smalls">TICKETS SOLD</small></span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <br/>
         <br/>
         <div class="row"></div>
         <div class="row"></div>
         <div class="row"></div>
         <div class="row"></div>
         <!--operator-BAR end-->
         <!--offers-BAR-->
         <!--list-BAR-->
         <div class="container">
            <div class="rb_list">
               <div class="row">
                  <div class="wrapper">
                     <div class="tb_inner">
                        <div class="col-md-4 col-sm-12 col-xs-12">
                           <div class="footer_main">
                              <h4 class="tb_head">Top Bus Routers</h4>
                              <div class="tb_route_list">
                                 <ul>
                                    <li><a href="#" onclick="settext('Rajkot','Mehsana')">Rajkot to Mehsana</a></li>
                                    <li><a href="#" onclick="settext('Junagadh','Surat')"> Junagadh to Surat</a></li>
                                    <li><a href="#" onclick="settext('Vadodara','Bhavnagar')">Vadodara to Bhavnagar</a></li>
                                    <li><a href="#" onclick="settext('Ahmedabad','Surat')">Ahmedabad to Surat</a> </li>
                                    <li><a href="#" onclick="settext('Surat','Mehsana')">Surat to Mehsana</a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        
                        <div class="col-md-4  col-sm-12 col-xs-12">
                           <div class="footer_main">
                              <h4 class="tb_head">Top Cities</h4>
                              <div class="tb_route_list">
                                 <ul>
                                    <li><a href="#" onclick="settext('Ahmedabad','Surat')">Ahmedabad to Surat</a></li>
                                    <li><a href="#" onclick="settext('Rajkot','Mehsana')">Rajkot to Mehsana</a></li>
                                    <li><a href="#" onclick="settext('Junagadh','Surat')">Junagadh to Surat</a></li>
                                    <li><a href="#" onclick="settext('Surat','Mehsana')">Surat to Mehsana</a></li>
                                    <li><a href="#" onclick="settext('Vadodara','Bhavnagar')">Vadodara to Bhavnagar</a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                       
                        <div class="col-md-4  col-sm-12 col-xs-12">
                           <div class="footer_main">
                              <h4 class="tb_head">Top Bus Operators</h4>
                              <div class="tb_route_list">
                                 <ul>
                                    <li><a href="#" onclick="settext('Vadodara','Bhavnagar')">Vadodara to Bhavnagar</a></li>
                                    <li><a href="#" onclick="settext('Mehsana','Vadodara')">Mehsana to Vadodara</a></li>
                                    <li><a href="#" onclick="settext('Junagadh','Surat')">Junagadh to Surat</a></li>
                                    <li><a href="#" onclick="settext('Surat','Mehsana')">Surat to Mehsana</a></li>
                                    <li><a href="#" onclick="settext('Ahmedabad','Surat')">Ahmedabad to Surat</a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <hr class="border2">
            </hr>
         </div>
         <!--list-BAR end-->
         <!--footer-BAR-->
         <div class="container">
         <div class="row">
         <div class="tb_inner">
         <div class="col-md-9">
         <div class="tb_footer">
         <ul>
         <li><a href="#">About &nbsp;|</a></li>
         <li><a href="#">FAQ   &nbsp;|</a></li>
         <li><a href="#">Contact Us   &nbsp;|</a></li>
         <li><a href="#">Terms of Use   &nbsp;|</a></li>
         <li><a href="#">Privacy Policy   &nbsp;|</a></li>
         </ul>
         </div>
         </div>
         <div class="col-md-3">
         <div class="tb_social">
         <ul>
         <li>  <a href="#"><img src="assets/images/facebook.png"></a> </li> 
         <li>  <a href="#"> <img src="assets/images/twitter.png"></a></li>
         <li>  <a href="#">  <img src="assets/images/google.png"></a></li>
         </ul>
         </div>
       <a href="#" id="back-to-top" title="Back to top">[top]</a>
         </div>
         </div>
         </div>
         </div>
</body>