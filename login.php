
<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from phpcryptomarket.bdtask.com/demo-v1.6/login by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 Oct 2018 01:58:57 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Login - Crypto Currency Treading System</title>
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
        </nav>
        <div class="reg-wrapper">
            <div class="container">
                <div class="col-sm-7 col-md-6">
                    <div class="">
                        <ul class="nav nav-tabs">
                            <li id="btntab1" class="active"><a href="#tab1" data-toggle="tab">Register</a></li>
                            <li id="btntab2"><a href="#tab2" data-toggle="tab">Log in</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="row">
                                <!-- alert message -->
                                                                    
                                                                    
                                 
                            </div>
                            <div class="tab-pane fade in active" id="tab1">
                                <form action="http://phpcryptomarket.bdtask.com/demo-v1.6/register" id="registerForm" name="registerForm" onsubmit="return validateForm()"  method="post" accept-charset="utf-8">
<input type="hidden" name="csrf_test_name" value="5e2afe77814e90ae82ddc9e972c90b86" />    
                                <div class="row">    
                                    <div class="col-sm-6">
                                        <div class="input">
                                            <input class="input__field" type="text"  name="f_name" id="f_name" value="" autocomplete="off" required>
                                            <label class="input__label" for="f_name">
                                                <span class="input__label-content" data-content="First Name">First Name</span>
                                            </label>
                                        </div>
                                    </div>    
                                    <div class="col-sm-6">
                                        <div class="input">
                                            <input class="input__field" type="text"  name="l_name" id="l_name" value="" autocomplete="off" required>
                                            <label class="input__label" for="l_name">
                                                <span class="input__label-content" data-content="Last Name">Last Name</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">    
                                    <div class="col-sm-12">
                                        <div class="input">
                                            <input class="input__field" type="text" name="username" id="username" required>
                                            <label class="input__label" for="username">
                                                <span class="input__label-content" data-content="Username">Username</span>
                                            </label>
                                        </div>
                                    </div>    
                                                                    </div>
                                <div class="row">    
                                    <div class="col-sm-6">
                                        <div class="input">
                                            <select  class="selectpicker" data-width="100%" class="country input__field" id="country" name="country">
                                                <option value="" selected>Select Country</option>
                                                                                                <option value="376">Andorra (+376)</option>
                                                                                                <option value="971">United Arab Emirates (+971)</option>
                                                                                                <option value="93">Afghanistan (+93)</option>
                                                                                                <option value="1268">Antigua And Barbuda (+1268)</option>
                                                                                                <option value="1264">Anguilla (+1264)</option>
                                                                                                <option value="355">Albania (+355)</option>
                                                                                                <option value="374">Armenia (+374)</option>
                                                                                                <option value="599">Netherlands Antilles (+599)</option>
                                                                                                <option value="244">Angola (+244)</option>
                                                                                                <option value="672">Antarctica (+672)</option>
                                                                                                <option value="54">Argentina (+54)</option>
                                                                                                <option value="1684">American Samoa (+1684)</option>
                                                                                                <option value="43">Austria (+43)</option>
                                                                                                <option value="61">Australia (+61)</option>
                                                                                                <option value="297">Aruba (+297)</option>
                                                                                                <option value="994">Azerbaijan (+994)</option>
                                                                                                <option value="387">Bosnia And Herzegovina (+387)</option>
                                                                                                <option value="1246">Barbados (+1246)</option>
                                                                                                <option value="880">Bangladesh (+880)</option>
                                                                                                <option value="32">Belgium (+32)</option>
                                                                                                <option value="226">Burkina Faso (+226)</option>
                                                                                                <option value="359">Bulgaria (+359)</option>
                                                                                                <option value="973">Bahrain (+973)</option>
                                                                                                <option value="257">Burundi (+257)</option>
                                                                                                <option value="229">Benin (+229)</option>
                                                                                                <option value="590">Saint Barthelemy (+590)</option>
                                                                                                <option value="1441">Bermuda (+1441)</option>
                                                                                                <option value="673">Brunei Darussalam (+673)</option>
                                                                                                <option value="591">Bolivia (+591)</option>
                                                                                                <option value="55">Brazil (+55)</option>
                                                                                                <option value="1242">Bahamas (+1242)</option>
                                                                                                <option value="975">Bhutan (+975)</option>
                                                                                                <option value="267">Botswana (+267)</option>
                                                                                                <option value="375">Belarus (+375)</option>
                                                                                                <option value="501">Belize (+501)</option>
                                                                                                <option value="1">Canada (+1)</option>
                                                                                                <option value="61">Cocos (keeling) Islands (+61)</option>
                                                                                                <option value="243">Congo, The Democratic Republic Of The (+243)</option>
                                                                                                <option value="236">Central African Republic (+236)</option>
                                                                                                <option value="242">Congo (+242)</option>
                                                                                                <option value="41">Switzerland (+41)</option>
                                                                                                <option value="225">Cote D Ivoire (+225)</option>
                                                                                                <option value="682">Cook Islands (+682)</option>
                                                                                                <option value="56">Chile (+56)</option>
                                                                                                <option value="237">Cameroon (+237)</option>
                                                                                                <option value="86">China (+86)</option>
                                                                                                <option value="57">Colombia (+57)</option>
                                                                                                <option value="506">Costa Rica (+506)</option>
                                                                                                <option value="53">Cuba (+53)</option>
                                                                                                <option value="238">Cape Verde (+238)</option>
                                                                                                <option value="61">Christmas Island (+61)</option>
                                                                                                <option value="357">Cyprus (+357)</option>
                                                                                                <option value="420">Czech Republic (+420)</option>
                                                                                                <option value="49">Germany (+49)</option>
                                                                                                <option value="253">Djibouti (+253)</option>
                                                                                                <option value="45">Denmark (+45)</option>
                                                                                                <option value="1767">Dominica (+1767)</option>
                                                                                                <option value="1809">Dominican Republic (+1809)</option>
                                                                                                <option value="213">Algeria (+213)</option>
                                                                                                <option value="593">Ecuador (+593)</option>
                                                                                                <option value="372">Estonia (+372)</option>
                                                                                                <option value="20">Egypt (+20)</option>
                                                                                                <option value="291">Eritrea (+291)</option>
                                                                                                <option value="34">Spain (+34)</option>
                                                                                                <option value="251">Ethiopia (+251)</option>
                                                                                                <option value="358">Finland (+358)</option>
                                                                                                <option value="679">Fiji (+679)</option>
                                                                                                <option value="500">Falkland Islands (malvinas) (+500)</option>
                                                                                                <option value="691">Micronesia, Federated States Of (+691)</option>
                                                                                                <option value="298">Faroe Islands (+298)</option>
                                                                                                <option value="33">France (+33)</option>
                                                                                                <option value="241">Gabon (+241)</option>
                                                                                                <option value="44">United Kingdom (+44)</option>
                                                                                                <option value="1473">Grenada (+1473)</option>
                                                                                                <option value="995">Georgia (+995)</option>
                                                                                                <option value="233">Ghana (+233)</option>
                                                                                                <option value="350">Gibraltar (+350)</option>
                                                                                                <option value="299">Greenland (+299)</option>
                                                                                                <option value="220">Gambia (+220)</option>
                                                                                                <option value="224">Guinea (+224)</option>
                                                                                                <option value="240">Equatorial Guinea (+240)</option>
                                                                                                <option value="30">Greece (+30)</option>
                                                                                                <option value="502">Guatemala (+502)</option>
                                                                                                <option value="1671">Guam (+1671)</option>
                                                                                                <option value="245">Guinea-bissau (+245)</option>
                                                                                                <option value="592">Guyana (+592)</option>
                                                                                                <option value="852">Hong Kong (+852)</option>
                                                                                                <option value="504">Honduras (+504)</option>
                                                                                                <option value="385">Croatia (+385)</option>
                                                                                                <option value="509">Haiti (+509)</option>
                                                                                                <option value="36">Hungary (+36)</option>
                                                                                                <option value="62">Indonesia (+62)</option>
                                                                                                <option value="353">Ireland (+353)</option>
                                                                                                <option value="972">Israel (+972)</option>
                                                                                                <option value="44">Isle Of Man (+44)</option>
                                                                                                <option value="91">India (+91)</option>
                                                                                                <option value="964">Iraq (+964)</option>
                                                                                                <option value="98">Iran, Islamic Republic Of (+98)</option>
                                                                                                <option value="354">Iceland (+354)</option>
                                                                                                <option value="39">Italy (+39)</option>
                                                                                                <option value="1876">Jamaica (+1876)</option>
                                                                                                <option value="962">Jordan (+962)</option>
                                                                                                <option value="81">Japan (+81)</option>
                                                                                                <option value="254">Kenya (+254)</option>
                                                                                                <option value="996">Kyrgyzstan (+996)</option>
                                                                                                <option value="855">Cambodia (+855)</option>
                                                                                                <option value="686">Kiribati (+686)</option>
                                                                                                <option value="269">Comoros (+269)</option>
                                                                                                <option value="1869">Saint Kitts And Nevis (+1869)</option>
                                                                                                <option value="850">Korea Democratic Peoples Republic Of (+850)</option>
                                                                                                <option value="82">Korea Republic Of (+82)</option>
                                                                                                <option value="965">Kuwait (+965)</option>
                                                                                                <option value="1345">Cayman Islands (+1345)</option>
                                                                                                <option value="7">Kazakstan (+7)</option>
                                                                                                <option value="856">Lao Peoples Democratic Republic (+856)</option>
                                                                                                <option value="961">Lebanon (+961)</option>
                                                                                                <option value="1758">Saint Lucia (+1758)</option>
                                                                                                <option value="423">Liechtenstein (+423)</option>
                                                                                                <option value="94">Sri Lanka (+94)</option>
                                                                                                <option value="231">Liberia (+231)</option>
                                                                                                <option value="266">Lesotho (+266)</option>
                                                                                                <option value="370">Lithuania (+370)</option>
                                                                                                <option value="352">Luxembourg (+352)</option>
                                                                                                <option value="371">Latvia (+371)</option>
                                                                                                <option value="218">Libyan Arab Jamahiriya (+218)</option>
                                                                                                <option value="212">Morocco (+212)</option>
                                                                                                <option value="377">Monaco (+377)</option>
                                                                                                <option value="373">Moldova, Republic Of (+373)</option>
                                                                                                <option value="382">Montenegro (+382)</option>
                                                                                                <option value="1599">Saint Martin (+1599)</option>
                                                                                                <option value="261">Madagascar (+261)</option>
                                                                                                <option value="692">Marshall Islands (+692)</option>
                                                                                                <option value="389">Macedonia, The Former Yugoslav Republic Of (+389)</option>
                                                                                                <option value="223">Mali (+223)</option>
                                                                                                <option value="95">Myanmar (+95)</option>
                                                                                                <option value="976">Mongolia (+976)</option>
                                                                                                <option value="853">Macau (+853)</option>
                                                                                                <option value="1670">Northern Mariana Islands (+1670)</option>
                                                                                                <option value="222">Mauritania (+222)</option>
                                                                                                <option value="1664">Montserrat (+1664)</option>
                                                                                                <option value="356">Malta (+356)</option>
                                                                                                <option value="230">Mauritius (+230)</option>
                                                                                                <option value="960">Maldives (+960)</option>
                                                                                                <option value="265">Malawi (+265)</option>
                                                                                                <option value="52">Mexico (+52)</option>
                                                                                                <option value="60">Malaysia (+60)</option>
                                                                                                <option value="258">Mozambique (+258)</option>
                                                                                                <option value="264">Namibia (+264)</option>
                                                                                                <option value="687">New Caledonia (+687)</option>
                                                                                                <option value="227">Niger (+227)</option>
                                                                                                <option value="234">Nigeria (+234)</option>
                                                                                                <option value="505">Nicaragua (+505)</option>
                                                                                                <option value="31">Netherlands (+31)</option>
                                                                                                <option value="47">Norway (+47)</option>
                                                                                                <option value="977">Nepal (+977)</option>
                                                                                                <option value="674">Nauru (+674)</option>
                                                                                                <option value="683">Niue (+683)</option>
                                                                                                <option value="64">New Zealand (+64)</option>
                                                                                                <option value="968">Oman (+968)</option>
                                                                                                <option value="507">Panama (+507)</option>
                                                                                                <option value="51">Peru (+51)</option>
                                                                                                <option value="689">French Polynesia (+689)</option>
                                                                                                <option value="675">Papua New Guinea (+675)</option>
                                                                                                <option value="63">Philippines (+63)</option>
                                                                                                <option value="92">Pakistan (+92)</option>
                                                                                                <option value="48">Poland (+48)</option>
                                                                                                <option value="508">Saint Pierre And Miquelon (+508)</option>
                                                                                                <option value="870">Pitcairn (+870)</option>
                                                                                                <option value="1">Puerto Rico (+1)</option>
                                                                                                <option value="351">Portugal (+351)</option>
                                                                                                <option value="680">Palau (+680)</option>
                                                                                                <option value="595">Paraguay (+595)</option>
                                                                                                <option value="974">Qatar (+974)</option>
                                                                                                <option value="40">Romania (+40)</option>
                                                                                                <option value="381">Serbia (+381)</option>
                                                                                                <option value="7">Russian Federation (+7)</option>
                                                                                                <option value="250">Rwanda (+250)</option>
                                                                                                <option value="966">Saudi Arabia (+966)</option>
                                                                                                <option value="677">Solomon Islands (+677)</option>
                                                                                                <option value="248">Seychelles (+248)</option>
                                                                                                <option value="249">Sudan (+249)</option>
                                                                                                <option value="46">Sweden (+46)</option>
                                                                                                <option value="65">Singapore (+65)</option>
                                                                                                <option value="290">Saint Helena (+290)</option>
                                                                                                <option value="386">Slovenia (+386)</option>
                                                                                                <option value="421">Slovakia (+421)</option>
                                                                                                <option value="232">Sierra Leone (+232)</option>
                                                                                                <option value="378">San Marino (+378)</option>
                                                                                                <option value="221">Senegal (+221)</option>
                                                                                                <option value="252">Somalia (+252)</option>
                                                                                                <option value="597">Suriname (+597)</option>
                                                                                                <option value="239">Sao Tome And Principe (+239)</option>
                                                                                                <option value="503">El Salvador (+503)</option>
                                                                                                <option value="963">Syrian Arab Republic (+963)</option>
                                                                                                <option value="268">Swaziland (+268)</option>
                                                                                                <option value="1649">Turks And Caicos Islands (+1649)</option>
                                                                                                <option value="235">Chad (+235)</option>
                                                                                                <option value="228">Togo (+228)</option>
                                                                                                <option value="66">Thailand (+66)</option>
                                                                                                <option value="992">Tajikistan (+992)</option>
                                                                                                <option value="690">Tokelau (+690)</option>
                                                                                                <option value="670">Timor-leste (+670)</option>
                                                                                                <option value="993">Turkmenistan (+993)</option>
                                                                                                <option value="216">Tunisia (+216)</option>
                                                                                                <option value="676">Tonga (+676)</option>
                                                                                                <option value="90">Turkey (+90)</option>
                                                                                                <option value="1868">Trinidad And Tobago (+1868)</option>
                                                                                                <option value="688">Tuvalu (+688)</option>
                                                                                                <option value="886">Taiwan, Province Of China (+886)</option>
                                                                                                <option value="255">Tanzania, United Republic Of (+255)</option>
                                                                                                <option value="380">Ukraine (+380)</option>
                                                                                                <option value="256">Uganda (+256)</option>
                                                                                                <option value="1">United States (+1)</option>
                                                                                                <option value="598">Uruguay (+598)</option>
                                                                                                <option value="998">Uzbekistan (+998)</option>
                                                                                                <option value="39">Holy See (vatican City State) (+39)</option>
                                                                                                <option value="1784">Saint Vincent And The Grenadines (+1784)</option>
                                                                                                <option value="58">Venezuela (+58)</option>
                                                                                                <option value="1284">Virgin Islands, British (+1284)</option>
                                                                                                <option value="1340">Virgin Islands, U.s. (+1340)</option>
                                                                                                <option value="84">Viet Nam (+84)</option>
                                                                                                <option value="678">Vanuatu (+678)</option>
                                                                                                <option value="681">Wallis And Futuna (+681)</option>
                                                                                                <option value="685">Samoa (+685)</option>
                                                                                                <option value="381">Kosovo (+381)</option>
                                                                                                <option value="967">Yemen (+967)</option>
                                                                                                <option value="262">Mayotte (+262)</option>
                                                                                                <option value="27">South Africa (+27)</option>
                                                                                                <option value="260">Zambia (+260)</option>
                                                                                                <option value="263">Zimbabwe (+263)</option>
                                                                                            </select>
                                            <label class="input__label" for="country">
                                                <span class="input__label-content" data-content=""></span>
                                            </label>
                                        </div>
                                    </div>    
                                    <div class="col-sm-6">
                                        <div class="input">
                                            <input class="input__field" type="number" name="phone" id="phone" autocomplete="off" required>
                                            <label class="input__label" for="phone">
                                                <span class="input__label-content" data-content="Phone">Phone</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">    
                                    <div class="col-sm-12">
                                        <div class="input">
                                            <input class="input__field" type="email" id="email" name="email" id="email" onkeydown="checkEmail()" value="" autocomplete="off" required>
                                            <label class="input__label" for="email">
                                                <span class="input__label-content" data-content="Email Address">Email Address</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">    
                                    <div class="col-sm-12">
                                        <div class="input">
                                            <input class="input__field" type="password" name="pass" id="pass" onkeyup="strongPassword()" required>
                                            <label class="input__label" for="pass">
                                                <span class="input__label-content" data-content="Password">Password</span>
                                            </label>
                                            <div id="message">
                                              <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                                              <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                                              <p id="special" class="invalid">A <b>special</b></p>
                                              <p id="number" class="invalid">A <b>number</b></p>
                                              <p id="length" class="invalid">Minimum <b>8 characters</b></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">    
                                    <div class="col-sm-12">
                                        <div class="input">
                                            <input class="input__field" type="password" name="r_pass" id="r_pass" onkeyup="rePassword()" required>
                                            <label class="input__label" for="r_pass">
                                                <span class="input__label-content" data-content="Confirm Password">Confirm Password</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">    
                                    <div class="col-sm-12">
                                        <div class="input">
                                            <label>
                                                <input type="checkbox" id="checkbox" name="accept_terms" value="ptConfirm"> 
                                            </label>
                                            Your Password at Global Crypto are encrypted and Secured <a target="_blank" href="upload/e6f91e805b1cdd3139809fa748ebb25c.pdf" class="checkbox-link">Privacy policy</a> and 
                                                <a target="_blank" href="upload/e6f91e805b1cdd3139809fa748ebb25c.pdf" class="checkbox-link">Terms of Use</a>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-reg">Sign Up</button>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="tab2">
                                <form action="http://phpcryptomarket.bdtask.com/demo-v1.6/home/login" id="loginForm"  method="post" accept-charset="utf-8">
<input type="hidden" name="csrf_test_name" value="5e2afe77814e90ae82ddc9e972c90b86" />                                                                                                     
                                <div class="row">    
                                    <div class="col-sm-12">
                                        <div class="input">
                                            <input class="input__field" type="text" name="email" id="useremail" autocomplete="off" required>
                                            <label class="input__label" for="input">
                                                <span class="input__label-content" data-content="Username or email">Username or email</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">    
                                    <div class="col-sm-12">
                                        <div class="input">
                                            <input class="input__field" type="password" name="password" id="password" required>
                                            <label class="input__label" for="password">
                                                <span class="input__label-content" data-content="Password">Password</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">    
                                    <div class="col-sm-12">
                                        <div class="input">
                                            <a href="#" data-toggle="modal" data-target="#forgotModal" class="forgot">Forgot Password?</a>Don't have an account? <a href="register.php" class="checkbox-link">Sign up Now</a>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-reg">Log In</button>
                                </form>                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<!-- Modal -->
<div id="forgotModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Forgot Password</h4>
      </div>
      <div class="modal-body">
        <form action="http://phpcryptomarket.bdtask.com/demo-v1.6/home/forgotPassword" id="forgotPassword" method="post" accept-charset="utf-8">
                                 <input type="hidden" name="csrf_test_name" value="5e2afe77814e90ae82ddc9e972c90b86" />
            <div class="form-group">
                <input class="form-control" name="email" id="email" placeholder="Email Address" type="text" autocomplete="off">
            </div>
            <button  type="submit" class="btn btn-success btn-block">Send Code</button>
        </form>      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

        <style>
            #message {
                display:none;
                position: relative;
                padding: 20px;
                margin-top: 10px;
            }
            #message p {
                margin-bottom: 0;
            }
            .input .valid {
                color: green;
            }
            .input .valid:before {
                position: relative;
                left: -10px;
                content: "✔";
            }
            .input .invalid {
                color: red;
            }
            .input .invalid:before {
                position: relative;
                left: -10px;
                content: "✖";
            }
        </style>
        <script type="text/javascript">
            var myInput = document.getElementById("pass");
            var letter  = document.getElementById("letter");
            var capital = document.getElementById("capital");
            var special = document.getElementById("special");
            var number  = document.getElementById("number");
            var length  = document.getElementById("length");

            myInput.onfocus = function() {
                document.getElementById("message").style.display = "block";
            }
            myInput.onblur = function() {
                document.getElementById("message").style.display = "none";
            }

            myInput.onkeyup = function() {

              var lowerCaseLetters = /[a-z]/g;
              if(myInput.value.match(lowerCaseLetters)) {  
                letter.classList.remove("invalid");
                letter.classList.add("valid");
              } else {
                letter.classList.remove("valid");
                letter.classList.add("invalid");
              }

              var upperCaseLetters = /[A-Z]/g;
              if(myInput.value.match(upperCaseLetters)) {  
                capital.classList.remove("invalid");
                capital.classList.add("valid");
              } else {
                capital.classList.remove("valid");
                capital.classList.add("invalid");
              }

              var specialCharacter = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/g;
              if(myInput.value.match(specialCharacter)) {  
                special.classList.remove("invalid");
                special.classList.add("valid");
              } else {
                special.classList.remove("valid");
                special.classList.add("invalid");
              }

              var numbers = /[0-9]/g;
              if(myInput.value.match(numbers)) {  
                number.classList.remove("invalid");
                number.classList.add("valid");
              } else {
                number.classList.remove("valid");
                number.classList.add("invalid");
              }

              if(myInput.value.length >= 8) {
                length.classList.remove("invalid");
                length.classList.add("valid");
              } else {
                length.classList.remove("valid");
                length.classList.add("invalid");
              }
            }

            //Confirm Password check
            function rePassword() {
                var pass = document.getElementById("pass").value;
                var r_pass = document.getElementById("r_pass").value;

                if (pass !== r_pass) {
                    document.getElementById("r_pass").style.borderColor = '#f00';
                    return false;
                }
                else{
                    document.getElementById("r_pass").style.borderColor = 'unset';
                    return true;
                }
            }
            //Valid Email Address Check
            function checkEmail() {
                var email = document.getElementById('email');
                var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

                if (!filter.test(email.value)) {
                    document.getElementById("email").style.borderColor = '#f00';
                    return false;
                }
                else{
                    document.getElementById("email").style.borderColor = 'unset';
                    return true;
                }
            }
            //Registration From validation check
            function validateForm() {
                var f_name    = document.forms["registerForm"]["f_name"].value;
                var l_name    = document.forms["registerForm"]["l_name"].value;
                var username  = document.forms["registerForm"]["username"].value;
                // var sponsor_id= document.forms["registerForm"]["sponsor_id"].value;
                var email     = document.forms["registerForm"]["email"].value;
                var phone     = document.forms["registerForm"]["phone"].value;
                var country   = document.forms["registerForm"]["country"].value;
                var pass      = document.forms["registerForm"]["pass"].value;
                var r_pass    = document.forms["registerForm"]["r_pass"].value;
                var checkbox  = document.forms["registerForm"]["accept_terms"].value;

                if (f_name == "") {
                    alert("First Name Required");
                    return false;
                }
                if (l_name == "") {
                    alert("Last Name Required");
                    return false;
                }
                if (username == "") {
                    alert("User Name Required");
                    return false;
                }
                if (country == "") {
                    alert("Country Required");
                    return false;
                }
                if (phone == "") {
                    alert("Phone Required");
                    return false;
                }
                if (email == "") {
                    alert("Email Required");
                    return false;
                }
                if (pass == "") {
                    alert("Password Required.");
                    return false;
                }
                if (pass.length < 8) {
                    alert("Please Enter at least 8 Characters input");
                    return false;
                }
                if (r_pass == "") {
                    alert("Confirm Password must be filled out");
                    return false;
                }
                if (checkbox == "") {
                    alert("Must Confirm Privacy Policy and Terms and Conditions");
                    return false;
                }
            }
        </script>

        <footer class="footer">
            <div class="footer-breadcrumbs">
                <div class="container">
                    <div class="breadcrumbs-row">
                        <ul class="f_breadcrumbs">
                            <li><a href="index.php"><span>Home</span></a></li>
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
                                    <li><i class="fa fa-envelope"></i> <a href="../cdn-cgi/l/email-protection.html#2e474048416e4c4a5a4f5d45004d4143"><span class="__cf_email__" data-cfemail="ea83848c85aa888e9e8b9981c4898587">[email&#160;protected]</span></a>
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
                                            <option value="english" data-content='<span class="flag-icon flag-icon-us"></span> English' >English</option>
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
        

        <script type="text/javascript">
            var url = window.location.href;
            var tab = url.substring(url.lastIndexOf('#') + 1);
            var logintab = url.substring(url.lastIndexOf('login'));

            if (tab == 'tab2') {
              $("#btntab2").addClass("active");
              $("#tab2").addClass("in active");
              $("#btntab1").removeClass("active");
              $("#tab1").removeClass("in active");
            }
            if (logintab == 'login') {
              $("#btntab2").addClass("active");
              $("#tab2").addClass("in active");
              $("#btntab1").removeClass("active");
              $("#tab1").removeClass("in active");
            }
        </script>
        <script>
            (function () {
                // trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
                if (!String.prototype.trim) {
                    (function () {
                        // Make sure we trim BOM and NBSP
                        var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
                        String.prototype.trim = function () {
                            return this.replace(rtrim, '');
                        };
                    })();
                }

                [].slice.call(document.querySelectorAll('input.input__field')).forEach(function (inputEl) {
                    // in case the input is already filled..
                    if (inputEl.value.trim() !== '') {
                        classie.add(inputEl.parentNode, 'input--filled');
                    }

                    // events:
                    inputEl.addEventListener('focus', onInputFocus);
                    inputEl.addEventListener('blur', onInputBlur);
                });

                function onInputFocus(ev) {
                    classie.add(ev.target.parentNode, 'input--filled');
                }

                function onInputBlur(ev) {
                    if (ev.target.value.trim() === '') {
                        classie.remove(ev.target.parentNode, 'input--filled');
                    }
                }
            })();
        </script>
        <!-- Select Mobile -->
        <script type="text/javascript">
            $(function(){
                $("#country").on("change", function(event) {
                    event.preventDefault();
                    $( "#phone").val(this.value);
                });
            });
        </script>


    </body>

<!-- Mirrored from phpcryptomarket.bdtask.com/demo-v1.6/login by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 Oct 2018 01:58:57 GMT -->
</html>