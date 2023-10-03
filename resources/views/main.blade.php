<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/sass/styles.scss','resources/js/app.js'])
    <title>ALPS HazardMap</title>
</head>
<body>
    <div id="app">
      <map-component :api-key="{{ json_encode($apiKey) }}"></map-component>
    </div>
</body>
</html>