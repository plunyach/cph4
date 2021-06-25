<?php 
    include 'head.php';
    
    $email = $row['useremail'];
?> 
<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CPH4 || Setting </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="https://ramlogics.com/cph_4/dashboard_cph4/vendor/nice-select.css">
    <link rel="stylesheet" href="https://ramlogics.com/cph_4/dashboard_cph4/vendor/waves/waves.min.css"> 
    <link rel="stylesheet" href="https://ramlogics.com/cph_4/dashboard_cph4/css/style.css">
</head>

<body> 
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>

    <div id="main-wrapper">

        <div class="header dashboard">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <nav class="navbar navbar-expand-lg navbar-light px-0 justify-content-between">
                            <a class="navbar-brand" href="#">
                                <!-- <img src="images/logo.png" alt=""> -->
                                <h2>CPH4</h2>
                            </a>
                            <div class="header-right d-flex my-2 align-items-center">
                                 
                                <div class="dashboard_log">
                                    <div class="profile_log dropdown">
                                        <div class="user" data-toggle="dropdown">
                                            <span class="thumb"><i class="mdi mdi-account"></i></span>
                                            <span class="arrow"><i class="la la-angle-down"></i></span>
                                        </div>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <div class="user-email">
                                                <div class="user">
                                                    <i class="thumb"><i class="mdi mdi-account"></i></i>
                                                    <div class="user-info">
                                                        <h6><?php echo $email; ?></h6>
                                                        <span><?php echo $email; ?></span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="user-balance">
                                                <div class="available">
                                                    <p>Available</p>
                                                    <span>0.00 USD</span>
                                                </div>
                                                <div class="total">
                                                    <p>Total</p>
                                                    <span>0.00 USD</span>
                                                </div>
                                            </div>
                                            <a href="https://ramlogics.com/cph_4/account-overview.php/" class="dropdown-item">
                                                <i class="mdi mdi-wallet"></i> Account Wallet
                                            </a>
                                            <a href="https://ramlogics.com/cph_4/profile.php/" class="dropdown-item">
                                                <i class="mdi mdi-account"></i> User Profile
                                            </a> 
                                            <a href="http://ramlogics.com/cph_4/logout.php" class="dropdown-item logout">
                                                <i class="mdi mdi-logout"></i> Logout
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="sidebar">
            <div class="menu">
                <ul>
                    <li>
                        <a href="https://ramlogics.com/cph_4/dashboard-cph4.php/" data-toggle="tooltip" data-placement="right" title="Dashboard">
                            <span><i class="mdi mdi-view-dashboard"></i></span>
                        </a>
                    </li>
                    <li>
                        <a href="https://ramlogics.com/cph_4/account-deposit.php/" data-toggle="tooltip" data-placement="right" title="Account Deposit">
                            <span><i class="mdi mdi-heart"></i></span>
                        </a>
                    </li>
                    <li>
                        <a href="https://ramlogics.com/cph_4/package.php/" data-toggle="tooltip" data-placement="right" title="Package CPH4">
                            <span><i class="mdi mdi-box"></i></span>
                        </a>
                    </li>
                    <!--<li>-->
                    <!--    <a href="https://ramlogics.com/cph_4/exchange.php/" data-toggle="tooltip" data-placement="right" title="Buy Sale">-->
                    <!--        <span><i class="mdi mdi-tumblr-reblog"></i></span>-->
                    <!--    </a>-->
                    <!--</li>-->
                    <li>
                        <a href="https://ramlogics.com/cph_4/account-overview.php/" data-toggle="tooltip" data-placement="right" title="Accounts Wallet">
                            <span><i class="mdi mdi-wallet"></i></span>
                        </a>
                    </li>
                    <li>
                        <a href="https://ramlogics.com/cph_4/account-withdraw.php/" data-toggle="tooltip" data-placement="right" title="Accounts Withdrawal">
                            <span><i class="mdi mdi-face-profile"></i></span>
                        </a>
                    </li>
                    
                </ul>
            </div>
        </div>

            <div class="page-title dashboard">
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <div class="page-title-content">
                                <p>
                                    Welcome Back,
                                    <span><?php echo $email; ?></span>
                                </p>
                            </div>
                        </div>
                        <div class="col-6">
                            <ul class="text-right breadcrumbs list-unstyle">
                                <li><a href="https://ramlogics.com/cph_4/settings.php/">Settings </a></li>
                                <li class="active"><a href="#">Security</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content-body">
                <div class="container">
                    <div class="row"> 
                        <div class="col-xl-12">
                            <div class="row">
                                 
                                <div class="col-xl-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">Personal Information</h4>
                                        </div>
                                        <div class="card-body">
                                            <form method="post" name="myform" class="personal_validate">
                                                <div class="form-row">
                                                    <div class="form-group col-xl-6 col-md-6">
                                                        <label class="mr-sm-2">Your Name</label>
                                                        <input type="text" class="form-control" placeholder="Saiful Islam" name="fullname" />
                                                    </div>
                                                    <div class="form-group col-xl-6 col-md-6">
                                                        <label class="mr-sm-2">Email</label>
                                                        <input type="email" class="form-control" placeholder="Hello@example.com" name="email" />
                                                    </div>
                                                    <div class="form-group col-xl-6 col-md-6">
                                                        <label class="mr-sm-2">Date of birth</label>
                                                        <input type="text" class="form-control" placeholder="10-10-2020" id="datepicker" autocomplete="off" name="dob" />
                                                    </div>
                                                    <div class="form-group col-xl-6 col-md-6">
                                                        <label class="mr-sm-2">Country</label>
                                                        <select class="form-control" name="country">
                                                            <option value="">Select</option>
                                                            <option value="Afghanistan">Afghanistan</option>
                                                            <option value="Åland Islands">Åland Islands</option>
                                                            <option value="Albania">Albania</option>
                                                            <option value="Algeria">Algeria</option>
                                                            <option value="American Samoa">American Samoa</option>
                                                            <option value="Andorra">Andorra</option>
                                                            <option value="Angola">Angola</option>
                                                            <option value="Anguilla">Anguilla</option>
                                                            <option value="Antarctica">Antarctica</option>
                                                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                            <option value="Argentina">Argentina</option>
                                                            <option value="Armenia">Armenia</option>
                                                            <option value="Aruba">Aruba</option>
                                                            <option value="Australia">Australia</option>
                                                            <option value="Austria">Austria</option>
                                                            <option value="Azerbaijan">Azerbaijan</option>
                                                            <option value="Bahamas">Bahamas</option>
                                                            <option value="Bahrain">Bahrain</option>
                                                            <option value="Bangladesh">Bangladesh</option>
                                                            <option value="Barbados">Barbados</option>
                                                            <option value="Belarus">Belarus</option>
                                                            <option value="Belgium">Belgium</option>
                                                            <option value="Belize">Belize</option>
                                                            <option value="Benin">Benin</option>
                                                            <option value="Bermuda">Bermuda</option>
                                                            <option value="Bhutan">Bhutan</option>
                                                            <option value="Bolivia">Bolivia</option>
                                                            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina </option>
                                                            <option value="Botswana">Botswana</option>
                                                            <option value="Bouvet Island">Bouvet Island</option>
                                                            <option value="Brazil">Brazil</option>
                                                            <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                                            <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                            <option value="Bulgaria">Bulgaria</option>
                                                            <option value="Burkina Faso">Burkina Faso</option>
                                                            <option value="Burundi">Burundi</option>
                                                            <option value="Cambodia">Cambodia</option>
                                                            <option value="Cameroon">Cameroon</option>
                                                            <option value="Canada">Canada</option>
                                                            <option value="Cape Verde">Cape Verde</option>
                                                            <option value="Cayman Islands">Cayman Islands</option>
                                                            <option value="Central African Republic">Central African Republic</option>
                                                            <option value="Chad">Chad</option>
                                                            <option value="Chile">Chile</option>
                                                            <option value="China">China</option>
                                                            <option value="Christmas Island">Christmas Island</option>
                                                            <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands </option>
                                                            <option value="Colombia">Colombia</option>
                                                            <option value="Comoros">Comoros</option>
                                                            <option value="Congo">Congo</option>
                                                            <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                                            <option value="Cook Islands">Cook Islands</option>
                                                            <option value="Costa Rica">Costa Rica</option>
                                                            <option value="Cote D'ivoire">Cote D'ivoire</option>
                                                            <option value="Croatia">Croatia</option>
                                                            <option value="Cuba">Cuba</option>
                                                            <option value="Cyprus">Cyprus</option>
                                                            <option value="Czech Republic">Czech Republic</option>
                                                            <option value="Denmark">Denmark</option>
                                                            <option value="Djibouti">Djibouti</option>
                                                            <option value="Dominica">Dominica</option>
                                                            <option value="Dominican Republic">Dominican Republic</option>
                                                            <option value="Ecuador">Ecuador</option>
                                                            <option value="Egypt">Egypt</option>
                                                            <option value="El Salvador">El Salvador</option>
                                                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                            <option value="Eritrea">Eritrea</option>
                                                            <option value="Estonia">Estonia</option>
                                                            <option value="Ethiopia">Ethiopia</option>
                                                            <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                                            <option value="Faroe Islands">Faroe Islands</option>
                                                            <option value="Fiji">Fiji</option>
                                                            <option value="Finland">Finland</option>
                                                            <option value="France">France</option>
                                                            <option value="French Guiana">French Guiana</option>
                                                            <option value="French Polynesia">French Polynesia</option>
                                                            <option value="French Southern Territories">French Southern Territories</option>
                                                            <option value="Gabon">Gabon</option>
                                                            <option value="Gambia">Gambia</option>
                                                            <option value="Georgia">Georgia</option>
                                                            <option value="Germany">Germany</option>
                                                            <option value="Ghana">Ghana</option>
                                                            <option value="Gibraltar">Gibraltar</option>
                                                            <option value="Greece">Greece</option>
                                                            <option value="Greenland">Greenland</option>
                                                            <option value="Grenada">Grenada</option>
                                                            <option value="Guadeloupe">Guadeloupe</option>
                                                            <option value="Guam">Guam</option>
                                                            <option value="Guatemala">Guatemala</option>
                                                            <option value="Guernsey">Guernsey</option>
                                                            <option value="Guinea">Guinea</option>
                                                            <option value="Guinea-bissau">Guinea-bissau</option>
                                                            <option value="Guyana">Guyana</option>
                                                            <option value="Haiti">Haiti</option>
                                                            <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                                            <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                                            <option value="Honduras">Honduras</option>
                                                            <option value="Hong Kong">Hong Kong</option>
                                                            <option value="Hungary">Hungary</option>
                                                            <option value="Iceland">Iceland</option>
                                                            <option value="India">India</option>
                                                            <option value="Indonesia">Indonesia</option>
                                                            <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                                            <option value="Iraq">Iraq</option>
                                                            <option value="Ireland">Ireland</option>
                                                            <option value="Isle of Man">Isle of Man</option>
                                                            <option value="Israel">Israel</option>
                                                            <option value="Italy">Italy</option>
                                                            <option value="Jamaica">Jamaica</option>
                                                            <option value="Japan">Japan</option>
                                                            <option value="Jersey">Jersey</option>
                                                            <option value="Jordan">Jordan</option>
                                                            <option value="Kazakhstan">Kazakhstan</option>
                                                            <option value="Kenya">Kenya</option>
                                                            <option value="Kiribati">Kiribati</option>
                                                            <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                                            <option value="Korea, Republic of">Korea, Republic of</option>
                                                            <option value="Kuwait">Kuwait</option>
                                                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                            <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                                            <option value="Latvia">Latvia</option>
                                                            <option value="Lebanon">Lebanon</option>
                                                            <option value="Lesotho">Lesotho</option>
                                                            <option value="Liberia">Liberia</option>
                                                            <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya </option>
                                                            <option value="Liechtenstein">Liechtenstein</option>
                                                            <option value="Lithuania">Lithuania</option>
                                                            <option value="Luxembourg">Luxembourg</option>
                                                            <option value="Macao">Macao</option>
                                                            <option value="Macedonia, The Former Yugoslav Republic of"> Macedonia, The Former Yugoslav Republic of</option>
                                                            <option value="Madagascar">Madagascar</option>
                                                            <option value="Malawi">Malawi</option>
                                                            <option value="Malaysia">Malaysia</option>
                                                            <option value="Maldives">Maldives</option>
                                                            <option value="Mali">Mali</option>
                                                            <option value="Malta">Malta</option>
                                                            <option value="Marshall Islands">Marshall Islands</option>
                                                            <option value="Martinique">Martinique</option>
                                                            <option value="Mauritania">Mauritania</option>
                                                            <option value="Mauritius">Mauritius</option>
                                                            <option value="Mayotte">Mayotte</option>
                                                            <option value="Mexico">Mexico</option>
                                                            <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                                            <option value="Moldova, Republic of">Moldova, Republic of </option>
                                                            <option value="Monaco">Monaco</option>
                                                            <option value="Mongolia">Mongolia</option>
                                                            <option value="Montenegro">Montenegro</option>
                                                            <option value="Montserrat">Montserrat</option>
                                                            <option value="Morocco">Morocco</option>
                                                            <option value="Mozambique">Mozambique</option>
                                                            <option value="Myanmar">Myanmar</option>
                                                            <option value="Namibia">Namibia</option>
                                                            <option value="Nauru">Nauru</option>
                                                            <option value="Nepal">Nepal</option>
                                                            <option value="Netherlands">Netherlands</option>
                                                            <option value="Netherlands Antilles">Netherlands Antilles </option>
                                                            <option value="New Caledonia">New Caledonia</option>
                                                            <option value="New Zealand">New Zealand</option>
                                                            <option value="Nicaragua">Nicaragua</option>
                                                            <option value="Niger">Niger</option>
                                                            <option value="Nigeria">Nigeria</option>
                                                            <option value="Niue">Niue</option>
                                                            <option value="Norfolk Island">Norfolk Island</option>
                                                            <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                                            <option value="Norway">Norway</option>
                                                            <option value="Oman">Oman</option>
                                                            <option value="Pakistan">Pakistan</option>
                                                            <option value="Palau">Palau</option>
                                                            <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                                            <option value="Panama">Panama</option>
                                                            <option value="Papua New Guinea">Papua New Guinea</option>
                                                            <option value="Paraguay">Paraguay</option>
                                                            <option value="Peru">Peru</option>
                                                            <option value="Philippines">Philippines</option>
                                                            <option value="Pitcairn">Pitcairn</option>
                                                            <option value="Poland">Poland</option>
                                                            <option value="Portugal">Portugal</option>
                                                            <option value="Puerto Rico">Puerto Rico</option>
                                                            <option value="Qatar">Qatar</option>
                                                            <option value="Reunion">Reunion</option>
                                                            <option value="Romania">Romania</option>
                                                            <option value="Russian Federation">Russian Federation</option>
                                                            <option value="Rwanda">Rwanda</option>
                                                            <option value="Saint Helena">Saint Helena</option>
                                                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis </option>
                                                            <option value="Saint Lucia">Saint Lucia</option>
                                                            <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                                            <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                                                            <option value="Samoa">Samoa</option>
                                                            <option value="San Marino">San Marino</option>
                                                            <option value="Sao Tome and Principe">Sao Tome and Principe </option>
                                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                                            <option value="Senegal">Senegal</option>
                                                            <option value="Serbia">Serbia</option>
                                                            <option value="Seychelles">Seychelles</option>
                                                            <option value="Sierra Leone">Sierra Leone</option>
                                                            <option value="Singapore">Singapore</option>
                                                            <option value="Slovakia">Slovakia</option>
                                                            <option value="Slovenia">Slovenia</option>
                                                            <option value="Solomon Islands">Solomon Islands</option>
                                                            <option value="Somalia">Somalia</option>
                                                            <option value="South Africa">South Africa</option>
                                                            <option value="South Georgia and The South Sandwich Islands"> South Georgia and The South Sandwich Islands</option>
                                                            <option value="Spain">Spain</option>
                                                            <option value="Sri Lanka">Sri Lanka</option>
                                                            <option value="Sudan">Sudan</option>
                                                            <option value="Suriname">Suriname</option>
                                                            <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen </option>
                                                            <option value="Swaziland">Swaziland</option>
                                                            <option value="Sweden">Sweden</option>
                                                            <option value="Switzerland">Switzerland</option>
                                                            <option value="Syrian Arab Republic">Syrian Arab Republic </option>
                                                            <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                                            <option value="Tajikistan">Tajikistan</option>
                                                            <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                                            <option value="Thailand">Thailand</option>
                                                            <option value="Timor-leste">Timor-leste</option>
                                                            <option value="Togo">Togo</option>
                                                            <option value="Tokelau">Tokelau</option>
                                                            <option value="Tonga">Tonga</option>
                                                            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                            <option value="Tunisia">Tunisia</option>
                                                            <option value="Turkey">Turkey</option>
                                                            <option value="Turkmenistan">Turkmenistan</option>
                                                            <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                                            <option value="Tuvalu">Tuvalu</option>
                                                            <option value="Uganda">Uganda</option>
                                                            <option value="Ukraine">Ukraine</option>
                                                            <option value="United Arab Emirates">United Arab Emirates </option>
                                                            <option value="United Kingdom">United Kingdom</option>
                                                            <option value="United States">United States</option>
                                                            <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                                            <option value="Uruguay">Uruguay</option>
                                                            <option value="Uzbekistan">Uzbekistan</option>
                                                            <option value="Vanuatu">Vanuatu</option>
                                                            <option value="Venezuela">Venezuela</option>
                                                            <option value="Viet Nam">Viet Nam</option>
                                                            <option value="Virgin Islands, British">Virgin Islands, British </option>
                                                            <option value="Virgin Islands, U.S.">Virgin Islands, U.S. </option>
                                                            <option value="Wallis and Futuna">Wallis and Futuna</option>
                                                            <option value="Western Sahara">Western Sahara</option>
                                                            <option value="Yemen">Yemen</option>
                                                            <option value="Zambia">Zambia</option>
                                                            <option value="Zimbabwe">Zimbabweoption> </option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-xl-6 col-md-6">
                                                        <label class="mr-sm-2">Present Address</label>
                                                        <input type="text" class="form-control" placeholder="56, Old Street, Brooklyn" name="presentaddress" />
                                                    </div>
                                                    <div class="form-group col-xl-6 col-md-6">
                                                        <label class="mr-sm-2">Permanent Address</label>
                                                        <input type="text" class="form-control" placeholder="123, Central Square, Brooklyn" name="permanentaddress" />
                                                    </div>
                                                    <div class="form-group col-xl-6 col-md-6">
                                                        <label class="mr-sm-2">City</label>
                                                        <input type="text" class="form-control" placeholder="New York" name="city" />
                                                    </div>
                                                    <div class="form-group col-xl-6 col-md-6">
                                                        <label class="mr-sm-2">Postal Code</label>
                                                        <input type="text" class="form-control" placeholder="25481" name="postal" />
                                                    </div>
                                                    

                                                    <div class="form-group col-12">
                                                        <button class="btn btn-success px-4">Save</button>
                                                    </div> 
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer dashboard">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-8 col-12">
                            <div class="copyright">
                                <p>© Copyright 2021 <a href="#">CPH4</a> I All Rights Reserved</p>
                            </div>
                        </div>
                        <div class="col-sm-4 col-12">
                            <div class="footer-social">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://ramlogics.com/cph_4/dashboard_cph4/js/global.js"></script>

        <script src="https://ramlogics.com/cph_4/dashboard_cph4/vendor/waves.min.js"></script>
        <script src="https://ramlogics.com/cph_4/dashboard_cph4/vendor/jquery-ui.min.js"></script>
        <script src="https://ramlogics.com/cph_4/dashboard_cph4/js/jquery-ui-init.js"></script>
        <script src="https://ramlogics.com/cph_4/dashboard_cph4/vendor/query.validate.js"></script>
        <script src="https://ramlogics.com/cph_4/dashboard_cph4/vendor/validator-init.js"></script>
        <script src="https://ramlogics.com/cph_4/dashboard_cph4/js/scripts.js"></script>

        <script></script>
    </body>
 </html>
