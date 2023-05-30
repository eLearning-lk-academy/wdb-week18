@extends('layouts.web')
@section('content')
    <!-- ========== REVOLUTION SLIDER ========== -->
    <div class="slider">
        <x-himara.rev-slider />
        <!-- ========== BOOKING FORM ========== -->
        <x-home.booking-form :roomTypes="$roomTypes"></x-booking-form>
    </div>
    <!-- ========== ABOUT ========== -->
    <x-home.about />
    <!-- ========== ROOMS ========== -->
    <x-home.rooms />
    <!-- ========== SERVICES ========== -->
    <x-home.services />
    <!-- ========== GALLERY ========== -->
    <x-home.gallery />
    <!-- ========== TESTIMONIALS ========== -->
    <x-home.testimonials />
    <!-- ========== RESTAURANT ========== -->
    <x-home.restaurant />
    <!-- ========== NEWS ==========-->
    <x-home.news />
    <!-- ========== VIDEO ========== -->
    <x-home.video />
    <!-- ========== EVENTS ========== -->
    <x-home.events />
    <!-- ========== CONTACT V2 ========== -->
    <x-home.contact />
    <!-- ========== INSTAGRAM ========== -->
    <x-home.instagram />
@endsection
@push('scripts')
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.thumbs.min.js') }}"></script>
@endpush
@push('css')
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
@endpush
