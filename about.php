<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/config/config.php';
require_once $website_details->INCS_FOLDER.'header.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Mirrored from phpcryptomarket.bdtask.com/demo-v1.6/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 Oct 2018 01:49:14 GMT -->
    <!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

    <title><?php echo $website_details->SiteName; ?>- About us</title>
    <?php echo $header->GetDefaultPageHeadTags(); ?>
</head>
<body>
<?php echo $header->DisplayHeader(); ?>
      <div class="page_header" data-parallax-bg-image="<?php echo $website_details->IMG_FOLDER;?>b40e7e093d856ff3c5037421efade783.jpg" data-parallax-direction="">
            <div class="header-content">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <div class="haeder-text">
                                <h1>About <?php echo $website_details->SiteName;?></h1>
                                <p><em><?php echo $website_details->SiteName;?></em> is the official website that handles all transactions/services relating <em><?php echo $website_details->AssetNameSingular?></em> and its operations.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
<?php require_once $website_details->INCS_FOLDER. 'ticker.php'; ?>

        <!--  /.End of page header -->
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
        <!-- /.End of about content -->
        <div class="team__content">
            <div id="content__bg"></div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-4">
                        <section class="title_content">
                            <h2 class="content__title">Our Professional Team</h2>
                            <p class="content__description">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                        </section>
                    </div>
                    <div class="col-sm-12 col-md-8">
                        <div class="row">

                            <div class="col-sm-4 team">
                                <h2 class="team__number">01</h2>
                                <div class="team__member">
                                    <a href="#" class="team__member__img" style="background-image: url(upload/team/59f4a8b127a56d2f3eac2ba3d537175d.png)"></a>
                                </div>
                                <div class="member__detail">
                                    <a href="#" class="member__title"><h4>John Deo</h4></a>
                                    <p class="member__description">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                </div>
                            </div>
                            <!-- /.End of team -->
                            <div class="col-sm-4 team">
                                <h2 class="team__number">02</h2>
                                <div class="team__member">
                                    <a href="#" class="team__member__img" style="background-image: url(upload/team/ce1c8bfe160654e34f16179e831dae20.png)"></a>
                                </div>
                                <div class="member__detail">
                                    <a href="#" class="member__title"><h4>John Deo</h4></a>
                                    <p class="member__description">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                </div>
                            </div>
                            <!-- /.End of team -->
                            <div class="col-sm-4 team">
                                <h2 class="team__number">03</h2>
                                <div class="team__member">
                                    <a href="#" class="team__member__img" style="background-image: url(upload/team/aefd3430669c67c2d4a81639884246e3.png)"></a>
                                </div>
                                <div class="member__detail">
                                    <a href="#" class="member__title"><h4>John Deo</h4></a>
                                    <p class="member__description">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                </div>
                            </div>
                            <!-- /.End of team -->
                            <div class="col-sm-4 team">
                                <h2 class="team__number">04</h2>
                                <div class="team__member">
                                    <a href="#" class="team__member__img" style="background-image: url(upload/team/7d8e1493739a58c0256235cd81d63599.png)"></a>
                                </div>
                                <div class="member__detail">
                                    <a href="#" class="member__title"><h4>John Deo</h4></a>
                                    <p class="member__description">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                </div>
                            </div>
                            <!-- /.End of team -->
                            <div class="col-sm-4 team">
                                <h2 class="team__number">05</h2>
                                <div class="team__member">
                                    <a href="#" class="team__member__img" style="background-image: url(upload/team/773a12ed7d00d667df1fb24b659f8c14.png)"></a>
                                </div>
                                <div class="member__detail">
                                    <a href="#" class="member__title"><h4>John Deo</h4></a>
                                    <p class="member__description">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                </div>
                            </div>
                            <!-- /.End of team -->
                            <div class="col-sm-4 team">
                                <h2 class="team__number">06</h2>
                                <div class="team__member">
                                    <a href="#" class="team__member__img" style="background-image: url(upload/team/3aedc488370c0b5eaa3e65c4fab5c52d.png)"></a>
                                </div>
                                <div class="member__detail">
                                    <a href="#" class="member__title"><h4>John Deo</h4></a>
                                    <p class="member__description">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                </div>
                            </div>
                            <!-- /.End of team -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.End of team content -->
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

<!-- Mirrored from phpcryptomarket.bdtask.com/demo-v1.6/about by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 Oct 2018 01:52:06 GMT -->
</html>