{{-- My Bootstrap --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

{{-- My JS --}}
<script src="{{ asset('frontend/js/toggle.js') }}"></script>
<script src="{{ asset('frontend/js/carousel.js') }}"></script>
<script src="{{ asset('frontend/js/count-num.js') }}"></script>

{{-- My AOS --}}
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>

{{-- Jquery --}}
<script src="{{ asset('frontend/js/jquery-ui/jquery-ui.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery/jquery.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<script>
    $(window).on("load", function() {
        $(".preloader").fadeOut("slow");
    });
</script>
