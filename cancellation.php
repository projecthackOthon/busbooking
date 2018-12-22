<html>
   <head>
      <title>Cancellation || Pravasan</title>
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
                     <h1 class="bookTic XCN TextSemiBold" ><center><b>Cancellation</b></center></h1>
                     <div class="searchRow clearfix">
                        <div class="LB">
                           <label class="inputLabel">Enter Pnr No.</label>
                           
                           <input class="XXinput searching" placeholder="Enter Your Pnr. here" type="text" name="pnr_cancel" tabindex="1" required/>
                           
                        </div>
                        <div class="searchRight retJouney">
                           <label class="inputLabel">Name<span class="opt">&nbsp; <small>(Optional)</small></span></label>
                           <input class="XXinput searching" placeholder="Enter name on ticket" type="text" tabindex="2" name="pnr_cancel_name" required />
                        </div>
                     </div>
                     <div class="searchRow clearfix">
                        <div class="LB">
                           <label class="inputLabel">Email</label>
                           <span class="blackTextSmall"></span>
                           <input  class="XXinput searching " placeholder="Enter your Email here" tabindex="3" />
                        </div>
                        <div class="searchRight retJouney">
                           <label class="inputLabel">Password</label>
                           <input class="XXinput" placeholder="Enter your Password" type="Password" tabindex="4" />
                        </div>
                     </div>
                     <br>
                     <button class="LB Xbutton" id="cancelPnr">Cancel Ticket</button>
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
                             
                           </div>
                        </div>
                        <div class="col-md-4  col-sm-12 col-xs-12">
                           <div class="tb_operator left"> 
                              
                           </div>
                        </div>
                        <div class="col-md-4  col-sm-12 col-xs-12">
                           <div class="tb_operator right"> 
                             
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