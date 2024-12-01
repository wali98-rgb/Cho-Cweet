<!DOCTYPE html>
<html lang="en">

<head>
    @include('frontend.partials.head')
    @include('frontend.partials.head-link')
</head>

<body>
    <div class="layer-body"></div>
    @include('frontend.partials.loader')
    @include('frontend.partials.navbar')

    @yield('content')

    @include('frontend.partials.footer')
    @include('frontend.partials.footer-link')
</body>

</html>
