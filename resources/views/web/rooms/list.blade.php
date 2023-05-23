@extends('layouts.web2')
@section('pageTitle')
    <!-- ========== PAGE TITLE ========== -->
    <div class="page-title gradient-overlay op6"
        style="background: url(images/breadcrumb.jpg); background-repeat: no-repeat;
      background-size: cover;">
        <div class="container">
            <div class="inner">
                <h1>ROOMS</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>Rooms</li>
                </ol>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <!-- ========== MAIN ========== -->
    <main class="rooms-list-view">
        <div class="container">
            <!-- ITEM -->
            @foreach ($rooms as $room)
                <x-room.list-item :room="$room" />
                
            @endforeach
            <!-- PAGINATION -->
            {{-- <nav class="pagination">
                <ul>
                    <li class="prev-pagination">
                        <a href="#">
                            &nbsp;<i class="fa fa-angle-left"></i>
                            Previous &nbsp;</a>
                    </li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>...</li>
                    <li>
                        <a href="#">7</a>
                    </li>
                    <li>
                        <a href="#">8</a>
                    </li>
                    <li>
                        <a href="#">9</a>
                    </li>
                    <li class="next_pagination">
                        <a href="#">
                            &nbsp; Next
                            <i class="fa fa-angle-right"></i>
                            &nbsp;
                        </a>
                    </li>
                </ul>
            </nav> --}}
        </div>
    </main>
@endsection
