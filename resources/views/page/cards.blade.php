@extends('page_layout.page_masterpage')

@section('title')
Card
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
                                        <li><a href="wishlist.html"><span><i class="fa fa-heart"></i></span>Wishlist</a></li>
                                        <li class="active"><a href="#"><span><i class="fa fa-credit-card"></i></span>My Cards</a></li>
                                    </ul>
                                </div><!-- end columns -->
                                
                                <div class="col-xs-12 col-sm-10 col-md-10 dashboard-content my-cards">
                                    <h2 class="dash-content-title">Credit/Debit Cards</h2>
                                    <div class="row">
                                    
                                        <div class="col-sm-12 col-md-6">
                                            <div class="card-block">
                                                <h2 class="card-number">xxxx xxxx xxxx 1234</h2>
                                                <h3 class="card-expiry">Vaild Thru 06/17</h3>
                                                <div class="card-name">
                                                    <h4>Name On Card</h4>
                                                    <h3 class="user-name">Lisa</h3>
                                                </div><!-- end card-name -->
                                                
                                                <div class="primary-tag">
                                                    <h4>Primary</h4>
                                                </div><!-- end primary-tag -->
                                                
                                                <ul class="list-unstyled list-inline">
                                                    <li class="card-img"><img src="page_asset/images/master-card.png" class="img-responsive" alt="card-img" /></li>
                                                    <li class="card-links"><button class="btn" data-toggle="modal" data-target="#edit-card" ><span><i class="fa fa-pencil"></i></span></button><button class="btn"><span><i class="fa fa-close"></i></span></button></li>
                                                </ul>
                                            </div><!-- end card-block -->
                                        </div><!-- end columns -->
                                        
                                        <div class="col-sm-12 col-md-6">
                                            <div class="card-block">
                                                <h2 class="card-number">xxxx xxxx xxxx 1234</h2>
                                                <h3 class="card-expiry">Vaild Thru 06/17</h3>
                                                <div class="card-name">
                                                    <h4>Name On Card</h4>
                                                    <h3 class="user-name">Lisa</h3>
                                                </div><!-- end card-name -->
                                                
                                                <ul class="list-unstyled list-inline">
                                                    <li class="card-img"><img src="page_asset/images/master-card.png" class="img-responsive" alt="card-img" /></li>
                                                    <li class="card-links"><button class="btn" data-toggle="modal" data-target="#edit-card" ><span><i class="fa fa-pencil"></i></span></button><button class="btn"><span><i class="fa fa-close"></i></span></button></li>
                                                </ul>
                                            </div><!-- end card-block -->
                                        </div><!-- end columns -->
                                        
                                        <div class="col-sm-12 col-md-6">
                                            <div class="card-block">
                                                <h2 class="card-number">xxxx xxxx xxxx 1234</h2>
                                                <h3 class="card-expiry">Vaild Thru 06/17</h3>
                                                <div class="card-name">
                                                    <h4>Name On Card</h4>
                                                    <h3 class="user-name">Lisa</h3>
                                                </div><!-- end card-name -->
                                                
                                                <ul class="list-unstyled list-inline">
                                                    <li class="card-img"><img src="page_asset/images/master-card.png" class="img-responsive" alt="card-img" /></li>
                                                    <li class="card-links"><button class="btn" data-toggle="modal" data-target="#edit-card" ><span><i class="fa fa-pencil"></i></span></button><button class="btn"><span><i class="fa fa-close"></i></span></button></li>
                                                </ul>
                                            </div><!-- end card-block -->
                                        </div><!-- end columns -->
                                        
                                        <div class="col-sm-12 col-md-6">
                                            <a href="#add-card" data-toggle="modal">
                                                <div class="card-block add-card">
                                                    <span><i class="fa fa-plus-circle"></i></span> 
                                                    <h4>Add New Card</h4>
                                                </div><!-- end card-block -->
                                            </a>
                                        </div><!-- end columns -->
                                        
                                    </div><!-- end row -->
                                </div><!-- end columns -->
                                
                            </div><!-- end row -->
                        </div><!-- end dashboard-wrapper -->
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->          
        </div><!-- end dashboard -->
    </section><!-- end innerpage-wrapper -->

    <!--======================= BEST FEATURES =====================-->
    @include('page.components.best_features')

    <!--========================= NEWSLETTER-1 ==========================-->
    @include('page.components.newsletter_1')

@endsection
