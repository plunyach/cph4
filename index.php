<?php 
include 'dbcon.php';

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Meta -->
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="" />
        <!-- SITE TITLE -->
        <title>Crypto CPH4 – Student Coin</title>
        <!-- Favicon Icon -->
        <link rel="shortcut icon" type="image/x-icon" href="https://ramlogics.com/cph_4/dashboard_cph4/images/favicon.png" />
        <!-- Animation CSS -->
        <link rel="stylesheet" href="https://ramlogics.com/cph_4/cph4_assets/css/animate.css" />
        <!-- Latest Bootstrap min CSS -->
        <link rel="stylesheet" href="https://ramlogics.com/cph_4/cph4_assets/bootstrap/css/bootstrap.min.css" />
        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
        <!-- Font Awesome CSS -->
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
        <!-- ionicons CSS -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
        <!-- cryptocoins CSS -->
        <link rel="stylesheet" href="https://allienworks.github.io/cryptocoins/webfont/cryptocoins.css" />
        <!--- owl carousel CSS-->
        <link rel="stylesheet" href="https://ramlogics.com/cph_4/cph4_assets/owlcarousel/css/owl.carousel.min.css" />
        <link rel="stylesheet" href="https://ramlogics.com/cph_4/cph4_assets/owlcarousel/css/owl.theme.default.min.css" />
        <!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="https://ramlogics.com/cph_4/cph4_assets/css/magnific-popup.css" />
        <!-- Style CSS -->
        <link rel="stylesheet" href="https://ramlogics.com/cph_4/cph4_assets/css/style.css" />
        <link rel="stylesheet" href="https://ramlogics.com/cph_4/cph4_assets/css/responsive.css" />
        <!-- Color CSS -->
        <link id="layoutstyle" rel="stylesheet" href="cph4_assets/color/theme.css" />
         
         <style>
             canvas {
                display: block;
                vertical-align: bottom;
            } /* ---- particles.js container ---- */
            #particles-js {
                position: absolute;
                z-index: 99;
                bottom: 0;
                right: 0;
                left: 0;
                top: 0;
            } /* ---- stats.js ---- */
         </style>
         
    </head>

    <body class="v_dark" data-spy="scroll" data-offset="110">
         
        <!-- START HEADER -->
        <header class="header_wrap fixed-top">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand page-scroll animation" href="#home_section" data-animation="fadeInDown" data-animation-delay="1s">
                              <img class="logo_light" src="https://ramlogics.com/cph_4/dashboard_cph4/images/logo.png" alt="logo" /> 
                            <img class="logo_dark" src="https://ramlogics.com/cph_4/dashboard_cph4/images/logo.png" alt="logo" />
                    </a>
                    <button
                        class="navbar-toggler animation"
                        type="button"
                        data-toggle="collapse"
                        data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                        data-animation="fadeInDown"
                        data-animation-delay="1.1s"
                    >
                        <span class="ion-android-menu"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav m-auto">
                            <li class="animation" data-animation="fadeInDown" data-animation-delay="1.2s"><a class="nav-link page-scroll nav_item" href="#home">Home</a></li>
                            <li class="animation" data-animation="fadeInDown" data-animation-delay="1.3s"><a class="nav-link page-scroll nav_item" href="#about">About</a></li>
                            <li class="animation" data-animation="fadeInDown" data-animation-delay="1.2s"><a class="nav-link page-scroll nav_item" href="#service">Services</a></li>
                            <li class="animation" data-animation="fadeInDown" data-animation-delay="1.4s"><a class="nav-link page-scroll nav_item" href="#token">Token</a></li>
                            <li class="animation" data-animation="fadeInDown" data-animation-delay="1.5s"><a class="nav-link page-scroll nav_item" href="#roadmap">Road Map</a></li>
                            <li class="animation" data-animation="fadeInDown" data-animation-delay="1.6s"><a class="nav-link page-scroll nav_item" href="#team">Team</a></li>
                            <li class="animation" data-animation="fadeInDown" data-animation-delay="1.7s"><a class="nav-link page-scroll nav_item" href="#faq">FAQ</a></li>
                            <li class="animation" data-animation="fadeInDown" data-animation-delay="1.8s"><a class="nav-link page-scroll nav_item" href="#contact">Contact</a></li>
                        </ul>
                        <ul class="navbar-nav nav_btn align-items-center">
                            <!-- <li class="animation" data-animation="fadeInDown" data-animation-delay="1.9s">
                                <div class="lng_dropdown">
                                  <select name="countries" id="lng_select">
                                    <option value='en' data-image="cph4_assets/images/eng.png" data-title="English">EN</option>
                                    <option value='fn' data-image="cph4_assets/images/fn.png" data-title="France">FN</option>
                                    <option value='us' data-image="cph4_assets/images/us.png" data-title="United States">US</option>
                                  </select>
                                </div>
                            </li> -->
                            <li class="animation" data-animation="fadeInDown" data-animation-delay="2s"><a class="btn btn-default btn-radius nav_item" href="https://ramlogics.com/cph_4/login.php/">Login</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!-- END HEADER -->
<div id="particles-js"></div>
        <!-- START SECTION BANNER -->
        <section class="section_banner bg_black_dark" data-z-index="1" data-parallax="scroll" data-image-src="./cph4_assets/images/banner_bg2.png">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 col-sm-12 order-lg-first">
                        <div class="banner_text_s2 text_md_center">
                            <h1 class="animation text-white" data-animation="fadeInUp" data-animation-delay="1.1s"><strong>Bitcoin</strong> is peer to peer innovative <strong>network</strong></h1>
                            <? $price="select * from token_price where m_start_date>=CURDATE() AND m_end_date>CURDATE() order by m_start_date ASC limit 1";
                                $price = mysqli_query($conn,$price);
                                $price1=mysqli_fetch_assoc($price);
                                $start=$price1['m_start_date']; $end=$price1['m_end_date'];
                                $query="select sum(amount)as tokens from token_buy where time between '$start' AND '$end'";
                                $no_of_token=mysqli_query($conn, $query);
                                $no_of_tokens=mysqli_fetch_assoc($no_of_token);
                                if(strtotime($price1['m_start_date'])<=strtotime(date("Y-m-d"))){?>
                            <h5 class="animation presale_txt text-white" data-animation="fadeInUp" data-animation-delay="1.3s">Token Presale is <mark class="gradient_box">Live</mark></h5>
                            <div class="transparent_bg tk_counter_inner m-lg-0 banner_token text-center px-0 animation" data-animation="fadeIn" data-animation-delay="1.4s">
                                    <div class="tk_countdown_time transparent_bg box_shadow_none border counter_medium animation" data-animation="fadeInUp" data-animation-delay="1.2s" data-time="<? echo str_replace("-","/",$price1['m_end_date']); ?>"></div>
                            </div> <? } else{?>
                                    <h5 class="animation presale_txt text-white" data-animation="fadeInUp" data-animation-delay="1.3s">Token Presale will <mark class="gradient_box">Start in</mark></h5>
                            <div class="transparent_bg tk_counter_inner m-lg-0 banner_token text-center px-0 animation" data-animation="fadeIn" data-animation-delay="1.4s">
                                    <div class="tk_countdown_time transparent_bg box_shadow_none border counter_medium animation" data-animation="fadeInUp" data-animation-delay="1.2s" data-time="<? echo str_replace("-","/",$price1['m_start_date']); ?>"></div>
                            </div>
                            <?}?>
                            <div class="btn_group pt-2 pb-3 animation" data-animation="fadeInUp" data-animation-delay="1.4s">
                                <a href="#whitepaper" class="btn btn-default btn-radius nav-link content-popup">Whitepaper <i class="ion-ios-arrow-thin-right"></i></a>
                                <a href="#" class="btn btn-border btn-radius">Buy Token Now! <i class="ion-ios-arrow-thin-right"></i></a>
                            </div>
                            <span class="text-white icon_title animation" data-animation="fadeInUp" data-animation-delay="1.4s">We accept :</span>
                            <ul class="list_none currency_icon">
                                <li class="animation" data-animation="fadeInUp" data-animation-delay="1.5s"><i class="cc BTC-alt"></i><span>Bitcoin</span></li>
                                <li class="animation" data-animation="fadeInUp" data-animation-delay="1.6s"><i class="cc ETC"></i><span>Ethereum </span></li>
                                <li class="animation" data-animation="fadeInUp" data-animation-delay="1.7s"><i class="cc LTC-alt"></i><span>Litecoin</span></li>
                                <li class="animation" data-animation="fadeInUp" data-animation-delay="1.8s"><i class="cc XRP-alt"></i><span>Ripple</span></li>
                            </ul>
                            <div id="whitepaper" class="team_pop mfp-hide">
                                <div class="row m-0">
                                    <div class="col-md-7">
                                        <div class="pt-3 pb-3">
                                            <div class="title_dark title_border">
                                                <h4>Download Whitepaper</h4>
                                                <p>
                                                    A purely peer-to-peer version of electronic cash would allow online payments to be sent directly from one party to another without going through a financial institution.Digital signatures
                                                    provide part of the solution, but the main benefits are lost if a trusted third party is still required to prevent double-spending.
                                                </p>
                                                <p>The network timestamps transactions by hashing them into an ongoing chain of hash-based proof-of-work, forming a record that cannot be changed without redoing the proof-of-work.</p>
                                                <a href="#" class="btn btn-default btn-radius">Download Now <i class="ion-ios-arrow-thin-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <img class="pt-3 pb-3" src=./cph4_assets/images/whitepaper.png" alt="whitepaper" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 order-first">
                        <div class="banner_image_right res_md_mb_50 res_xs_mb_30 animation" data-animation-delay="1.5s" data-animation="fadeInRight">
                            <img alt="banner_vector2" src="./cph4_assets/images/banner_img2.png" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END SECTION BANNER -->

        <!-- START SECTION SERVICES -->
        <section id="service" class="small_pb small_pt">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8 offset-lg-2 col-md-12 col-sm-12">
                        <div class="title_default_light title_border text-center">
                            <h4 class="animation" data-animation="fadeInUp" data-animation-delay="0.2s">Meet our solution for you</h4>
                            <p class="animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="box_wrap text-center animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                            <img src="./cph4_assets/images/service_icon1.png" alt="service_icon1" />
                            <h4>Secure Storage</h4>
                            <p>your wallet must be secured. Bitcoin makes it possible to transfer value any where in a very easy way and it allows you to be in control of your money.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="box_wrap text-center animation" data-animation="fadeInUp" data-animation-delay="0.8s">
                            <img src="./cph4_assets/images/service_icon2.png" alt="service_icon2" />
                            <h4>Mobile App</h4>
                            <p>The #1 most popular cryptocurrency wallet for those looking to transform the financial system right from their pocket. Cash instantly with anyone in the world.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="box_wrap text-center animation" data-animation="fadeInUp" data-animation-delay="1s">
                            <img src="./cph4_assets/images/service_icon3.png" alt="service_icon3" />
                            <h4>Exchange Service</h4>
                            <p>Each user has unique needs, so there is no one size fits all for exchanges. Our Bitcoin exchange reviews detail each exchange's supported countries</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="box_wrap text-center animation" data-animation="fadeInUp" data-animation-delay="1s">
                            <img src="./cph4_assets/images/service_icon4.png" alt="service_icon4" />
                            <h4>Investment projects</h4>
                            <p>Bitcoin investment opportunities exist outside of simply speculating on the Bitcoin exchange rate. sell bitcoins and profit from extreme changes</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="box_wrap text-center animation" data-animation="fadeInUp" data-animation-delay="1s">
                            <img src="./cph4_assets/images/service_icon5.png" alt="service_icon5" />
                            <h4>Credit Card Use</h4>
                            <p>We are accept any credit or debit card from VISA or MasterCard. This option may be especially useful for those seek ing for the ways</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="box_wrap text-center animation" data-animation="fadeInUp" data-animation-delay="1s">
                            <img src="./cph4_assets/images/service_icon6.png" alt="service_icon6" />
                            <h4>Planning</h4>
                            <p>A cutting edge issue in traditional estate planning is Cryptocash. Cryptocash is a digital or virtual currency that uses cryptography for security</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END SECTION SERVICES -->

        <!-- START SECTION ABOUT US -->
        <section id="about" class="small_pt">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="text_md_center">
                            <img class="animation" data-animation="zoomIn" data-animation-delay="0.2s" src="./cph4_assets/images/about_img2.png" alt="aboutimg2" />
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 res_md_mt_30 res_sm_mt_20">
                        <div class="title_default_light title_border">
                            <h4 class="animation" data-animation="fadeInUp" data-animation-delay="0.2s">About The Cryptocash</h4>
                            <p class="animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                                Cryptocash is one of the most transformative technologies since the invention of the Internet. Cryptocash stands firmly in support of financial freedom and the liberty that Bitcoin provides globally for
                                anyone to voluntarily participate in a permissionless and decentralized network.
                            </p>
                            <p class="animation" data-animation="fadeInUp" data-animation-delay="0.8s">which empowers people to not be marginalized by governments and financial institutions. Bitcoin is freedom.</p>
                        </div>
                        <a href="https://www.youtube.com/watch?v=ZE2HxTmxfrI" class="btn btn-default btn-radius video animation" data-animation="fadeInUp" data-animation-delay="1s">Let's Start <i class="ion-ios-arrow-thin-right"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- END SECTION ABOUT US -->

        <!-- START SECTION TOKEN SALE -->
        <section id="token" class="section_token token_sale bg_light_dark" data-z-index="1" data-parallax="scroll" data-image-src="./cph4_assets/images/token_bg.png">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3 col-md-12 col-sm-12">
                        <div class="title_default_light title_border text-center">
                            <h4 class="animation" data-animation="fadeInUp" data-animation-delay="0.2s">Token Sale</h4>
                            <p class="animation" data-animation="fadeInUp" data-animation-delay="0.4s">Join the industry leaders to discuss where the markets are heading. We accept token payments.</p>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-3">
                        <div class="pr_box">
                            <h6 class="animation" data-animation="fadeInUp" data-animation-delay="0.2s">Starting time :</h6>
                            <p class="animation" data-animation="fadeInUp" data-animation-delay="0.4s"><? echo $price1['m_start_date'];?></p>
                        </div>
                        <div class="pr_box">
                            <h6 class="animation" data-animation="fadeInUp" data-animation-delay="0.6s">Ending time :</h6>
                            <p class="animation" data-animation="fadeInUp" data-animation-delay="0.8s"><? echo $price1['m_end_date'];?></p>
                        </div>
                        <div class="pr_box">
                            <h6 class="animation" data-animation="fadeInUp" data-animation-delay="1s">Tokens exchange rate</h6>
                            <p class="animation" data-animation="fadeInUp" data-animation-delay="1.2s">1 USD= <? echo $price1['m_package_price'];?></p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="token_sale res_md_mb_40 res_md_mt_40 res_sm_mb_30 res_sm_mt_30">
                            <div class="tk_countdown text-center animation token_countdown_bg" data-animation="fadeIn" data-animation-delay="1s">
                                <div class="tk_counter_inner">
                                    <div class="tk_countdown_time animation"
                                    data-animation="fadeInUp" data-animation-delay="1.2s" data-time="<? echo str_replace("-","/",$price1['m_end_date']); ?>"></div>
                                    <div class="progress animation" data-animation="fadeInUp" data-animation-delay="1.3s">
                                        <div class="progress-bar progress-bar-striped gradient" role="progressbar" aria-valuenow="46" aria-valuemin="0" aria-valuemax="100" style="width: 46%;"><? echo (($price1['m_package_tokens']/$no_of_tokens['tokens'])*100);?>%</div>
                                        <span class="progress_label bg-white" style="left: 30%;"> <strong> <? echo $no_of_tokens['tokens'];?> CPH4 </strong></span>
                                        <span class="progress_label bg-white" style="left: 75%;"> <strong> <? echo $price1['m_package_tokens'];?> CPH4 </strong></span>
                                        <span class="progress_min_val">Sale Raised</span>
                                        <span class="progress_max_val">Soft-caps</span>
                                    </div>
                                    <a href="#" class="btn btn-default btn-radius animation" data-animation="fadeInUp" data-animation-delay="1.4s">Buy Tokens <i class="ion-ios-arrow-thin-right"></i></a>
                                    <ul class="icon_list list_none d-flex justify-content-center">
                                        <li class="animation" data-animation="fadeInUp" data-animation-delay="1.5s"><i class="fa fa-cc-visa"></i></li>
                                        <li class="animation" data-animation="fadeInUp" data-animation-delay="1.6s"><i class="fa fa-cc-mastercard"></i></li>
                                        <li class="animation" data-animation="fadeInUp" data-animation-delay="1.7s"><i class="fa fa-bitcoin"></i></li>
                                        <li class="animation" data-animation="fadeInUp" data-animation-delay="1.8s"><i class="fa fa-paypal"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="pr_box">
                            <h6 class="animation" data-animation="fadeInUp" data-animation-delay="0.2s">Low - High 24h :</h6>
                            <p class="animation" data-animation="fadeInUp" data-animation-delay="0.4s">$ 6,455.83 - $ 7,071.42</p>
                        </div>
                        <div class="pr_box">
                            <h6 class="animation" data-animation="fadeInUp" data-animation-delay="0.6s">Total tokens sale</h6>
                            <p class="animation" data-animation="fadeInUp" data-animation-delay="0.8s"><? echo $price1['m_package_tokens'];?></p>
                        </div>
                        <div class="pr_box">
                            <h6 class="animation" data-animation="fadeInUp" data-animation-delay="1s">Acceptable Currency :</h6>
                            <p class="animation" data-animation="fadeInUp" data-animation-delay="1.2s">BTC, Eth, Ltc, XRP</p>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center py-md-4 py-3">
                    <div class="col-lg-10 col-md-10 col-sm-12 col-12 m-auto">
                        <div class="site_logo_top_main_div p-3">
                            <div class="logo_price">
                                <h2 class="text-white text-center">CPH4</h2>
                            </div>
                            <div class="logo_dec_area text-center">
                                <h5 class="text-white">Choose The Package of STC Token</h5>
                            </div>
                            <div class="logo_P_area text-center">
                                <p class="text-white">During tha Payment please use <span>the same email</span> address as at your STC Lunchpad account</p>
                                <hr>
                                <p class="text-white">Please remeber to use <span>Ethereum (ERC20)</span> network for USDC, ETH, and DAI transfer</p>
                            </div>
                            
                            <div class="row py-4">
                                <?php
                                $select = "select * from pacakge";
                                $result = mysqli_query($conn,$select);
                                while($row = mysqli_fetch_assoc($result))
                                {
                                    $cphvalue = $row['cph_value'];
                                ?>
                                <div class="col-6 col-sm-6 col-md-6 col-lg-4 pt-3">
                                    <div class="col_area_price">
                                        <h6 class="text-white"><?php echo $cphvalue; ?> CPH4</h6>
                                        <h6 class="text-white"><?php echo $price1['m_package_price']*$cphvalue." USD"; ?></h6>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                            <div class="p_area">
                                <p class="text-white text-center">For langer transactions please contact us via:otc@studentcoin.education</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END SECTION TOKEN SALE -->

        <!-- START SECTION TOKEN PROCEEDS & DISTRIBUTION -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 res_md_mb_40">
                        <div class="title_default_light title_border text-center">
                            <h4 class="animation" data-animation="fadeInUp" data-animation-delay="0.2s">Token Sale Proceeds</h4>
                        </div>
                        <div class="lg_pt_20 res_sm_pt_0 text-center animation" data-animation="fadeInRight" data-animation-delay="0.2s">
                            <img src="./cph4_assets/images/sale-proceeds3.png" alt="sale-proceeds3" />
                        </div>
                        <div class="divider small_divider"></div>
                        <ul class="list_none list_chart text-center">
                            <li>
                                <span class="chart_bx color1"></span>
                                <span>Addvisers</span>
                            </li>
                            <li>
                                <span class="chart_bx color2"></span>
                                <span>Marketing</span>
                            </li>
                            <li>
                                <span class="chart_bx color3"></span>
                                <span>Public Sale</span>
                            </li>
                            <li>
                                <span class="chart_bx color4"></span>
                                <span>Pre Sale</span>
                            </li>
                            <li>
                                <span class="chart_bx color5"></span>
                                <span>Projects</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="title_default_light title_border text-center">
                            <h4 class="animation" data-animation="fadeInUp" data-animation-delay="0.2s">Token Distribution</h4>
                        </div>
                        <div class="lg_pt_20 res_sm_pt_0 text-center animation" data-animation="fadeInLeft" data-animation-delay="0.2s">
                            <img src="./cph4_assets/images/distribution3.png" alt="distribution3" />
                        </div>
                        <div class="divider small_divider"></div>
                        <ul class="list_none list_chart text-center">
                            <li>
                                <span class="chart_bx color1"></span>
                                <span>ICO Sale</span>
                            </li>
                            <li>
                                <span class="chart_bx color4"></span>
                                <span>Build Out</span>
                            </li>
                            <li>
                                <span class="chart_bx color2"></span>
                                <span>Team & Advisers</span>
                            </li>
                            <li>
                                <span class="chart_bx color5"></span>
                                <span>Private Investors</span>
                            </li>
                            <li>
                                <span class="chart_bx color3"></span>
                                <span>Bounty</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- END SECTION TOKEN PROCEEDS & DISTRIBUTION -->

        <!-- SECTION MOBILE APP -->
        <section id="mobileapp" class="bg_light_dark" data-z-index="1" data-parallax="scroll" data-image-src="./cph4_assets/images/app_bg.png">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-12 col-sm-12">
                        <div class="title_default_light title_border text_md_center">
                            <h4 class="animation" data-animation="fadeInUp" data-animation-delay="0.2s">Download Mobile App</h4>
                            <p class="animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                                The use of crypto-currencies has become more widespread, and they are now increasingly accepted as a legitimate currency for transactions. Bitcoin is the first ever cryptocurrency and is used like other
                                assets in exchange for goods and services.
                            </p>
                            <p class="animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                                Send, receive, and exchange Bitcoin, Ethereum, & Bitcoin Cash instantly with anyone in the world. Securely buy and sell bitcoin alongside your already safely stored cryptocurrency.
                            </p>
                        </div>
                        <div class="btn_group text_md_center animation" data-animation="fadeInUp" data-animation-delay="0.8s">
                            <a href="#" class="btn btn-default btn-radius"><em class="ion-social-android"></em>Google Store </a>
                            <a href="#" class="btn btn-default btn-radius"><em class="ion-social-apple"></em>Apple Store</a>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12 col-sm-12">
                        <div class="res_md_mt_50 res_sm_mt_30 text-center animation" data-animation="fadeInRight" data-animation-delay="0.2s">
                            <img src="./cph4_assets/images/mobile_app3.png" alt="mobile_app3" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END SECTION MOBILE APP -->

        <!-- START SECTION TIMELINE -->
        <section id="roadmap" class="small_pb">
            <div class="container">
                <div class="row text-center">
                    <div class="col-lg-8 col-md-12 offset-lg-2">
                        <div class="title_default_light title_border text-center">
                            <h4 class="animation" data-animation="fadeInUp" data-animation-delay="0.2s">Roadmap</h4>
                            <p class="animation" data-animation="fadeInUp" data-animation-delay="0.4s">The use of cryptocurrencies has become more widespread, The origin platform idea. Development of the concept and business plan.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="timeline owl-carousel small_space">
                            <div class="item">
                                <div class="timeline_box complete">
                                    <div class="timeline_inner">
                                        <div class="timeline_circle"></div>
                                        <h6 class="animation" data-animation="fadeInUp" data-animation-delay="0.3s">April 2020</h6>
                                        <p class="animation" data-animation="fadeInUp" data-animation-delay="0.4s">Inotial Coin Distribution &amp; maketing</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="timeline_box complete current">
                                    <div class="timeline_inner">
                                        <div class="timeline_circle"></div>
                                        <h6 class="animation" data-animation="fadeInUp" data-animation-delay="0.3s">February 2021</h6>
                                        <p class="animation" data-animation="fadeInUp" data-animation-delay="0.4s">Exchange Cryptocash to Bitcoin</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="timeline_box">
                                    <div class="timeline_inner">
                                        <div class="timeline_circle"></div>
                                        <h6 class="animation" data-animation="fadeInUp" data-animation-delay="0.3s">March 2021</h6>
                                        <p class="animation" data-animation="fadeInUp" data-animation-delay="0.4s">BTCC mode of payment in Cryptocash</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="timeline_box">
                                    <div class="timeline_inner">
                                        <div class="timeline_circle"></div>
                                        <h6 class="animation" data-animation="fadeInUp" data-animation-delay="0.3s">June 2021</h6>
                                        <p class="animation" data-animation="fadeInUp" data-animation-delay="0.4s">Send-Receive coin Cryptocash & mobile</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="timeline_box">
                                    <div class="roadmap_inner">
                                        <div class="timeline_circle"></div>
                                        <h6 class="animation" data-animation="fadeInUp" data-animation-delay="0.3s">October 2020</h6>
                                        <p class="animation" data-animation="fadeInUp" data-animation-delay="0.4s">Coin Marketcap, World Coin Index</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="timeline_box">
                                    <div class="timeline_inner">
                                        <div class="timeline_circle"></div>
                                        <h6 class="animation" data-animation="fadeInUp" data-animation-delay="0.3s">December 2020</h6>
                                        <p class="animation" data-animation="fadeInUp" data-animation-delay="0.4s">Online & Trading ICO Token Sale</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="timeline_box">
                                    <div class="timeline_inner">
                                        <div class="timeline_circle"></div>
                                        <h6 class="animation" data-animation="fadeInUp" data-animation-delay="0.3s">December 2020</h6>
                                        <p class="animation" data-animation="fadeInUp" data-animation-delay="0.4s">Deposit Bitcoin from your account</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END SECTION TIMELINE -->

        <!-- START SECTION TEAM -->
        <section id="team" class="section_team small_pt">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 offset-lg-2">
                        <div class="title_default_light title_border text-center">
                            <h4 class="animation" data-animation="fadeInUp" data-animation-delay="0.2s">Leadership Team</h4>
                            <p class="animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                                we are proud of our great team. He is one of the most motivated and enthusiastic people we have, and is always ready and willing to help out where needed.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row small_space">
                    <div class="col-lg-3 col-md-6 col-sm-6 res_md_mb_30 res_sm_mb_20">
                        <div class="bg_light_dark radius_box team_box_s3 animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                            <div class="text-center">
                                <img src="./cph4_assets/images/team_img1.png" alt="team1" />
                                <div class="team_social_s2 list_none">
                                  <ul>
                                    <li>
                                        <a href="#"><i class="fab fa-facebook-square"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </li>
                                </ul>
                                </div>
                            </div>
                            <div class="team_info text-center">
                                <h4><a href="#team1" class="content-popup">Derek Castro</a></h4>
                                <p>Head Of Marketing</p>
                            </div>
                            <div id="team1" class="team_pop mfp-hide">
                                <div class="row m-0">
                                    <div class="col-md-4 text-center">
                                        <div class="team_img_wrap">
                                            <img class="w-100" src="./cph4_assets/images/team-lg-1.jpg" alt="user_img-lg" />
                                            <div class="team_title">
                                                <h4>Derek Castro</h4>
                                                <span>Head Of Marketing</span>
                                            </div>
                                        </div>
                                        <div class="social_single_team list_none mt-3">
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
                                                    <a href="#"><i class="fa fa-pinterest-p"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="pt-3">
                                            <h5>About</h5>
                                            <hr />
                                            <p>
                                                Founder of Venus Media Ltd and Owner of leading website for affiliates in the entertainment industry TakeBucks, he is a videographer, photographer and producer with a big number of successful
                                                entrepreneurships under his name over the last 18 years.
                                            </p>
                                            <p>
                                                Founder of Venus Media Ltd and Owner of leading website for affiliates in the entertainment industry TakeBucks, he is a videographer, photographer and producer with a big number of successful
                                                entrepreneurships under his name over the last 18 years.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 res_md_mb_30 res_sm_mb_20">
                        <div class="bg_light_dark radius_box team_box_s3 animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                            <div class="text-center">
                                <img src="./cph4_assets/images/team_img2.png" alt="team2" />
                                <div class="team_social_s2 list_none">
                                  <ul>
                                    <li>
                                        <a href="#"><i class="fab fa-facebook-square"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </li>
                                </ul>
                                </div>
                            </div>
                            <div class="team_info text-center">
                                <h4><a href="#team2" class="content-popup">Jessica Bell</a></h4>
                                <p>Head Of Sale</p>
                            </div>
                            <div id="team2" class="team_pop mfp-hide">
                                <div class="row m-0">
                                    <div class="col-md-4 text-center">
                                        <div class="team_img_wrap">
                                            <img class="w-100" src="./cph4_assets/images/team-lg-2.jpg" alt="user_img-lg" />
                                            <div class="team_title">
                                                <h4>Jessica Bell</h4>
                                                <span>Head Of Sale</span>
                                            </div>
                                        </div>
                                        <div class="social_single_team list_none mt-3">
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
                                                    <a href="#"><i class="fa fa-pinterest-p"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="pt-3">
                                            <h5>About</h5>
                                            <hr />
                                            <p>
                                                Founder of Venus Media Ltd and Owner of leading website for affiliates in the entertainment industry TakeBucks, he is a videographer, photographer and producer with a big number of successful
                                                entrepreneurships under his name over the last 18 years.
                                            </p>
                                            <p>
                                                Founder of Venus Media Ltd and Owner of leading website for affiliates in the entertainment industry TakeBucks, he is a videographer, photographer and producer with a big number of successful
                                                entrepreneurships under his name over the last 18 years.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 res_md_mb_30 res_sm_mb_20">
                        <div class="bg_light_dark radius_box team_box_s3 animation" data-animation="fadeInUp" data-animation-delay="0.8s">
                            <div class="text-center">
                                <img src="./cph4_assets/images/team_img3.png" alt="team3" />
                                <div class="team_social_s2 list_none">
                                  <ul>
                                    <li>
                                        <a href="#"><i class="fab fa-facebook-square"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </li>
                                </ul>
                                </div>
                            </div>
                            <div class="team_info text-center">
                                <h4><a href="#team3" class="content-popup">Alvaro Martin</a></h4>
                                <p>Blockchain App Developer</p>
                            </div>
                            <div id="team3" class="team_pop mfp-hide">
                                <div class="row m-0">
                                    <div class="col-md-4 text-center">
                                        <div class="team_img_wrap">
                                            <img class="w-100" src="./cph4_assets/images/team-lg-3.jpg" alt="user_img-lg" />
                                            <div class="team_title">
                                                <h4>Alvaro Martin</h4>
                                                <span>Blockchain App Developer</span>
                                            </div>
                                        </div>
                                        <div class="social_single_team list_none mt-3">
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
                                                    <a href="#"><i class="fa fa-pinterest-p"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="pt-3">
                                            <h5>About</h5>
                                            <hr />
                                            <p>
                                                Founder of Venus Media Ltd and Owner of leading website for affiliates in the entertainment industry TakeBucks, he is a videographer, photographer and producer with a big number of successful
                                                entrepreneurships under his name over the last 18 years.
                                            </p>
                                            <p>
                                                Founder of Venus Media Ltd and Owner of leading website for affiliates in the entertainment industry TakeBucks, he is a videographer, photographer and producer with a big number of successful
                                                entrepreneurships under his name over the last 18 years.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="bg_light_dark radius_box team_box_s3 animation" data-animation="fadeInUp" data-animation-delay="1s">
                            <div class="text-center">
                                <img src="./cph4_assets/images/team_img4.png" alt="team4" />
                                <div class="team_social_s2 list_none">
                                  <ul>
                                    <li>
                                        <a href="#"><i class="fab fa-facebook-square"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </li>
                                </ul>
                                </div>
                            </div>
                            <div class="team_info text-center">
                                <h4><a href="#team4" class="content-popup">Maria Willium</a></h4>
                                <p>Community Manager</p>
                            </div>
                            <div id="team4" class="team_pop mfp-hide">
                                <div class="row m-0">
                                    <div class="col-md-4 text-center">
                                        <div class="team_img_wrap">
                                            <img class="w-100" src="./cph4_assets/images/team-lg-4.jpg" alt="user_img-lg" />
                                            <div class="team_title">
                                                <h4>Maria Willium</h4>
                                                <span>Community Manager</span>
                                            </div>
                                        </div>
                                        <div class="social_single_team list_none mt-3">
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
                                                    <a href="#"><i class="fa fa-pinterest-p"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="pt-3">
                                            <h5>About</h5>
                                            <hr />
                                            <p>
                                                Founder of Venus Media Ltd and Owner of leading website for affiliates in the entertainment industry TakeBucks, he is a videographer, photographer and producer with a big number of successful
                                                entrepreneurships under his name over the last 18 years.
                                            </p>
                                            <p>
                                                Founder of Venus Media Ltd and Owner of leading website for affiliates in the entertainment industry TakeBucks, he is a videographer, photographer and producer with a big number of successful
                                                entrepreneurships under his name over the last 18 years.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="divider large_divider"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="title_default_light title_border text-center">
                            <h4 class="animation" data-animation="fadeInUp" data-animation-delay="0.2s">Invester Board</h4>
                        </div>
                    </div>
                </div>
                <div class="row small_space justify-content-center">
                    <div class="col-lg-9 col-md-12">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-6 res_md_mb_30 res_sm_mb_20">
                                <div class="bg_light_dark radius_box team_box_s3 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                                    <div class="text-center">
                                        <img src="./cph4_assets/images/team_img5.png" alt="team5" />
                                        <div class="team_social_s2 list_none">
                                          <ul>
                                            <li>
                                                <a href="#"><i class="fab fa-facebook-square"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                            </li>
                                        </ul>
                                        </div>
                                    </div>
                                    <div class="team_info text-center">
                                        <h4><a href="#team5" class="content-popup">Tricia Diyana</a></h4>
                                        <p>Invester</p>
                                    </div>
                                    <div id="team5" class="team_pop mfp-hide">
                                        <div class="row m-0">
                                            <div class="col-md-4 text-center">
                                                <div class="team_img_wrap">
                                                    <img class="w-100" src="./cph4_assets/images/team-lg-5.jpg" alt="user_img-lg" />
                                                    <div class="team_title">
                                                        <h4>Tricia Diyana</h4>
                                                        <span>Invester</span>
                                                    </div>
                                                </div>
                                                <div class="social_single_team list_none mt-3">
                                                  <ul>
                                                    <li>
                                                        <a href="#"><i class="fab fa-facebook-square"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                                    </li>
                                                </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="pt-3">
                                                    <h5>About</h5>
                                                    <hr />
                                                    <p>
                                                        Founder of Venus Media Ltd and Owner of leading website for affiliates in the entertainment industry TakeBucks, he is a videographer, photographer and producer with a big number of
                                                        successful entrepreneurships under his name over the last 18 years.
                                                    </p>
                                                    <p>
                                                        Founder of Venus Media Ltd and Owner of leading website for affiliates in the entertainment industry TakeBucks, he is a videographer, photographer and producer with a big number of
                                                        successful entrepreneurships under his name over the last 18 years.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 res_md_mb_30 res_sm_mb_20">
                                <div class="bg_light_dark radius_box team_box_s3 animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                                    <div class="text-center">
                                        <img src="./cph4_assets/images/team_img6.png" alt="team6" />
                                        <div class="team_social_s2 list_none">
                                          <ul>
                                            <li>
                                                <a href="#"><i class="fab fa-facebook-square"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                            </li>
                                        </ul>
                                        </div>
                                    </div>
                                    <div class="team_info text-center">
                                        <h4><a href="#team6" class="content-popup">Kent Pierce</a></h4>
                                        <p>Invester</p>
                                    </div>
                                    <div id="team6" class="team_pop mfp-hide">
                                        <div class="row m-0">
                                            <div class="col-md-4 text-center">
                                                <div class="team_img_wrap">
                                                    <img class="w-100" src="./cph4_assets/images/team-lg-6.jpg" alt="user_img-lg" />
                                                    <div class="team_title">
                                                        <h4>Kent Pierce</h4>
                                                        <span>Invester</span>
                                                    </div>
                                                </div>
                                                <div class="social_single_team list_none mt-3">
                                                  <ul>
                                                    <li>
                                                        <a href="#"><i class="fab fa-facebook-square"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                                    </li>
                                                </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="pt-3">
                                                    <h5>About</h5>
                                                    <hr />
                                                    <p>
                                                        Founder of Venus Media Ltd and Owner of leading website for affiliates in the entertainment industry TakeBucks, he is a videographer, photographer and producer with a big number of
                                                        successful entrepreneurships under his name over the last 18 years.
                                                    </p>
                                                    <p>
                                                        Founder of Venus Media Ltd and Owner of leading website for affiliates in the entertainment industry TakeBucks, he is a videographer, photographer and producer with a big number of
                                                        successful entrepreneurships under his name over the last 18 years.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 offset-lg-0 col-md-6 offset-md-3 col-sm-6 offset-sm-3">
                                <div class="bg_light_dark radius_box team_box_s3 animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                                    <div class="text-center">
                                        <img src="./cph4_assets/images/team_img7.png" alt="team7" />
                                        <div class="team_social_s2 list_none">
                                          <ul>
                                            <li>
                                                <a href="#"><i class="fab fa-facebook-square"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                            </li>
                                        </ul>
                                        </div>
                                    </div>
                                    <div class="team_info text-center">
                                        <h4><a href="#team7" class="content-popup">Rose Morgen</a></h4>
                                        <p>Invester</p>
                                    </div>
                                    <div id="team7" class="team_pop mfp-hide">
                                        <div class="row m-0">
                                            <div class="col-md-4 text-center">
                                                <div class="team_img_wrap">
                                                    <img class="w-100" src="./cph4_assets/images/team-lg-7.jpg" alt="user_img-lg" />
                                                    <div class="team_title">
                                                        <h4>Rose Morgen</h4>
                                                        <span>Invester</span>
                                                    </div>
                                                </div>
                                                <div class="social_single_team list_none mt-3">
                                                  <ul>
                                                    <li>
                                                        <a href="#"><i class="fab fa-facebook-square"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                                    </li>
                                                </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="pt-3">
                                                    <h5>About</h5>
                                                    <hr />
                                                    <p>
                                                        Founder of Venus Media Ltd and Owner of leading website for affiliates in the entertainment industry TakeBucks, he is a videographer, photographer and producer with a big number of
                                                        successful entrepreneurships under his name over the last 18 years.
                                                    </p>
                                                    <p>
                                                        Founder of Venus Media Ltd and Owner of leading website for affiliates in the entertainment industry TakeBucks, he is a videographer, photographer and producer with a big number of
                                                        successful entrepreneurships under his name over the last 18 years.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END SECTION TEAM -->

        <!-- START SECTION FAQ -->
        <section id="faq" class="bg_light_dark">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 offset-lg-2">
                        <div class="title_default_light title_border text-center">
                            <h4 class="animation" data-animation="fadeInUp" data-animation-delay="0.2s">Have Any Questions?</h4>
                            <p class="animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                                Frequently asked questions (FAQ) or Questions and Answers (Q&A), are listed questions and answers, all supposed to be commonly asked in some context
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row small_space">
                    <div class="col-lg-12 col-md-12">
                        <div class="tab_content">
                            <ul class="nav nav-pills tab_nav_s2 tab_color_white justify-content-center" id="pills-tab" role="tablist">
                                <li class="nav-item animation" data-animation="fadeInUp" data-animation-delay="0.5s">
                                    <a class="active" data-toggle="tab" href="#tab1">General</a>
                                </li>
                                <li class="nav-item animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                                    <a data-toggle="tab" href="#tab2">Pre-ICO & ICC </a>
                                </li>
                                <li class="nav-item animation" data-animation="fadeInUp" data-animation-delay="0.7s">
                                    <a data-toggle="tab" href="#tab3">ICO Tokens</a>
                                </li>
                                <li class="nav-item animation" data-animation="fadeInUp" data-animation-delay="0.8s">
                                    <a data-toggle="tab" href="#tab4">Legal</a>
                                </li>
                            </ul>
                            <div class="tab-content half_tab">
                                <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div id="accordion1" class="faq_content">
                                                <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                                                    <div class="card-header" id="headingOne">
                                                        <h6 class="mb-0"><a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">What is cryptocurrency?</a></h6>
                                                    </div>
                                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion1">
                                                        <div class="card-body">
                                                            The best cryptocurrency to buy is one we are willing to hold onto even if it goes down. For example, I believe in Steem enough that I am willing to hold it even if it goes down 99%
                                                            and would start buying more of it if the price dropped.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                                                    <div class="card-header" id="headingTwo">
                                                        <h6 class="mb-0"><a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Which cryptocurrency is best to buy today?</a></h6>
                                                    </div>
                                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion1">
                                                        <div class="card-body">
                                                            The best cryptocurrency to buy is one we are willing to hold onto even if it goes down. For example, I believe in Steem enough that I am willing to hold it even if it goes down 99%
                                                            and would start buying more of it if the price dropped.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.8s">
                                                    <div class="card-header" id="headingThree">
                                                        <h6 class="mb-0"><a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">How about day trading crypto?</a></h6>
                                                    </div>
                                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion1">
                                                        <div class="card-body">
                                                            While profits are possible trading cryptocurrencies, so are losses. My first year involved me spending hundreds of hours trading Bitcoin with a result of losing over $5,000 with
                                                            nothing to show for it. Simply trading digital currencies is very similar to gambling because no one really knows what is going to happen next although anyone can guess! While I
                                                            was lucky to do nothing expect lose money when I started, the worst thing that can happen is to get lucky right away and get a big ego about what an amazing cryptocurrency trader
                                                            we are.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card animation" data-animation="fadeInUp" data-animation-delay="1s">
                                                    <div class="card-header" id="headingFour">
                                                        <h6 class="mb-0"><a class="collapsed" data-toggle="collapse" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">When to sell a cryptocurrency?</a></h6>
                                                    </div>
                                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion1">
                                                        <div class="card-body">
                                                            Before Steem I was all in an another altcoin and really excited about it. When I first bought the price was low and made payments to me every week just for holding it. As I tried
                                                            to participate in the community over the next several months, I was consistently met with a mix of excitement and hostility. When I began talking openly about this, the negative
                                                            emotions won over in the community and in me. Originally I had invested and been happy to hold no matter what the price which quickly went up after I bought it.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div id="accordion2" class="faq_content">
                                                <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                                                    <div class="card-header" id="headingFive">
                                                        <h6 class="mb-0"><a data-toggle="collapse" href="#collapseFive" aria-expanded="true" aria-controls="collapseFive">How does one acquire bitcoins?</a></h6>
                                                    </div>
                                                    <div id="collapseFive" class="collapse show" aria-labelledby="headingFive" data-parent="#accordion2">
                                                        <div class="card-body">
                                                            The best cryptocurrency to buy is one we are willing to hold onto even if it goes down. For example, I believe in Steem enough that I am willing to hold it even if it goes down 99%
                                                            and would start buying more of it if the price dropped.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                                                    <div class="card-header" id="headingSix">
                                                        <h6 class="mb-0"><a class="collapsed" data-toggle="collapse" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">Can I make money with Bitcoin?</a></h6>
                                                    </div>
                                                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion2">
                                                        <div class="card-body">
                                                            You should never expect to get rich with Bitcoin or any emerging technology. It is always important to be wary of any thing that sounds too good to be true or disobeys basic
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.8s">
                                                    <div class="card-header" id="headingSeven">
                                                        <h6 class="mb-0"><a class="collapsed" data-toggle="collapse" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">What happens when bitcoins are lost?</a></h6>
                                                    </div>
                                                    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion2">
                                                        <div class="card-body">
                                                            While profits are possible trading cryptocurrencies, so are losses. My first year involved me spending hundreds of hours trading Bitcoin with a result of losing over $5,000 with
                                                            nothing to show for it. Simply trading digital currencies is very similar to gambling because no one really knows what is going to happen next although anyone can guess! While I
                                                            was lucky to do nothing expect lose money when I started, the worst thing that can happen is to get lucky right away and get a big ego about what an amazing cryptocurrency trader
                                                            we are.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card animation" data-animation="fadeInUp" data-animation-delay="1s">
                                                    <div class="card-header" id="headingEight">
                                                        <h6 class="mb-0"><a class="collapsed" data-toggle="collapse" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">Where is the invest my bitcoin?</a></h6>
                                                    </div>
                                                    <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion2">
                                                        <div class="card-body">
                                                            Before Steem I was all in an another altcoin and really excited about it. When I first bought the price was low and made payments to me every week just for holding it. As I tried
                                                            to participate in the community over the next several months, I was consistently met with a mix of excitement and hostility. When I began talking openly about this, the negative
                                                            emotions won over in the community and in me. Originally I had invested and been happy to hold no matter what the price which quickly went up after I bought it.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab2" role="tabpanel">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div id="accordion3" class="faq_content">
                                                <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                                                    <div class="card-header" id="headingNine">
                                                        <h6 class="mb-0"><a data-toggle="collapse" href="#collapseNine" aria-expanded="true" aria-controls="collapseNine">How does one acquire bitcoins?</a></h6>
                                                    </div>
                                                    <div id="collapseNine" class="collapse show" aria-labelledby="headingNine" data-parent="#accordion3">
                                                        <div class="card-body">
                                                            While it may be possible to find individuals who wish to sell bitcoins in exchange for a credit card or PayPal payment, most exchanges do not allow funding via these payment
                                                            methods. This is due to cases where someone buys bitcoins with PayPal, and then reverses their half of the transaction. This is commonly referred to as a chargeback.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                                                    <div class="card-header" id="headingTen">
                                                        <h6 class="mb-0"><a class="collapsed" data-toggle="collapse" href="#collapseTen" aria-expanded="false" aria-controls="collapseTen">Can I make money with Bitcoin?</a></h6>
                                                    </div>
                                                    <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordion3">
                                                        <div class="card-body">
                                                            You should never expect to get rich with Bitcoin or any emerging technology. It is always important to be wary of anything that sounds too good to be true or disobeys basic
                                                            economic rules.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.8s">
                                                    <div class="card-header" id="headingEleven">
                                                        <h6 class="mb-0"><a class="collapsed" data-toggle="collapse" href="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">What happens when bitcoins are lost?</a></h6>
                                                    </div>
                                                    <div id="collapseEleven" class="collapse" aria-labelledby="headingEleven" data-parent="#accordion3">
                                                        <div class="card-body">
                                                            When a user loses his wallet, it has the effect of removing money out of circulation. Lost bitcoins still remain in the block chain just like any other bitcoins. However, lost
                                                            bitcoins remain dormant forever because there is no way for anybody to find the private key(s) that would allow them to be spent again. Because of the law of supply and demand,
                                                            when fewer bitcoins are available, the ones that are left will be in higher demand and increase in value to compensate.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card animation" data-animation="fadeInUp" data-animation-delay="1s">
                                                    <div class="card-header" id="headingTwelve">
                                                        <h6 class="mb-0"><a class="collapsed" data-toggle="collapse" href="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">Who controls the Bitcoin network?</a></h6>
                                                    </div>
                                                    <div id="collapseTwelve" class="collapse" aria-labelledby="headingTwelve" data-parent="#accordion3">
                                                        <div class="card-body">
                                                            Nobody owns the Bitcoin network much like no one owns the technology behind email. Bitcoin is controlled by all Bitcoin users around the world. While developers are improving the
                                                            software, they can't force a change in the Bitcoin protocol because all users are free to choose what software and version they use.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div id="accordion4" class="faq_content">
                                                <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                                                    <div class="card-header" id="headingThirteen">
                                                        <h6 class="mb-0"><a data-toggle="collapse" href="#collapseThirteen" aria-expanded="true" aria-controls="collapseThirteen">How does one acquire bitcoins?</a></h6>
                                                    </div>
                                                    <div id="collapseThirteen" class="collapse show" aria-labelledby="headingThirteen" data-parent="#accordion4">
                                                        <div class="card-body">
                                                            While it may be possible to find individuals who wish to sell bitcoins in exchange for a credit card or PayPal payment, most exchanges do not allow funding via these payment
                                                            methods. This is due to cases where someone buys bitcoins with PayPal, and then reverses their half of the transaction. This is commonly referred to as a chargeback.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                                                    <div class="card-header" id="headingFourteen">
                                                        <h6 class="mb-0"><a class="collapsed" data-toggle="collapse" href="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen">Can I make money with Bitcoin?</a></h6>
                                                    </div>
                                                    <div id="collapseFourteen" class="collapse" aria-labelledby="headingFourteen" data-parent="#accordion4">
                                                        <div class="card-body">
                                                            You should never expect to get rich with Bitcoin or any emerging technology. It is always important to be wary of anything that sounds too good to be true or disobeys basic
                                                            economic rules.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.8s">
                                                    <div class="card-header" id="headingFifteen">
                                                        <h6 class="mb-0"><a class="collapsed" data-toggle="collapse" href="#collapseFifteen" aria-expanded="false" aria-controls="collapseFifteen">What happens when bitcoins are lost?</a></h6>
                                                    </div>
                                                    <div id="collapseFifteen" class="collapse" aria-labelledby="headingFifteen" data-parent="#accordion4">
                                                        <div class="card-body">
                                                            When a user loses his wallet, it has the effect of removing money out of circulation. Lost bitcoins still remain in the block chain just like any other bitcoins. However, lost
                                                            bitcoins remain dormant forever because there is no way for anybody to find the private key(s) that would allow them to be spent again. Because of the law of supply and demand,
                                                            when fewer bitcoins are available, the ones that are left will be in higher demand and increase in value to compensate.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card animation" data-animation="fadeInUp" data-animation-delay="1s">
                                                    <div class="card-header" id="headingSixteen">
                                                        <h6 class="mb-0"><a class="collapsed" data-toggle="collapse" href="#collapseSixteen" aria-expanded="false" aria-controls="collapseSixteen">Who controls the Bitcoin network?</a></h6>
                                                    </div>
                                                    <div id="collapseSixteen" class="collapse" aria-labelledby="headingSixteen" data-parent="#accordion4">
                                                        <div class="card-body">
                                                            Nobody owns the Bitcoin network much like no one owns the technology behind email. Bitcoin is controlled by all Bitcoin users around the world. While developers are improving the
                                                            software, they can't force a change in the Bitcoin protocol because all users are free to choose what software and version they use.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab3" role="tabpanel">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div id="accordion5" class="faq_content">
                                                <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                                                    <div class="card-header" id="headingSeventeen">
                                                        <h6 class="mb-0"><a data-toggle="collapse" href="#collapseSeventeen" aria-expanded="true" aria-controls="collapseSeventeen">How are bitcoins created?</a></h6>
                                                    </div>
                                                    <div id="collapseSeventeen" class="collapse show" aria-labelledby="headingSeventeen" data-parent="#accordion5">
                                                        <div class="card-body">
                                                            New bitcoins are generated by a competitive and decentralized process called "mining". This process involves that individuals are rewarded by the network for their services.
                                                            Bitcoin miners are processing transactions and securing the network using specialized hardware and are collecting new bitcoins in exchange.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                                                    <div class="card-header" id="headingEighteen">
                                                        <h6 class="mb-0"><a class="collapsed" data-toggle="collapse" href="#collapseEighteen" aria-expanded="false" aria-controls="collapseEighteen">Why do bitcoins have value?</a></h6>
                                                    </div>
                                                    <div id="collapseEighteen" class="collapse" aria-labelledby="headingEighteen" data-parent="#accordion5">
                                                        <div class="card-body">
                                                            Bitcoins have value because they are useful as a form of money. Bitcoin has the characteristics of money (durability, portability, fungibility, scarcity, divisibility, and
                                                            recognizability) based on the properties of mathematics rather than relying on physical properties (like gold and silver) or trust in central authorities (like fiat currencies). In
                                                            short, Bitcoin is backed by mathematics.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.8s">
                                                    <div class="card-header" id="headingNineteen">
                                                        <h6 class="mb-0"><a class="collapsed" data-toggle="collapse" href="#collapseNineteen" aria-expanded="false" aria-controls="collapseNineteen">What determines bitcoin's price?</a></h6>
                                                    </div>
                                                    <div id="collapseNineteen" class="collapse" aria-labelledby="headingNineteen" data-parent="#accordion5">
                                                        <div class="card-body">
                                                            The price of a bitcoin is determined by supply and demand. When demand for bitcoins increases, the price increases, and when demand falls, the price falls. There is only a limited
                                                            number of bitcoins in circulation and new bitcoins are created at a predictable and decreasing rate
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card animation" data-animation="fadeInUp" data-animation-delay="1s">
                                                    <div class="card-header" id="headingTwenty">
                                                        <h6 class="mb-0"><a class="collapsed" data-toggle="collapse" href="#collapseTwenty" aria-expanded="false" aria-controls="collapseTwenty">Can bitcoins become worthless?</a></h6>
                                                    </div>
                                                    <div id="collapseTwenty" class="collapse" aria-labelledby="headingTwenty" data-parent="#accordion5">
                                                        <div class="card-body">
                                                            Yes. History is littered with currencies that failed and are no longer used, such as the German Mark during the Weimar Republic and, more recently, the Zimbabwean dollar.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div id="accordion6" class="faq_content">
                                                <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                                                    <div class="card-header" id="headingNine">
                                                        <h6 class="mb-0"><a data-toggle="collapse" href="#collapse21" aria-expanded="true" aria-controls="collapse21">How are bitcoins created?</a></h6>
                                                    </div>
                                                    <div id="collapse21" class="collapse show" aria-labelledby="heading21" data-parent="#accordion6">
                                                        <div class="card-body">
                                                            New bitcoins are generated by a competitive and decentralized process called "mining". This process involves that individuals are rewarded by the network for their services.
                                                            Bitcoin miners are processing transactions and securing the network using specialized hardware and are collecting new bitcoins in exchange.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                                                    <div class="card-header" id="heading22">
                                                        <h6 class="mb-0"><a class="collapsed" data-toggle="collapse" href="#collapse22" aria-expanded="false" aria-controls="collapse22">Why do bitcoins have value?</a></h6>
                                                    </div>
                                                    <div id="collapse22" class="collapse" aria-labelledby="heading22" data-parent="#accordion6">
                                                        <div class="card-body">
                                                            Bitcoins have value because they are useful as a form of money. Bitcoin has the characteristics of money (durability, portability, fungibility, scarcity, divisibility, and
                                                            recognizability) based on the properties of mathematics rather than relying on physical properties (like gold and silver) or trust in central authorities (like fiat currencies). In
                                                            short, Bitcoin is backed by mathematics.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.8s">
                                                    <div class="card-header" id="heading23">
                                                        <h6 class="mb-0"><a class="collapsed" data-toggle="collapse" href="#collapse23" aria-expanded="false" aria-controls="collapse23">What determines bitcoin's price?</a></h6>
                                                    </div>
                                                    <div id="collapse23" class="collapse" aria-labelledby="heading23" data-parent="#accordion6">
                                                        <div class="card-body">
                                                            The price of a bitcoin is determined by supply and demand. When demand for bitcoins increases, the price increases, and when demand falls, the price falls. There is only a limited
                                                            number of bitcoins in circulation and new bitcoins are created at a predictable and decreasing rate
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card animation" data-animation="fadeInUp" data-animation-delay="1s">
                                                    <div class="card-header" id="heading24">
                                                        <h6 class="mb-0"><a class="collapsed" data-toggle="collapse" href="#collapse24" aria-expanded="false" aria-controls="collapse24">Can bitcoins become worthless?</a></h6>
                                                    </div>
                                                    <div id="collapse24" class="collapse" aria-labelledby="heading24" data-parent="#accordion6">
                                                        <div class="card-body">
                                                            Yes. History is littered with currencies that failed and are no longer used, such as the German Mark during the Weimar Republic and, more recently, the Zimbabwean dollar.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab4" role="tabpanel">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div id="accordion7" class="faq_content">
                                                <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                                                    <div class="card-header" id="heading25">
                                                        <h6 class="mb-0"><a data-toggle="collapse" href="#collapse25" aria-expanded="true" aria-controls="collapse25">Is Bitcoin legal?</a></h6>
                                                    </div>
                                                    <div id="collapse25" class="collapse show" aria-labelledby="heading25" data-parent="#accordion7">
                                                        <div class="card-body">
                                                            To the best of our knowledge, Bitcoin has not been made illegal by legislation in most jurisdictions. However, some jurisdictions (such as Argentina and Russia) severely restrict
                                                            or ban foreign currencies. Other jurisdictions (such as Thailand) may limit the licensing of certain entities such as Bitcoin exchanges.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                                                    <div class="card-header" id="heading26">
                                                        <h6 class="mb-0"><a class="collapsed" data-toggle="collapse" href="#collapse26" aria-expanded="false" aria-controls="collapse26">Is Bitcoin useful for illegal activities?</a></h6>
                                                    </div>
                                                    <div id="collapse26" class="collapse" aria-labelledby="heading26" data-parent="#accordion7">
                                                        <div class="card-body">
                                                            Bitcoin is money, and money has always been used both for legal and illegal purposes. Cash, credit cards and current banking systems widely surpass Bitcoin in terms of their use to
                                                            finance crime. Bitcoin can bring significant innovation in payment systems and the benefits of such innovation are often considered to be far beyond their potential drawbacks.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.8s">
                                                    <div class="card-header" id="heading27">
                                                        <h6 class="mb-0"><a class="collapsed" data-toggle="collapse" href="#collapse27" aria-expanded="false" aria-controls="collapse27">Can Bitcoin be regulated?</a></h6>
                                                    </div>
                                                    <div id="collapse27" class="collapse" aria-labelledby="heading27" data-parent="#accordion7">
                                                        <div class="card-body">
                                                            The Bitcoin protocol itself cannot be modified without the cooperation of nearly all its users, who choose what software they use. Attempting to assign special rights to a local
                                                            authority in the rules of the global Bitcoin network is not a practical possibility.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card animation" data-animation="fadeInUp" data-animation-delay="1s">
                                                    <div class="card-header" id="heading28">
                                                        <h6 class="mb-0"><a class="collapsed" data-toggle="collapse" href="#collapse28" aria-expanded="false" aria-controls="collapse28">What about Bitcoin and taxes?</a></h6>
                                                    </div>
                                                    <div id="collapse28" class="collapse" aria-labelledby="heading28" data-parent="#accordion7">
                                                        <div class="card-body">
                                                            Bitcoin is not a fiat currency with legal tender status in any jurisdiction, but often tax liability accrues regardless of the medium used. There is a wide variety of legislation
                                                            in many different jurisdictions which could cause income, sales, payroll, capital gains, or some other form of tax liability to arise with Bitcoin.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div id="accordion8" class="faq_content">
                                                <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                                                    <div class="card-header" id="heading29">
                                                        <h6 class="mb-0"><a data-toggle="collapse" href="#collapse29" aria-expanded="true" aria-controls="collapse29">Is Bitcoin legal?</a></h6>
                                                    </div>
                                                    <div id="collapse29" class="collapse show" aria-labelledby="heading29" data-parent="#accordion8">
                                                        <div class="card-body">
                                                            To the best of our knowledge, Bitcoin has not been made illegal by legislation in most jurisdictions. However, some jurisdictions (such as Argentina and Russia) severely restrict
                                                            or ban foreign currencies. Other jurisdictions (such as Thailand) may limit the licensing of certain entities such as Bitcoin exchanges.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                                                    <div class="card-header" id="heading30">
                                                        <h6 class="mb-0"><a class="collapsed" data-toggle="collapse" href="#collapse30" aria-expanded="false" aria-controls="collapse30">Is Bitcoin useful for illegal activities?</a></h6>
                                                    </div>
                                                    <div id="collapse30" class="collapse" aria-labelledby="heading30" data-parent="#accordion8">
                                                        <div class="card-body">
                                                            Bitcoin is money, and money has always been used both for legal and illegal purposes. Cash, credit cards and current banking systems widely surpass Bitcoin in terms of their use to
                                                            finance crime. Bitcoin can bring significant innovation in payment systems and the benefits of such innovation are often considered to be far beyond their potential drawbacks.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card animation" data-animation="fadeInUp" data-animation-delay="0.8s">
                                                    <div class="card-header" id="heading31">
                                                        <h6 class="mb-0"><a class="collapsed" data-toggle="collapse" href="#collapse31" aria-expanded="false" aria-controls="collapse31">Can Bitcoin be regulated?</a></h6>
                                                    </div>
                                                    <div id="collapse31" class="collapse" aria-labelledby="heading31" data-parent="#accordion8">
                                                        <div class="card-body">
                                                            The Bitcoin protocol itself cannot be modified without the cooperation of nearly all its users, who choose what software they use. Attempting to assign special rights to a local
                                                            authority in the rules of the global Bitcoin network is not a practical possibility.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card animation" data-animation="fadeInUp" data-animation-delay="1s">
                                                    <div class="card-header" id="heading32">
                                                        <h6 class="mb-0"><a class="collapsed" data-toggle="collapse" href="#collapse32" aria-expanded="false" aria-controls="collapse32">What about Bitcoin and taxes?</a></h6>
                                                    </div>
                                                    <div id="collapse32" class="collapse" aria-labelledby="heading32" data-parent="#accordion8">
                                                        <div class="card-body">
                                                            Bitcoin is not a fiat currency with legal tender status in any jurisdiction, but often tax liability accrues regardless of the medium used. There is a wide variety of legislation
                                                            in many different jurisdictions which could cause income, sales, payroll, capital gains, or some other form of tax liability to arise with Bitcoin.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END SECTION FAQ -->

        <!-- START SECTION BLOG -->
        <section class="small_pb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 offset-lg-2">
                        <div class="title_default_light title_border text-center">
                            <h4 class="animation" data-animation="fadeInUp" data-animation-delay="0.2s">Latest News</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="blog_slider owl-carousel owl-theme">
                            <div class="item">
                                <div class="blog_item animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                                    <div class="blog_img">
                                        <a href="#">
                                            <img src="./cph4_assets/images/blog_small_img1.jpg" alt="blog_small_img1" />
                                        </a>
                                    </div>
                                    <div class="blog_content">
                                        <div class="blog_text">
                                            <h6 class="blog_title"><a href="#">Bitcoin Price Slightly Recovers as Ripple Market Cap</a></h6>
                                            <p>The crypto markets continued to build on April's gains this week, with alternative cryptocurrencies like nano, VeChain and bytecoin leading the way.</p>
                                            <a href="#" class="text-capitalize">Read More</a>
                                        </div>
                                        <ul class="list_none blog_meta">
                                            <li>
                                                <a href="#"><i class="ion-android-time"></i> April 14, 2018</a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="ion-android-chat"></i> 2 Comment</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="blog_item animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                                    <div class="blog_img">
                                        <a href="#">
                                            <img src="./cph4_assets/images/blog_small_img2.jpg" alt="blog_small_img2" />
                                        </a>
                                    </div>
                                    <div class="blog_content">
                                        <div class="blog_text">
                                            <h6 class="blog_title"><a href="#">The Year Cryptocurrencies Seized the Mainstream Spotlightp</a></h6>
                                            <p>The crypto markets continued to build on April's gains this week, with alternative cryptocurrencies like nano, VeChain and bytecoin leading the way.</p>
                                            <a href="#" class="text-capitalize">Read More</a>
                                        </div>
                                        <ul class="list_none blog_meta">
                                            <li>
                                                <a href="#"><i class="ion-android-time"></i> April 14, 2018</a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="ion-android-chat"></i> 2 Comment</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="blog_item animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                                    <div class="blog_img">
                                        <a href="#">
                                            <img src="./cph4_assets/images/blog_small_img3.jpg" alt="blog_small_img3" />
                                        </a>
                                    </div>
                                    <div class="blog_content">
                                        <div class="blog_text">
                                            <h6 class="blog_title"><a href="#">Bitcoin Facing Decisive Year in 2018, Says Legendary Investor</a></h6>
                                            <p>The crypto markets continued to build on April's gains this week, with alternative cryptocurrencies like nano, VeChain and bytecoin leading the way.</p>
                                            <a href="#" class="text-capitalize">Read More</a>
                                        </div>
                                        <ul class="list_none blog_meta">
                                            <li>
                                                <a href="#"><i class="ion-android-time"></i> April 14, 2018</a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="ion-android-chat"></i> 2 Comment</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="blog_item animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                                    <div class="blog_img">
                                        <a href="#">
                                            <img src="./cph4_assets/images/blog_small_img1.jpg" alt="blog_small_img1" />
                                        </a>
                                    </div>
                                    <div class="blog_content">
                                        <div class="blog_text">
                                            <h6 class="blog_title"><a href="#">Bitcoin Price Slightly Recovers as Ripple Market Cap</a></h6>
                                            <p>The crypto markets continued to build on April's gains this week, with alternative cryptocurrencies like nano, VeChain and bytecoin leading the way.</p>
                                            <a href="#" class="text-capitalize">Read More</a>
                                        </div>
                                        <ul class="list_none blog_meta">
                                            <li>
                                                <a href="#"><i class="ion-android-time"></i> April 14, 2018</a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="ion-android-chat"></i> 2 Comment</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END SECTION BLOG -->

        <!-- START CLIENTS SECTION -->
        <section class="client_logo small_pt small_pb">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title_default_light title_border text-center">
                            <h4 class="animation" data-animation="fadeInUp" data-animation-delay="0.2s">Our Clients</h4>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center text-center overflow_hide small_space">
                    <div class="col-lg-3 col-md-4 col-6 logo_border">
                        <div class="d-flex flex-wrap align-items-center justify-content-center h-100 animation" data-animation="fadeInUp" data-animation-delay="0.3s">
                            <img src="./cph4_assets/images/client_logo_wt1.png" alt="client_logo_wt1" />
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6 logo_border">
                        <div class="d-flex flex-wrap align-items-center justify-content-center h-100 animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                            <img src="./cph4_assets/images/client_logo_wt2.png" alt="client_logo_wt2" />
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6 logo_border">
                        <div class="d-flex flex-wrap align-items-center justify-content-center h-100 animation" data-animation="fadeInUp" data-animation-delay="0.5s">
                            <img src="./cph4_assets/images/client_logo_wt3.png" alt="client_logo_wt3" />
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6 logo_border">
                        <div class="d-flex flex-wrap align-items-center justify-content-center h-100 animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                            <img src="./cph4_assets/images/client_logo_wt4.png" alt="client_logo_wt4" />
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6 logo_border">
                        <div class="d-flex flex-wrap align-items-center justify-content-center h-100 animation" data-animation="fadeInUp" data-animation-delay="0.7s">
                            <img src="./cph4_assets/images/client_logo_wt5.png" alt="client_logo_wt5" />
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6 logo_border">
                        <div class="d-flex flex-wrap align-items-center justify-content-center h-100 animation" data-animation="fadeInUp" data-animation-delay="0.8s">
                            <img src="./cph4_assets/images/client_logo_wt6.png" alt="client_logo_wt6" />
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6 logo_border">
                        <div class="d-flex flex-wrap align-items-center justify-content-center h-100 animation" data-animation="fadeInUp" data-animation-delay="0.8s">
                            <img src="./cph4_assets/images/client_logo_wt7.png" alt="client_logo_wt7" />
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6 logo_border">
                        <div class="d-flex flex-wrap align-items-center justify-content-center h-100 animation" data-animation="fadeInUp" data-animation-delay="0.8s">
                            <img src="./cph4_assets/images/client_logo_wt8.png" alt="client_logo_wt8" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END CLIENTS SECTION -->

        <!-- START SECTION CONTACT -->
        <section id="contact" class="contact_section small_pt">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 offset-lg-2">
                        <div class="title_default_light title_border text-center">
                            <h4 class="animation" data-animation="fadeInUp" data-animation-delay="0.2s">Get In Touch!</h4>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center small_space">
                    <div class="col-lg-4 col-md-6 offset-lg-2">
                        <div class="bg_light_dark contact_box_s2 animation" data-animation="fadeInLeft" data-animation-delay="0.1s">
                            <div class="contact_title">
                                <h5 class="animation" data-animation="fadeInUp" data-animation-delay="0.2s">Contact With Us</h5>
                                <p class="animation" data-animation="fadeInUp" data-animation-delay="0.4s">Our office is located in a beautiful building and garden</p>
                            </div>
                            <ul class="list_none contact_info mt-margin">
                                <li class="animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                                    <i class="ion-ios-location"></i>
                                    <div class="contact_detail">
                                        <span>Address</span>
                                        <p>22 International Division Via G.B. Pirelli</p>
                                    </div>
                                </li>
                                <li class="animation" data-animation="fadeInUp" data-animation-delay="0.5s">
                                    <i class="ion-android-call"></i>
                                    <div class="contact_detail">
                                        <span>Phone</span>
                                        <p>+23 0123 4567</p>
                                    </div>
                                </li>
                                <li class="animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                                    <i class="ion-ios-email"></i>
                                    <div class="contact_detail">
                                        <span>Email-id</span>
                                        <p><a href="https://bestwebcreator.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d881b7adaab5b9b1b498bfb5b9b1b4f6bbb7b5">[email&#160;protected]</a></p>
                                    </div>
                                </li>
                            </ul>
                            <div class="contct_follow pt-2 pt-md-4">
                                <span class="text-uppercase animation" data-animation="fadeInUp" data-animation-delay="0.2s">Follow Us</span>
                                <ul class="list_none social_icon">
                                    <li class="animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li class="animation" data-animation="fadeInUp" data-animation-delay="0.5s">
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li class="animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                    </li>
                                    <li class="animation" data-animation="fadeInUp" data-animation-delay="0.7s">
                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                    </li>
                                    <li class="animation" data-animation="fadeInUp" data-animation-delay="0.8s">
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6">
                        <div class="pt-4 pt-md-0 animation" data-animation="fadeInRight" data-animation-delay="0.1s">
                            <form method="post" name="enq" class="field_form">
                                <div class="row">
                                    <div class="form-group col-md-12 animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                                        <input type="text" required="required" placeholder="Enter Name *" id="first-name" class="form-control" name="name" />
                                    </div>
                                    <div class="form-group col-md-12 animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                                        <input type="email" required="required" placeholder="Enter Email *" id="email" class="form-control" name="email" />
                                    </div>
                                    <div class="form-group col-md-12 animation" data-animation="fadeInUp" data-animation-delay="0.8s">
                                        <input type="text" required="required" placeholder="Enter Subject" id="subject" class="form-control" name="subject" />
                                    </div>
                                    <div class="form-group col-md-12 animation" data-animation="fadeInUp" data-animation-delay="1s">
                                        <textarea required="required" placeholder="Message *" id="description" class="form-control" name="message" rows="2"></textarea>
                                    </div>
                                    <div class="col-md-12 text-center animation" data-animation="fadeInUp" data-animation-delay="1.2s">
                                        <button type="submit" title="Submit Your Message!" class="btn btn-default btn-radius btn-block" id="submitButton" name="submit" value="Submit">Submit <i class="ion-ios-arrow-thin-right"></i></button>
                                    </div>
                                    <div class="col-md-12">
                                        <div id="alert-msg" class="alert-msg text-center"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END SECTION CONTACT -->

        <!-- START FOOTER SECTION -->
        <footer>
            <div class="top_footer bg_light_dark" data-z-index="1" data-parallax="scroll" data-image-src="./cph4_assets/images/footer_bg.png">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-12">
                            <div class="footer_logo mb-3 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                                <a href="#home_section" class="page-scroll">
                                     <img alt="logo" src="./dashboard_cph4/images/logo.png" />
                                </a>
                            </div>
                            <div class="footer_desc">
                                <p class="animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                                    Cryptocash stands firmly in support of financial freedom and the liberty that Bitcoin provides globally for anyone to voluntarily participate in a permissionless and decentralized network.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 res_md_mt_30 res_sm_mt_20">
                            <h4 class="footer_title border_title animation" data-animation="fadeInUp" data-animation-delay="0.2s">Quick Links</h4>
                            <ul class="footer_link list_arrow">
                                <li class="animation" data-animation="fadeInUp" data-animation-delay="0.2s"><a href="#">Cryptocash ICO</a></li>
                                <li class="animation" data-animation="fadeInUp" data-animation-delay="0.3s"><a href="#">How It Works</a></li>
                                <li class="animation" data-animation="fadeInUp" data-animation-delay="0.4s"><a href="#">Tokens</a></li>
                                <li class="animation" data-animation="fadeInUp" data-animation-delay="0.5s"><a href="#">FAQ</a></li>
                                <li class="animation" data-animation="fadeInUp" data-animation-delay="0.6s"><a href="#">Contact</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-5 col-md-6 res_md_mt_30 res_sm_mt_20">
                            <div class="newsletter_form">
                                <h4 class="footer_title border_title animation" data-animation="fadeInUp" data-animation-delay="0.2s">Newsletter</h4>
                                <p class="animation" data-animation="fadeInUp" data-animation-delay="0.4s">By subscribing to our mailing list you will always be update with the latest news from us.</p>
                                <form class="subscribe_form animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                                    <input class="input-rounded" type="text" required placeholder="Enter Email Address" />
                                    <button type="submit" title="Subscribe" class="btn-info" name="submit" value="Submit">Subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom_footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <p class="copyright">Copyright &copy; 2021 All Rights Reserved. Crypto CPH4</p>
                        </div>
                        <div class="col-md-6">
                            <ul class="list_none footer_menu">
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- END FOOTER SECTION -->

        <a href="#" class="scrollup btn-default"><i class="ion-ios-arrow-up"></i></a>

        <!-- Latest jQuery -->
        <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
        <script src="./cph4_assets/js/jquery-1.12.4.min.js"></script>
        <!-- Latest compiled and minified Bootstrap -->
        <script src="./cph4_assets/bootstrap/js/bootstrap.min.js"></script>
        <!-- owl-carousel min js  -->
        <script src="./cph4_assets/owlcarousel/js/owl.carousel.min.js"></script>
        <!-- magnific-popup min js  -->
        <script src="./cph4_assets/js/magnific-popup.min.js"></script>
        <!-- waypoints min js  -->
        <script src="./cph4_assets/js/waypoints.min.js"></script>
        <!-- parallax js  -->
        <script src="./cph4_assets/js/parallax.js"></script>
        <!-- countdown js  -->
        <script src="./cph4_assets/js/jquery.countdown.min.js"></script>
        <!-- particles min js  -->
        <script src="./cph4_assets/js/particles.min.js"></script>
        <!-- scripts js -->
        <script src="./cph4_assets/js/jquery.dd.min.js"></script>
        <!-- jquery.counterup.min js -->
        <script src="./cph4_assets/js/jquery.counterup.min.js"></script>
        <!-- scripts js -->
        <script src="./cph4_assets/js/scripts.js"></script>
        
        <script>
            particlesJS("particles-js", {"particles":{"number":{"value":80,"density":{"enable":true,"value_area":800}},"color":{"value":"#ffffff"},"shape":{"type":"circle","stroke":{"width":0,"color":"#000000"},"polygon":{"nb_sides":5},"image":{"src":"img/github.svg","width":100,"height":100}},"opacity":{"value":0.5,"random":false,"anim":{"enable":false,"speed":1,"opacity_min":0.1,"sync":false}},"size":{"value":3,"random":true,"anim":{"enable":false,"speed":40,"size_min":0.1,"sync":false}},"line_linked":{"enable":true,"distance":150,"color":"#ffffff","opacity":0.4,"width":1},"move":{"enable":true,"speed":6,"direction":"none","random":false,"straight":false,"out_mode":"out","bounce":false,"attract":{"enable":false,"rotateX":600,"rotateY":1200}}},"interactivity":{"detect_on":"canvas","events":{"onhover":{"enable":true,"mode":"repulse"},"onclick":{"enable":true,"mode":"push"},"resize":true},"modes":{"grab":{"distance":400,"line_linked":{"opacity":1}},"bubble":{"distance":400,"size":40,"duration":2,"opacity":8,"speed":3},"repulse":{"distance":200,"duration":0.4},"push":{"particles_nb":4},"remove":{"particles_nb":2}}},"retina_detect":true});var count_particles, stats, update; stats = new Stats; stats.setMode(0); stats.domElement.style.position = 'absolute'; stats.domElement.style.left = '0px'; stats.domElement.style.top = '0px'; document.body.appendChild(stats.domElement); count_particles = document.querySelector('.js-count-particles'); update = function() { stats.begin(); stats.end(); if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) { count_particles.innerText = window.pJSDom[0].pJS.particles.array.length; } requestAnimationFrame(update); }; requestAnimationFrame(update);;
        </script>
    </body>
</html>
