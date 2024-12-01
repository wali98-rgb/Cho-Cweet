@extends('frontend.master')

@section('content')
    {{-- Head Title Start --}}
    {{-- Jumbotron Start --}}
    <div class="jb">
        <img src="{{ asset('frontend/img/Jbt/jb-new-bg.png') }}" alt="">

        {{-- <div class="head-jb" style="background-image: url('{{ asset($product->image) }}');"> --}}
        {{-- <div class="head-jb" style="background-image: url('{{ asset('frontend/img/Jbt/jb-new-bg.png') }}')"> --}}
        <div class="head-jb">
            <div class="head-ttl">
                <h1>ABOUT US</h1>
                <p>Specialist Customize Chocolate</p>
            </div>
        </div>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="rgb(245, 211, 221)" fill-opacity="1"
            d="M0,64L80,74.7C160,85,320,107,480,96C640,85,800,43,960,26.7C1120,11,1280,21,1360,26.7L1440,32L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z">
        </path>
    </svg>
    {{-- Jumbotron End --}}
    {{-- Head Title End --}}

    {{-- Main About Start --}}
    <div class="abouts">
        <div class="main-img" data-aos="fade-up" data-aos-duration="1000">
            <img class="pub-img" src="{{ asset('frontend/img/asset/abt.png') }}" alt="">
        </div>

        <div class="main-ab" data-aos="fade-up" data-aos-duration="1000">
            <p>
                CHO-CWEET adalah Specialist Customized Chocolate yang
                dapat di request untuk membuat coklat dengan berbagai macam
                bentuk, gambar, atau logo sesuai dengan keinginan pelanggan
                untuk keperluan berbagai macam acara. <br> <br>
                Kami telah berdiri sejak September 2015 hingga saat ini. Kami
                memasarkan produk melalui toko online dan tempat produksi /
                workshop offline. <br> <br>
                Produk yang kami buat aman dan halal, karena telah memiliki
                perizinan P-IRT 2103273013064-21, Halal no 01111249150920,
                Uji Mutu dan Hak atas Merek.

            </p>
        </div>
    </div>
    {{-- Main About End --}}

    {{-- Border Wave Start --}}
    <svg data-aos="fade-up" data-aos-duration="1000" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="rgb(245, 211, 221)" fill-opacity="1"
            d="M0,192L48,202.7C96,213,192,235,288,240C384,245,480,235,576,213.3C672,192,768,160,864,165.3C960,171,1056,213,1152,229.3C1248,245,1344,235,1392,229.3L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
        </path>
    </svg>

    {{-- Visi Start --}}
    <div class="visi">
        <h1 data-aos="fade-up" data-aos-duration="1000">VISI</h1>
        <p data-aos="zoom-in-up" data-aos-duration="1000">
            Mendirikan perusahaan dengan jumlah pegawai 10 orang
            dan memiliki kebermanfaatan bagi 300 orang pada tahun
            2027.
        </p>

        <div class="visi-img">
            <div data-aos="fade-up" data-aos-duration="1000" class="cards-visi">
                <img src="{{ asset('frontend/img/asset/learn-ab.png') }}" alt="">
                <div class="desc-card">
                    <h3>Learn Make Choco</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, ipsam!</p>
                </div>
            </div>

            <div data-aos="fade-up" data-aos-duration="1000" class="cards-visi">
                <img src="{{ asset('frontend/img/asset/burn-ab.png') }}" alt="">
                <div class="desc-card">
                    <h3>Launching Merchant</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, ipsam!</p>
                </div>
            </div>

            <div data-aos="fade-up" data-aos-duration="1000" class="cards-visi">
                <img src="{{ asset('frontend/img/asset/fistacio.png') }}" alt="">
                <div class="desc-card">
                    <h3>Our Product</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, ipsam!</p>
                </div>
            </div>
        </div>
    </div>
    {{-- Visi End --}}

    <svg data-aos="fade-up" data-aos-duration="1000" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="rgb(245, 211, 221)" fill-opacity="1"
            d="M0,160L48,170.7C96,181,192,203,288,181.3C384,160,480,96,576,69.3C672,43,768,53,864,53.3C960,53,1056,43,1152,58.7C1248,75,1344,117,1392,138.7L1440,160L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z">
        </path>
    </svg>
    {{-- Border Wave End --}}

    {{-- Misi Start --}}
    <div class="misi">
        <div class="misi-main">
            <h1 data-aos="fade-up" data-aos-duration="1000">MISI</h1>
            <div data-aos="fade-up" data-aos-duration="1000" class="content-misi">
                <table>
                    <tr>
                        <td><i class="bi bi-patch-check-fill"></i></td>
                        <td class="td">
                            <p>
                                Menciptakan lapangan pekerjaan bagi orang lain.
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td><i class="bi bi-patch-check-fill"></i></td>
                        <td class="td">
                            <p>
                                Mensejahterakan dan memberdayakan masyarakat sekitar.
                            </p>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="misi-img">
            <div data-aos="fade-up" data-aos-duration="1000" class="ms-img">
                <img src="{{ asset('frontend/img/asset/learn-ab.png') }}" alt="">
            </div>
        </div>
    </div>
    {{-- Misi End --}}
@endsection
