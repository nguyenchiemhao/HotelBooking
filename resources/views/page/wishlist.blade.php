@extends('page_layout.page_masterpage')

@section('title')
Danh sách yêu thích
@endsection

@section('content')

    <!--========== PAGE-COVER =========-->
    <section class="page-cover dashboard">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="page-title">My Account</h1>
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">My Account</li>
                    </ul>
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end page-cover -->

    <!--===== INNERPAGE-WRAPPER ====-->
    <section class="innerpage-wrapper">
        <div id="dashboard" class="innerpage-section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="dashboard-heading">
                            <h2>Travel <span>Profile</span></h2>
                            <p>Hi Lisa, Welcome to Star Travels!</p>
                            <p>All your trips booked with us will appear here and you'll be able to manage everything!</p>
                        </div><!-- end dashboard-heading -->
                        
                        <div class="dashboard-wrapper">
                            <div class="row">
                            
                                <div class="col-xs-12 col-sm-2 col-md-2 dashboard-nav">
                                    <ul class="nav nav-tabs nav-stacked text-center">
                                        <li><a href="dashboard.html"><span><i class="fa fa-cogs"></i></span>Dashboard</a></li>
                                        <li><a href="user-profile.html"><span><i class="fa fa-user"></i></span>Profile</a></li>
                                        <li><a href="booking.html"><span><i class="fa fa-briefcase"></i></span>Booking</a></li>
                                        <li class="active"><a href="#"><span><i class="fa fa-heart"></i></span>Wishlist</a></li>
                                        <li><a href="cards.html"><span><i class="fa fa-credit-card"></i></span>My Cards</a></li>
                                    </ul>
                                </div><!-- end columns -->
                                
                                <div class="col-xs-12 col-sm-10 col-md-10 dashboard-content wishlist">
                                    <h2 class="dash-content-title">Your Wish List</h2>
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <tbody>
                                                <tr class="list-content">
                                                    <td class="list-img wishlist-img"><img src="page_asset/images/wishlist.jpg" class="img-responsive" alt="wishlist-img" /></td>
                                                    <td class="list-text wishlist-text">
                                                        <h3>Grand Lilly
                                                            <span class="rating">
                                                                <i class="fa fa-star orange"></i>
                                                                <i class="fa fa-star orange"></i>
                                                                <i class="fa fa-star orange"></i>
                                                                <i class="fa fa-star orange"></i>
                                                                <i class="fa fa-star lightgrey"></i>
                                                            </span>
                                                        </h3>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                                        <p class="order"><span>Order Total:</span> $548</p>
                                                        <button class="btn btn-orange">Book Now</button>
                                                        <button class="btn btn-lightgrey visible-sm pull-right">Remove</button>
                                                    </td>
                                                    <td class="wishlist-btn hidden-sm"><button class="btn btn-lightgrey">Remove</button></td>
                                                </tr>
                                                
                                                <tr class="list-content">
                                                    <td class="list-img wishlist-img"><img src="page_asset/images/wishlist.jpg" class="img-responsive" alt="wishlist-img" /></td>
                                                    <td class="list-text wishlist-text">
                                                        <h3>Grand Lilly
                                                            <span class="rating">
                                                                <i class="fa fa-star orange"></i>
                                                                <i class="fa fa-star orange"></i>
                                                                <i class="fa fa-star orange"></i>
                                                                <i class="fa fa-star orange"></i>
                                                                <i class="fa fa-star lightgrey"></i>
                                                            </span>
                                                        </h3>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                                        <p class="order"><span>Order Total:</span> $548</p>
                                                        <button class="btn btn-orange">Book Now</button>
                                                        <button class="btn btn-lightgrey visible-sm pull-right">Remove</button>
                                                    </td>
                                                    <td class="wishlist-btn hidden-sm"><button class="btn btn-lightgrey">Remove</button></td>
                                                </tr>
                                                
                                                <tr class="list-content">
                                                    <td class="list-img wishlist-img"><img src="page_asset/images/wishlist.jpg" class="img-responsive" alt="wishlist-img" /></td>
                                                    <td class="list-text wishlist-text">
                                                        <h3>Grand Lilly
                                                            <span class="rating">
                                                                <i class="fa fa-star orange"></i>
                                                                <i class="fa fa-star orange"></i>
                                                                <i class="fa fa-star orange"></i>
                                                                <i class="fa fa-star orange"></i>
                                                                <i class="fa fa-star lightgrey"></i>
                                                            </span>
                                                        </h3>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                                        <p class="order"><span>Order Total:</span> $548</p>
                                                        <button class="btn btn-orange">Book Now</button>
                                                        <button class="btn btn-lightgrey visible-sm pull-right">Remove</button>
                                                    </td>
                                                    <td class="wishlist-btn hidden-sm"><button class="btn btn-lightgrey">Remove</button></td>
                                                </tr>
                                                
                                                <tr class="list-content">
                                                    <td class="list-img wishlist-img"><img src="page_asset/images/wishlist.jpg" class="img-responsive" alt="wishlist-img" /></td>
                                                    <td class="list-text wishlist-text">
                                                        <h3>Grand Lilly
                                                            <span class="rating">
                                                                <i class="fa fa-star orange"></i>
                                                                <i class="fa fa-star orange"></i>
                                                                <i class="fa fa-star orange"></i>
                                                                <i class="fa fa-star orange"></i>
                                                                <i class="fa fa-star lightgrey"></i>
                                                            </span>
                                                        </h3>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                                        <p class="order"><span>Order Total:</span> $548</p>
                                                        <button class="btn btn-orange">Book Now</button>
                                                        <button class="btn btn-lightgrey visible-sm pull-right">Remove</button>
                                                    </td>
                                                    <td class="wishlist-btn hidden-sm"><button class="btn btn-lightgrey">Remove</button></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                    </div><!-- end table-responsive -->
                                </div><!-- end columns -->
                                
                            </div><!-- end row -->
                        </div><!-- end dashboard-wrapper -->
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->          
        </div><!-- end dashboard -->
    </section><!-- end innerpage-wrapper -->

    <!--========================= NEWSLETTER-1 ==========================-->
    @include('page.components.newsletter_1')

@endsection
