@extends('frontend.master')

@section('content')
    {{-- Head Title Start --}}
    {{-- Jumbotron Start --}}
    <div class="jb">
        <img src="{{ asset('frontend/img/Jbt/jb-bg.png') }}" alt="">

        {{-- <div class="head-jb" style="background-image: url('{{ asset($product->image) }}');"> --}}
        {{-- <div class="head-jb" style="background-image: url('{{ asset('frontend/img/Jbt/jb-new-bg.png') }}')"> --}}
        <div class="head-jb">
            <div class="head-ttl">
                <h1>OUR HISTORY</h1>
                <p>Since 2015 - Now</p>
            </div>
        </div>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="rgb(245, 211, 221)" fill-opacity="1"
            d="M0,160L48,133.3C96,107,192,53,288,48C384,43,480,85,576,90.7C672,96,768,64,864,80C960,96,1056,160,1152,165.3C1248,171,1344,117,1392,90.7L1440,64L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z">
        </path>
    </svg>
    {{-- Jumbotron End --}}
    {{-- Head Title End --}}

    {{-- Main History Start --}}
    <div class="historys">
        <div class="history-title">
            <h1>History</h1>
        </div>
    </div>
    {{-- Main History End --}}
@endsection
