@extends('layouts.web2')
@section('content')
    <main class="room">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-12">
                    <!-- ROOM SLIDER -->
                    <x-room.slider :image="$room->image" />
                    <div class="room-discription">
                        {!!$room->description!!}
                    </div>
                    <div class="section-title sm">
                        <h4>ROOM SERVICES</h4>
                        <p class="section-subtitle">Single Room Includes</p>
                    </div>

                    <div class="room-services-list">
                        <div class="row">
                            <div class="col-sm-4">
                                <ul class="list-unstyled">
                                    <li>
                                        <i class="fa fa-check"></i>Double Bed
                                    </li>
                                    <li>
                                        <i class="fa fa-check"></i>80 Sq mt
                                    </li>
                                    <li>
                                        <i class="fa fa-check"></i>3 Persons
                                    </li>
                                    <li>
                                        <i class="fa fa-check"></i>Free Internet
                                    </li>
                                </ul>
                            </div>
                            <div class="col-sm-4">
                                <ul class="list-unstyled">
                                    <li>
                                        <i class="fa fa-check"></i>Free Wi-Fi
                                    </li>
                                    <li>
                                        <i class="fa fa-check"></i>Breakfast Include
                                    </li>
                                    <li>
                                        <i class="fa fa-check"></i>Private Balcony
                                    </li>
                                    <li class="no">
                                        <i class="fa fa-times"></i>Free Newspaper
                                    </li>
                                </ul>
                            </div>
                            <div class="col-sm-4">
                                <ul class="list-unstyled">
                                    <li class="no">
                                        <i class="fa fa-times"></i>Flat Screen Tv
                                    </li>
                                    <li>
                                        <i class="fa fa-check"></i>Full Ac
                                    </li>
                                    <li class="no">
                                        <i class="fa fa-times"></i>Beach View
                                    </li>
                                    <li>
                                        <i class="fa fa-check"></i>Room Service
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <!-- ROOM REVIEWS -->
                    {{-- <div id="room-reviews" class="room-reviews">
                        <div class="section-title sm">
                            <h4>ROOM REVIEWS</h4>
                            <p class="section-subtitle">What our guests are saying about us</p>
                        </div>
                        <div class="rating-details">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="review-summary">
                                        <div class="average">4.9</div>
                                        <div class="rating">
                                            <i class="fa fa-star voted" aria-hidden="true"></i>
                                            <i class="fa fa-star voted" aria-hidden="true"></i>
                                            <i class="fa fa-star voted" aria-hidden="true"></i>
                                            <i class="fa fa-star voted" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </div>
                                        <small>Based on 3 ratings</small>
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <!-- ITEM -->
                                    <div class="progress-item">
                                        <div class="row">
                                            <div class="col-lg-2 col-sm-2 col-3">
                                                <div class="progress-stars">5 star</div>
                                            </div>
                                            <div class="col-lg-9 col-sm-9 col-8">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 91%"
                                                        aria-valuenow="91" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-1 col-sm-1 col-1">
                                                <div class="progress-value">91%</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ITEM -->
                                    <div class="progress-item">
                                        <div class="row">
                                            <div class="col-lg-2 col-sm-2 col-3">
                                                <div class="progress-stars">4 star</div>
                                            </div>
                                            <div class="col-lg-9 col-sm-9 col-8">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 0%"
                                                        aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-1 col-sm-1 col-1">
                                                <div class="progress-value">0%</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ITEM -->
                                    <div class="progress-item">
                                        <div class="row">
                                            <div class="col-lg-2 col-sm-2 col-3">
                                                <div class="progress-stars">3 star</div>
                                            </div>
                                            <div class="col-lg-9 col-sm-2 col-8">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 8%"
                                                        aria-valuenow="8" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-1 col-sm-1 col-1">
                                                <div class="progress-value">8%</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ITEM -->
                                    <div class="progress-item">
                                        <div class="row">
                                            <div class="col-lg-2 col-sm-2 col-3">
                                                <div class="progress-stars">2 star</div>
                                            </div>
                                            <div class="col-lg-9 col-sm-9 col-8">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 0%"
                                                        aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-1 col-sm-1 col-1">
                                                <div class="progress-value">0%</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ITEM -->
                                    <div class="progress-item">
                                        <div class="row">
                                            <div class="col-lg-2 col-sm-2 col-3">
                                                <div class="progress-stars">1 star</div>
                                            </div>
                                            <div class="col-lg-9 col-sm-9 col-8">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 0%"
                                                        aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-1 col-sm-1 col-1">
                                                <div class="progress-value">0%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="review-box">
                            <figure class="review-author">
                                <img src="images/users/user1.jpg" alt="Image">
                            </figure>
                            <div class="review-contentt">
                                <div class="rating">
                                    <i class="fa fa-star voted" aria-hidden="true"></i>
                                    <i class="fa fa-star voted" aria-hidden="true"></i>
                                    <i class="fa fa-star voted" aria-hidden="true"></i>
                                    <i class="fa fa-star voted" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <div class="review-info">
                                    Marlene Simpson – February 03, 2018
                                </div>
                                <div class="review-text">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum quis rem esse
                                        quaerat eius labore repellendus, odit officia, quas provident reprehenderit magnam
                                        adipisci inventore quibusdam est architecto nisi.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End review-box -->
                        <div class="review-box clearfix">
                            <figure class="review-author">
                                <img src="images/users/user2.jpg" alt="Image">
                            </figure>
                            <div class="review-contentt">
                                <div class="rating">
                                    <i class="fa fa-star voted" aria-hidden="true"></i>
                                    <i class="fa fa-star voted" aria-hidden="true"></i>
                                    <i class="fa fa-star voted" aria-hidden="true"></i>
                                    <i class="fa fa-star voted" aria-hidden="true"></i>
                                    <i class="fa fa-star voted" aria-hidden="true"></i>
                                </div>
                                <div class="review-info">
                                    Brad Knight – January 17, 2018
                                </div>
                                <div class="review-text">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium omnis, eius
                                        impedit cum. Necessitatibus illum veritatis, consequatur quia itaque tenetur
                                        recusandae nostrum quod aperiam.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End review-box -->
                        <div class="review-box clearfix">
                            <figure class="review-author">
                                <img src="images/users/user3.jpg" alt="Image">
                            </figure>
                            <div class="review-contentt">
                                <div class="rating">
                                    <i class="fa fa-star voted" aria-hidden="true"></i>
                                    <i class="fa fa-star voted" aria-hidden="true"></i>
                                    <i class="fa fa-star voted" aria-hidden="true"></i>
                                    <i class="fa fa-star voted" aria-hidden="true"></i>
                                    <i class="fa fa-star voted" aria-hidden="true"></i>
                                </div>
                                <div class="review-info">
                                    Daryl Phillips – August 16, 2017
                                </div>
                                <div class="review-text">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim id, facere porro.
                                        Ipsum quia maxime atque adipisci inventore dolor nesciunt, molestias voluptatum, ab
                                        dignissimos! Alias.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    {{-- <div class="similar-rooms">
                        <div class="section-title sm">
                            <h4>SIMILAR ROOMS</h4>
                            <p class="section-subtitle">Leave your review</p>
                        </div>
                        <div class="row">
                            <!-- ITEM -->
                            <div class="col-lg-4">
                                <div class="room-grid-item">
                                    <figure class="gradient-overlay-hover link-icon">
                                        <a href="room.html">
                                            <img src="images/rooms/single/single1.jpg" class="img-fluid" alt="Image">
                                        </a>
                                        <div class="room-services">
                                            <i class="fa fa-coffee" aria-hidden="true" data-toggle="popover"
                                                data-placement="right" data-trigger="hover"
                                                data-content="Breakfast Included" data-original-title="Breakfast"></i>
                                            <i class="fa fa-wifi" aria-hidden="true" data-toggle="popover"
                                                data-placement="right" data-trigger="hover" data-content="Free WiFi"
                                                data-original-title="WiFi"></i>
                                            <i class="fa fa-television" data-toggle="popover" data-placement="right"
                                                data-trigger="hover" data-content="Plasma TV with cable channels"
                                                data-original-title="TV"></i>
                                        </div>
                                        <div class="room-price">€89 / night</div>
                                    </figure>
                                    <div class="room-info">
                                        <h2 class="room-title">
                                            <a href="room.html">Single Room</a>
                                        </h2>
                                        <p>Enjoy our single room</p>
                                    </div>
                                </div>
                            </div>
                            <!-- ITEM -->
                            <div class="col-lg-4">
                                <div class="room-grid-item">
                                    <figure class="gradient-overlay-hover link-icon">
                                        <a href="room.html">
                                            <img src="images/rooms/double/double.jpg" class="img-fluid" alt="Image">
                                        </a>
                                        <div class="room-services">
                                            <i class="fa fa-coffee" aria-hidden="true" data-toggle="popover"
                                                data-placement="right" data-trigger="hover"
                                                data-content="Breakfast Included" data-original-title="Breakfast"></i>
                                            <i class="fa fa-wifi" aria-hidden="true" data-toggle="popover"
                                                data-placement="right" data-trigger="hover" data-content="Free WiFi"
                                                data-original-title="WiFi"></i>
                                            <i class="fa fa-television" data-toggle="popover" data-placement="right"
                                                data-trigger="hover" data-content="Plasma TV with cable channels"
                                                data-original-title="TV"></i>
                                        </div>
                                        <div class="room-price">€129 / night</div>
                                    </figure>
                                    <div class="room-info">
                                        <h2 class="room-title">
                                            <a href="room.html">Double Room</a>
                                        </h2>
                                        <p>Enjoy our double room</p>
                                    </div>
                                </div>
                            </div>
                            <!-- ITEM -->
                            <div class="col-lg-4">
                                <div class="room-grid-item">
                                    <figure class="gradient-overlay-hover link-icon">
                                        <a href="room.html">
                                            <img src="images/rooms/deluxe/deluxe.jpg" class="img-fluid" alt="Image">
                                        </a>
                                        <div class="room-services">
                                            <i class="fa fa-coffee" aria-hidden="true" data-toggle="popover"
                                                data-placement="right" data-trigger="hover"
                                                data-content="Breakfast Included" data-original-title="Breakfast"></i>
                                            <i class="fa fa-bath" data-toggle="popover" data-placement="right"
                                                data-trigger="hover" data-content="2 Bathrooms"
                                                data-original-title="Bathroom"></i>
                                            <i class="fa fa-wifi" aria-hidden="true" data-toggle="popover"
                                                data-placement="right" data-trigger="hover" data-content="Free WiFi"
                                                data-original-title="WiFi"></i>
                                            <i class="fa fa-television" data-toggle="popover" data-placement="right"
                                                data-trigger="hover" data-content="Plasma TV with cable channels"
                                                data-original-title="TV"></i>
                                        </div>
                                        <div class="room-price">€189 / night</div>
                                    </figure>
                                    <div class="room-info">
                                        <h2 class="room-title">
                                            <a href="room.html">Deluxe Room</a>
                                        </h2>
                                        <p>Enjoy our delux room</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
                <!-- SIDEBAR -->
                <div class="col-lg-3 col-12">
                    <div class="sidebar">
                        <!-- WIDGET -->
                        <aside class="widget noborder">
                            <div class="vertical-booking-form">
                                <div id="booking-notification" class="notification"></div>
                                <h3 class="form-title">BOOK YOUR ROOM</h3>
                                <div class="inner">
                                    <form id="booking-form" method="post" action="{{route('booking.create')}}">
                                        @csrf
                                        <input type="hidden" name="room_id" value="{{$room->id}}">
                                        <!-- Name -->
                                        {{-- <div class="form-group">
                                            <input class="form-control" name="booking_name" type="name"
                                                placeholder="Your Name" value="{{$bookingData['booking_name']}}">
                                        </div>
                                        <!-- EMAIL -->
                                        <div class="form-group">
                                            <input class="form-control" name="booking_email" type="email"
                                                placeholder="Your Email Address" value="{{$bookingData['booking_email']}}">
                                        </div> --}}
                                        <!-- ROOM TYPE -->
                                        <div class="form-group">
                                            <select class="form-control" name="booking-roomtype" title="Select Room Type"
                                                data-header="Room Type" disabled="disabled">
                                                @foreach ($roomTypes as $key => $type )
                                                    <option value="{{$key}}" {{$key == $bookingData['booking_roomtype'] ? 'selected': ''}} >{{$type}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <!-- DATE -->
                                        <div class="form-group">
                                            <div class="form_date">
                                                <input type="text" class="datepicker form-control"
                                                    name="booking-checkin" placeholder="Slect Arrival & Departure Date"
                                                    readonly="readonly">
                                            </div>
                                        </div>
                                        <!-- GUESTS -->
                                        <div class="form-group">
                                            <div class="panel-dropdown">
                                                <div class="form-control guestspicker">Guests
                                                    <span class="gueststotal"></span>
                                                </div>
                                                <div class="panel-dropdown-content">
                                                    <div class="guests-buttons">
                                                        <label>Adults
                                                            <a href="#" title="" data-toggle="popover"
                                                                data-placement="top" data-trigger="hover"
                                                                data-content="18+ years" data-original-title="Adults">
                                                                <i class="fa fa-info-circle"></i>
                                                            </a>
                                                        </label>
                                                        <div class="guests-button">
                                                            <div class="minus"></div>
                                                            <input type="text" name="booking_adults"
                                                                class="booking-guests" value="{{$bookingData['booking_adults']}}">
                                                            <div class="plus"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- BOOKING BUTTON -->
                                        <button type="submit" class="btn btn-dark btn-fw mt20 mb20">BOOK A ROOM</button>
                                    </form>
                                </div>
                            </div>
                        </aside>
                        <!-- WIDGET -->
                        <aside class="widget widget-help">
                            <h4 class="widget-title">NEED HELP?</h4>
                            <div class="phone">
                                <a href="tel:18475555555">
                                    +1 888 123 4567
                                </a>
                            </div>
                            <div class="email">
                                <a href="mailto:contact@hotelhimara.com">contact@hotelhimara.com</a>
                            </div>
                        </aside>
                        <!-- WIDGET -->
                        <aside class="widget">
                            <h4 class="widget-title">Latest Posts</h4>
                            <div class="latest-posts">
                                <!-- ITEM -->
                                <div class="latest-post-item">
                                    <div class="row">
                                        <div class="col-5">
                                            <figure class="gradient-overlay-hover link-icon sm">
                                                <a href="blog-post.html">
                                                    <img src="images/blog/blog-post1.jpg" class="img-fluid"
                                                        alt="Image">
                                                </a>
                                            </figure>
                                        </div>
                                        <div class="col-7">
                                            <div class="post-details">
                                                <h6 class="post-title">
                                                    <a href="blog-post.html">10 Tips for Holiday Travel</a>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ITEM -->
                                <div class="latest-post-item">
                                    <div class="row">
                                        <div class="col-5">
                                            <figure class="gradient-overlay-hover link-icon sm">
                                                <a href="blog-post.html">
                                                    <img src="images/blog/blog-post2.jpg" class="img-fluid"
                                                        alt="Image">
                                                </a>
                                            </figure>
                                        </div>
                                        <div class="col-7">
                                            <div class="post-details">
                                                <h6 class="post-title">
                                                    <a href="blog-post.html">Are you ready to enjoy your holidays</a>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ITEM -->
                                <div class="latest-post-item">
                                    <div class="row">
                                        <div class="col-5">
                                            <figure class="gradient-overlay-hover link-icon sm">
                                                <a href="blog-post.html">
                                                    <img src="images/blog/blog-post3.jpg" class="img-fluid"
                                                        alt="Image">
                                                </a>
                                            </figure>
                                        </div>
                                        <div class="col-7">
                                            <div class="post-details">
                                                <h6 class="post-title">
                                                    <a href="blog-post.html">Honeymoon in Hotel Himara</a>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ITEM -->
                                <div class="latest-post-item">
                                    <div class="row">
                                        <div class="col-5">
                                            <figure class="gradient-overlay-hover link-icon sm">
                                                <a href="blog-post.html">
                                                    <img src="images/blog/blog-post4.jpg" class="img-fluid"
                                                        alt="Image">
                                                </a>
                                            </figure>
                                        </div>
                                        <div class="col-7">
                                            <div class="post-details">
                                                <h6 class="post-title">
                                                    <a href="blog-post.html">Travel Gift Ideas for Every Type of
                                                        Traveler</a>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ITEM -->
                                <div class="latest-post-item">
                                    <div class="row">
                                        <div class="col-5">
                                            <figure class="gradient-overlay-hover link-icon sm">
                                                <a href="blog-post.html">
                                                    <img src="images/blog/blog-post5.jpg" class="img-fluid"
                                                        alt="Image">
                                                </a>
                                            </figure>
                                        </div>
                                        <div class="col-7">
                                            <div class="post-details">
                                                <h6 class="post-title">
                                                    <a href="blog-post.html">Breakfast with coffee and orange juic</a>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </aside>
                        <!-- WIDGET -->
                        <aside class="widget noborder">
                            <img src="images/banner.jpg" class="img-fluid" alt="Image">
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
