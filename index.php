<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/config/config.php';
require_once $website_details->INCS_FOLDER.'header.php';
?>

<!DOCTYPE html>
<html lang="en">
    
<head>
    <!-- Mirrored from phpcryptomarket.bdtask.com/demo-v1.6/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 Oct 2018 01:49:14 GMT -->
    <!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

        <title><?php echo $website_details->SiteName; ?>- Open source Digital Assets</title>
    <?php echo $header->GetDefaultPageHeadTags(); ?>
    </head>
    <body>
<?php echo $header->DisplayHeader(); ?>
<div class="animation-slide owl-carousel owl-theme" id="animation-slide">

    <!-- Slide 1-->
    <div class="item slide-one" style="background-image: url(upload/slider/f60ea2fc495dcab6205e27221342a27c.jpg)">
        <div class="slide-table">
            <div class="slide-tablecell">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="slide-text text-center">
                                <h2>The Asset of the <span class="outrageous-orange">Future</span> <br>is Here</h2>
                                <p id = "available-assets-span-container"><span class = "available-assets"><?php echo $page->money_format($page->available_assets_float); ?></span> <?php echo $website_details->AssetNamePlural; ?> avail. <span id = "sold-assets-container"><span class = "sold-assets" id ="header-num-sold"><?php echo ($page->fake_sold_assets != 0)? $page->money_format($page->fake_sold_assets):$page->money_format($page->sold_assets);?></span> <?php echo $website_details->AssetNamePlural; ?> sold</span></p>
                                <div class="slide-buttons">
                                    <a href="#learn-more" class="slide-btn">Learn more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Slide 2-->
    <div class="item slide-two" style="background-image: url(upload/slider/0e4a7d6316e326b8618ad1edb0f7c312.jpg)">
        <div class="slide-table">
            <div class="slide-tablecell">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="slide-text">
                                <h2>Realtime <span class="bright-turquoise">Exchange</span><br>rates You Can Trust.</h2>
                                <p>Nobody sets the value of <?php echo $website_details->AssetNameSingular; ?>.<br>a completely decentralized digital assets <br />that follows the law of demand & Supply </p>
                                <div class="slide-buttons">
                                    <a href="#learn-more" class="slide-btn">Click Here</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Slide 3-->
    <div class="item slide-three" style="background-image: url(upload/slider/ca4ffe27c29962f8d5fc41f0672221c7.jpg)">
        <div class="slide-table">
            <div class="slide-tablecell">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="slide-text text-right">
                                <h2>The world's first true<br><span class="navy-blue"> Digital assets</span> website.</h2>

                                <div class="slide-buttons">
                                    <a href="#learn-more" class="slide-btn">Continue</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</div>
<!-- /.End of slider -->
<?php require_once $website_details->INCS_FOLDER. 'ticker.php'; ?>

        <div class="about_content">
            <div class="container">
                <div class="row about-text justify-content">
                    <div class="col-md-6">
                        <div class="about-info" id="learn-more">
                            <h2>What is <?php echo $website_details->AssetNameSingular; ?>?</h2>
                            <div class="definition">
                                <?php echo $website_details->AssetNameSingular; ?> is a new kind of Asset, that is here to stay</div>
                             <p>You see, the problem is: no one is sure of the Future, Economies are Dwindling, people are loosing their jobs everyday, but, there is a solution to that
                            That is where <?php echo $website_details->AssetNameSingular; ?> comes in, anyone that buys <?php echo $website_details->AssetNameSingular; ?> today, has a bright future, once all the
                                <?php echo $website_details->AssetNamePlural; ?> are sold , by then , <?php echo $website_details->AssetNameSingular; ?> would be worth more than gold
                                 Anyone that wants to buy, will now have to buy from <strong>You</strong> at gold price, more demand for it, increase in price for it, simple law of Economics and guess who will be the one to sell it? <strong>You</strong> at a market price that is decentralized.</p><a href="/contact" class="btn btn-default mr-20 mb-10">Contact Us</a>
                            <div class="play-button">
                                <a href="https://www.youtube.com/watch?v=bWW5Kz2bEPg" class="btn-play popup-youtube">
                                    <div class="play-icon"><i class="fa fa-play"></i></div>
                                    <div class="play-text">
                                        <div class="btn-title-inner">
                                            <div class="btn-title"><span>WATCH VIDEO</span></div>
                                            <div class="btn-subtitle"><span>About <em><?php echo $website_details->AssetNameSingular; ?></em></span></div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="text-right">
                            <img src="upload/b1c4c1a1466bc4302f4ff58b6386f889.jpg" class="img-responsive" alt="Tarek Sumch - Owner, Bdtask">
                        </div>
                        <div class="quote">
                        We live in a world where Money has failed , don't work your ass off till you die,  Secure a bright future by owning your own Digital Assets now"
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.End of about content -->
        <div class="calculate">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <div class="section_title">
                            <h3>Our Quick <?php echo $website_details->AssetNameSingular; ?> to currency <span>Converter</span></h3>
                                <p>Convert from currency to <?php echo $website_details->AssetNameSingular; ?> and <?php echo $website_details->AssetNameSingular; ?> to currency back and forth easily.</p>                        </div>
                    </div>
                </div>
                <div class="row justify-content">
                    <div class="col-sm-4">
                        <div class="bitcoin-sack">
                            <img src="upload/1bdb688b0774ccb380813b393b52119e.png" class="img-responsive center-block" alt="Quick Currency  Converter">
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="exchange-content">
                            <form class="form-inline exchange-form" >
                                <div class="input-group">
                                    <div class="input-group-btn">
                                        <select class="selectpicker convertfromcryptolist" id="currency-select-list" data-width="80px" name="convertfromcryptolist">
                                            <?php foreach ($website_details->AcceptedCurrencies as $acceptedCurrency){
                                                echo "<option class='{$acceptedCurrency}' value='{$acceptedCurrency}'>{$acceptedCurrency}</option>";
                                            }
                                            foreach ($website_details->OtherAcceptedCurrencies as $otherAcceptedCurrency){
                                                echo "<option class='{$acceptedCurrency}' value='{$otherAcceptedCurrency}'>{$otherAcceptedCurrency}</option>";
                                            }
                                            ?>
                                                                                       </select>
                                    </div>
                                    <input type="number" class="form-control convertfromcrypto" id="convert-to-asset" name="convertfromcrypto">
                                </div>
                                <div class="exchange-btn">
                                    <span class="lnr lnr-arrow-right"></span>
                                </div>
                                <div class="input-group">
                                    <div class="input-group-btn">
                                        <select class="selectpicker converttocryptolist" id="converttocryptolist" data-width="80px" name="converttocryptolist">
                                                                                        <option  value="<?php echo $website_details->AssetShortName;?>"><?php echo $website_details->AssetShortName;?></option>

                                                                                         </select>
                                    </div>
                                    <input type="number" class="form-control converttocrypto" id="convert-to-currency" name="converttocrypto">
                                </div>
                            </form>
                            <div class="exchange-info">
                                <h4>How it works?</h4>
                                <p>Well, it's pretty straightforward, you simply buy an amount of <em><?php echo $website_details->AssetNameSingular; ?></em> now , the more people demand(buy) the higher the price (law of demand), when all  <em><?php echo $website_details->AssetNamePlural; ?></em> are sold out (about <?php echo $website_details->IntialAvailableAssetsInWords; ?>), then you can now start selling your <?php echo $website_details->AssetNameSingular; ?> (at a high  exchange rate) here without going elsewhere to find buyers, leading to a new era of Digital Assets Market.</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.End of calculate -->

 
        <div class="features__content">
            <div id="content__bg"></div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <div class="section_title">
                            <h3>Services we <span>Provide</span></h3>
                            <p><em><?php echo $website_details->SiteName;?></em> is the official website that handles all transactions/services relating <em><?php echo $website_details->AssetNameSingular;?></em> and its operations.</p>                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="feature__box">
                        <i class="flaticon-analytics"></i>
                        <div class="feature__content">
                            <h3><a href="#">Data Protection</a></h3>
                            <p>All the your data handled here on <em><?php echo $website_details->SiteName;?></em> are safe with us , We've ensured all your date here are encrypted.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="feature__box">
                        <i class="flaticon-secure-shield"></i>
                        <div class="feature__content">
                            <h3><a href="#">Security Protected</a></h3>
                                <p>No one here on <em><?php echo $website_details->SiteName;?></em> has access to your data, We've perfected the bests security algorithms , your money and trust is safe with us.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="feature__box">
                        <i class="flaticon-people"></i>
                        <div class="feature__content">
                            <h3><a href="service/support-247.html">Support 24/7</a></h3>
                                <p>We have 24/7 Real-time support to get answers to your Questions, resolve errors and so much more, Our Live support responds to your needs Instantly.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="feature__box">
                        <i class="flaticon-credit-card"></i>
                        <div class="feature__content">
                            <h3><a href="service/payment-methods.html">Payment Methods</a></h3>
                            <p>All payments related transactions here on <?php echo $website_details->SiteName;?> are handled by FlutterWave, one of the most reliable payments systems out there, trusted by the likes of Uber and Shopify.</p>         </div>
                    </div>
                </div>
                <!--
                <div class="col-sm-3">
                    <div class="feature__box">
                        <i class="flaticon-money-2"></i>
                        <div class="feature__content">
                            <h3><a href="service/registered-company.html">Registered Company</a></h3>
                                <p>Perfectly elaborated and calculated investment plans for depositPerfectly elaborated and c profit during the entire term of the deposit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="feature__box">
                        <i class="flaticon-money-1"></i>
                        <div class="feature__content">
                            <h3><a href="service/secured-company.html">Secured Company</a></h3>
                                <p>Perfectly elaborated and calculated investment plans for depositPerfectly elaborated and c profit during the entire term of the deposit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="feature__box">
                        <i class="flaticon-bitcoin"></i>
                        <div class="feature__content">
                            <h3><a href="service/live-exchange-rates.html">Live Exchange Rates</a></h3>
                                <p>Perfectly elaborated and calculated investment plans for depositPerfectly elaborated and c profit during the entire term of the deposit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="feature__box">
                        <i class="flaticon-bitcoin-1"></i>
                        <div class="feature__content">
                            <h3><a href="service/cryptocurrency-investments.html">Cryptocurrency Investments</a></h3>
                                <p>Perfectly elaborated and calculated investment plans for depositPerfectly elaborated and c profit during the entire term of the deposit.</p>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
        <!-- End of features content -->
        <div class="crypto-strat">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <div class="section_title">
                            <h3>How to <span>Get Started</span></h3>
                                <p>Follow these simple steps below to get started on <span><?php echo $website_details->AssetNameSingular; ?></span></p>
                        </div>
                    </div>
                </div>
                <div class="start-steps">
                    <div class="start-step">
                        <i class="step-icon flaticon-wallet"></i>
                        <div class="start-step-info">
                            <div class="step-name">
                                <span>Choose how much <?php echo $website_details->AssetNameSingular; ?> to buy</span>
                            </div>
                            <div class="step-text">
   <span>First you must have an account with us , </span>
                                <span>Our Online Currency to <?php echo $website_details->AssetNameSingular;?>  converter will have it converted to number of <?php echo $website_details->AssetNameSingular; ?> </span>
                            </div>
                        </div>
                    </div>
                    <div class="start-step">
                        <i class="step-icon flaticon-credit-card"></i>
                        <div class="start-step-info">
                            <div class="step-name">
                                <span>Make Payment</span>
                            </div>
                            <div class="step-text">
                                <span>You can make payment in any currency of your choice listed in our options menu</span>
                            </div>
                        </div>
                    </div>
                    <div class="start-step">
                        <!--<span class="start-step-number">3</span>-->
                        <i class="step-icon flaticon-money-1"></i>
                        <div class="start-step-info">
                            <div class="step-name">
                                <span>Trade your <?php echo $website_details->AssetNameSingular; ?></span>
                            </div>
                            <div class="step-text">
                                <span>Trading begins immediately all <?php echo $website_details->AssetNamePlural; ?> are sold.then you can start selling your <?php echo $website_details->AssetNameSingular; ?> </span>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="/buy" class="btn btn-default">Get Start</a>
            </div>
        </div>
        <!-- /.End of How to Get  Start -->
        <div class="currency-table">
            <div class="with-nav-tabs currency-tabs">
                <div class="tab-header">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#crypto" data-toggle="tab">Currency Exchange rates for today</a></li>
                    </ul>
                </div>
                <div class="container">
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="crypto">
                            <!-- <table id="cryptoTable" class="table table-striped table-hover nowrap" width="100%" cellspacing="0"> -->
                            <!-- Please do not edit this code - https://mconvert.net/exchange-rates-widget starts here --><iframe id="exchange-rates-table" src="https://mconvert.net/get-exchange-rates-widget?base=usd&amount=1&lang=en&curr=aud,cad,chf,cny,eur,gbp,hkd,jpy,ngn,btc,ltc,etc,ghs&theme=blue&type=1&font=2&ssl=1" width="100%" height="571" frameborder="0" scrolling="no"></iframe><div style="font-size:12px;font-family:arial;text-align:right;"></div><!-- https://mconvert.net/exchange-rates-widget ends here -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php require_once $website_details->INCS_FOLDER.'footer.php'; ?>
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
        <!-- jQuery -->
        <script src="<?php echo $website_details->JS_FOLDER; ?>jquery.min.js"></script>
        <script src="<?php echo $website_details->JS_FOLDER; ?>sparkline.min.js"></script>
        <script src="<?php echo $website_details->JS_FOLDER; ?>bootstrap.min.js"></script>
        <script src="<?php echo $website_details->JS_FOLDER; ?>bootsnav.min.js"></script>
        <script src="<?php echo $website_details->JS_FOLDER; ?>owl.carousel.min.js"></script>
        <script src="<?php echo $website_details->JS_FOLDER; ?>wow.min.js"></script>
        <script src="<?php echo $website_details->JS_FOLDER; ?>parallax-background.min.js"></script>
        <script src="<?php echo $website_details->JS_FOLDER; ?>jquery.dataTables.min.js"></script>
        <script src="<?php echo $website_details->JS_FOLDER; ?>dataTables.bootstrap.min.js"></script>
        <script src="<?php echo $website_details->JS_FOLDER; ?>dataTables.responsive.min.js"></script>
        <script src="<?php echo $website_details->JS_FOLDER; ?>responsive.bootstrap.min.js"></script>
        <script src="<?php echo $website_details->JS_FOLDER; ?>jquery.marquee.min.js"></script>
        <script src="<?php echo $website_details->JS_FOLDER; ?>particles.min.js"></script>
        <script src="<?php echo $website_details->JS_FOLDER; ?>jquery.magnific-popup.min.js"></script>
        <script src="<?php echo $website_details->JS_FOLDER; ?>bootstrap-select.min.js"></script>
        <script src="<?php echo $website_details->JS_FOLDER; ?>app.js"></script>
        <script src="<?php echo $website_details->JS_FOLDER; ?>classie.min.js"></script>

        <script src="<?php echo $website_details->JS_FOLDER; ?>custom.js"></script>

    </body>

<!-- Mirrored from phpcryptomarket.bdtask.com/demo-v1.6/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 Oct 2018 01:51:29 GMT -->
</html>