<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>UBattle Front</title>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" type="text/css">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" rel="stylesheet" />

</head>

<body>

<div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <div class="container">
            <div class="sidebar-heading text-center pt-3">ubattle</div>
        </div>

        <div class="list-group list-group-flush mt-5  text-capitalize">

            <a href="#" class="list-group-item-action home row pl-3 pr-1 py-3">
                <div class="col-4 text-center">
                    <i class="fa fa-home"></i>
                </div>
                <div class="col-8 p-0">
                    Home
                </div>

            </a>

            <a href="#" class="list-group-item-action  row pl-3 pr-1 py-3">
                <div class="col-4 text-center">
                    <i class="fa fa-search"> </i>
                </div>
                <div class="col-8 p-0">
                    Discover
                </div>

            </a>

            <a href="#" class="list-group-item-action  row pl-3 pr-1 py-3">
                <div class="col-4 text-center">
                    <i class="fa fa-circle"> </i>
                </div>
                <div class="col-8 p-0">
                    recommendations
                </div>

            </a>

            <a href="#" class="list-group-item-action  row pl-3 pr-1 py-3">
                <div class="col-4 text-center">
                    <i class="fa fa-wifi"> </i>
                </div>
                <div class="col-8 p-0">
                    Followed Channels
                </div>

            </a>
            <div class="list-group-item-action  row pl-3 pr-1 py-2">
                <div class="col-10 pl-2 row offset-2 followed_channels_div ">
                    <div><img src="https://i.guim.co.uk/img/media/7aa393d513265a14ba363603b2153cf835bfe201/0_0_3500_2100/master/3500.jpg?width=1200&height=1200&quality=85&auto=format&fit=crop&s=ec879b766f70193abeae17a9a948baae" alt=""></div>
                    <div class="channel_name">
                        <p class="mb-0 pl-2">Rihanna Abrahamyan</p>
                    </div>
                </div>
            </div>

            <div class="list-group-item-action  row pl-3 pr-1 py-2">
                <div class="col-10 pl-2 row offset-2 followed_channels_div ">
                    <div><img src="https://i.guim.co.uk/img/media/7aa393d513265a14ba363603b2153cf835bfe201/0_0_3500_2100/master/3500.jpg?width=1200&height=1200&quality=85&auto=format&fit=crop&s=ec879b766f70193abeae17a9a948baae" alt=""></div>
                    <div class="channel_name">
                        <p class="mb-0 pl-2">Joseph Ghevondyan</p>
                    </div>
                </div>
            </div>

            <div class="list-group-item-action  row pl-3 pr-1 py-2">
                <div class="col-10 pl-2 row offset-2 followed_channels_div ">
                    <div><img src="https://i.guim.co.uk/img/media/7aa393d513265a14ba363603b2153cf835bfe201/0_0_3500_2100/master/3500.jpg?width=1200&height=1200&quality=85&auto=format&fit=crop&s=ec879b766f70193abeae17a9a948baae" alt=""></div>
                    <div class="channel_name">
                        <p class="mb-0 pl-2">DuaLipa Abrahamyan</p>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

        <div class="container-fluid">
            <div class="main_background">
                <div class="main_nav col-12">
                    <nav class="navbar navbar-expand-lg navbar-light " id="main_nav">

                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <div class="main_search_div">
                                <i class="fa fa-search"> </i>
                                <input type="text" id="main_serch_input" placeholder="Seacrch Channels">
                            </div>
                            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                                <li>
                                    <img src="https://i.guim.co.uk/img/media/7aa393d513265a14ba363603b2153cf835bfe201/0_0_3500_2100/master/3500.jpg?width=1200&height=1200&quality=85&auto=format&fit=crop&s=ec879b766f70193abeae17a9a948baae" class="navbar_profile_icon" alt="">
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Anton773
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-bell"></i></a>
                                </li>

                                <li class="nav-item active">
                                    <a class="nav-link" href="#"><i class="fa fa-inbox"></i></a>
                                </li>

                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="live_battle_main d-flex">
            <div class="col-9 p-0">
                <div class="d-flex w-100 position-relative">
                    <div class="col-6 p-0">
                        <img src="{{asset('assets/images/Rectangle160.png')}}" alt="" style="width: 100%">
                    </div>
                    <div class="col-6 p-0">
                        <img src="{{asset('assets/images/Rectangle1160.png')}}" alt="" style="width: 100%">
                    </div>
                </div>
                <div class="d-flex pt-3 live_battle_desc">
                    <div class="col-4">
                        <div class="row h-100">
                            <div class="col-12 text-left d-flex justify-content-between flex-column">
                                <div>
                                    <div>
                                        <button class="btn vote_button">Vote for player 1</button>
                                    </div>

                                    <button class="btn donate_button mt-3">Donate</button>
                                    <p class="donations_counter mt-3">Donations Recieved: 400$</p>
                                </div>
                                <div>
                                    <button class="btn report_button"><i class="fa fa-flag"></i> Report</button>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-4 text-center d-flex justify-content-between flex-column">
                        <div>
                            <p class="standoff">Live Dance Standoff</p>
                            <p class="channel_name_live"><span class="carousel_channel_name">Channel Name </span>vs <span class="carousel_channel_name">Channel Name</span></p>
                        </div>
                        <div class="live_page_info mt-4">
                            <div class="live_users_vs">
                                <div>
                                    <img src="{{asset('assets/images/Rectangle160.png')}}" alt="">
                                </div>
                                <div class="vs_sign">X</div>
                                <div>
                                    <img src="{{asset('assets/images/Rectangle1160.png')}}" alt="">
                                </div>
                            </div>
                            <p class="pt-2">Live for 24:46 minutes</p>
                            <p>353 watching</p>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="row h-100">
                            <div class="col-12 text-right d-flex justify-content-between flex-column">
                                <div class="text-right">
                                    <div class="text-right">
                                        <button class="btn vote_button">Vote for player 2</button>
                                    </div>

                                    <button class="btn donate_button mt-3">Donate</button>
                                </div>
                                <div>
                                    <button class="btn report_button"><i class="fa fa-flag"></i> Report</button>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-12 mt-4 pt-4">

                    <div class="border-div col"></div>
                </div>
            </div>
            <div class="col-3 live_chat d-flex justify-content-between flex-column p-0">
                <div class="live_chat_messages p-3">

                    <div class="row col-12 flex-nowrap">
                        <img src="https://images.unsplash.com/photo-1583452208101-7c1cc44c4132?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" alt="">
                        <p class="pl-2"><span class="color_red">username:</span> <span class="pl-2">lkjdsflkjdsflkks hbdfi dskuf a</span> </p>
                    </div>

                    <div class="row col-12 flex-nowrap">
                        <img src="https://images.unsplash.com/photo-1583452208101-7c1cc44c4132?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" alt="">
                        <p class="pl-2"><span class="color_red">username:</span> <span class="pl-2">lkjdsflkjdsflkks gd kjaugd jwadg ujwadg iuwa</span> </p>
                    </div>

                    <div class="row col-12 flex-nowrap">
                        <img src="https://images.unsplash.com/photo-1583452208101-7c1cc44c4132?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" alt="">
                        <p class="pl-2"><span class="color_red">username:</span> <span class="pl-2">lkjdsflkjdsflkks hbdfi dskuf gdsifg ajudg jauhgd kjaugd jwadg ujwadg iuwa</span> </p>
                    </div>

                    <div class="row col-12 flex-nowrap">
                        <img src="https://images.unsplash.com/photo-1583452208101-7c1cc44c4132?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" alt="">
                        <p class="pl-2"><span class="color_blue">username:</span> <span class="pl-2">lkjdsflkjdsfdskuf gdsifg ajudg jauhgd kjaugd jwadg ujwadg iuwa</span> </p>
                    </div>

                    <div class="row col-12 flex-nowrap">
                        <img src="https://images.unsplash.com/photo-1583452208101-7c1cc44c4132?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" alt="">
                        <p class="pl-2"><span class="color_red">username:</span> <span class="pl-2">lkjdswadg ujwadg iuwa</span> </p>
                    </div>

                    <div class="row col-12 flex-nowrap">
                        <img src="https://images.unsplash.com/photo-1583452208101-7c1cc44c4132?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" alt="">
                        <p class="pl-2"><span class="color_red">username:</span> <span class="pl-2">lkjdsflkjdsflkks hbdfi dskuf gdsifg ajudg jauhgd kjaugd jwadg ujwadg iuwa</span> </p>
                    </div>

                    <div class="row col-12 flex-nowrap">
                        <img src="https://images.unsplash.com/photo-1583452208101-7c1cc44c4132?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" alt="">
                        <p class="pl-2"><span class="color_blue">username:</span> <span class="pl-2">lkjdsflkjdsflkks hbdfi dskuf gdsifg ajudg jauhgd kjaugd jwadg ujwadg iuwa</span> </p>
                    </div>

                    <div class="row col-12 flex-nowrap">
                        <img src="https://images.unsplash.com/photo-1583452208101-7c1cc44c4132?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" alt="">
                        <p class="pl-2"><span class="color_blue">username:</span> <span class="pl-2">lkjdsflkjdsflkks hbdfi dskuf gdsifg ajudg jauhgd kjaugd jwadg ujwadg iuwa</span> </p>
                    </div>

                    <div class="row col-12 flex-nowrap">
                        <img src="https://images.unsplash.com/photo-1583452208101-7c1cc44c4132?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" alt="">
                        <p class="pl-2"><span class="color_red">username:</span> <span class="pl-2">lkjdsflkjdsflkks hbdfi dskuf gdsifg ajudg jauhgd kjaugd jwadg ujwadg iuwa</span> </p>
                    </div>
                    <div class="row col-12 flex-nowrap">
                        <img src="https://images.unsplash.com/photo-1583452208101-7c1cc44c4132?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" alt="">
                        <p class="pl-2"><span class="color_red">username:</span> <span class="pl-2">lkjdsflkjdsflkks hbdfi dskuf gdsifg ajudg jauhgd kjaugd jwadg ujwadg iuwa</span> </p>
                    </div>
                    <div class="row col-12 flex-nowrap">
                        <img src="https://images.unsplash.com/photo-1583452208101-7c1cc44c4132?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" alt="">
                        <p class="pl-2"><span class="color_red">username:</span> <span class="pl-2">lkjdsflkjdsflkks hbdfi dskuf gdsifg ajudg jauhgd kjaugd jwadg ujwadg iuwa</span> </p>
                    </div>

                    <div class="row col-12 flex-nowrap">
                        <img src="https://images.unsplash.com/photo-1583452208101-7c1cc44c4132?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" alt="">
                        <p class="pl-2"><span class="color_red">username:</span> <span class="pl-2">lkjdsfljauhgd kjaugd jwadg ujwadg iuwa</span> </p>
                    </div>
                    <div class="row col-12 flex-nowrap">
                        <img src="https://images.unsplash.com/photo-1583452208101-7c1cc44c4132?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" alt="">
                        <p class="pl-2"><span class="color_blue">username:</span> <span class="pl-2">lkjdsflkjdsflkks hbdfi dskuf gdsifg ajudg jauhgd kjaugd jwadg ujwadg iuwa</span> </p>
                    </div>
                    <div class="row col-12 flex-nowrap">
                        <img src="https://images.unsplash.com/photo-1583452208101-7c1cc44c4132?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" alt="">
                        <p class="pl-2"><span class="color_red">username:</span> <span class="pl-2">lkjdsflkjdsflkks hbdfi dskuf gdsifg ajudg jauhgd kjaugd jwadg ujwadg iuwa</span> </p>
                    </div>
                    <div class="row col-12 flex-nowrap">
                        <img src="https://images.unsplash.com/photo-1583452208101-7c1cc44c4132?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" alt="">
                        <p class="pl-2"><span class="color_blue">username:</span> <span class="pl-2">lkjdsflkjdsflkks hbdfi dskuf gdsifg ajudg jauhgd kjaugd jwadg ujwadg iuwa</span> </p>
                    </div>
                </div>
                <div class="live_chat_input_place text-center">
                    <div class="live_chat_buttons">
                        <input type="text" placeholder="Send a message...">
                        <button class="btn"><i class="fa fa-paper-plane"></i></button>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-9 battle_player_info_div pt-3">
            <div class="row">
                <div class="col-6 pl-4">
                    <p class="player_about_header">
                        About Player 1
                    </p>
                </div>
                <div class="col-6 pl-5">
                    <p class="player_about_header">
                        About Player 2
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-6 pl-4">
                    <div class="d-flex ">
                        <img src="{{asset('assets/images/Rectangle160.png')}}" alt="">
                        <div class="pl-3">
                            <p class="player_name m-0">Andrea wallace</p>
                            <p class="player_address m-0">Los Angeles, California, USA</p>
                            <div class="pt-3">
                                <button class="btn follow_button">Follow</button>
                                <button class="btn subscribe_button ml-2">Subscribe</button>
                            </div>
                        </div>
                    </div>
                    <div class="pr-5 player_info pt-4">
                        <p class="m-0">About Andrea</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid deleniti dolore ex expedita hic in iure, laboriosam laudantium nesciunt optio porro possimus quo reprehenderit soluta sunt ullam veniam voluptatibus. Libero.</p>
                    </div>
                    <div class="d-flex battle_brand_logos pt-2">
                        <div class="facebook"><i class="fab fa-facebook-f"></i></div>
                        <div><i class="fab fa-instagram"></i></div>
                        <div><i class="fab fa-twitter"></i></div>
                    </div>
                </div>
                <div class="col-6 pl-5 second_player">
                    <div class="d-flex ">
                        <img src="{{asset('assets/images/Rectangle1160.png')}}" alt="">
                        <div class="pl-3">
                            <p class="player_name m-0">Andrea wallace</p>
                            <p class="player_address m-0">Los Angeles, California, USA</p>
                            <div class="pt-3">
                                <button class="btn follow_button">Follow</button>
                                <button class="btn subscribe_button ml-2">Subscribe</button>
                            </div>
                        </div>
                    </div>
                    <div class="pr-3 player_info pt-4">
                        <p class="m-0">About Andrea</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid deleniti dolore ex expedita hic in iure, laboriosam laudantium nesciunt optio porro possimus quo reprehenderit soluta sunt ullam veniam voluptatibus. Libero.</p>
                    </div>
                    <div class="d-flex battle_brand_logos pt-2">
                        <div class="facebook"><i class="fab fa-facebook-f"></i></div>
                        <div><i class="fab fa-instagram"></i></div>
                        <div><i class="fab fa-twitter"></i></div>
                    </div>

                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="main_background">
                {{---------------------------------------------------------  Topics you might like -----------------------------------------------------------}}
                <div class="live_battles_div pt-4 pb-4">
                    <div class="col-12">

                    </div>
                </div>

                <div class="col-12 mt-4 pt-4">
                    <div class="border-div "></div>
                </div>


                <div class="footerWrap mt-5 mb-3">
                    <div class="container">
                        <div class="row">

                            <!--Quick Links-->

                            <div class="col-md-3 col-sm-12">
                                <h5>Contact Us</h5>
                                <div class="address">Street Name 22/2</div>
                                <div class="address">City, Country</div>
                                <div class="address">info@ubattle.com</div>

                                <!-- Social Icons -->
                                <div class="social">
                                    <a href="https://www.facebook.com/Jobup-108996324091045/" class="facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.instagram.com/jobup.am/" target="_blank"><i class="fab fa-instagram"></i></a>
                                    <a href="https://www.linkedin.com/company/jobup-am/?viewAsMember=true" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                                <!-- Social Icons end -->

                            </div>
                            <!--Quick Links-->
                            <div class="col-md-3 col-sm-6">
                                <h5>Quick Links</h5>
                                <!--Quick Links menu Start-->
                                <ul class="quicklinks">
                                    <li><a href="https://jobup.am/contact-us">Contact Us</a></li>
                                    <li><a href="https://jobup.am/companies">Companies</a></li>
                                    <li class="postad"><a href="https://jobup.am/post-job">Post a Job</a></li>
                                    <li><a href="https://jobup.am/faq">FAQs</a></li>

                                    <li class=""><a href="https://jobup.am/page/about-us">About</a></li>

                                    <li class=""><a href="https://jobup.am/page/Packages">Packages</a></li>
                                </ul>
                            </div>
                            <!--Quick Links menu end-->

                            <!--Jobs By Industry-->
                            <div class="col-md-3 col-sm-6">
                                <h5>Categories</h5>
                                <!--Industry menu Start-->
                                <ul class="quicklinks">
                                    <li><a href="https://jobup.am/jobs?industry_id%5B%5D=33">Music</a></li>
                                    <li><a href="https://jobup.am/jobs?industry_id%5B%5D=18">Politics</a></li>
                                    <li><a href="https://jobup.am/jobs?industry_id%5B%5D=1">Sports</a></li>
                                    <li><a href="https://jobup.am/jobs?industry_id%5B%5D=25">Video Games</a></li>
                                    <li><a href="https://jobup.am/jobs?industry_id%5B%5D=7">Science</a></li>
                                </ul>
                                <!--Industry menu End-->
                                <div class="clear"></div>
                            </div>

                            <!--About Us-->
                            <div class="col-md-3 col-sm-12 bots_footer">
                                <h5>Our Bots</h5>
                                <ul class="quicklinks">
                                    <li><a href="viber://pa/info?uri=jobup-am">Viber Bot</a></li>
                                    <li><a href="https://t.me/jobupbot">Telegram Bot</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>


    </div>


    <!-- /#page-content-wrapper -->

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="{{asset('assets/js/owl.carousel.js')}}"></script>
<script src="{{asset('assets/js/owl.autoplay.js')}}"></script>
<script>

</script>
</body>

</html>
