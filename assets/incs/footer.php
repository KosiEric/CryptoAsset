<footer class="footer">
    <div class="footer-breadcrumbs">
        <div class="container">
            <div class="breadcrumbs-row">
                <ul class="f_breadcrumbs">
                    <li><a href="/"><span>Home</span></a></li>
                    <li><a href="#"><span></span></a></li>
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
        <a href="/account" class="action_btn">
            <span class="action_title">Register</span>
            <span class="lnr lnr-chevron-right action_icon"></span>
            <span class="action_sub_title">Create an account now and join the era of Digital Assets</span>
        </a>
        <a href="/account" class="action_btn">
            <span class="action_title">Sign In</span>
            <span class="lnr lnr-chevron-right action_icon"></span>
            <span class="action_sub_title">Sign-in your account, to enjoy Digital assets experience you deserve</span>
        </a>
    </div>
    <!-- /.End of action button -->
    <div class="main_footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-md-4">
                    <div class="widget-contact">
                        <ul class="list-icon">
                            <li><i class="fa fa-map-marker"></i> <?php echo $website_details->HeadOffice; ?></li>
                            <li><i class="fa fa-phone"></i> <?php echo $website_details->Telephone; ?></li>
                            <li><i class="fa fa-envelope"></i> <a href="../cdn-cgi/l/email-protection.html#ddb4b3bbb29dbfb9a9bcaeb6f3beb2b0"><span class="__cf_email__" data-cfemail="157c7b737a5577716174667e3b767a78">[email&#160;protected]</span></a>
                            </li>
                            <li>
                                <br><i class="fa fa-clock-o"></i>Monday - Friday: <strong>08:00 AM - 06:00 PM</strong>
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
                                    <li><a href="/about">About</a></li>
                                    <li><a href="/trade">Trade</a></li>
                                    <li><a href="/faq">F.A.Q</a></li>
                                    <li><a href="/contact">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="footer-box">
                                <h3 class="footer-title">Services</h3>
                                <ul class="footer-list">

                                    <li><a href="#">Data Protection</a></li>

                                    <li><a href="#">Security Protected</a></li>

                                    <li><a href="#">Support 24/7</a></li>

                                    <li><a href="#">Secure Payment System</a></li>

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
                                <a href="<?php echo $website_details->FacebookHandle?>" class=""><i class="fa fa-facebook"></i></a>
                                <a href="<?php echo $website_details->TwitterHandle?>" class=""><i class="fa fa-twitter"></i></a>
                                <!--a href="https://google-plus.com/" class=""><i class="fa fa-google-plus"--></i></a>
                                <a href="<?php echo $website_details->YouTubeChannelLink; ?>" class=""><i class="fa fa-youtube-play"></i></a>
                                <a href="<?php echo $website_details->InstagramHandle?>" class=""><i class="fa fa-instagram"></i></a>
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
                    <span>© Copyright <?php echo date("Y"); ?> <?php echo $website_details->CompanyName; ?></span>
                </div>
            </div>
        </div>
    </div>
    <!-- /.End of sub footer -->
</footer>
<!-- /.End of footer -->
