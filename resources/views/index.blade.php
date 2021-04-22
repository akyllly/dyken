

<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medigo</title>
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">

    <!-- <link rel="stylesheet/less" type="text/css" href="/resources/css/style.css"/> -->
    <script src="jquery-3.5.1.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/less" ></script>

    <link rel="stylesheet" type="text/css" href="styles1.css"/>
    <link href='https://fonts.googleapis.com/css?family=Josefin Sans' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'> 
</head>
<body>
    <header>
        <div class="container">
            <ul class="topbar">
                <li><a href="http://localhost/dyken/public/ru"><i class="fa fa-globe" style='font-size:20px'></i> {{ __("EN")}}</a></li>
                <li><a href="http://localhost/dyken/public/home"><i class="fa fa-fw fa-user" style='font-size:20px'></i> {{ __("My account")}}</a></li>
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
                    <li><div class="dropdown">
                        <a class="dropbtn" href="">{{ __("Products")}} 
                            <i class="fa fa-caret-down"></i></a>
                        <div class="dropdown-content">
                            <a href="http://localhost/dyken/public/mice">{{ __("Mice")}}</a>
                            <hr>
                            <a href="http://localhost/dyken/public/keyboard">{{ __("Keyboards")}}</a>
                        </div>
                        </div> </li>
                    <li><a class="dropbtn" href="http://localhost/dyken/public/blog">{{ __("Blog")}}</li>
                    <li><a href="http://localhost/dyken/public/contact">{{ __("Contact")}}</a></li>
                    <li><a href="http://localhost/dyken/public/about">{{ __("About")}}</a></li>
                </ul>      
            </nav>
        </div>
    </div>
    <div id="promo">
        <div class="container">
            <div class="promo_div">
            <h1 id="promo_title">{{ __("Choose the Optimal devices for Your Life")}}</h1>
            <p class="promo_subtitle">{{ __("We asked six entrepreneurs with drastically different office strategies for their advice on choosing a devices")}}</p>
            </div>
        </div>
    </div>
    <div class="rowbar">
        <div class="container">
            <b id='msg'>{{ __("Need some help?")}}</b> {{ __("Go to contact page")}}
            <button class="btnvisit" onclick="getMessage()"><b>{{ __("Visit Contact page")}} →</b></button>
        </div>
    </div>
    <script>
        function getMessage(){
            $.ajax({
                type:'POST',
                url:'getmsg',
                data:'_token = <?php echo csrf_token() ?>',

                success:function(data){
                    $("#msg").html(data.msg);
                }
            });
        }
    </script>
    <hr>
    <div class="card">
        <div class="container">
            <div class="card_wrap">
                <div class="solution_card">
                    <img class="card_img" src="https://shop.kz/images/icons/benefits-support.png" alt="">
                    <div class="card_tag">{{ __("Support 7 days")}} <br> {{ __("a week")}}</div>
                </div>
                <div class="solution_card">
                    <img class="card_img" src="https://shop.kz/images/icons/benefits-bonus.png" alt="">
                    <div class="card_tag">{{ __("Cumulative")}} <br>{{ __("bonus system")}}</div>
                </div>
                <div class="solution_card">
                    <img class="card_img" src="https://shop.kz/images/icons/benefits-payment.png" alt="">
                    <div class="card_tag">{{ __("Payment in cash")}} <br>{{ __("upon receipt")}}</div>
                </div>
                <div class="solution_card">
                    <img class="card_img" src="https://shop.kz/images/icons/benefits-delivery.png" alt="">
                    <div class="card_tag">{{ __("Delivery")}}<br> {{ __("throughout Kazakhstan")}}</div>
                </div>
                <div class="solution_card">
                    <img class="card_img" src="https://shop.kz/images/icons/benefits-warranty.png " alt="">
                    <div class="card_tag">{{ __("Guarantee of the best")}} <br>{{ __("qualities")}}</div>
                </div>
                
            </div>
        </div>
    </div>
    <div class="portfolio">
        <div class="container">
            <h1 class="portfolio_title">{{ __("Our Lovely Products")}}</h1>
            <div class="portfolio_subtitle">{{ __("Everything you need to be a professional.")}}</div>
        </div>
        <div class="portfolio_img">
            <a href="" target="_blank"><img class="portfolio_vitrina"  src="https://resource.logitechg.com/e_trim/w_490,h_310,c_limit/c_lpad,ar_413:310,q_auto:best,f_auto,dpr_auto/content/dam/products/gaming/mice/g403-prodigy-wired-gaming-mouse/910-004825/g403-prodigy-gaming-mouse15.png?v=1"></a>
            <a href="" target="_blank"><img class="portfolio_vitrina"  src="https://resource.logitechg.com/e_trim/w_490,h_310,c_limit/c_lpad,ar_413:310,q_auto:best,f_auto,dpr_auto/content/dam/gaming/en/products/g903/g903-gallery-1.png?v=1" alt=""></a>
            <a href="" target="_blank"><img class="portfolio_vitrina"  src="https://resource.logitechg.com/e_trim/w_490,h_310,c_limit/c_lpad,ar_413:310,q_auto:best,f_auto,dpr_auto/content/dam/gaming/en/products/g305/g305-gallery-1.png?v=1" alt=""></a>
            <a href="" target="_blank"><img class="portfolio_vitrina"  src="https://resource.logitechg.com/e_trim/w_490,h_310,c_limit/c_lpad,ar_413:310,q_auto:best,f_auto,dpr_auto/content/dam/gaming/en/products/g703/g703-gallery-1.png?v=1" alt=""></a>
        </div>
    </div>
    <div class="quotation">
        <div class="container">
            <div id="quotation_title">{{__("-Thomas Teddy-Design Writer")}}</div>
            <p id="quotation_text">{{("I love the logo. Particularly how the mark can stand on its own. Nice work! It feels tall and proud and powerful.")}}</p>
            <div class="radio">
                <input id = "q1" class="form-check-input"type="radio" name="radiobutton" value="A" onClick="quot()">
                <input id = "q2" class="form-check-input"type="radio" name="radiobutton" value="A" checked onclick="quot()">
                <input id = "q3" class="form-check-input"type="radio" name="radiobutton" value="A" onClick="quot()">
            </div>
        </div>
        <script>
            function quot(){
            if (document.getElementById("q1").checked){
                document.getElementById("quotation_title").innerHTML = "-Eugene Wills-Customer";
                document.getElementById("quotation_text").innerHTML = "This site is incredible. I love quality and design  of their works.";
            } else if (document.getElementById("q3").checked){
                document.getElementById("quotation_title").innerHTML = "-Torin Marsden-Entrepreneur";
                document.getElementById("quotation_text").innerHTML = "Website helped me a lot. I am using it not for first time. Great staff. Creative and cool.";
            }
            else if (document.getElementById("q2").checked){
                document.getElementById("quotation_title").innerHTML = "-Thomas Teddy-Design Writer";
                document.getElementById("quotation_text").innerHTML = "I love the logo. Particularly how the mark can stand on its own. Nice work! It feels tall and proud and powerful.";
            }
            }
        </script>
    </div>
    <div class="staff">
        <div class="container">
            <div class="staff_title">{{ __("MEET OUR LEADERSHIP TEAM")}}</div>
            <div class="staff_wrap">
                <div class="staff_card">
                    <img class="staff_img" src="https://resource.logitech.com/w_1800,h_1800,c_limit,q_auto,f_auto,dpr_1.0/content/dam/logitech/about/about-bracken-darrell.png?v=1" alt="">
                    <div class="staff_tag" id="s1">{{ __("Logan Henderson")}}</div>
                    <div class="staff_text">{{ __("Chairperson")}}</div>
                </div>
                <div class="staff_card">
                    <img class="staff_img" src="https://resource.logitech.com/w_1800,h_1800,c_limit,q_auto,f_auto,dpr_1.0/content/dam/logitech/about/about-wendy-becker.png?v=1" alt="">
                    <div class="staff_tag" id="s2">{{ __("Candy Sharp")}}</div>
                    <div class="staff_text">{{ __("President and Chief Executive Officer")}}</div>
                </div>
                <div class="staff_card">
                    <img class="staff_img" src="https://resource.logitech.com/w_1800,h_1800,c_limit,q_auto,f_auto,dpr_1.0/content/dam/logitech/about/about-nate-olmstead.png?v=1" alt="">
                    <div class="staff_tag" id="s3">{{ __("Carlos Pena")}}</div>
                    <div class="staff_text">{{ __("Chief Financial Officer")}}</div>
                </div>
            </div>
        </div>
    </div>
    <div class="blog">
        <div class="container">
            <div class="blog_title">{{ __("Recent from our blog")}}</div>
            <div class="blog_subtitle">{{ __("Everything you need to create professional website")}}</div>
            <div class="blog_wrap">
                <div class="blog_card">
                    <embed class="blog_img" src="https://images.pexels.com/photos/3183198/pexels-photo-3183198.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500">
                    <div class="blog_right">
                        <h4 class="blog_tag"><a href="post1.html">{{ __("Introducing Logi Tune 2.0. Now with Logitech webcam support")}}</a></h4>
                        <div class="blog_text">{{ __("12 Feburary 2020")}}</div>
                    </div>
                </div>
                <div class="blog_card">
                    <embed class="blog_img" src="https://images.pexels.com/photos/3454270/pexels-photo-3454270.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
                    <div class="blog_right">
                        <h4 class="blog_tag"><a href="post2.html">{{ __("Logitech and Microsoft Teams Empower the Growing Hybrid Workplace")}}</a> </h4>
                        <div class="blog_text">{{ __("15 March 2020")}}</div>
                    </div>
                </div>
                <div class="blog_card">
                    <embed class="blog_img" src="https://images.pexels.com/photos/3312671/pexels-photo-3312671.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500">
                    <div class="blog_right">
                        <h4 class="blog_tag"><a href="post3.html">{{ __("Streamlabs and Stream Hatchet Q4 Live Streaming Industry Report")}}</a></h4>
                        <div class="blog_text">{{ __("21 April 2020")}}</div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="container">
            <nav class="end">
                <ul class="nav_footer">
                    <li><a href="http://localhost/dyken/public/"  class="menu_link">{{ __("Home")}}</a></li>
                    <li><a href="http://localhost/dyken/public/" class="menu_link">{{ __("Products")}}</a></li>
                    <li><a href="http://localhost/dyken/public/blog" class="menu_link">{{ __("Blog")}}</a></li>
                    <li><a href="http://localhost/dyken/public/contact" class="menu_link">{{ __("Contact")}}</a></li>
                    <li><a href="http://localhost/dyken/public/about" class="menu_link">{{ __("About")}}</a></li>
                </ul>
            </nav>
            <div class="copy">&copy;  COPYRIGHT &mdash; ОО "QOSTANAY ALUMNI"</div>
        </div>
    </footer>
</body>
</html>