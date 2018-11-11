
<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from phpcryptomarket.bdtask.com/demo-v1.6/buy by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 Oct 2018 01:51:53 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Buy - Crypto Currency Treading System</title>
        <link rel="shortcut icon" href="upload/settings/35f7d3bce41674cd7c787b978eebfb15.png">
        <!-- style css -->
        <link href="assets/website/css/style.css" rel="stylesheet">
        <!-- Chart -->
        <link href="assets/website/amcharts/export.css" rel="stylesheet">
    </head>
    <body>
        <div id="loader-wrapper">
            <div id="loader"></div>
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
        </div>
        <!-- /.End of loader wrapper-->
        <nav class="navbar navbar-default navbar-fixed navbar-transparent bootsnav">
            <!-- Start Top Search -->
            <div class="top-search">
                <div class="container">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                    </div>
                </div>
            </div>
            <!-- End Top Search -->
            <div class="container">            
                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                                                <li><a href="register.php#tab2" class="btn nav-btn">Log In</a></li>
                        <li><a href="register.php#tab1" class="btn nav-btn btn-orange">Sign Up</a></li>
                        
                    </ul>
                </div>
                <!-- End Atribute Navigation -->
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="upload/settings/b3fe68eb87b068c7861d772a7e1bf8ec.png" class="logo" alt="Crypto Currency Treading System"></a>
                </div>
                <!-- End Header Navigation -->
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav" data-in="" data-out="">



                                <li class=""><a href="home.php">Home</a>
                                </li>

                                                        <li class=""><a href="coinmarket.php">Coinmarket</a>
                                </li>

                                                        <li class=""><a href="pricing.php">Pricing</a>
                                </li>

                                                        <li class=""><a href="exchange.php">Exchange</a>
                                </li>

                                                        <li class="active "><a href="buy.html">Buy</a>
                                </li>

                                                        <li class=""><a href="sell.php">Sells</a>
                                </li>

                                                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">More</a>

                                    <ul class="dropdown-menu">
                                        <li class=""><a href="about.html">About</a></li>
                                        <li class=""><a href="news.php">News</a></li>
                                        <li class=""><a href="faq.php">F.A.Q</a></li>
                                        <li class=""><a href="service.php">Service</a></li>
                                        <li class=""><a href="contact.php">Contact</a></li>
                                    </ul> 
                                </li>

                                                
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>    
        </nav>        <div class="page_header" data-parallax-bg-image="http://phpcryptomarket.bdtask.com/demo-v1.6/upload/e314d3ab07c576994a7994c26efdf5b8.jpg" data-parallax-direction="">
            <div class="header-content">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <div class="haeder-text">
                                <h1>Buy</h1>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  /.End of page header -->
        <div class="buySell_content">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <!-- alert message -->
                                                        
                                                        
                         
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <div class="form-content">
                        <form action="http://phpcryptomarket.bdtask.com/demo-v1.6/buy" id="buyForm"  class="form-horizontal" name="buyForm" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                                                                                                             <input type="hidden" name="csrf_test_name" value="5e2afe77814e90ae82ddc9e972c90b86" />
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Crypto Currency</label>
                                    <div class="col-sm-8">
                                        <select class="selectpicker" data-width="100%" name="cid" id="cid">
                                            <option value="">Select Cryptocurrency</option>
                                                                                             <option value="1">Bitcoin</option>
                                                                                             <option value="2">Ethereum</option>
                                                                                             <option value="3">Ripple</option>
                                                                                             <option value="4">Bitcoin Cash</option>
                                                                                             <option value="6">Litecoin</option>
                                                                                             <option value="7">NEM</option>
                                                                                             <option value="100">Emercoin</option>
                                                                                             <option value="12">Dash</option>
                                                                                             <option value="32">VeChain</option>
                                                                                             <option value="93">XPlay</option>
                                                                                    </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Buy Amount</label>
                                    <div class="col-sm-8">
                                        <input name="buy_amount" type="text" class="form-control input-solid buy_amount" id="buy_amount" autocomplete="off" disabled>
                                    </div>
                                </div>
                                <span class="buy_payable">
                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-4">
                                        <h3 class="form-title">Payable:</h3>
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Currency</th>
                                                        <th>Payable</th>
                                                        <th>Rate</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>USD</td>
                                                        <td>$</td>
                                                        <td>0</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Indian Rupee</td>
                                                        <td>₹</td>
                                                        <td>0</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Your <i></i> Wallet ID</label>
                                    <div class="col-sm-8">
                                        <input  name="wallet_id" type="text" class="form-control input-solid" id="wallet_id" autocomplete="off">
                                    </div>
                                </div>
                                </span>                                
                                <div class="form-group row">
                                    <label class="col-sm-4 control-label">Payment Method</label>
                                    <div class="col-sm-8">
                                        <select class="form-control input-solid" name="payment_method" id="payment_method">
                                            <option value="">Select Payment Method</option>
                                                                                        <option value="bitcoin">Bitcoin</option>
                                                                                        <option value="payeer">Payeer</option>
                                                                                        <option value="phone">Mobile Money</option>
                                                                                        <option value="paypal">Paypal</option>
                                                                                        <option value="stripe">Stripe</option>
                                                                                    </select>
                                    </div>
                                </div>
                                <span class="payment_info">
                                    <div class="form-group row">
                                        <label class="col-sm-4 control-label">Comments</label>
                                        <div class="col-sm-8">
                                            <textarea name="comments" class="form-control input-solid" placeholder="" type="text" id="comments"></textarea>
                                        </div>
                                    </div>
                                </span>
                                <div class="form-group">
                                    <div class="col-sm-offset-4 col-sm-8">
                                        <button type="submit" class="btn btn-default mr-10">Buy</button>
                                        <button type="submit" class="btn btn-orange">Cancel</button>
                                    </div>
                                </div>
                            </form>                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.End of buy & sell content -->

        <footer class="footer">
            <div class="footer-breadcrumbs">
                <div class="container">
                    <div class="breadcrumbs-row">
                        <ul class="f_breadcrumbs">
                            <li><a href="index.php"><span>Home</span></a></li>
                            <li><a href="#"><span>Buy</span></a></li>
                        </ul>
                        <div class="scroll-top" id="back-to-top">
                            <div class="scroll-top-text"><span>Scroll to Top</span></div>
                            <div class="scroll-top-icon"><i class="fa fa-angle-up"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.End of breadcrumbs -->
            <div class="action_btn_inner">
                <a href="register.php#tab1" class="action_btn">
                    <span class="action_title">Register</span>
                    <span class="lnr lnr-chevron-right action_icon"></span>
                    <span class="action_sub_title">Join the new Yera of cryptocurrency exchange</span>
                </a>
                <a href="register.php#tab2" class="action_btn">
                    <span class="action_title">Sign In</span>
                    <span class="lnr lnr-chevron-right action_icon"></span>
                    <span class="action_sub_title">Access the cryptocurrency experience you deserve</span>
                </a>
            </div>
            <!-- /.End of action button -->
            <div class="main_footer">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4 col-md-4">
                            <div class="widget-contact">
                                <ul class="list-icon">
                                    <li><i class="fa fa-map-marker"></i> Bangladesh Office <br>98 Green Road, Farmgate, Dhaka- 1215</li>
                                    <li><i class="fa fa-phone"></i> +88-01817-584639 </li>
                                    <li><i class="fa fa-envelope"></i> <a href="../cdn-cgi/l/email-protection.html#5e373038311e3c3a2a3f2d35703d3133"><span class="__cf_email__" data-cfemail="2e474048416e4c4a5a4f5d45004d4143">[email&#160;protected]</span></a>
                                    </li>
                                    <li>
                                        <br><i class="fa fa-clock-o"></i>Monday - Friday: <strong>08:00 - 22:00</strong>
<br>Saturday, Sunday: <strong>Closed</strong>                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-5 col-md-4 col-md-offset-1">
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="footer-box">
                                        <h3 class="footer-title">Our Company</h3>
                                        <ul class="footer-list">
                                                            <li><a href="about.html">About</a></li>
                                                            <li><a href="coinmarket.php">Coinmarket</a></li>
                                                            <li><a href="faq.php">F.A.Q</a></li>
                                                            <li><a href="service.php">Service</a></li>
                                                            <li><a href="contact.php">Contact</a></li>
                                                                </ul>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="footer-box">
                                        <h3 class="footer-title">Services</h3>
                                        <ul class="footer-list">
                                            
                                                    <li><a href="service/data-protection.html">Data Protection</a></li>
                                            
                                                    <li><a href="service/security-protected.html">Security Protected</a></li>
                                            
                                                    <li><a href="service/support-247.html">Support 24/7</a></li>
                                            
                                                    <li><a href="service/payment-methods.html">Payment Methods</a></li>
                                            
                                                    <li><a href="service/registered-company.html">Registered Company</a></li>
                                            
                                                    <li><a href="service/secured-company.html">Secured Company</a></li>
                                            
                                                    <li><a href="service/live-exchange-rates.html">Live Exchange Rates</a></li>
                                            
                                                    <li><a href="service/cryptocurrency-investments.html">Cryptocurrency Investments</a></li>
                                                                                    </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 col-md-3">
                            <div class="newsletter-box">
                                <h3 class="footer-title">Email Newslatter</h3>
                                <p>Subscribe to our newsletter!</p>
                                <form action="http://phpcryptomarket.bdtask.com/demo-v1.6/#" id="subscribeForm"  class="newsletter-form" name="subscribeForm"  method="post" accept-charset="utf-8">
<input type="hidden" name="csrf_test_name" value="5e2afe77814e90ae82ddc9e972c90b86" />                                             
                                <form class='newsletter-form' action='#' method='post'>
                                    <input name="subscribe_email" placeholder="Email Address" type="email">
                                    <button type="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                                    <div class="envelope">
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                    </div>
                                </form>                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.End of main footer -->
            <div class="sub_footer">
                <div class="container">
                    <div class="logos-wrapper">
                        <div class="logos-row">
                            <div class="social-content">
                                <div class="social-row">
                                    <div class="social_icon">
                                                                                <a href="https://www.facebook.com/" class=""><i class="fa fa-facebook"></i></a>
                                                                                <a href="https://twitter.com/" class=""><i class="fa fa-twitter"></i></a>
                                                                                <a href="https://google-plus.com/" class=""><i class="fa fa-google-plus"></i></a>
                                                                                <a href="https://www.youtube.com/" class=""><i class="fa fa-youtube-play"></i></a>
                                                                                <a href="https://instagram.com/" class=""><i class="fa fa-instagram"></i></a>
                                                                            </div>
                                    <div class="f-language">
                                        <select class="selectpicker lang-change" id="lang-changeF" data-width="fit">
                                            <option value="english" data-content='<span class="flag-icon flag-icon-us"></span> English' Selected>English</option>
                                            <option value="french"  data-content='<span class="flag-icon flag-icon-fr"></span> Français' > Français</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="copyright">
                            <span>2018 © Copyright bdtask Treading System</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.End of sub footer -->
        </footer>
        <!-- /.End of footer -->

<!-- Home nad Coin Market Page Script -->
        <!-- jQuery -->
        <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/website/js/jquery.min.js"></script>
        <script src="assets/js/sparkline.min.js"></script>
        <script src="assets/website/js/bootstrap.min.js"></script>
        <script src="assets/website/js/bootsnav.min.js"></script>
        <script src="assets/website/js/owl.carousel.min.js"></script>
        <script src="assets/website/js/wow.min.js"></script>
        <script src="assets/website/js/parallax-background.min.js"></script>
        <script src="assets/website/js/jquery.dataTables.min.js"></script>
        <script src="assets/website/js/dataTables.bootstrap.min.js"></script>
        <script src="assets/website/js/dataTables.responsive.min.js"></script>
        <script src="assets/website/js/responsive.bootstrap.min.js"></script>
        <script src="assets/website/js/jquery.marquee.min.js"></script>
        <script src="assets/website/js/particles.min.js"></script>
        <script src="assets/website/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/website/js/bootstrap-select.min.js"></script>
        <script src="assets/website/js/app.js"></script>
        <script src="assets/website/js/classie.min.js"></script>

        <script src="assets/website/js/custom.js"></script>

        <!-- Calculator -->        
        <script type="text/javascript">
            $(function(){

                var cryptolistfrom;
                var cryptolistto;
                var amountfrom;
                var amountto;

                $("#convertfromcryptolist").on("change", function(event) {
                    event.preventDefault();
                    $( "#convertfromcrypto").val(1);
                    cryptolistfrom = $("#convertfromcryptolist").val(); 
                    cryptolistto = $("#converttocryptolist").val(); 

                    $.ajax({
                        url: "https://min-api.cryptocompare.com/data/price?fsym="+cryptolistfrom+"&tsyms="+cryptolistto,
                        type: "post",
                        dataType : "json",
                        success: function(result,status,xhr) {
                            $( "#converttocrypto").val(result[Object.keys(result)[0]]);
                        },
                        error: function(xhr,status,error){
                            alert("No Conversion Found!!!");
                        }
                    });
                });

                $("#converttocryptolist").on("change", function(event) {
                    event.preventDefault();
                    $( "#converttocrypto").val(1);
                    cryptolistfrom = $("#convertfromcryptolist").val(); 
                    cryptolistto = $("#converttocryptolist").val();

                    $.ajax({
                        url: "https://min-api.cryptocompare.com/data/price?fsym="+cryptolistfrom+"&tsyms="+cryptolistto,
                        type: "post",
                        dataType : "json",
                        success: function(result,status,xhr) {
                            $( "#convertfromcrypto").val(result[Object.keys(result)[0]]);
                        },
                        error: function(xhr,status,error){
                            alert("No Conversion Found!!!");
                        }
                    });
                });

                $("#convertfromcrypto").on("keyup", function(event) {
                    event.preventDefault();
                    cryptolistfrom = $("#convertfromcryptolist").val();
                    cryptolistto = $("#converttocryptolist").val();
                    amountfrom = parseFloat($("#convertfromcrypto").val())|| 1;

                    $.ajax({
                        url: "https://min-api.cryptocompare.com/data/price?fsym="+cryptolistfrom+"&tsyms="+cryptolistto,
                        type: "post",
                        dataType : "json",
                        success: function(result,status,xhr) {
                            $( "#converttocrypto").val(result[Object.keys(result)[0]]*amountfrom);
                        },
                        error: function(xhr,status,error){
                            alert("No Conversion Found!!!");
                        }
                    });
                });

                $("#converttocrypto").on("keyup", function(event) {
                    event.preventDefault();
                    cryptolistfrom = $("#convertfromcryptolist").val();
                    cryptolistto = $("#converttocryptolist").val();
                    amountto = parseFloat($("#converttocrypto").val())|| 1;

                    $.ajax({
                        url: "https://min-api.cryptocompare.com/data/price?fsym="+cryptolistto+"&tsyms="+cryptolistfrom,
                        type: "post",
                        dataType : "json",
                        success: function(result,status,xhr) {
                            $("#convertfromcrypto").val(result[Object.keys(result)[0]]*amountto);
                        },
                        error: function(xhr,status,error){
                            alert("No Conversion Found!!!");
                        }
                    });
                });               

            });
        </script>
        
        <script>
            $(function () {
                $('.selectpicker').selectpicker();
            });
        </script>
        
        <!-- Ajax Language Change -->
        <script type="text/javascript">
            $(function(){
                $(".lang-change").on("change", function(event) {
                    event.preventDefault();

                    var langh = $("#lang-changeH").val();
                    var langf = $("#lang-changeF").val();

                    var lang = langf;
                    var token   = "5e2afe77814e90ae82ddc9e972c90b86";
                    var inputdata = "lang="+lang+"&csrf_test_name="+token;
                    $.ajax({
                        url: "http://phpcryptomarket.bdtask.com/demo-v1.6/home/langChange",
                        type: "post",
                        data: inputdata,
                        success: function(result,status,xhr) {
                            location.reload();
                        },
                        error: function(xhr,status,error){
                            location.reload();
                        }
                    });
                });
            });
        </script>
        <!-- Ajax Subscription -->
        <script type="text/javascript">
            function isValidEmailAddress(emailAddress) {
                var pattern = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                return pattern.test(emailAddress);
            }

            $(function(){
                $("#subscribeForm").on("submit", function(event) {
                    event.preventDefault();
                    var inputdata = $("#subscribeForm").serialize();
                    var email = $('input[name=subscribe_email]').val();

                    if (email == "") {
                        alert("Please Input Your Email !!!");
                        return false;
                    }
                    if (!isValidEmailAddress(email)) {
                        alert("Please Enter Valid Email !!!");
                        return false;
                    }

                    $.ajax({
                        url: "http://phpcryptomarket.bdtask.com/demo-v1.6/home/subscribe",
                        type: "post",
                        data: inputdata,
                        success: function(result,status,xhr) {
                            alert("Subscribtion complete");
                            location.reload();
                        },
                        error: function (xhr,status,error) {
                            if (xhr.status===500) {
                                alert("This Email Address already subscribed");
                            }
                        }
                    });
                });
            }); 
        </script>
        


        <!-- Ajax Buy Crypto -->
        <script type="text/javascript">
            $(function(){ 
                $("#cid").on("change", function(event) {
                    event.preventDefault();
                    var cid = $("#cid").val()|| 0;

                    var inputdata = 'cid='+cid+"&csrf_test_name=5e2afe77814e90ae82ddc9e972c90b86";
                    $.ajax({
                        url: "http://phpcryptomarket.bdtask.com/demo-v1.6/home/buypayable",
                        type: "post",
                        data: inputdata,
                        success: function(data) {
                            $( ".buy_payable").html(data);
                            $( "#buy_amount" ).prop( "disabled", false );
                        },
                        error: function(){

                        }
                    });
                });

                $("#buy_amount").on("keyup", function(event) {
                    event.preventDefault();
                    var buy_amount = parseFloat($("#buy_amount").val())|| 0;
                    var cid = $("#cid").val()|| 0;
                    if (cid=="") {
                        alert("Please Select CryptoCurrency First");
                        return false;
                    } else {
                        var inputdata = "cid="+cid+"&amount="+buy_amount+"&csrf_test_name=5e2afe77814e90ae82ddc9e972c90b86";
                         $.ajax({
                            url: "http://phpcryptomarket.bdtask.com/demo-v1.6/home/buypayable",
                            type: "post",
                            data: inputdata,
                            success: function(data) {
                                $( ".buy_payable").html(data);
                            },
                            error: function(){
                                return false;
                            }
                        });
                    }
                });

                $("#payment_method").on("change", function(event) {
                    event.preventDefault();
                    var payment_method = $("#payment_method").val()|| 0;
                    var cid = $("#cid").val()|| 0;

                    if (payment_method==='bitcoin' && cid==1) {
                        alert("Please select Diffrent Payment Method");
                        $('#payment_method option:selected').removeAttr('selected');
                        return false;
                    }
                    
                    if (payment_method==='phone') {
                        $(".payment_info").html("<div class='form-group row'><label for='send_money' class='col-sm-4 control-label'>Send Money</label><div class='col-sm-8'><h2><a href='tel:+880 1746 40 68 01'>+880 1746 40 68 01</a></h2></div></div><div class='form-group row'><label class='col-sm-4 control-label'>OM Name</label><div class='col-sm-8'><input name='om_name' class='form-control input-solid om_name' type='text' id='om_name' autocomplete='off'></div></div><div class='form-group row'><label class='col-sm-4 control-label'>OM Phone No</label><div class='col-sm-8'><input name='om_mobile' class='form-control input-solid om_mobile' type='text' id='om_mobile' autocomplete='off'></div></div><div class='form-group row'><label class='col-sm-4 control-label'>Transaction No</label><div class='col-sm-8'><input name='transaction_no' class='form-control input-solid transaction_no' type='text' id='transaction_no' autocomplete='off'></div></div><div class='form-group row'><label class='col-sm-4 control-label'>ID Card No</label><div class='col-sm-8'><input name='idcard_no' class='form-control input-solid idcard_no' type='text' id='idcard_no' autocomplete='off'></div></div>");
                    }
                    else{
                        $(".payment_info").html("<div class='form-group row'><label class='col-sm-4 control-label'>Comments</label><div class='col-sm-8'><textarea name='comments' class='form-control input-solid' placeholder='' type='text' id='comments' autocomplete='off'></textarea></div></div>");
                    }
                });

            }); 
        </script>

    </body>

<!-- Mirrored from phpcryptomarket.bdtask.com/demo-v1.6/buy by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 Oct 2018 01:51:53 GMT -->
</html>