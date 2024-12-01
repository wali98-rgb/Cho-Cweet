@extends('frontend.master')

@section('content')
    {{-- Carousel Start --}}
    @include('frontend.partials.carousel')
    {{-- Carousel End --}}

    {{-- Ads Start --}}
    <div class="ads">
        <div class="ads-img" data-aos="fade-right" data-aos-duration="500">
            <img class="image" src="{{ asset('frontend/img/Ads/1.png') }}" alt="">
            <img class="image" src="{{ asset('frontend/img/Ads/2.png') }}" alt="">
            <img class="image" src="{{ asset('frontend/img/Ads/3.png') }}" alt="">
        </div>
    </div>
    {{-- Ads End --}}

    {{-- Story Start --}}
    <div class="story" data-aos="fade-right" data-aos-duration="800">
        <div class="head-story">
            <div class="ttl-story">
                <h2>Story of Cho-Cweet</h2>
                <h4>Specialist Customize Chocolate</h4>
            </div>
            <div class="img-story">
                <img src="{{ asset('frontend/img/asset/coklat-nb.png') }}" alt="">
            </div>
        </div>
        <p>
            Cho-Cweet berdiri sejak 20 September 2015. Kami memproduksi berbagai macam Cokelat untuk memenuhi berbagai
            kebutuhan konsumen (B2C) seperti untuk hadiah, cemilan, oleh-oleh, souvenir acara, ulang tahun, graduation, dll.
            Kami juga menyediakan berbagai kebutuhan cokelat dan produk olahan gula untuk supply (B2B) seperti hotel,
            bakery, chef, dsb.
        </p>
        <div class="cta-story">
            <a href="{{ route('histories') }}">Learn More &raquo;</a>
        </div>
    </div>
    {{-- Story End --}}

    {{-- Product Start --}}
    <div class="products">
        <div class="head-product">
            <h2 data-aos="fade-up" data-aos-duration="500">Viral Dubai Chocolate</h2>
        </div>
        <div class="product" data-aos="fade-up" data-aos-duration="500">
            <a href="" class="cardsp">
                <img src="{{ asset('frontend/img/products/bitebar.png') }}" alt="Photo Chocolate" width="20%">
                <div class="cardp-name">
                    <h4>Chocolate Pistachio Bite Bar</h4>
                    <p>
                        Komposisi: Pistachio, Kunafa Pastry, Coklat Susu, Lemak Nabati.
                    </p>
                </div>
            </a>
            <a href="" class="cardsp">
                <img src="{{ asset('frontend/img/products/bigbar.png') }}" alt="Photo Chocolate" width="20%">
                <div class="cardp-name">
                    <h4>Chocolate Pistachio Big Bar</h4>
                    <p>
                        Komposisi: Pistachio, Kunafa Pastry, Coklat Susu, Lemak Nabati.
                    </p>
                </div>
            </a>
            <a href="" class="cardsp">
                <img src="{{ asset('frontend/img/products/jumbo.png') }}" alt="Photo Chocolate" width="20%">
                <div class="cardp-name">
                    <h4>Chocolate Pistachio Jumbo</h4>
                    <p>
                        Komposisi: Pistachio, Kunafa Pastry, Coklat Susu, Lemak Nabati.
                    </p>
                </div>
            </a>
        </div>

        <div class="more-product">
            <a href="{{ route('products') }}">View More &raquo;</a>
        </div>
    </div>
    {{-- Product End --}}

    {{-- Other Product Start --}}
    {{-- <div class="others">
        <div class="head-other">
            <h2 data-aos="fade-up" data-aos-duration="500">Our Other Chocolate</h2>
        </div>
        <div class="other" data-aos="fade-up" data-aos-duration="500">
            <a href="" class="cardsp">
                <img src="{{ asset('frontend/img/products/bigbar.png') }}" alt="Photo Chocolate" width="20%">
                <div class="cardp-name">
                    <h4>Chocolate Pistachio Bite Bar</h4>
                    <p>
                        Komposisi: Selai hazelnut, Kunafa Pastry, Coklat Susu, Lemak Nabati.
                    </p>
                </div>
            </a>
            <a href="" class="cardsp">
                <img src="{{ asset('frontend/img/products/bigbar.png') }}" alt="Photo Chocolate" width="20%">
                <div class="cardp-name">
                    <h4>Chocolate Pistachio Big Bar</h4>
                    <p>
                        Komposisi: Selai hazelnut, Kunafa Pastry, Coklat Susu, Lemak Nabati. jauef ejf uaejfae afa
                    </p>
                </div>
            </a>
            <a href="" class="cardsp">
                <img src="{{ asset('frontend/img/products/bigbar.png') }}" alt="Photo Chocolate" width="20%">
                <div class="cardp-name">
                    <h4>Chocolate Pistachio Jumbo</h4>
                    <p>
                        Komposisi: Selai hazelnut, Kunafa Pastry, Coklat Susu, Lemak Nabati. ajefjise osuefh aeuf ae
                    </p>
                </div>
            </a>
            <a href="" class="cardsp">
                <img src="{{ asset('frontend/img/products/bigbar.png') }}" alt="Photo Chocolate" width="20%">
                <div class="cardp-name">
                    <h4>Chocolate Pistachio Jumbo</h4>
                    <p>
                        Komposisi: Selai hazelnut, Kunafa Pastry, Coklat Susu, Lemak Nabati. ajefjise osuefh aeuf ae
                    </p>
                </div>
            </a>
            <a href="" class="cardsp">
                <img src="{{ asset('frontend/img/products/bigbar.png') }}" alt="Photo Chocolate" width="20%">
                <div class="cardp-name">
                    <h4>Chocolate Pistachio Jumbo</h4>
                    <p>
                        Komposisi: Selai hazelnut, Kunafa Pastry, Coklat Susu, Lemak Nabati. ajefjise osuefh aeuf ae
                    </p>
                </div>
            </a>
        </div>

        <div class="more-other">
            <a href="{{ route('products') }}">View More &raquo;</a>
        </div>
    </div> --}}
    {{-- Other Product End --}}

    {{-- Current Count Start --}}
    <div class="current">
        <div class="ttl-current">
            <h2>Responsible and experienced in many fields.</h2>
        </div>
        <div class="counts" data-aos="fade-up" data-aos-duration="500">
            <div class="count-item">
                <h4 id="counter" data-target="100">0</h4>
                <p>Current Chocolate Production Capacity (Kg).</p>
            </div>
            <div class="count-item">
                <h4 id="counter" data-target="10">0</h4>
                <p>Years Experience.</p>
            </div>
            <div class="count-item">
                <h4 id="counter" data-target="2015">0</h4>
                <p>Established Since.</p>
            </div>
        </div>
    </div>
    {{-- Current Count End --}}
@endsection
