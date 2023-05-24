
<div class="room-slider">
    <div id="room-main-image" class="owl-carousel image-gallery">
        <!-- ITEM -->
        <div class="item">
            <figure class="gradient-overlay-hover image-icon">
                <a href="{{asset('storage/'.$image)}}">
                    <img class="img-fluid" src="{{asset('storage/'.$image)}}" alt="Image">
                </a>
            </figure>
        </div>
    </div>
    <div id="room-thumbs" class="room-thumbs owl-carousel">
        <!-- ITEM -->
        <div class="item"><img class="img-fluid" src="{{asset('storage/'.$image)}}" alt="Image">
        </div>
    </div>
</div>
@push('scripts')
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.thumbs.min.js')}}"></script>
@endpush
@push('css')
<link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
@endpush