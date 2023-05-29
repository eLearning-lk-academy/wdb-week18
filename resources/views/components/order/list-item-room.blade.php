@php
    $booking = $item->booking;
    $room = $booking->room;
@endphp
<div class="room-list-item cart-item" id="cart-item-{{ $item->id }}">
    <div class="row">
        <div class="col-lg-4">
            <figure class="gradient-overlay-hover link-icon">
                <a href="{{ route('room.show', $room->slug) }}">
                    <img src="{{ imageCheck($room->image) }}" class="img-fluid" alt="Image">
                </a>
            </figure>
        </div>
        <div class="col-lg-6">
            <div class="room-info">
                <h3 class="room-title">
                    <a href="{{ route('room.show', $room->slug) }}">{{ $item->item_name }}</a>
                </h3>
                <p>
                    {{ $room->short_description }}
                </p>
                <div class="room-services">
                    <span>Guests: {{ $booking->occupants }}</span>
                </div>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="room-price">
                <span class="price">LKR {{ $item->amount }}</span>
            </div>
        </div>
    </div>
    <input type="hidden" name="items[]" value="{{ $item->id }}">
    <button type="button" class="cart-item-remove" data-item="{{ $item->id }}"><i class="fa fa-trash"
            aria-hidden="true"></i></button>

</div>
