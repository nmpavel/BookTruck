<!DOCTYPE html>
<html lang="en">
<head>



    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>WINNER-STORE-BD</title>
        <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('frontend/css/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{asset('frontend/css/prettyPhoto.css')}}" rel="stylesheet">
        <link href="{{asset('frontend/css/price-range.css')}}" rel="stylesheet">
        <link href="{{asset('frontend/css/animate.css')}}" rel="stylesheet">
        <link href="{{asset('frontend/css/main.css')}}" rel="stylesheet">
        <link href="{{asset('frontend/css/responsive.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{URL::to('frontend/images/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{URL::to('frontend/images/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{URL::to('frontend/images/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{URL::to('frontend/images/ico/apple-touch-icon-57-precomposed.png')}}">
</head><!--/head-->

<body>
    <header id="header"><!--header-->
        
        <div class="header_top" style=""><!--header_top-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="contactinfo">
                            <ul class="nav nav-pills">
                                <li><a href="#"><i class="fa fa-phone"></i> +8801918000690</a></li>
                                <li><a href="#"><i class="fa fa-envelope"></i> winnerstorebd@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                                                  <!--social media-->
                                              

                    <div class="col-sm-6">
                        <div class="social-icons pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="https://www.facebook.com/winnerbd19"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/login?lang=en"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://bd.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header_top-->
        
<div class="header-middle" style="">

    <!--header-middle-->
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="logo pull-left">
                    <a href="{{URL::to('/')}}"><img src="{{asset('frontend/images/slide-photo/logo1.png')}}" alt="" /></a>
                </div>
                <div class="btn-group pull-right">
                    <div class="btn-group">
                                                        <ul class="dropdown-menu">
                            <li><a href="#">Canada</a></li>
                            <li><a href="#">UK</a></li>
                        </ul>
                    </div>
                    
                    <div class="btn-group">
                        
                        <ul class="dropdown-menu">
                            <li><a href="#">Canadian Dollar</a></li>
                            <li><a href="#">Pound</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="mainmenu pull-right">
                   
                     <ul class="nav navbar-nav collapse navbar-collapse"> 
                      <li><a href="{{URL::to('/')}}" class="active">Home</a></li>
                              
                              
                 
                        <!-- <li><a href="#"><i class="fa fa-user"></i> Account</a></li>
                        <li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li> -->

                        <?php
                        $customer_id=Session::get('customer_id');
                        $shipping_id=Session::get('shipping_id');
                        ?> 
                        @if($customer_id != NULL && $shipping_id==NULL)
                        <li><a href="{{URL::to('/checkout')}}"><i class="fa fa-crosshairs"></i> Checkout</a></li> 
                        @elseif($customer_id != NULL && $shipping_id!=NULL)
                        <li><a href="{{URL::to('/payment')}}"><i class="fa fa-crosshairs"></i> Checkout</a></li> 
                         @else
                        <li><a href="{{URL::to('/login-check')}}"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                         @endif

                        <li><a href="{{URL::to('/show-cart')}}"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                        
                     </ul>
                       
                       <ul class="nav navbar-nav collapse navbar-collapse">
                           
                               <!-- <li><a href="{{URL::to('/')}}" class="active">Home</a></li> -->
                                
                                <li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="{{URL::to('/books')}}">All Products</a></li>
                                        </li> 
                                       </ul> 
                
                @if($customer_id != NULL)
                        <li><a href="{{URL::to('/customer_logout')}}"><i class="fa fa-lock"></i> Logout</a></li>
                        @else
                        <li><a href="{{URL::to('/login-check')}}"><i class="fa fa-lock"></i> Login or Sign Up</a></li>
                        @endif      
                </div>
                 </div>
                </div>
            </div>
        </div>
    </div>
</div><!--/header-middle-->
    
        <div class="header-bottom"><!--header-bottom-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        
                    </div>
                   <!--  <div class="col-sm-3">
                        <div class="search_box pull-right">
                            <input type="text" placeholder="Search"/>
                        </div>
                    </div> -->
                </div>
            </div>
        </div><!--/header-bottom-->
    </header><!--/header-->
            <p class="alert-success">
            <?php
            $message=Session::get('message');
            if($message)
            {
                echo $message;
                Session::put('message',null);
            }

            ?>
                                
            </p>
    <!--slider-->
    

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
<div class="container">
  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="frontend/images/slide-photo/slider10.jpg" style="width:100%">
      </div>

      <div class="item">
        <img src="frontend/images/slide-photo/slider5.jpg" style="width:100%">
      </div>

      <div class="item">
        <img src="frontend/images/slide-photo/slider7.jpg" alt="New york" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>








 <!--/slider close-->
       <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>Categories</h2>
                        <div class="panel-group category-products" id="accordian">


                            <!--category-productsr-->

                            <div class="panel panel-default">
                            <?php
                            $all_published_category=DB::table('tbl_category')
                                                    ->where('publication_status',1)
                                                    ->get();

                            foreach( $all_published_category as $v_category){?>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="{{URL::to('/product_by_category/'.$v_category->category_id)}}">{{$v_category->category_name}}</a>
                                    </h4>
                                </div>
                                
                            </div>
                          
                          <?php } ?>  
                          </div>  
                        </div><!--/category-products-->
                    
                        <div class="brands_products">

                            <!--brands_products-->
                            <h2>Types</h2>
                            <div class="brands-name">
                                <ul class="nav nav-pills nav-stacked">
                                    <?php
                            $all_published_manufacture=DB::table('tbl_manufacture')
                                                    ->where('publication_status',1)
                                                    ->get();

                            foreach( $all_published_manufacture as $v_manufacture){?>

                                    <li><a href="{{URL::to('/product_by_manufacture/'.$v_manufacture->manufacture_id)}}"> <span class="pull-right"></span>{{$v_manufacture->manufacture_name}}</a></li>
                                    <?php } ?>  
                                </ul>
                            </div>
                        </div><!--/brands_products-->
                         
                         <!--price-range-->
                         
                         <!-- <div class="price-range">
                             <h2>Price Range</h2>
                            <div class="well text-center">
                                 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="99999" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
                                 <b class="pull-left">BDT 1</b> <b class="pull-right">BDT 99999</b>
                            </div>
                        </div> --> <!--/price-range-->
                        
                         <!-- <div class="shipping text-center">shipping
                            <img src="images/home/shipping.jpg" alt="" />
                        </div> -->
                    
                    </div>
                </div>
                
                <div class="col-sm-8 padding-right">

                    
                    <div class="features_items"><!--features_items-->
                    @yield('content')
                    
                    </div>
            </div>
        </div>
    </section>


    <!--Footer-->
    
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="companyinfo">
                            <h2><span>WINNER</span>-STORE</h2>
                            <p1>You Can Buy All Kind Of Products Easily</p1>
                        </div>
                    </div>
                    
                    </div>
                   <!--  <div class="col-sm-3">
                        <div class="address">
                            <img src="images/home/map.png" alt="" />
                            <p>505 S Atlantic Ave Virginia Beach, VA(Virginia)</p>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        
        <div class="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="single-widget">
                            <h4> CONTACT INFORMATION</h4>
                            -----------------------------------------------------------
                            <ul class="nav nav-pills nav-stacked">
                                <li><a4 href="#">Sheikhghat,Sylhet-3100 | Bangladesh</a4></li>
                              -----------------------------------------------------------       
                                <li><a4 href="#">Phone:+8801918000690</a4></li>
                                --------------------------------------------
                                <li><a4 href="#">winnerstorebd@gmail.com</a4></li>
                                --------------------------------------------
                                <li><a4 href="#">website:winnerstorebd.com</a4></li>
                                --------------------------------------------
                                
                             </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h4>QUICK SHOP</h4>
                           ----------------------------------
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="http://127.0.0.1:8000/product_by_category/33">Crest</a></li>
                                -------------
                                <li><a href="#">Trophy</a></li>
                                -------------
                                <li><a href="#">Medal</a></li>
                                -------------
                                <li><a4 href="#">T-Shirt</a4></li>
                                -------------
                                <li><a4 href="#">Other</a4></li>
                                -------------
                         </ul>
                           </div>
                       </div>

                       
                       <div class="col-sm-3">
                        <div class="single-widget">
                            <h4>WINNER STORE BD</h4>
                            -----------------------------------------------
                            <ul class="nav nav-pills nav-stacked">
                                <li><a4 href="#">Winner Store BD is a  </a4></li>
                                <li><a4 href="#"></a4></li>
                                <li><a4 href="#"></a4></li>
                                <li><a4 href="#"></a4></li>
                                <li><a4 href="#"></a4></li>
                            </ul>
                        </div>
                    </div>

                     <div class="col-sm-3">
                        <div class="single-widget">
                            <h4>PAYMENT SYSTEM </h4>
                            -----------------------------------
                            <ul class="nav nav-pills nav-stacked">
                                <li><a1 href="#">We ACCEPT </a1></li>
                                -----------------------------------
                                <li><a4 href="#">bKash:+8801730684270(Personal).</a4></li>
                                ----------------------------------------------------------------
                                <li><a4 href="#">Rocket:+8801918000690(Personal).</a4></li>
                                ----------------------------------------------------------------
                                <li><a4 href="#">Helpline Number:+8801918000690</a4></li>
                                ----------------------------------------------------------------
                            </ul>
                        </div>
                    </div> 

                    <!-- <div class="col-sm-2">
                        <div class="single-widget">
                            <h4>WINNER STORE BD</h4>
                            -----------------------------------------
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Company Information</a></li>
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">Store Location</a></li>
                                <li><a href="#">Affillate Program</a></li>
                                <li><a href="#">Copyright</a></li>
                            </ul>
                        </div>
                    </div> -->

                    <!--  <div class="col-sm-3 col-sm-offset-1">
                        <div class="single-widget">
                            <h2>About Shopper</h2>
                            <form action="#" class="searchform">
                                <input type="text" placeholder="Your email address" />
                                <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
                                <p>Get the most recent updates from <br />our site and be updated your self...</p> 
                            </form>
                        </div>
                    </div> -->
                    
                </div>
            </div>
        </div>
        
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p class="pull-left">Copyright © 2019 Winnerstorebd All rights reserved.</p>
                    <p class="pull-right">Designed by <span><a target="_blank" href="#">InnovexIT</a></span></p>
                </div>
            </div>
        </div>
        
    </footer><!--/Footer-->
    

  
    <script src="{{asset('frontend/js/jquery.js')}}"></script>
    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('frontend/js/price-range.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('frontend/js/main.js')}}"></script>
</body>
</html> 