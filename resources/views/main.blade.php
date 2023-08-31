<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/sass/styles.scss','resources/js/app.js'])
    <title>ALPS HazardMap</title>
</head>
<body>
    <div id="map" style="height:500px"></div>
    <script src="{{ asset('js/map.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?language=kr&region=KR&key={{ $apiKey }}&callback=initMap" async defer></script>
</body>
</html>