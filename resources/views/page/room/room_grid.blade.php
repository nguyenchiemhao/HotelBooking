@extends('page_layout.page_masterpage')

@section('title')
   Danh sách phòng
@endsection

@section('content')
        
        
    <!--=================== PAGE-COVER =================-->
    <section class="page-cover" id="cover-hotel-grid-list">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                <h1 class="page-title">Danh sách phòng</h1>
                    <ul class="breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li class="active">Danh sách phòng</li>
                    </ul>
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end page-cover -->
        
      
    <!--===== INNERPAGE-WRAPPER ====-->
    <section class="innerpage-wrapper">
    <div id="hotel-grid" class="innerpage-section-padding">
            <div class="container">
                <div class="row">        	
                    
                    <div class="col-xs-12 col-sm-12 col-md-3 side-bar left-side-bar">
                                    
                        <div class="side-bar-block filter-block">
                            <h3>Sort By Filter</h3>
                            <p>Find your dream flights today</p>
                            
                            <div class="panels-group">
                                
                                <div class="panel panel-default">
                                    <div class="panel-heading">					
                                        <a href="#panel-1" data-toggle="collapse" >Select Category <span><i class="fa fa-angle-down"></i></span></a>
                                    </div><!-- end panel-heading -->
                                    
                                    <div id="panel-1" class="panel-collapse collapse">
                                        <div class="panel-body text-left">
                                            <ul class="list-unstyled">
                                                <li class="custom-check"><input type="checkbox" id="check01" name="checkbox"/>
                                                <label for="check01"><span><i class="fa fa-check"></i></span>All</label></li>
                                                <li class="custom-check"><input type="checkbox" id="check02" name="checkbox"/>
                                                <label for="check02"><span><i class="fa fa-check"></i></span>Apartment</label></li>
                                                <li class="custom-check"><input type="checkbox" id="check03" name="checkbox"/>
                                                <label for="check03"><span><i class="fa fa-check"></i></span>Bed & Breakfast</label></li>
                                                <li class="custom-check"><input type="checkbox" id="check04" name="checkbox"/>
                                                <label for="check04"><span><i class="fa fa-check"></i></span>Guest House</label></li>
                                                <li class="custom-check"><input type="checkbox" id="check05" name="checkbox"/>
                                                <label for="check05"><span><i class="fa fa-check"></i></span>Hotels</label></li>				
                                                <li class="custom-check"><input type="checkbox" id="check06" name="checkbox"/>
                                                <label for="check06"><span><i class="fa fa-check"></i></span>Residence</label></li>
                                                <li class="custom-check"><input type="checkbox" id="check07" name="checkbox"/>
                                                <label for="check07"><span><i class="fa fa-check"></i></span>Resorts</label></li>
                                            </ul>
                                        </div><!-- end panel-body -->
                                    </div><!-- end panel-collapse -->
                                </div><!-- end panel-default -->
                                
                                <div class="panel panel-default">
                                    <div class="panel-heading">					
                                        <a href="#panel-2" data-toggle="collapse" >Facility<span><i class="fa fa-angle-down"></i></span></a>
                                    </div><!-- end panel-heading -->
                                    
                                    <div id="panel-2" class="panel-collapse collapse">
                                        <div class="panel-body text-left">
                                            <ul class="list-unstyled">
                                                <li class="custom-check"><input type="checkbox" id="check08" name="checkbox"/>
                                                <label for="check08"><span><i class="fa fa-check"></i></span>Air Conditioning</label></li>
                                                <li class="custom-check"><input type="checkbox" id="check09" name="checkbox"/>
                                                <label for="check09"><span><i class="fa fa-check"></i></span>Bathroom</label></li>
                                                <li class="custom-check"><input type="checkbox" id="check10" name="checkbox"/>
                                                <label for="check10"><span><i class="fa fa-check"></i></span>Cable Tv</label></li>
                                                <li class="custom-check"><input type="checkbox" id="check11" name="checkbox"/>
                                                <label for="check11"><span><i class="fa fa-check"></i></span>Parking</label></li>
                                                <li class="custom-check"><input type="checkbox" id="check12" name="checkbox"/>
                                                <label for="check12"><span><i class="fa fa-check"></i></span>Pool</label></li>
                                                <li class="custom-check"><input type="checkbox" id="check13" name="checkbox"/>
                                                <label for="check13"><span><i class="fa fa-check"></i></span>Wi-fi</label></li>
                                            </ul>
                                        </div><!-- end panel-body -->
                                    </div><!-- end panel-collapse -->
                                </div><!-- end panel-default -->
                                
                                <div class="panel panel-default">
                                    <div class="panel-heading">					
                                        <a href="#panel-3" data-toggle="collapse" >Rating <span><i class="fa fa-angle-down"></i></span></a>
                                    </div><!-- end panel-heading -->
                                    
                                    <div id="panel-3" class="panel-collapse collapse">
                                        <div class="panel-body text-left">
                                            <ul class="list-unstyled">
                                                <li class="custom-check"><input type="checkbox" id="check14" name="checkbox"/>
                                                <label for="check14"><span><i class="fa fa-check"></i></span>1 Star</label></li>
                                                <li class="custom-check"><input type="checkbox" id="check15" name="checkbox"/>
                                                <label for="check15"><span><i class="fa fa-check"></i></span>2 Star</label></li>
                                                <li class="custom-check"><input type="checkbox" id="check16" name="checkbox"/>
                                                <label for="check16"><span><i class="fa fa-check"></i></span>3 Star</label></li>
                                                <li class="custom-check"><input type="checkbox" id="check17" name="checkbox"/>
                                                <label for="check17"><span><i class="fa fa-check"></i></span>4 Star</label></li>
                                                <li class="custom-check"><input type="checkbox" id="check18" name="checkbox"/>
                                                <label for="check18"><span><i class="fa fa-check"></i></span>5 Star</label></li>
                                            </ul>
                                        </div><!-- end panel-body -->
                                    </div><!-- end panel-collapse -->
                                </div><!-- end panel-default -->
                                
                            </div><!-- end panel-group -->
                            
                            <div class="price-slider">
                                <p><input type="text" id="amount" readonly></p>
                                <div id="slider-range"></div>
                            </div><!-- end price-slider -->
                        </div><!-- end side-bar-block -->
                        
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-12">
                                <div class="side-bar-block main-block ad-block">
                                    <div class="main-img ad-img">
                                        <a href="#">
                                            <img src="page_asset/images/car-ad.jpg" class="img-responsive" alt="car-ad" />
                                            <div class="ad-mask">
                                                <div class="ad-text">
                                                    <span>Luxury</span>
                                                    <h2>Car</h2>
                                                    <span>Offer</span>
                                                </div><!-- end ad-text -->
                                            </div><!-- end columns -->
                                        </a>
                                    </div><!-- end ad-img -->
                                </div><!-- end side-bar-block -->
                            </div><!-- end columns -->
                            
                            <div class="col-xs-12 col-sm-6 col-md-12">    
                                <div class="side-bar-block support-block">
                                    <h3>Cần hỗ trợ</h3>
                                    <p>Website hatabook hoạt động 24/24 để đáp ứng nhu cầu khách hàng </p>
                                    <div class="support-contact">
                                        <span><i class="fa fa-phone"></i></span>
                                        <p>+84 123 456 789</p>
                                    </div><!-- end support-contact -->
                                </div><!-- end side-bar-block -->
                            </div><!-- end columns -->
                            
                        </div><!-- end row -->
                    </div><!-- end columns -->
                    
                    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 content-side">
                        <div class="row">
                            @foreach ($rooms as $room)
                                <div class="col-sm-6 col-md-6 col-lg-4">
                                    <div class="grid-block main-block h-grid-block">
                                    <div class="main-img h-grid-img">
                                        <a href="{{ route('get-page-room-roomDetail', ['id' => $room->id]) }}">
                                        <img src="{{ asset('upload/images' . '/'. $room->image) }}" class="img-responsive" alt="hotel-img" style="width: 264px; height: 190px;" />
                                            </a>
                                            <div class="main-mask">
                                                <ul class="list-unstyled list-inline offer-price-1">
                                                    <li class="price">{{ $room->price }}<span class="divider">|</span><span class="pkg">1 Đêm</span></li>
                                                </ul>
                                            </div><!-- end main-mask -->
                                    </div><!-- end h-grid-img -->
                                        
                                        <div class="block-info h-grid-info">
                                            <div class="rating">
                                               @for ($i = 0; $i < $room->hotel->hotel_star; $i++)
                                                <span><i class="fa fa-star orange"></i></span>
                                               @endfor
                                               @for ($i = 0; $i < (5 -$room->hotel->hotel_star); $i++)
                                                <span><i class="fa fa-star lightgrey"></i></span>
                                               @endfor
                                            </div><!-- end rating -->
                                            
                                            <h3 class="block-title"><a href="hotel-detail-left-sidebar.html">{{ $room->name }}</a></h3>
                                            <p class="block-minor">Khách sạn: {{ $room->hotel->name }}, {{ $room->hotel->city }}</p>
                                            <div class="grid-btn">
                                            <a href="{{ route('get-page-room-roomDetail', ['id' => $room->id]) }}" class="btn btn-orange btn-block btn-lg">Xem chi tiết</a>
                                            </div><!-- end grid-btn -->
                                        </div><!-- end h-grid-info -->
                                    </div><!-- end h-grid-block -->
                                </div><!-- end columns -->
                            @endforeach
                            
                        </div><!-- end row -->
                        
                        <div class="row text-center">
                            {{ $rooms->links() }}
                        </div><!-- end pages -->
                    </div><!-- end columns -->
    
                </div><!-- end row -->
        </div><!-- end container -->
        </div><!-- end hotel-grid -->
    </section><!-- end innerpage-wrapper -->
    
    
    <!--======================= BEST FEATURES =====================-->
    @include('page.components.best_features')
    
    
    <!--========================= NEWSLETTER-1 ==========================-->
    @include('page.components.newsletter_1')

@endsection
@section('javascript')
    <script>
        $(document).ready(function(){
            $('.home-status').removeClass('active');
            $('.room-status').addClass('active');
        });
    
    </script>
@endsection