<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!--font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- mystyle -->
    <link rel="stylesheet" href=" {{asset('css/style.css')}}">
    <link rel="stylesheet" href=" https://site-assets.fontawesome.com/releases/v6.1.1/css/all.css">

    {{-- mapbox --}}
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.10.0/mapbox-gl.css' rel='stylesheet' />

    <title>Ambulance Hebat</title>
</head>

<body>

    <header>
        @include('partials.navbar')
    </header>
    
    @include('sweetalert::alert')
    
    @yield('content')

    @include('partials.footer')
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

    <script src="{{ asset('js/script.js') }}"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.10.0/mapbox-gl.js'></script>

    <script src='https://api.mapbox.com/mapbox-gl-js/v2.10.0/mapbox-gl.js'></script>
<script>
    mapboxgl.accessToken =
        'pk.eyJ1Ijoicm9uaW5ncnVtIiwiYSI6ImNsODlwdGd1ZjAzYmgzb2xmc2phd2hvdWMifQ.DPSlo2KGxIkxeh9JThpSlw';
    const map = new mapboxgl.Map({
        container: 'map', // container ID
        style: 'mapbox://styles/mapbox/streets-v11', // style URL
        center: [110.4146236, -6.9870703], // starting position [lng, lat]
        zoom: 11, // starting zoom
        projection: 'globe' // display the map as a 3D globe
    });
    map.on('style.load', () => {
        map.setFog({}); // Set the default atmosphere style
    });

    var locations = @json($location)

    for (let i = 0; i < locations.length; i++) {
        $lng = parseFloat(locations[i]['longitude'])
        $lat = parseFloat(locations[i]['latitude'])
        const media = locations[i]['profile_picture']
        const name = locations[i]['nama_tim']
        const status = locations[i]['status']

        const el = document.createElement('div')
        el.style.backgroundImage = `url(http://119.2.50.173:6006/media/${media})`
        el.style.width = `50px`;
        el.style.height = `50px`;
        el.style.backgroundSize = '100%';

        const popup = new mapboxgl.Popup({offset: 25}).setText("Tim Ambulance Hebat " +name);

        new mapboxgl.Marker(el).setLngLat([$lng, $lat]).setPopup(popup).addTo(map);
    }
</script>

</body>

</html>
