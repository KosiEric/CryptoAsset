<?php


include_once $_SERVER['DOCUMENT_ROOT'].'/config/classes.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/config/functions.php';


class Header extends WebsiteHeader {
         private $WebsiteDetails;
         private $PageHeader;
         private $LogoImage;
         private $SearchIcon;
         private $userManagementFunctions;
         private $isLoggedInUser;

         private $functions;
         private $tryDisableSearchForm; //Disabling the search Form for Non-logged users
         private $userBonus = "";
         private $bonus = "";
         public $userBonusLI = "";
         function __construct()
         {
             parent::__construct("title goes here", "description goes here", "keywords go here");

             $this->LogoImage = $this->IMG_FOLDER.'logo.png';
             $this->SearchIcon = $this->IMG_FOLDER.'search.png';
             $this->WebsiteDetails = new WebsiteDetails();
             $this->functions = new Functions();

             $this->PageHeader = <<<FullHeader

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
                                                <li><a href="/account" class="btn nav-btn">Log In</a></li>
                        <li><a href="/account" class="btn nav-btn btn-orange">Sign Up</a></li>
                        
                    </ul>
                </div>
                <!-- End Atribute Navigation -->
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="/"><img src="upload/settings/b3fe68eb87b068c7861d772a7e1bf8ec.png" class="logo" alt="Crypto Currency Treading System"></a>
                </div>
                <!-- End Header Navigation -->
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav" data-in="" data-out="">



                                <li class=""><a href="/">Home</a>
                                </li>

                                                        <li class=""><a href="/trade">Trade</a>
                                </li>



                                                        <li class=""><a href="/analysis">Analysis</a>
                                </li>

                                                        <li class=""><a href="/buy">Buy</a>
                                </li>


                                                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">More</a>

                                    <ul class="dropdown-menu">
                                        <li class=""><a href="/about">About</a></li>

                                        <li class=""><a href="/faq">F.A.Q</a></li>
                                        <li class=""><a href="/contact">Contact</a></li>
                                        <li class=""><a href="/privacy">Privacy Policy</a></li>
                                        <li class=""><a href="/terms">Terms & Conditions</a> </li>
                                    </ul>
                                </li>

                                                
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>    
        </nav>        <!-- /. End of Navigation -->
     



FullHeader;











         }


         public function  DisplayHeader() {
             return $this->PageHeader;
         }





}

class Page extends Setup {


}




$header = new Header();
$page = new Page();
$functions = new Functions();
?>