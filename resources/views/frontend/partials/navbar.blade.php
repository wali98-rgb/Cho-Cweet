<nav>
    <div class="time-open text-end">
        <marquee style="padding: .3rem 0 0" behavior="scroll" scrollamount="12" direction="">
            <p>
                <i class="bi bi-tags-fill"></i> &nbsp;
                We open to you every day from
                <label for="">08.00 - 23.00</label>
                WIB
            </p>
        </marquee>
    </div>

    <div class="nav-main">
        <div class="nav-logos">
            <a href="">
                {{-- <img src="{{ asset('frontend/img/chocweet-logo.png') }}" alt=""> --}}
                <h1>Cho-Cweet</h1>
            </a>
        </div>
        <div class="nav-links">
            <ul id="navMenu" class="">
                <div class="logo-mobile">
                    <a href="">
                        {{-- <img src="{{ asset('frontend/img/chocweet-logo.png') }}" alt=""> --}}
                        <h1>Cho-Cweet</h1>
                    </a>
                </div>

                <li>
                    <a href="{{ route('dashboard') }}">
                        {{-- <i class="bi bi-house"></i> --}}
                        Dashboard
                    </a>
                </li>
                <li class="dropdowns">
                    <button type="button" class="dropbtn">
                        {{-- <i class="bi bi-house"></i> --}}
                        Company Overview&#9662;
                        {{-- <i class="bi bi-chevron-down"></i> --}}
                    </button>
                    <div class="dropdowns-content">
                        <a href="{{ route('companies') }}">
                            {{-- <i class="bi bi-house"></i> --}}
                            <label for="">About</label>
                        </a>
                        <a href="{{ route('histories') }}">
                            {{-- <i class="bi bi-house"></i> --}}
                            <label for="">History</label>
                        </a>
                        <a href="{{ route('achivements') }}">
                            {{-- <i class="bi bi-house"></i> --}}
                            <label for="">Achivements</label>
                        </a>
                        <a href="{{ route('facilities') }}">
                            {{-- <i class="bi bi-house"></i> --}}
                            <label for="">Facilities</label>
                        </a>
                    </div>
                </li>
                <li>
                    <a href="{{ route('products') }}">
                        {{-- <i class="bi bi-house"></i> --}}
                        Products
                    </a>
                </li>
                <li>
                    <a href="{{ route('articles') }}">
                        {{-- <i class="bi bi-house"></i> --}}
                        Articles
                    </a>
                </li>
                <li>
                    <a href="{{ route('contacts') }}">
                        {{-- <i class="bi bi-house"></i> --}}
                        Contact
                    </a>
                </li>
            </ul>

            <button type="button" id="toggleMenu">
                <i class="bi bi-list"></i>
            </button>
        </div>
    </div>
</nav>
