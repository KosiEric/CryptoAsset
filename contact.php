<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/config/config.php';
require_once $website_details->INCS_FOLDER.'header.php';

$errName = 'Please enter your name';
$errEmail = 'Please enter a valid email address';
$errMessage = 'Please enter your message';
$errHuman="";
$result = "";

if (isset($_POST["submit"])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $human = intval($_POST['human']);
    $from = 'Demo Contact Form';
    $to = 'example@domain.com';
    $subject = 'Message from Contact Demo ';

    $body ="From: $name\n E-Mail: $email\n Message:\n $message";
    // Check if name has been entered
    if (!$_POST['name']) {
        $errName = 'Please enter your name';
    }

    // Check if email has been entered and is valid
    if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errEmail = 'Please enter a valid email address';
    }

    //Check if message has been entered
    if (!$_POST['message']) {
        $errMessage = 'Please enter your message';
    }
    //Check if simple anti-bot test is correct
    if ($human !== 5) {
        $errHuman = 'Your anti-spam is incorrect';
    }
// If there are no errors, send the email
    if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
        if (mail ($to, $subject, $body, $from)) {
            $result='<div class="alert alert-success">Thank You! I will be in touch</div>';
        } else {
            $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
        }

}
	}

	?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Mirrored from phpcryptomarket.bdtask.com/demo-v1.6/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 Oct 2018 01:49:14 GMT -->
    <!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

    <title><?php echo $website_details->SiteName; ?>- Privacy Policy</title>
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
                        <h1><?php echo $website_details->SiteName;?> - Contact Us</h1>
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
                    <form class="form-horizontal" role="form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php echo (isset($_POST['name']))?htmlspecialchars($_POST['name']):""; ?>">
                                <?php echo "<p class='text-danger'>$errName</p>";?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo (isset($_POST['email']))?htmlspecialchars($_POST['email']) : ""; ?>">
                                <?php echo "<p class='text-danger'>$errEmail</p>";?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="message" class="col-sm-2 control-label">Message</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" rows="4" name="message"><?php echo (isset($_POST['message']))?htmlspecialchars($_POST['message']) : "";?></textarea>
                                <?php echo "<p class='text-danger'>$errMessage</p>";?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
                                <?php echo "<p class='text-danger'>$errHuman</p>";?>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-10 col-sm-offset-2">
                                <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-10 col-sm-offset-2">
                                <?php echo $result; ?>
                            </div>
                        </div>
                    </form>


                </div>
            </div>

        </div>
    </div>
</div>
<!-- /.End of about content -->


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