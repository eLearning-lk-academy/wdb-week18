
<div class="room-list-item">
    <div class="row">
        <div class="col-lg-4">
            <figure class="gradient-overlay-hover link-icon">
                <a href="room.html"><img src="{{$room->image ? asset('storage/'.$room->image) :'images/placeholder.jpg'}}" class="img-fluid"
                        alt="Image"></a>
            </figure>
        </div>
        <div class="col-lg-6">
            <div class="room-info">
                <h3 class="room-title">
                    <a href="#">{{$room->name}}</a>
                </h3>
                <span class="room-rates">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <a href="room.html#room-reviews">5.00 Based on 3 Ratings</a>
                </span>
                <p>
                    {{$room->description}}
                </p>
                <div class="room-services">
                    <i class="fa fa-coffee" data-toggle="popover" data-placement="top" data-trigger="hover"
                        data-content="Breakfast Included" data-original-title="Breakfast"></i>
                    <i class="fa fa-wifi" data-toggle="popover" data-placement="top" data-trigger="hover"
                        data-content="Free WiFi" data-original-title="WiFi"></i>
                    <i class="fa fa-television" data-toggle="popover" data-placement="top" data-trigger="hover"
                        data-content="Plasma TV with cable channels" data-original-title="TV"></i>
                    <span>Beds: {{$room->beds}}</span>
                    <span>Max Guests: {{$room->occupancy}}</span>
                </div>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="room-price">
                <span class="price">LKR {{$room->price_per_hour}} / hour</span>
                <a href="room.html" class="btn btn-sm">VIEW DETAILS</a>
            </div>
        </div>
    </div>
</div>