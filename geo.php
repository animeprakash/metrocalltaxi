<?php
			ini_set('display_errors', 0); 
      $apiKey = '43a6e3773ccd4d0cb4207e3bc0e6c287';

      $searchQuery = 'chen';
      $apiEndpoint = 'https://api.geoapify.com/v1/geocode/autocomplete';


$apiUrl = $apiEndpoint . '?text=' . urlencode($searchQuery) . '&apiKey=' . $apiKey;

$response = file_get_contents($apiUrl);

$results = json_decode($response, true);
  $places = $results['features'];
  foreach ($places as $place) {
      $placeName = $place['properties']['name'];
      //$placeType = $place['properties']['category'];
      //$latitude = $place['geometry']['coordinates'][1];
      //$longitude = $place['geometry']['coordinates'][0];

      echo "Place: $placeName, Type: $placeType, Latitude: $latitude, Longitude: $longitude\n";
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geoapify Autocomplete Map API Demo</title>
    <style>
        #map {
            height: 300px;
            width: 100%;
        }
    </style>
</head>
<body>

<h2>Geoapify Autocomplete Map API Demo</h2>

<form id="autocompleteForm">
    <label for="searchInput">Location Search:</label>
    <input type="text" id="searchInput" placeholder="Enter a location">
    <button type="submit">Search</button>
</form>

<div id="map"></div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const form = document.getElementById('autocompleteForm');
        const searchInput = document.getElementById('searchInput');
        const mapDiv = document.getElementById('map');

        form.addEventListener('submit', function (event) {
            event.preventDefault();
            const searchQuery = searchInput.value;

            // Replace 'YOUR_API_KEY' with your actual Geoapify API key
            const apiKey = '43a6e3773ccd4d0cb4207e3bc0e6c287';
            const apiEndpoint = 'https://api.geoapify.com/v1/geocode/autocomplete';
            const apiUrl = "${apiEndpoint}?text=${encodeURIComponent(searchQuery)}&apiKey=${apiKey}";

            fetch(apiUrl)
                .then(response => response.json())
                .then(result => {
                    if (result.status === 'OK') {
                        // Assuming you want to display the first result on the map
                        const firstPlace = result.features[0];
                        const latitude = firstPlace.geometry.coordinates[1];
                        const longitude = firstPlace.geometry.coordinates[0];

                        // Display the location on the map (you may use a mapping library like Leaflet or Google Maps)
                        mapDiv.innerHTML = '<p>Location: ${firstPlace.properties.name}</p>';
                        mapDiv.innerHTML += '<p>Type: ${firstPlace.properties.category}</p>';
                        mapDiv.innerHTML += '<p>Latitude: ${latitude}</p>';
                        mapDiv.innerHTML += '<p>Longitude: ${longitude}</p>';
                    } else {
                        // Handle API error
                        mapDiv.innerHTML = '<p>Error: ${result.message}</p>';
                    }
                })
                .catch(error => {
                    // Handle fetch error
                    mapDiv.innerHTML = '<p>Error making API request: ${error.message}</p>';
                });
        });
    });
</script>

</body>
</html>

