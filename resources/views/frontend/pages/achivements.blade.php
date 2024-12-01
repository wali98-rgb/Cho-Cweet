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
                <h1>ACHIVEMENTS</h1>
                <p>Cho-Cweet Awards</p>
            </div>
        </div>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="rgb(245, 211, 221)" fill-opacity="1"
            d="M0,96L48,85.3C96,75,192,53,288,74.7C384,96,480,160,576,160C672,160,768,96,864,69.3C960,43,1056,53,1152,53.3C1248,53,1344,43,1392,37.3L1440,32L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z">
        </path>
    </svg>
    {{-- Jumbotron End --}}
    {{-- Head Title End --}}
@endsection
