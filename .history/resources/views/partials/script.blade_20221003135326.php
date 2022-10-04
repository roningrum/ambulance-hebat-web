@push('script')
<script>
    $(document).ready(function(){
        $('.owl-carousel').owlCarousel(
    {
        autoplay: true,
        autoplayHoverPause:true,
        autoplayTimeout:2000,
        items: 2,
        nav:true,
        lazyLoad: true,
        loop: true,
        dots: false,
    }
);
    })

</script>

@endpush