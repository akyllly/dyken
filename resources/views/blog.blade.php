<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ URL::asset('css/blogcss.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Josefin Sans' rel='stylesheet'>
</head>

<body>
    <header>
        <div class="container">
            <ul class="topbar">
                <li><a href=""><i class="fa fa-globe" style='font-size:20px'></i> {{ __("EN")}}</a></li>
                <li><a href=""><i class="fa fa-fw fa-user" style='font-size:20px'></i> {{ __("My account")}}</a></li>
                <li><a href=""><i class='fa fa-shopping-cart' style='font-size:20px'></i> {{ __("My cart")}}</a></li>
            </ul>
        </div>
    </header>
    <div class="menu">
        <div class="container">
            <nav class="menu_nav">
                <h1 class="medigo"><a href="http://localhost/dyken/public/">DYKEN</a></h1>
                <ul class="nav_list">
                    <li><a href="http://localhost/dyken/public/">{{ __("Home")}}</a></li>
                    <li>
                        <div class="dropdown">
                            <a class="dropbtn" href="">{{ __("Products")}}
                                <i class="fa fa-caret-down"></i></a>
                            <div class="dropdown-content">
                                <a href="http://localhost/dyken/public/mice">{{ __("Mice")}}</a>
                                <hr>
                                <a href="http://localhost/dyken/public/keyboard">{{ __("Keyboards")}}</a>
                                <hr>
                                <a href="http://localhost/dyken/public/headsets">{{ __("Headsets")}}</a>
                            </div>
                        </div>
                    </li>
                    <li><a class="dropbtn" href="http://localhost/dyken/public/blog">{{ __("Blog")}}</li>
                    <li><a href="http://localhost/dyken/public/contact">{{ __("Contact")}}</a></li>
                    <li><a href="http://localhost/dyken/public/about">{{ __("About")}}</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="overview">
        <div class="container">
            <div class="overview_set">
                <div class="overview_title">
                    <h2>Blog</h2>
                </div>
                <div class="overview_menu">Home/Blog</div>
            </div>
        </div>
    </div>
    <div class="blog">
        <div class="container">
            <div class="blog_main">
                <div class="recent">
                    <div class="recent_post">
                        <div class="recent_img">
                            <img src="{{ URL::asset('img/b1.jpg') }}" alt="">
                        </div>
                        <div class="recent_content">
                            <p class="recent_date">21 Feburary 2020 / Candy Sharp</p>
                            <h3><a href="post3.html">Top 10 Web Design Trends in 2020</a></h3>
                            <p class="recent_summary">Web Design Trends of 2020</p>
                            <p class="recent_text">Here are Top 10 Web Design Trends that you will see in 2020. We have picked the most popular designs from Dribbble and we predict & assuming these will become trends in the web design industry. <a href="post3.html">Continue Reading...</a></p>
                            <hr>
                        </div>
                    </div>
                    <div class="recent_post">
                        <div class="recent_img">
                            <img src="/blog/blog2.jpg" alt="">
                        </div>
                        <div class="recent_content">
                            <p class="recent_date">15 March 2020 / Candy Sharp</p>
                            <h3><a href="post2.html">Web Design Tutorial - 5 Important Tips!</a></h3>
                            <p class="recent_summary">Every programmer should know! Web Design Tutorial for newbies</p>
                            <p class="recent_text">Today we are going to learn the basics of creating a good design. This can apply from web design to graphic design in general.
                                I put together my top 5 tips and tricks to create a good design from scratch. <a href="post2.html">Continue Reading...</a></p>
                            <hr>
                        </div>
                    </div>
                    <div class="recent_post">
                        <div class="recent_img">
                            <img src="/blog/blog1.jpg" alt="">
                        </div>
                        <div class="recent_content">
                            <p class="recent_date">12 April 2020 / Candy Sharp</p>
                            <h3><a href="post1.html">Smashing Podcast Episode 30 With Chris Murphy: What Is Product Design?</a></h3>
                            <p class="recent_summary">In this episode, we’re talking about Product Design. What does it mean to be a product owner, and how can you learn the skills required? Drew McLellan talks to expert Chris Murphy to find out.</a></p>
                            <p class="recent_text">In this episode, we’re talking about Product Design. What does it mean to be a product owner, and how can you learn the skills required? I spoke to expert Chris Murphy to find out. <a href="post1.html">Continue Reading...</a></p>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="sidebar">
                    <div class="sidebar_main">
                        <h5>Recent posts</h5>
                        <div class="sidebar_post">
                            <div class="sidebar_img">
                                <img src="blog/b1.jpg" alt="">
                            </div>
                            <div class="sidebar_content">
                                <p>12 April 2020</p>
                                <h4> <a href="post1.html">Smashing Podcast Episode 30 With Chris Murphy: What Is Product Design?</a> </h4>
                            </div>
                        </div>
                        <div class="sidebar_post">
                            <div class="sidebar_img">
                                <img src="blog/b2.jpg" alt="">
                            </div>
                            <div class="sidebar_content">
                                <p>15 March 2020</p>
                                <h4><a href="post2.html">Web Design Tutorial - 5 Important Tips!</a> </h4>
                            </div>
                        </div>
                        <div class="sidebar_post">
                            <div class="sidebar_img">
                                <img src="blog/b3.jpg" alt="">
                            </div>
                            <div class="sidebar_content">
                                <p>21 Feburary 2020</p>
                                <h4><a href="post3.html">Top 10 Web Design Trends in 2020</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="container">
            <nav class="end">
                <ul class="nav_footer">
                    <li><a href="http://localhost/dyken/public/" class="menu_link">{{ __("Home")}}</a></li>
                    <li><a href="http://localhost/dyken/public/" class="menu_link">{{ __("Products")}}</a></li>
                    <li><a href="http://localhost/dyken/public/blog" class="menu_link">{{ __("Blog")}}</a></li>
                    <li><a href="http://localhost/dyken/public/contact" class="menu_link">{{ __("Contact")}}</a></li>
                    <li><a href="http://localhost/dyken/public/about" class="menu_link">{{ __("About")}}</a></li>
                </ul>
            </nav>
            <div class="copy">&copy; COPYRIGHT &mdash; ОО "QOSTANAY ALUMNI"</div>
        </div>
    </footer>
</body>

</html>