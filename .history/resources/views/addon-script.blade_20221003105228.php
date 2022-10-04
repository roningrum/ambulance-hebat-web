@push('script')
<script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
<script src='https://api.mapbox.com/mapbox-gl-js/v2.10.0/mapbox-gl.js'></script>
<script src="/node_modules/jquery/dist/jquery.js') }}"></script>
<script src="/node_modules/owl.carousel/dist/owl.carousel.min.js'"></script>
    <script>
    (function(){
        const lightbox = GLightbox({
        selector:'.glightbox'
    });

    // $('.owl-carousel').owlCarousel(
    //     {
    //         autoplay: true,
    //         autoplayHoverPause:true,
    //         autoplayTimeout:2000,
    //         items: 2,
    //         nav:true,
    //         lazyLoad: true,
    //         loop: true,
    //         dots: false,
    //     }
    // );

    mapboxgl.accessToken = 'pk.eyJ1Ijoicm9uaW5ncnVtIiwiYSI6ImNsODlwdGd1ZjAzYmgzb2xmc2phd2hvdWMifQ.DPSlo2KGxIkxeh9JThpSlw';
    const map = new mapboxgl.Map({
    container: 'map', // container ID
    style: 'mapbox://styles/mapbox/streets-v11', // style URL
    center: [-74.5, 40], // starting position [lng, lat]
    zoom: 9, // starting zoom
    projection: 'globe' // display the map as a 3D globe
    });
    map.on('style.load', () => {
    map.setFog({}); // Set the default atmosphere style
    });

    })()
    </script>
@endpush