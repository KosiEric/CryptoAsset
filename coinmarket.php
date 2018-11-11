
<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from phpcryptomarket.bdtask.com/demo-v1.6/coinmarket by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 Oct 2018 01:51:42 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Coinmarket - Crypto Currency Treading System</title>
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

                                                        <li class="active "><a href="coinmarket.php">Coinmarket</a>
                                </li>

                                                        <li class=""><a href="pricing.php">Pricing</a>
                                </li>

                                                        <li class=""><a href="exchange.php">Exchange</a>
                                </li>

                                                        <li class=""><a href="buy.html">Buy</a>
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
        </nav>        <div class="page_header" data-parallax-bg-image="http://phpcryptomarket.bdtask.com/demo-v1.6/upload/61f2731418cee75eecde8fd5cadb2663.jpg" data-parallax-direction="">
            <div class="header-content">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <div class="haeder-text">
                                <h1>Bitcoin Currency Prices</h1>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  /.End of page header -->
        <div class="currency-table">
            <div class="with-nav-tabs currency-tabs">
                
                                    <div class="widget_banner">
                                                <a target="_blank" href="https://www.bdtask.com/"><img src="upload/advertisement/515c86dd13ace9254f792fadc1efd026.png" class="img-responsive center-block" alt="coinmarket-top"></a>
                                            </div><!-- /.End of banner -->
                
                                
                <div class="container">
                    <div class="tab-content">


                        <div class="tab-pane fade in active" id="crypto">
                            <!-- <table id="cryptoTable" class="table table-striped table-hover nowrap" width="100%" cellspacing="0"> -->
                            <table class="table table-striped table-hover nowrap" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Ticker</th>
                                        <th>Price</th>
                                        <th>24H Volume</th>
                                        <th>24H change</th>
                                        <th>Graph 24H</th>
                                    </tr>
                                </thead>
                                <tbody>

                                                                        <tr data-href="http://phpcryptomarket.bdtask.com/demo-v1.6/coin-details/1182" id="BGCOLOR_BTC">
                                        <td>
                                            <div class="logo-name">
                                                <div class="item-logo">
                                                    <img src="upload/coinlist/btc.png" class="img-responsive" alt="Bitcoin (BTC)">
                                                </div>
                                                <span class="item_name_value">Bitcoin</span>
                                            </div>
                                        </td>
                                        <td><span class="value_ticker">BTC</span></td>
                                        <td>$ <span class="price value_cap" id="PRICE_BTC">0</span></td>
                                        <td><span class="value_max_quantity" id="VOLUME24HOURTO_BTC"></span></td>
                                        <td><span id="CHANGE24HOUR_BTC"></span><span id="CHANGE24HOURPCT_BTC"></span></td>


                                        <td>
                                            <span class="bdtasksparkline value_graph" id="GRAPH_BTC"></span>
                                        </td>
                                    </tr>

                                                                        <tr data-href="http://phpcryptomarket.bdtask.com/demo-v1.6/coin-details/7605" id="BGCOLOR_ETH">
                                        <td>
                                            <div class="logo-name">
                                                <div class="item-logo">
                                                    <img src="upload/coinlist/eth_logo.png" class="img-responsive" alt="Ethereum (ETH)">
                                                </div>
                                                <span class="item_name_value">Ethereum</span>
                                            </div>
                                        </td>
                                        <td><span class="value_ticker">ETH</span></td>
                                        <td>$ <span class="price value_cap" id="PRICE_ETH">0</span></td>
                                        <td><span class="value_max_quantity" id="VOLUME24HOURTO_ETH"></span></td>
                                        <td><span id="CHANGE24HOUR_ETH"></span><span id="CHANGE24HOURPCT_ETH"></span></td>


                                        <td>
                                            <span class="bdtasksparkline value_graph" id="GRAPH_ETH"></span>
                                        </td>
                                    </tr>

                                                                        <tr data-href="http://phpcryptomarket.bdtask.com/demo-v1.6/coin-details/3808" id="BGCOLOR_LTC">
                                        <td>
                                            <div class="logo-name">
                                                <div class="item-logo">
                                                    <img src="upload/coinlist/litecoin-logo.png" class="img-responsive" alt="Litecoin (LTC)">
                                                </div>
                                                <span class="item_name_value">Litecoin</span>
                                            </div>
                                        </td>
                                        <td><span class="value_ticker">LTC</span></td>
                                        <td>$ <span class="price value_cap" id="PRICE_LTC">0</span></td>
                                        <td><span class="value_max_quantity" id="VOLUME24HOURTO_LTC"></span></td>
                                        <td><span id="CHANGE24HOUR_LTC"></span><span id="CHANGE24HOURPCT_LTC"></span></td>


                                        <td>
                                            <span class="bdtasksparkline value_graph" id="GRAPH_LTC"></span>
                                        </td>
                                    </tr>

                                                                        <tr data-href="http://phpcryptomarket.bdtask.com/demo-v1.6/coin-details/3807" id="BGCOLOR_DASH">
                                        <td>
                                            <div class="logo-name">
                                                <div class="item-logo">
                                                    <img src="upload/coinlist/imageedit_27_4355944719.png" class="img-responsive" alt="DigitalCash (DASH)">
                                                </div>
                                                <span class="item_name_value">DigitalCash</span>
                                            </div>
                                        </td>
                                        <td><span class="value_ticker">DASH</span></td>
                                        <td>$ <span class="price value_cap" id="PRICE_DASH">0</span></td>
                                        <td><span class="value_max_quantity" id="VOLUME24HOURTO_DASH"></span></td>
                                        <td><span id="CHANGE24HOUR_DASH"></span><span id="CHANGE24HOURPCT_DASH"></span></td>


                                        <td>
                                            <span class="bdtasksparkline value_graph" id="GRAPH_DASH"></span>
                                        </td>
                                    </tr>

                                                                        <tr data-href="http://phpcryptomarket.bdtask.com/demo-v1.6/coin-details/5038" id="BGCOLOR_XMR">
                                        <td>
                                            <div class="logo-name">
                                                <div class="item-logo">
                                                    <img src="upload/coinlist/xmr.png" class="img-responsive" alt="Monero (XMR)">
                                                </div>
                                                <span class="item_name_value">Monero</span>
                                            </div>
                                        </td>
                                        <td><span class="value_ticker">XMR</span></td>
                                        <td>$ <span class="price value_cap" id="PRICE_XMR">0</span></td>
                                        <td><span class="value_max_quantity" id="VOLUME24HOURTO_XMR"></span></td>
                                        <td><span id="CHANGE24HOUR_XMR"></span><span id="CHANGE24HOURPCT_XMR"></span></td>


                                        <td>
                                            <span class="bdtasksparkline value_graph" id="GRAPH_XMR"></span>
                                        </td>
                                    </tr>

                                                                        <tr data-href="http://phpcryptomarket.bdtask.com/demo-v1.6/coin-details/1183" id="BGCOLOR_NXT">
                                        <td>
                                            <div class="logo-name">
                                                <div class="item-logo">
                                                    <img src="upload/coinlist/nxt.png" class="img-responsive" alt="Nxt (NXT)">
                                                </div>
                                                <span class="item_name_value">Nxt</span>
                                            </div>
                                        </td>
                                        <td><span class="value_ticker">NXT</span></td>
                                        <td>$ <span class="price value_cap" id="PRICE_NXT">0</span></td>
                                        <td><span class="value_max_quantity" id="VOLUME24HOURTO_NXT"></span></td>
                                        <td><span id="CHANGE24HOUR_NXT"></span><span id="CHANGE24HOURPCT_NXT"></span></td>


                                        <td>
                                            <span class="bdtasksparkline value_graph" id="GRAPH_NXT"></span>
                                        </td>
                                    </tr>

                                                                        <tr data-href="http://phpcryptomarket.bdtask.com/demo-v1.6/coin-details/5324" id="BGCOLOR_ETC">
                                        <td>
                                            <div class="logo-name">
                                                <div class="item-logo">
                                                    <img src="upload/coinlist/etc2.png" class="img-responsive" alt="Ethereum Classic (ETC)">
                                                </div>
                                                <span class="item_name_value">Ethereum Classic</span>
                                            </div>
                                        </td>
                                        <td><span class="value_ticker">ETC</span></td>
                                        <td>$ <span class="price value_cap" id="PRICE_ETC">0</span></td>
                                        <td><span class="value_max_quantity" id="VOLUME24HOURTO_ETC"></span></td>
                                        <td><span id="CHANGE24HOUR_ETC"></span><span id="CHANGE24HOURPCT_ETC"></span></td>


                                        <td>
                                            <span class="bdtasksparkline value_graph" id="GRAPH_ETC"></span>
                                        </td>
                                    </tr>

                                                                        <tr data-href="http://phpcryptomarket.bdtask.com/demo-v1.6/coin-details/4432" id="BGCOLOR_DOGE">
                                        <td>
                                            <div class="logo-name">
                                                <div class="item-logo">
                                                    <img src="upload/coinlist/doge.png" class="img-responsive" alt="Dogecoin (DOGE)">
                                                </div>
                                                <span class="item_name_value">Dogecoin</span>
                                            </div>
                                        </td>
                                        <td><span class="value_ticker">DOGE</span></td>
                                        <td>$ <span class="price value_cap" id="PRICE_DOGE">0</span></td>
                                        <td><span class="value_max_quantity" id="VOLUME24HOURTO_DOGE"></span></td>
                                        <td><span id="CHANGE24HOUR_DOGE"></span><span id="CHANGE24HOURPCT_DOGE"></span></td>


                                        <td>
                                            <span class="bdtasksparkline value_graph" id="GRAPH_DOGE"></span>
                                        </td>
                                    </tr>

                                                                        <tr data-href="http://phpcryptomarket.bdtask.com/demo-v1.6/coin-details/24854" id="BGCOLOR_ZEC">
                                        <td>
                                            <div class="logo-name">
                                                <div class="item-logo">
                                                    <img src="upload/coinlist/zec.png" class="img-responsive" alt="ZCash (ZEC)">
                                                </div>
                                                <span class="item_name_value">ZCash</span>
                                            </div>
                                        </td>
                                        <td><span class="value_ticker">ZEC</span></td>
                                        <td>$ <span class="price value_cap" id="PRICE_ZEC">0</span></td>
                                        <td><span class="value_max_quantity" id="VOLUME24HOURTO_ZEC"></span></td>
                                        <td><span id="CHANGE24HOUR_ZEC"></span><span id="CHANGE24HOURPCT_ZEC"></span></td>


                                        <td>
                                            <span class="bdtasksparkline value_graph" id="GRAPH_ZEC"></span>
                                        </td>
                                    </tr>

                                                                        <tr data-href="http://phpcryptomarket.bdtask.com/demo-v1.6/coin-details/5039" id="BGCOLOR_BTS">
                                        <td>
                                            <div class="logo-name">
                                                <div class="item-logo">
                                                    <img src="upload/coinlist/bts.png" class="img-responsive" alt="Bitshares (BTS)">
                                                </div>
                                                <span class="item_name_value">Bitshares</span>
                                            </div>
                                        </td>
                                        <td><span class="value_ticker">BTS</span></td>
                                        <td>$ <span class="price value_cap" id="PRICE_BTS">0</span></td>
                                        <td><span class="value_max_quantity" id="VOLUME24HOURTO_BTS"></span></td>
                                        <td><span id="CHANGE24HOUR_BTS"></span><span id="CHANGE24HOURPCT_BTS"></span></td>


                                        <td>
                                            <span class="bdtasksparkline value_graph" id="GRAPH_BTS"></span>
                                        </td>
                                    </tr>

                                                                        <tr data-href="http://phpcryptomarket.bdtask.com/demo-v1.6/coin-details/4430" id="BGCOLOR_DGB">
                                        <td>
                                            <div class="logo-name">
                                                <div class="item-logo">
                                                    <img src="upload/coinlist/7638-nty_400x400.jpg" class="img-responsive" alt="DigiByte (DGB)">
                                                </div>
                                                <span class="item_name_value">DigiByte</span>
                                            </div>
                                        </td>
                                        <td><span class="value_ticker">DGB</span></td>
                                        <td>$ <span class="price value_cap" id="PRICE_DGB">0</span></td>
                                        <td><span class="value_max_quantity" id="VOLUME24HOURTO_DGB"></span></td>
                                        <td><span id="CHANGE24HOUR_DGB"></span><span id="CHANGE24HOURPCT_DGB"></span></td>


                                        <td>
                                            <span class="bdtasksparkline value_graph" id="GRAPH_DGB"></span>
                                        </td>
                                    </tr>

                                                                        <tr data-href="http://phpcryptomarket.bdtask.com/demo-v1.6/coin-details/5031" id="BGCOLOR_XRP">
                                        <td>
                                            <div class="logo-name">
                                                <div class="item-logo">
                                                    <img src="upload/coinlist/ripple.png" class="img-responsive" alt="Ripple (XRP)">
                                                </div>
                                                <span class="item_name_value">Ripple</span>
                                            </div>
                                        </td>
                                        <td><span class="value_ticker">XRP</span></td>
                                        <td>$ <span class="price value_cap" id="PRICE_XRP">0</span></td>
                                        <td><span class="value_max_quantity" id="VOLUME24HOURTO_XRP"></span></td>
                                        <td><span id="CHANGE24HOUR_XRP"></span><span id="CHANGE24HOURPCT_XRP"></span></td>


                                        <td>
                                            <span class="bdtasksparkline value_graph" id="GRAPH_XRP"></span>
                                        </td>
                                    </tr>

                                                                        <tr data-href="http://phpcryptomarket.bdtask.com/demo-v1.6/coin-details/4400" id="BGCOLOR_BTCD">
                                        <td>
                                            <div class="logo-name">
                                                <div class="item-logo">
                                                    <img src="upload/coinlist/btcd_1.png" class="img-responsive" alt="BitcoinDark (BTCD)">
                                                </div>
                                                <span class="item_name_value">BitcoinDark</span>
                                            </div>
                                        </td>
                                        <td><span class="value_ticker">BTCD</span></td>
                                        <td>$ <span class="price value_cap" id="PRICE_BTCD">0</span></td>
                                        <td><span class="value_max_quantity" id="VOLUME24HOURTO_BTCD"></span></td>
                                        <td><span id="CHANGE24HOUR_BTCD"></span><span id="CHANGE24HOURPCT_BTCD"></span></td>


                                        <td>
                                            <span class="bdtasksparkline value_graph" id="GRAPH_BTCD"></span>
                                        </td>
                                    </tr>

                                                                        <tr data-href="http://phpcryptomarket.bdtask.com/demo-v1.6/coin-details/2349" id="BGCOLOR_PPC">
                                        <td>
                                            <div class="logo-name">
                                                <div class="item-logo">
                                                    <img src="upload/coinlist/peercoin-logo.png" class="img-responsive" alt="PeerCoin (PPC)">
                                                </div>
                                                <span class="item_name_value">PeerCoin</span>
                                            </div>
                                        </td>
                                        <td><span class="value_ticker">PPC</span></td>
                                        <td>$ <span class="price value_cap" id="PRICE_PPC">0</span></td>
                                        <td><span class="value_max_quantity" id="VOLUME24HOURTO_PPC"></span></td>
                                        <td><span id="CHANGE24HOUR_PPC"></span><span id="CHANGE24HOURPCT_PPC"></span></td>


                                        <td>
                                            <span class="bdtasksparkline value_graph" id="GRAPH_PPC"></span>
                                        </td>
                                    </tr>

                                                                        <tr data-href="http://phpcryptomarket.bdtask.com/demo-v1.6/coin-details/4425" id="BGCOLOR_CRAIG">
                                        <td>
                                            <div class="logo-name">
                                                <div class="item-logo">
                                                    <img src="upload/coinlist/craig.png" class="img-responsive" alt="CraigsCoin (CRAIG)">
                                                </div>
                                                <span class="item_name_value">CraigsCoin</span>
                                            </div>
                                        </td>
                                        <td><span class="value_ticker">CRAIG</span></td>
                                        <td>$ <span class="price value_cap" id="PRICE_CRAIG">0</span></td>
                                        <td><span class="value_max_quantity" id="VOLUME24HOURTO_CRAIG"></span></td>
                                        <td><span id="CHANGE24HOUR_CRAIG"></span><span id="CHANGE24HOURPCT_CRAIG"></span></td>


                                        <td>
                                            <span class="bdtasksparkline value_graph" id="GRAPH_CRAIG"></span>
                                        </td>
                                    </tr>

                                                                    </tbody>
                            </table>
                            <ul class='pagination col-xs pull-right'><li class='disabled'><li class='active'><a href='#'>1<span class='sr-only'></span></a></li><li><a href="coinmarket/15.html" data-ci-pagination-page="2">2</a></li><li><a href="coinmarket/30.html" data-ci-pagination-page="3">3</a></li><li><a href="coinmarket/15.html" data-ci-pagination-page="2" rel="next">Next</a></li><li><a href="coinmarket/2325.html" data-ci-pagination-page="156">Last</a></ul>                        </div>
                    </div>
                </div>
                
                
                                    <div class="widget_banner">
                                                <a target="_blank" href="https://www.bdtask.com/"><img src="upload/advertisement/515c86dd13ace9254f792fadc1efd026.png" class="img-responsive center-block" alt="coinmarket-bottom"></a>
                                            </div><!-- /.End of banner -->
                            </div>
        </div>
        <!-- /.End of table content -->

        <footer class="footer">
            <div class="footer-breadcrumbs">
                <div class="container">
                    <div class="breadcrumbs-row">
                        <ul class="f_breadcrumbs">
                            <li><a href="index.php"><span>Home</span></a></li>
                            <li><a href="#"><span>Coinmarket</span></a></li>
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
                                    <li><i class="fa fa-envelope"></i> <a href="../cdn-cgi/l/email-protection.html#b7ded9d1d8f7d5d3c3d6c4dc99d4d8da"><span class="__cf_email__" data-cfemail="a6cfc8c0c9e6c4c2d2c7d5cd88c5c9cb">[email&#160;protected]</span></a>
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
        <style type="text/css">
            /*#crypto  table tbody tr td > .up {
                color: green;
            }

            #crypto  table tbody tr td > .down {
                color: red;
            }*/
            #crypto  table tbody tr.upbg {
                background-color: rgba(255, 78,34,.2);
            }

            #crypto  table tbody tr.downbg {
                background-color: rgba(37,37,142,0.2);
            }

            #crypto  table tbody tr td > .exchange {
                color: #42f492;
            }
        </style>
        <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="../../ajax.googleapis.com/ajax/libs/angularjs/1.6.6/angular.min.js"></script>
        <script src="../../ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="../../cdnjs.cloudflare.com/ajax/libs/socket.io/1.7.2/socket.io.js"></script>
        <script src="assets/website/streamer/ccc-streamer-utilities.js"></script>
        <script type="text/javascript">

        $(document).ready(function() {

            var currentPrice = {};
            var socket = io.connect('https://streamer.cryptocompare.com/');
            //Format: {SubscriptionId}~{ExchangeName}~{FromSymbol}~{ToSymbol}
            //Use SubscriptionId 0 for TRADE, 2 for CURRENT and 5 for CURRENTAGG
            //For aggregate quote updates use CCCAGG as market

                        var subscription = ['5~CCCAGG~BTC~USD','5~CCCAGG~ETH~USD','5~CCCAGG~LTC~USD','5~CCCAGG~DASH~USD','5~CCCAGG~XMR~USD','5~CCCAGG~NXT~USD','5~CCCAGG~ETC~USD','5~CCCAGG~DOGE~USD','5~CCCAGG~ZEC~USD','5~CCCAGG~BTS~USD','5~CCCAGG~DGB~USD','5~CCCAGG~XRP~USD','5~CCCAGG~BTCD~USD','5~CCCAGG~PPC~USD','5~CCCAGG~CRAIG~USD'];
            socket.emit('SubAdd', { subs: subscription });
            socket.on("m", function(message) {
                var messageType = message.substring(0, message.indexOf("~"));
                var res = {};
                if (messageType == CCC.STATIC.TYPE.CURRENTAGG) {
                    res = CCC.CURRENT.unpack(message);
                    dataUnpack(res);
                }
            });

            var dataUnpack = function(data) {
                var from = data['FROMSYMBOL'];
                var to = data['TOSYMBOL'];
                var fsym = CCC.STATIC.CURRENCY.getSymbol(from);
                var tsym = CCC.STATIC.CURRENCY.getSymbol(to);
                var pair = from + to;

                if (!currentPrice.hasOwnProperty(pair)) {
                    currentPrice[pair] = {};
                }

                for (var key in data) {
                    currentPrice[pair][key] = data[key];
                }

                if (currentPrice[pair]['LASTTRADEID']) {
                    currentPrice[pair]['LASTTRADEID'] = parseInt(currentPrice[pair]['LASTTRADEID']).toFixed(0);
                }
                currentPrice[pair]['CHANGE24HOUR'] = CCC.convertValueToDisplay(tsym, (currentPrice[pair]['PRICE'] - currentPrice[pair]['OPEN24HOUR']));
                currentPrice[pair]['CHANGE24HOURPCT'] = ((currentPrice[pair]['PRICE'] - currentPrice[pair]['OPEN24HOUR']) / currentPrice[pair]['OPEN24HOUR'] * 100).toFixed(2) + "%";;
                displayData(currentPrice[pair], from, tsym, fsym);
            };

            var displayData = function(current, from, tsym, fsym) {
                var priceDirection = current.FLAGS;
                for (var key in current) {
                    if (key == 'CHANGE24HOURPCT') {
                        $('#' + key + '_' + from).text(' (' + current[key] + ')');
                    }
                    else if (key == 'LASTVOLUMETO' || key == 'VOLUME24HOURTO') {
                        $('#' + key + '_' + from).text(CCC.convertValueToDisplay(tsym, current[key]));
                    }
                    else if (key == 'LASTVOLUME' || key == 'VOLUME24HOUR' || key == 'OPEN24HOUR' || key == 'OPENHOUR' || key == 'HIGH24HOUR' || key == 'HIGHHOUR' || key == 'LOWHOUR' || key == 'LOW24HOUR') {
                        $('#' + key + '_' + from).text(CCC.convertValueToDisplay(fsym, current[key]));
                    }
                    else {
                        $('#' + key + '_' + from).text(current[key]);
                    }
                }

                $('#PRICE_' + from).removeClass();
                $('#BGCOLOR_' + from).removeClass();
                if (priceDirection & 1) {
                    $('#PRICE_' + from).addClass("up");
                    $('#BGCOLOR_' + from).addClass("upbg");
                }
                else if (priceDirection & 2) {
                    $('#PRICE_' + from).addClass("down");
                    $('#BGCOLOR_' + from).addClass("downbg");
                }
                if (current['PRICE'] > current['OPEN24HOUR']) {
                    $('#CHANGE24HOURPCT_' + from).removeClass();
                    $('#CHANGE24HOURPCT_' + from).addClass("up");
                }
                else if (current['PRICE'] < current['OPEN24HOUR']) {
                    $('#CHANGE24HOURPCT_' + from).removeClass();
                    $('#CHANGE24HOURPCT_' + from).addClass("down");
                }
            };
        });

        </script>

        <!-- Sparkline Ajax -->
        <script type="text/javascript">
            $(function(){
                window.setTimeout(function(){
                    $( ".value_graph").text("Loading...");
                    $.ajax({
                            url: "http://phpcryptomarket.bdtask.com/demo-v1.6/home/coingraphdata/",
                            type: "GET",
                            dataType : "json",
                            success: function(result,status,xhr) {

                                var keys = Object.keys(result);
                                for(var i=0;i<keys.length;i++){
                                    var key = keys[i];
                                    $( "#GRAPH_"+key).text(result[key]);
                                    $('#GRAPH_'+key).sparkline('html', {type:'line', height:'40px', lineWidth:1, lineColor:'#35a947', fillColor:false, spotColor:'red'} );
                                }

                            },
                            error: function(xhr,status,error){
                                console.log("No Grap Found!!!");

                            }
                        });
                }, 500);
            });

        </script>
        <!-- jQuery -->
        <script src="assets/website/js/jquery.min.js"></script>
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
        



    </body>

<!-- Mirrored from phpcryptomarket.bdtask.com/demo-v1.6/coinmarket by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 Oct 2018 01:51:48 GMT -->
</html>