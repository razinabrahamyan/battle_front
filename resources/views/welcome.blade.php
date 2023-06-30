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

        <div class="container-fluid light_container">
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

                <div class="main_page_carousel">
                    <div class="owl-carousel">

                        <div>
                            <div class="owl_absolute">
                                <div class="carousel_info pl-2">
                                    <h1>Upcomig Battle</h1>
                                    <p>Gyalaji Battle between <span class="carousel_channel_name">Debilner</span> and <span class="carousel_channel_name">Vorsordner</span></p>
                                    <button class="btn">Set Reminder</button>
                                </div>
                            </div>
                            <div class="owl_battle_time">
                                <span>24:23</span>
                            </div>
                            <div class="owl_battle_users">
                                <span>299</span>
                                <span><i class="fa fa-user"></i></span>
                            </div>
                            <img src="{{asset('assets/images/Rectangle20.png')}}" alt="">
                        </div>

                        <div>
                            <div class="owl_absolute">
                                <div class="carousel_info pl-2">
                                    <h1>Upcomig battle</h1>
                                    <p>Rap Battle between <span class="carousel_channel_name">Milicia</span> and <span class="carousel_channel_name">Policia</span></p>
                                    <button class="btn">Set Reminder</button>
                                </div>
                            </div>
                            <div class="owl_battle_time">
                                <span>24:23</span>
                            </div>
                            <div class="owl_battle_users">
                                <span>77</span>
                                <span><i class="fa fa-user"></i></span>
                            </div>
                            <img src="{{asset('assets/images/Rectangle58.png')}}" alt="">
                        </div>

                        <div>
                            <div class="owl_absolute">
                                <div class="carousel_info pl-2">
                                    <h1>Upcomig battle</h1>
                                    <p>Rap Battle between <span class="carousel_channel_name">Kazyolner</span> and <span class="carousel_channel_name">Baranner</span></p>
                                    <button class="btn">Set Reminder</button>
                                </div>
                            </div>
                            <div class="owl_battle_time">
                                <span>24:23</span>
                            </div>
                            <div class="owl_battle_users">
                                <span>141</span>
                                <span><i class="fa fa-user"></i></span>
                            </div>
                            <img src="https://image.shutterstock.com/image-photo/bright-spring-view-cameo-island-260nw-1048185397.jpg" alt="">
                        </div>

                        <div>
                            <div class="owl_absolute">
                                <div class="carousel_info pl-2">
                                    <h1>Upcomig battle</h1>
                                    <p>Qor Battle between <span class="carousel_channel_name">Gamerner</span> and <span class="carousel_channel_name">Lor</span></p>
                                    <button class="btn">Set Reminder</button>
                                </div>
                            </div>
                            <div class="owl_battle_time">
                                <span>24:23</span>
                            </div>
                            <div class="owl_battle_users">
                                <span>11</span>
                                <span><i class="fa fa-user"></i></span>
                            </div>
                            <img src="{{asset('assets/images/Rectangle20.png')}}" alt="">
                        </div>

                        <div>
                            <div class="owl_absolute">
                                <div class="carousel_info pl-2">
                                    <h1>Upcomig battle</h1>
                                    <p>Dance Battle between <span class="carousel_channel_name">Kakachkut</span> and <span class="carousel_channel_name">Pirat777</span></p>
                                    <button class="btn">Set Reminder</button>
                                </div>
                            </div>
                            <div class="owl_battle_time">
                                <span>24:23</span>
                            </div>
                            <div class="owl_battle_users">
                                <span>1824</span>
                                <span><i class="fa fa-user"></i></span>
                            </div>
                            <img src="{{asset('assets/images/Rectangle20.png')}}" alt="">
                        </div>

                        <div>
                            <div class="owl_absolute">
                                <div class="carousel_info pl-2">
                                    <h1>Upcomig battle</h1>
                                    <p>Klor Battle between <span class="carousel_channel_name">Venesuela</span> and <span class="carousel_channel_name">Hugo Chavez</span></p>
                                    <button class="btn">Set Reminder</button>
                                </div>
                            </div>
                            <div class="owl_battle_time">
                                <span>24:23</span>
                            </div>
                            <div class="owl_battle_users">
                                <span>356</span>
                                <span><i class="fa fa-user"></i></span>
                            </div>
                            <img src="{{asset('assets/images/Rectangle20.png')}}" alt="">
                        </div>

                        <div>
                            <div class="owl_absolute">
                                <div class="carousel_info pl-2">
                                    <h1>Upcomig battle</h1>
                                    <p>Anasun Battle between <span class="carousel_channel_name">Palyot Aerodrom</span> and <span class="carousel_channel_name">Vorsordner</span></p>
                                    <button class="btn">Set Reminder</button>
                                </div>
                            </div>
                            <div class="owl_battle_time">
                                <span>24:23</span>
                            </div>
                            <div class="owl_battle_users">
                                <span>144</span>
                                <span><i class="fa fa-user"></i></span>
                            </div>
                            <img src="{{asset('assets/images/Rectangle57.png')}}" alt="">
                        </div>

                    </div>
                </div>
                <div class="col-12">
                    <div class="border-div"></div>
                </div>




            </div>
        </div>


        <div class="container-fluid">
            <div class="main_background">
                <div class="live_battles_div pt-3 pb-4">
                    <div class="d-flex live_battle_headers col-12 ">
                        <div>
                            <p class="font-weight-bold">Live Battles</p>
                        </div>
                        <div>
                            <a href="#" class="font-weight-bold">Discover More</a>
                        </div>
                    </div>

                    <div class="d-flex flex-wrap battle_cards justify-content-start">
                        <div class="battle_card_item col-lg-4 col-xl-3 col-md-6 mt-4">
                            <div class="battle_relative">
                                <img class="card-img-top" src="{{asset('assets/images/Rectangle11.png')}}" alt="Card image cap">
                                <div class="users_vs">
                                    <div>
                                        <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" alt="">
                                    </div>
                                    <div class="vs_sign">X</div>
                                    <div>
                                        <img src="https://images.unsplash.com/photo-1583452208101-7c1cc44c4132?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" alt="">
                                    </div>
                                </div>

                                <div class="div_watching">
                                    <span>
                                        299 watching
                                    </span>
                                </div>

                                <div class="div_live">
                                    <span>
                                        Live
                                    </span>

                                </div>
                            </div>
                            <div class="pt-2">
                                <p class="battle_name">Live Dance Standoff</p>
                                <p class="battle_users"><span class="carousel_channel_name">Channel Name </span>vs <span class="carousel_channel_name">Channel Name</span></p>
                                <p class="battle_info">live for 24:46 minutes</p>
                            </div>
                            <span class="category_tag">rap</span>
                            <span class="category_tag">music</span>

                        </div>

                        <div class="battle_card_item  col-lg-4 col-xl-3 col-md-6 mt-4">
                            <div class="battle_relative">
                                <img class="card-img-top" src="{{asset('assets/images/Rectangle2220.png')}}" alt="Card image cap">
                                <div class="users_vs">
                                    <div>
                                        <img src="https://img.freepik.com/free-photo/beautiful-girl-stands-near-walll-with-leaves_8353-5378.jpg?size=626&ext=jpg" alt="">
                                    </div>
                                    <div class="vs_sign">X</div>
                                    <div>
                                        <img src="https://images.unsplash.com/photo-1583452208101-7c1cc44c4132?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" alt="">
                                    </div>
                                </div>

                                <div class="div_watching">
                                    <span>
                                        299 watching
                                    </span>
                                </div>

                                <div class="div_live">
                                    <span>
                                        Live
                                    </span>

                                </div>
                            </div>
                            <div class="pt-2">
                                <p class="battle_name">Live Dance Standoff</p>
                                <p class="battle_users"><span class="carousel_channel_name">Channel Name </span>vs <span class="carousel_channel_name">Channel Name</span></p>
                                <p class="battle_info">live for 24:46 minutes</p>
                            </div>
                            <span class="category_tag">rap</span>
                            <span class="category_tag">music</span>

                        </div>

                        <div class="battle_card_item  col-lg-4 col-xl-3 col-md-6 mt-4">
                            <div class="battle_relative">
                                <img class="card-img-top" src="{{asset('assets/images/Rectangle122.png')}}" alt="Card image cap">
                                <div class="users_vs">
                                    <div>
                                        <img src="https://img.freepik.com/free-photo/beautiful-girl-stands-near-walll-with-leaves_8353-5378.jpg?size=626&ext=jpg" alt="">
                                    </div>
                                    <div class="vs_sign">X</div>
                                    <div>
                                        <img src="https://images.unsplash.com/photo-1583452208101-7c1cc44c4132?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" alt="">
                                    </div>
                                </div>

                                <div class="div_watching">
                                    <span>
                                        299 watching
                                    </span>
                                </div>

                                <div class="div_live">
                                    <span>
                                        Live
                                    </span>

                                </div>
                            </div>
                            <div class="pt-2">
                                <p class="battle_name">Live Dance Standoff</p>
                                <p class="battle_users"><span class="carousel_channel_name">Channel Name </span>vs <span class="carousel_channel_name">Channel Name</span></p>
                                <p class="battle_info">live for 24:46 minutes</p>
                            </div>
                            <span class="category_tag">rap</span>
                            <span class="category_tag">music</span>

                        </div>


                        <div class="battle_card_item  col-lg-4 col-xl-3 col-md-6 mt-4">
                            <div class="battle_relative">
                                <img class="card-img-top" src="{{asset('assets/images/Rectangle124.png')}}" alt="Card image cap">
                                <div class="users_vs">
                                    <div>
                                        <img src="https://img.freepik.com/free-photo/beautiful-girl-stands-near-walll-with-leaves_8353-5378.jpg?size=626&ext=jpg" alt="">
                                    </div>
                                    <div class="vs_sign">X</div>
                                    <div>
                                        <img src="https://steezo.com/wp-content/uploads/2012/12/man-in-suit2.jpg" alt="">
                                    </div>
                                </div>

                                <div class="div_watching">
                                    <span>
                                        299 watching
                                    </span>
                                </div>

                                <div class="div_live">
                                    <span>
                                        Live
                                    </span>

                                </div>
                            </div>
                            <div class="pt-2">
                                <p class="battle_name">Live Dance Standoff</p>
                                <p class="battle_users"><span class="carousel_channel_name">Channel Name </span>vs <span class="carousel_channel_name">Channel Name</span></p>
                                <p class="battle_info">live for 24:46 minutes</p>
                            </div>
                            <span class="category_tag">rap</span>
                            <span class="category_tag">music</span>

                        </div>


                        <div class="battle_card_item  col-lg-4 col-xl-3 col-md-6 mt-4">
                            <div class="battle_relative">
                                <img class="card-img-top" src="{{asset('assets/images/Rectangle7126.png')}}" alt="Card image cap">
                                <div class="users_vs">
                                    <div>
                                        <img src="https://img.freepik.com/free-photo/beautiful-girl-stands-near-walll-with-leaves_8353-5378.jpg?size=626&ext=jpg" alt="">
                                    </div>
                                    <div class="vs_sign">X</div>
                                    <div>
                                        <img src="https://images.unsplash.com/photo-1583452208101-7c1cc44c4132?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" alt="">
                                    </div>
                                </div>

                                <div class="div_watching">
                                    <span>
                                        299 watching
                                    </span>
                                </div>

                                <div class="div_live">
                                    <span>
                                        Live
                                    </span>

                                </div>
                            </div>
                            <div class="pt-2">
                                <p class="battle_name">Live Dance Standoff</p>
                                <p class="battle_users"><span class="carousel_channel_name">Channel Name </span>vs <span class="carousel_channel_name">Channel Name</span></p>
                                <p class="battle_info">live for 24:46 minutes</p>
                            </div>
                            <span class="category_tag">rap</span>
                            <span class="category_tag">music</span>

                        </div>


                        <div class="battle_card_item  col-lg-4 col-xl-3 col-md-6 mt-4">
                            <div class="battle_relative">
                                <img class="card-img-top" src="{{asset('assets/images/Rectangle1277.png')}}" alt="Card image cap">
                                <div class="users_vs">
                                    <div>
                                        <img src="https://img.freepik.com/free-photo/beautiful-girl-stands-near-walll-with-leaves_8353-5378.jpg?size=626&ext=jpg" alt="">
                                    </div>
                                    <div class="vs_sign">X</div>
                                    <div>
                                        <img src="https://images.unsplash.com/photo-1583452208101-7c1cc44c4132?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" alt="">
                                    </div>
                                </div>

                                <div class="div_watching">
                                    <span>
                                        299 watching
                                    </span>
                                </div>

                                <div class="div_live">
                                    <span>
                                        Live
                                    </span>

                                </div>
                            </div>
                            <div class="pt-2">
                                <p class="battle_name">Live Dance Standoff</p>
                                <p class="battle_users"><span class="carousel_channel_name">Channel Name </span>vs <span class="carousel_channel_name">Channel Name</span></p>
                                <p class="battle_info">live for 24:46 minutes</p>
                            </div>
                            <span class="category_tag">rap</span>
                            <span class="category_tag">music</span>

                        </div>


                        <div class="battle_card_item  col-lg-4 col-xl-3 col-md-6 mt-4">
                            <div class="battle_relative">
                                <img class="card-img-top" src="{{asset('assets/images/Rectangle8130.png')}}" alt="Card image cap">
                                <div class="users_vs">
                                    <div>
                                        <img src="https://img.freepik.com/free-photo/beautiful-girl-stands-near-walll-with-leaves_8353-5378.jpg?size=626&ext=jpg" alt="">
                                    </div>
                                    <div class="vs_sign">X</div>
                                    <div>
                                        <img src="https://images.unsplash.com/photo-1583452208101-7c1cc44c4132?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" alt="">
                                    </div>
                                </div>

                                <div class="div_watching">
                                    <span>
                                        299 watching
                                    </span>
                                </div>

                                <div class="div_live">
                                    <span>
                                        Live
                                    </span>

                                </div>
                            </div>
                            <div class="pt-2">
                                <p class="battle_name">Live Dance Standoff</p>
                                <p class="battle_users"><span class="carousel_channel_name">Channel Name </span>vs <span class="carousel_channel_name">Channel Name</span></p>
                                <p class="battle_info">live for 24:46 minutes</p>
                            </div>
                            <span class="category_tag">rap</span>
                            <span class="category_tag">music</span>

                        </div>


                        <div class="battle_card_item  col-lg-4 col-xl-3 col-md-6 mt-4">
                            <div class="battle_relative">
                                <img class="card-img-top" src="{{asset('assets/images/Rectangle6132.png')}}" alt="Card image cap">
                                <div class="users_vs">
                                    <div>
                                        <img src="https://img.freepik.com/free-photo/beautiful-girl-stands-near-walll-with-leaves_8353-5378.jpg?size=626&ext=jpg" alt="">
                                    </div>
                                    <div class="vs_sign">X</div>
                                    <div>
                                        <img src="https://images.unsplash.com/photo-1583452208101-7c1cc44c4132?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" alt="">
                                    </div>
                                </div>

                                <div class="div_watching">
                                    <span>
                                        299 watching
                                    </span>
                                </div>

                                <div class="div_live">
                                    <span>
                                        Live
                                    </span>

                                </div>
                            </div>
                            <div class="pt-2">
                                <p class="battle_name">Live Dance Standoff</p>
                                <p class="battle_users"><span class="carousel_channel_name">Channel Name </span>vs <span class="carousel_channel_name">Channel Name</span></p>
                                <p class="battle_info">live for 24:46 minutes</p>
                            </div>
                            <span class="category_tag">rap</span>
                            <span class="category_tag">music</span>
                        </div>
                    </div>


                </div>
                <div class="col-12 mt-4">
                    <div class="border-div "></div>
                </div>
{{----------------------------------------------  Upcomig Battles ---------------------------------------------------------------}}
                <div class="live_battles_div pt-3 pb-4">
                    <div class="d-flex live_battle_headers col-12 ">
                        <div>
                            <p class="font-weight-bold">Upcoming Battles</p>
                        </div>
                        <div>
                            <a href="#" class="font-weight-bold">Discover More</a>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap battle_cards justify-content-start">



                        <div class="battle_card_item  col-lg-4 col-xl-3 col-md-6 mt-4">
                            <div class="battle_relative">
                                <img class="card-img-top" src="{{asset('assets/images/Rectangle142.png')}}" alt="Card image cap">
                                <div class="full_cover">
                                    <div class="upcoming_relative">
                                        <div class="upcoming_battle_users">
                                            <div>
                                                <img src="https://img.freepik.com/free-photo/beautiful-girl-stands-near-walll-with-leaves_8353-5378.jpg?size=626&ext=jpg" alt="">
                                            </div>
                                            <div class="vs_sign">X</div>
                                            <div>
                                                <img src="https://images.unsplash.com/photo-1583452208101-7c1cc44c4132?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="upcoming_card_footer">
                                    Get Notified
                                    <div>
                                        <div class="div_watching">
                                        <span>
                                            299 watching
                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-2">
                                <p class="battle_name">Live Dance Standoff</p>
                                <p class="battle_users"><span class="carousel_channel_name">Channel Name </span>vs <span class="carousel_channel_name">Channel Name</span></p>
                                <p class="battle_info">Will be live in 2 hours</p>
                            </div>
                            <span class="category_tag">rap</span>
                            <span class="category_tag">music</span>
                        </div>




                        <div class="battle_card_item  col-lg-4 col-xl-3 col-md-6 mt-4">
                            <div class="battle_relative">
                                <img class="card-img-top" src="{{asset('assets/images/Rectangle136.png')}}" alt="Card image cap">
                                <div class="full_cover">
                                    <div class="upcoming_relative">
                                        <div class="upcoming_battle_users">
                                            <div>
                                                <img src="https://img.freepik.com/free-photo/beautiful-girl-stands-near-walll-with-leaves_8353-5378.jpg?size=626&ext=jpg" alt="">
                                            </div>
                                            <div class="vs_sign">X</div>
                                            <div>
                                                <img src="https://images.unsplash.com/photo-1583452208101-7c1cc44c4132?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="upcoming_card_footer">
                                    Get Notified
                                    <div>
                                        <div class="div_watching">
                                        <span>
                                            299 watching
                                        </span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="pt-2">
                                <p class="battle_name">Live Dance Standoff</p>
                                <p class="battle_users"><span class="carousel_channel_name">Channel Name </span>vs <span class="carousel_channel_name">Channel Name</span></p>
                                <p class="battle_info">Will be live in 2 hours</p>
                            </div>
                            <span class="category_tag">rap</span>
                            <span class="category_tag">music</span>
                        </div>




                        <div class="battle_card_item  col-lg-4 col-xl-3 col-md-6 mt-4">
                            <div class="battle_relative">
                                <img class="card-img-top" src="{{asset('assets/images/Rectangle139.png')}}" alt="Card image cap">
                                <div class="full_cover">
                                    <div class="upcoming_relative">
                                        <div class="upcoming_battle_users">
                                            <div>
                                                <img src="https://img.freepik.com/free-photo/beautiful-girl-stands-near-walll-with-leaves_8353-5378.jpg?size=626&ext=jpg" alt="">
                                            </div>
                                            <div class="vs_sign">X</div>
                                            <div>
                                                <img src="https://images.unsplash.com/photo-1583452208101-7c1cc44c4132?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="upcoming_card_footer">
                                    Get Notified
                                    <div>
                                        <div class="div_watching">
                                        <span>
                                            299 watching
                                        </span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="pt-2">
                                <p class="battle_name">Live Dance Standoff</p>
                                <p class="battle_users"><span class="carousel_channel_name">Channel Name </span>vs <span class="carousel_channel_name">Channel Name</span></p>
                                <p class="battle_info">Will be live in 2 hours</p>
                            </div>
                            <span class="category_tag">rap</span>
                            <span class="category_tag">music</span>
                        </div>





                        <div class="battle_card_item  col-lg-4 col-xl-3 col-md-6 mt-4">
                            <div class="battle_relative">
                                <img class="card-img-top" src="{{asset('assets/images/Rectangle145.png')}}" alt="Card image cap">
                                <div class="full_cover">
                                    <div class="upcoming_relative">
                                        <div class="upcoming_battle_users">
                                            <div>
                                                <img src="https://img.freepik.com/free-photo/beautiful-girl-stands-near-walll-with-leaves_8353-5378.jpg?size=626&ext=jpg" alt="">
                                            </div>
                                            <div class="vs_sign">X</div>
                                            <div>
                                                <img src="https://images.unsplash.com/photo-1583452208101-7c1cc44c4132?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="upcoming_card_footer">
                                    Get Notified
                                    <div>
                                        <div class="div_watching">
                                        <span>
                                            299 watching
                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-2">
                                <p class="battle_name">Live Dance Standoff</p>
                                <p class="battle_users"><span class="carousel_channel_name">Channel Name </span>vs <span class="carousel_channel_name">Channel Name</span></p>
                                <p class="battle_info">Will be live in 2 hours</p>
                            </div>
                            <span class="category_tag">rap</span>
                            <span class="category_tag">music</span>
                        </div>





                        <div class="battle_card_item  col-lg-4 col-xl-3 col-md-6 mt-4">
                            <div class="battle_relative">
                                <img class="card-img-top" src="{{asset('assets/images/Rectangle148.png')}}" alt="Card image cap">
                                <div class="full_cover">
                                    <div class="upcoming_relative">
                                        <div class="upcoming_battle_users">
                                            <div>
                                                <img src="https://img.freepik.com/free-photo/beautiful-girl-stands-near-walll-with-leaves_8353-5378.jpg?size=626&ext=jpg" alt="">
                                            </div>
                                            <div class="vs_sign">X</div>
                                            <div>
                                                <img src="https://images.unsplash.com/photo-1583452208101-7c1cc44c4132?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="upcoming_card_footer">
                                    Get Notified
                                    <div>
                                        <div class="div_watching">
                                        <span>
                                            299 watching
                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-2">
                                <p class="battle_name">Live Dance Standoff</p>
                                <p class="battle_users"><span class="carousel_channel_name">Channel Name </span>vs <span class="carousel_channel_name">Channel Name</span></p>
                                <p class="battle_info">Will be live in 2 hours</p>
                            </div>
                            <span class="category_tag">rap</span>
                            <span class="category_tag">music</span>
                        </div>





                        <div class="battle_card_item  col-lg-4 col-xl-3 col-md-6 mt-4">
                            <div class="battle_relative">
                                <img class="card-img-top" src="{{asset('assets/images/Rectangle149.png')}}" alt="Card image cap">
                                <div class="full_cover">
                                    <div class="upcoming_relative">
                                        <div class="upcoming_battle_users">
                                            <div>
                                                <img src="https://img.freepik.com/free-photo/beautiful-girl-stands-near-walll-with-leaves_8353-5378.jpg?size=626&ext=jpg" alt="">
                                            </div>
                                            <div class="vs_sign">X</div>
                                            <div>
                                                <img src="https://images.unsplash.com/photo-1583452208101-7c1cc44c4132?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="upcoming_card_footer">
                                    Get Notified
                                    <div>
                                        <div class="div_watching">
                                        <span>
                                            299 watching
                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-2">
                                <p class="battle_name">Live Dance Standoff</p>
                                <p class="battle_users"><span class="carousel_channel_name">Channel Name </span>vs <span class="carousel_channel_name">Channel Name</span></p>
                                <p class="battle_info">Will be live in 2 hours</p>
                            </div>
                            <span class="category_tag">rap</span>
                            <span class="category_tag">music</span>
                        </div>




                        <div class="battle_card_item  col-lg-4 col-xl-3 col-md-6 mt-4">
                            <div class="battle_relative">
                                <img class="card-img-top" src="{{asset('assets/images/Rectangle150.png')}}" alt="Card image cap">
                                <div class="full_cover">
                                    <div class="upcoming_relative">
                                        <div class="upcoming_battle_users">
                                            <div>
                                                <img src="https://img.freepik.com/free-photo/beautiful-girl-stands-near-walll-with-leaves_8353-5378.jpg?size=626&ext=jpg" alt="">
                                            </div>
                                            <div class="vs_sign">X</div>
                                            <div>
                                                <img src="https://images.unsplash.com/photo-1583452208101-7c1cc44c4132?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="upcoming_card_footer">
                                    Get Notified
                                    <div>
                                        <div class="div_watching">
                                        <span>
                                            299 watching
                                        </span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="pt-2">
                                <p class="battle_name">Live Dance Standoff</p>
                                <p class="battle_users"><span class="carousel_channel_name">Channel Name </span>vs <span class="carousel_channel_name">Channel Name</span></p>
                                <p class="battle_info">Will be live in 2 hours</p>
                            </div>
                            <span class="category_tag">rap</span>
                            <span class="category_tag">music</span>
                        </div>





                        <div class="battle_card_item  col-lg-4 col-xl-3 col-md-6 mt-4">
                            <div class="battle_relative">
                                <img class="card-img-top" src="{{asset('assets/images/Rectangle156.png')}}" alt="Card image cap">
                                <div class="full_cover">
                                    <div class="upcoming_relative">
                                        <div class="upcoming_battle_users">
                                            <div>
                                                <img src="https://img.freepik.com/free-photo/beautiful-girl-stands-near-walll-with-leaves_8353-5378.jpg?size=626&ext=jpg" alt="">
                                            </div>
                                            <div class="vs_sign">X</div>
                                            <div>
                                                <img src="https://images.unsplash.com/photo-1583452208101-7c1cc44c4132?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="upcoming_card_footer">
                                    Get Notified
                                    <div>
                                        <div class="div_watching">
                                        <span>
                                            299 watching
                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-2">
                                <p class="battle_name">Live Dance Standoff</p>
                                <p class="battle_users"><span class="carousel_channel_name">Channel Name </span>vs <span class="carousel_channel_name">Channel Name</span></p>
                                <p class="battle_info">Will be live in 2 hours</p>
                            </div>
                            <span class="category_tag">rap</span>
                            <span class="category_tag">music</span>
                        </div>
                    </div>
                </div>

                <div class="col-12 mt-4">
                    <div class="border-div "></div>
                </div>

{{---------------------------------------------------------  Battles you might like -----------------------------------------------------------}}

                <div class="live_battles_div pt-3 pb-4">
                    <div class="d-flex live_battle_headers col-12 ">
                        <div>
                            <p class="font-weight-bold">Battles you might like</p>
                        </div>
                        <div>
                            <a href="#" class="font-weight-bold">Discover More</a>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap battle_cards justify-content-start">

                        <div class="battle_card_item  col-lg-4 col-xl-3 col-md-6 mt-4">
                            <div class="battle_relative">
                                <img class="card-img-top" src="{{asset('assets/images/Rectangle156.png')}}" alt="Card image cap">
                                <div class="full_cover">
                                    <div class="upcoming_relative">
                                        <div class="upcoming_battle_users">
                                            <div>
                                                <img src="https://img.freepik.com/free-photo/beautiful-girl-stands-near-walll-with-leaves_8353-5378.jpg?size=626&ext=jpg" alt="">
                                            </div>
                                            <div class="vs_sign">X</div>
                                            <div>
                                                <img src="https://images.unsplash.com/photo-1583452208101-7c1cc44c4132?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="upcoming_card_footer">
                                    Get Notified
                                    <div>
                                        <div class="div_watching">
                                        <span>
                                            299 watching
                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-2">
                                <p class="battle_name">Live Dance Standoff</p>
                                <p class="battle_users"><span class="carousel_channel_name">Channel Name </span>vs <span class="carousel_channel_name">Channel Name</span></p>
                                <p class="battle_info">Will be live in 2 hours</p>
                            </div>
                            <span class="category_tag">rap</span>
                            <span class="category_tag">music</span>
                        </div>






                        <div class="battle_card_item  col-lg-4 col-xl-3 col-md-6 mt-4">
                            <div class="battle_relative">
                                <img class="card-img-top" src="{{asset('assets/images/Rectangle149.png')}}" alt="Card image cap">
                                <div class="full_cover">
                                    <div class="upcoming_relative">
                                        <div class="upcoming_battle_users">
                                            <div>
                                                <img src="https://img.freepik.com/free-photo/beautiful-girl-stands-near-walll-with-leaves_8353-5378.jpg?size=626&ext=jpg" alt="">
                                            </div>
                                            <div class="vs_sign">X</div>
                                            <div>
                                                <img src="https://images.unsplash.com/photo-1583452208101-7c1cc44c4132?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="upcoming_card_footer">
                                    Get Notified
                                    <div>
                                        <div class="div_watching">
                                        <span>
                                            299 watching
                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-2">
                                <p class="battle_name">Live Dance Standoff</p>
                                <p class="battle_users"><span class="carousel_channel_name">Channel Name </span>vs <span class="carousel_channel_name">Channel Name</span></p>
                                <p class="battle_info">Will be live in 2 hours</p>
                            </div>
                            <span class="category_tag">rap</span>
                            <span class="category_tag">music</span>
                        </div>



                        <div class="battle_card_item  col-lg-4 col-xl-3 col-md-6 mt-4">
                            <div class="battle_relative">
                                <img class="card-img-top" src="{{asset('assets/images/Rectangle142.png')}}" alt="Card image cap">
                                <div class="full_cover">
                                    <div class="upcoming_relative">
                                        <div class="upcoming_battle_users">
                                            <div>
                                                <img src="https://img.freepik.com/free-photo/beautiful-girl-stands-near-walll-with-leaves_8353-5378.jpg?size=626&ext=jpg" alt="">
                                            </div>
                                            <div class="vs_sign">X</div>
                                            <div>
                                                <img src="https://images.unsplash.com/photo-1583452208101-7c1cc44c4132?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="upcoming_card_footer">
                                    Get Notified
                                    <div>
                                        <div class="div_watching">
                                        <span>
                                            299 watching
                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-2">
                                <p class="battle_name">Live Dance Standoff</p>
                                <p class="battle_users"><span class="carousel_channel_name">Channel Name </span>vs <span class="carousel_channel_name">Channel Name</span></p>
                                <p class="battle_info">Will be live in 2 hours</p>
                            </div>
                            <span class="category_tag">rap</span>
                            <span class="category_tag">music</span>
                        </div>



                        <div class="battle_card_item  col-lg-4 col-xl-3 col-md-6 mt-4">
                            <div class="battle_relative">
                                <img class="card-img-top" src="{{asset('assets/images/Rectangle148.png')}}" alt="Card image cap">
                                <div class="full_cover">
                                    <div class="upcoming_relative">
                                        <div class="upcoming_battle_users">
                                            <div>
                                                <img src="https://img.freepik.com/free-photo/beautiful-girl-stands-near-walll-with-leaves_8353-5378.jpg?size=626&ext=jpg" alt="">
                                            </div>
                                            <div class="vs_sign">X</div>
                                            <div>
                                                <img src="https://images.unsplash.com/photo-1583452208101-7c1cc44c4132?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="upcoming_card_footer">
                                    Get Notified
                                    <div>
                                        <div class="div_watching">
                                        <span>
                                            299 watching
                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-2">
                                <p class="battle_name">Live Dance Standoff</p>
                                <p class="battle_users"><span class="carousel_channel_name">Channel Name </span>vs <span class="carousel_channel_name">Channel Name</span></p>
                                <p class="battle_info">Will be live in 2 hours</p>
                            </div>
                            <span class="category_tag">rap</span>
                            <span class="category_tag">music</span>
                        </div>



                        <div class="battle_card_item  col-lg-4 col-xl-3 col-md-6 mt-4">
                            <div class="battle_relative">
                                <img class="card-img-top" src="{{asset('assets/images/Rectangle136.png')}}" alt="Card image cap">
                                <div class="full_cover">
                                    <div class="upcoming_relative">
                                        <div class="upcoming_battle_users">
                                            <div>
                                                <img src="https://img.freepik.com/free-photo/beautiful-girl-stands-near-walll-with-leaves_8353-5378.jpg?size=626&ext=jpg" alt="">
                                            </div>
                                            <div class="vs_sign">X</div>
                                            <div>
                                                <img src="https://images.unsplash.com/photo-1583452208101-7c1cc44c4132?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="upcoming_card_footer">
                                    Get Notified
                                    <div>
                                        <div class="div_watching">
                                        <span>
                                            299 watching
                                        </span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="pt-2">
                                <p class="battle_name">Live Dance Standoff</p>
                                <p class="battle_users"><span class="carousel_channel_name">Channel Name </span>vs <span class="carousel_channel_name">Channel Name</span></p>
                                <p class="battle_info">Will be live in 2 hours</p>
                            </div>
                            <span class="category_tag">rap</span>
                            <span class="category_tag">music</span>
                        </div>



                        <div class="battle_card_item  col-lg-4 col-xl-3 col-md-6 mt-4">
                            <div class="battle_relative">
                                <img class="card-img-top" src="{{asset('assets/images/Rectangle148.png')}}" alt="Card image cap">
                                <div class="full_cover">
                                    <div class="upcoming_relative">
                                        <div class="upcoming_battle_users">
                                            <div>
                                                <img src="https://img.freepik.com/free-photo/beautiful-girl-stands-near-walll-with-leaves_8353-5378.jpg?size=626&ext=jpg" alt="">
                                            </div>
                                            <div class="vs_sign">X</div>
                                            <div>
                                                <img src="https://images.unsplash.com/photo-1583452208101-7c1cc44c4132?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="upcoming_card_footer">
                                    Get Notified
                                    <div>
                                        <div class="div_watching">
                                        <span>
                                            299 watching
                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-2">
                                <p class="battle_name">Live Dance Standoff</p>
                                <p class="battle_users"><span class="carousel_channel_name">Channel Name </span>vs <span class="carousel_channel_name">Channel Name</span></p>
                                <p class="battle_info">Will be live in 2 hours</p>
                            </div>
                            <span class="category_tag">rap</span>
                            <span class="category_tag">music</span>
                        </div>


                        <div class="battle_card_item  col-lg-4 col-xl-3 col-md-6 mt-4">
                            <div class="battle_relative">
                                <img class="card-img-top" src="{{asset('assets/images/Rectangle139.png')}}" alt="Card image cap">
                                <div class="full_cover">
                                    <div class="upcoming_relative">
                                        <div class="upcoming_battle_users">
                                            <div>
                                                <img src="https://img.freepik.com/free-photo/beautiful-girl-stands-near-walll-with-leaves_8353-5378.jpg?size=626&ext=jpg" alt="">
                                            </div>
                                            <div class="vs_sign">X</div>
                                            <div>
                                                <img src="https://images.unsplash.com/photo-1583452208101-7c1cc44c4132?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="upcoming_card_footer">
                                    Get Notified
                                    <div>
                                        <div class="div_watching">
                                        <span>
                                            299 watching
                                        </span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="pt-2">
                                <p class="battle_name">Live Dance Standoff</p>
                                <p class="battle_users"><span class="carousel_channel_name">Channel Name </span>vs <span class="carousel_channel_name">Channel Name</span></p>
                                <p class="battle_info">Will be live in 2 hours</p>
                            </div>
                            <span class="category_tag">rap</span>
                            <span class="category_tag">music</span>
                        </div>


                        <div class="battle_card_item  col-lg-4 col-xl-3 col-md-6 mt-4">
                            <div class="battle_relative">
                                <img class="card-img-top" src="{{asset('assets/images/Rectangle150.png')}}" alt="Card image cap">
                                <div class="full_cover">
                                    <div class="upcoming_relative">
                                        <div class="upcoming_battle_users">
                                            <div>
                                                <img src="https://img.freepik.com/free-photo/beautiful-girl-stands-near-walll-with-leaves_8353-5378.jpg?size=626&ext=jpg" alt="">
                                            </div>
                                            <div class="vs_sign">X</div>
                                            <div>
                                                <img src="https://images.unsplash.com/photo-1583452208101-7c1cc44c4132?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="upcoming_card_footer">
                                    Get Notified
                                    <div>
                                        <div class="div_watching">
                                        <span>
                                            299 watching
                                        </span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="pt-2">
                                <p class="battle_name">Live Dance Standoff</p>
                                <p class="battle_users"><span class="carousel_channel_name">Channel Name </span>vs <span class="carousel_channel_name">Channel Name</span></p>
                                <p class="battle_info">Will be live in 2 hours</p>
                            </div>
                            <span class="category_tag">rap</span>
                            <span class="category_tag">music</span>
                        </div>


                    </div>
                </div>

                <div class="col-12 mt-4">
                    <div class="border-div "></div>
                </div>

                {{---------------------------------------------------------  Topics you might like -----------------------------------------------------------}}

                <div class="live_battles_div pt-4 pb-4">
                    <div class="d-flex live_battle_headers col-12 ">
                        <div>
                            <p class="font-weight-bold">Topics You Might Like</p>
                        </div>
                        <div>
                        </div>
                    </div>

                    <div class="d-flex flex-wrap topic_cards justify-content-between mt-3 mb-5 col-12">
                        <div class="col">
                            <img src="{{asset('assets/images/Rectangle 184.png')}}" alt="">
                            <p class="pt-1">Dance Battles</p>
                        </div>
                        <div class="col">
                            <img src="{{asset('assets/images/Rectangle 185.png')}}" alt="">
                            <p class="pt-1">Zzveli Battles</p>
                        </div>
                        <div class="col">
                            <img src="{{asset('assets/images/Rectangle 186.png')}}" alt="">
                            <p class="pt-1">Gyalaji Battles</p>
                        </div>
                        <div class="col">
                            <img src="{{asset('assets/images/Rectangle 187.png')}}" alt="">
                            <p class="pt-1">Esiminch Battles</p>
                        </div>
                        <div class="col">
                            <img src="{{asset('assets/images/Rectangle 188.png')}}" alt="">
                            <p class="pt-1">Tufta Battles</p>
                        </div>
                        <div class="col">
                            <img src="{{asset('assets/images/Rectangle 189.png')}}" alt="">
                            <p class="pt-1">Esheri Battles</p>
                        </div>
                        <div class="col">
                            <img src="{{asset('assets/images/Rectangle 190.png')}}" alt="">
                            <p class="pt-1">Vazelu Battles</p>
                        </div>
                        <div class="col">
                            <img src="{{asset('assets/images/Rectangle 191.png')}}" alt="">
                            <p class="pt-1">Qorelu Battles</p>
                        </div>
                        <div class="col">
                            <div class="all_topic_relative">
                                <img src="{{asset('assets/images/Rectangle 192.png')}}" alt="">
                                <div class="topic_absolute">
                                    All Topics
                                </div>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="col-12 mt-4 pt-4">
                    <div class="border-div "></div>
                </div>


                <div class="footerWrap mt-5">
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
    $(document).ready(function() {
        var $owl = $('.owl-carousel');

        $owl.children().each( function( index ) {
            $(this).attr( 'data-position', index ); // NB: .attr() instead of .data()
        });

        $owl.owlCarousel({
            center: true,
            loop: true,
            autoplay:true,
            autoplayTimeout:8000,
            autoplaySpeed: 1000,
            autoplayHoverPause:true,
            responsive : {
                // breakpoint from 0 up
                0 : {
                    items: 1,
                },
                // breakpoint from 480 up
                480 : {
                    items: 2,
                },
                // breakpoint from 768 up
                768 : {
                    items: 3,
                }
            }
        });

        $(document).on('click', '.owl-item>div', function() {
            // see https://owlcarousel2.github.io/OwlCarousel2/docs/api-events.html#to-owl-carousel
            var $speed = 300;  // in ms
            $owl.trigger('to.owl.carousel', [$(this).data( 'position' ), $speed] );
        });

    });
</script>
</body>

</html>
