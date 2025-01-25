<?php

$cities = [
  [
    "id" => 10509,
    "wikiDataId" => "Q36312",
    "type" => "CITY",
    "name" => "Calgary",
    "country" => "Canada",
    "countryCode" => "CA",
    "region" => "Alberta",
    "regionCode" => "AB",
    "regionWdId" => "Q1951",
    "latitude" => 51.05011,
    "longitude" => -114.08529,
    "population" => 1306784,
    "distance" => 1.3,
  ],
  [
    "id" => 3876006,
    "wikiDataId" => "Q36312",
    "type" => "CITY",
    "name" => "Calgary",
    "country" => "Canada",
    "countryCode" => "CA",
    "region" => "Alberta",
    "regionCode" => "AB",
    "regionWdId" => "Q1951",
    "latitude" => 51.03503,
    "longitude" => -114.05201,
    "population" => 1306784,
    "distance" => 3.08,
  ],
  [
    "id" => 10065,
    "wikiDataId" => "Q408537",
    "type" => "CITY",
    "name" => "Airdrie",
    "country" => "Canada",
    "countryCode" => "CA",
    "region" => "Alberta",
    "regionCode" => "AB",
    "regionWdId" => "Q1951",
    "latitude" => 51.2917,
    "longitude" => -114.014,
    "population" => 74100,
    "distance" => 16.51,
  ],
  [
    "id" => 10575,
    "wikiDataId" => "Q23025",
    "type" => "CITY",
    "name" => "Red Deer",
    "country" => "Canada",
    "countryCode" => "CA",
    "region" => "Alberta",
    "regionCode" => "AB",
    "regionWdId" => "Q1951",
    "latitude" => 52.26682,
    "longitude" => -113.802,
    "population" => 100844,
    "distance" => 84.39,
  ],
];

function get_nearest_city(array $cities): string {
  // Ensure the cities array is not empty
  if (empty($cities)) {
    return '';
  }

  // Find the nearest city (shortest distance)
  $nearest_city = array_reduce($cities, function($nearest, $current) {
    // If there's no nearest city yet or the current city has a smaller distance, update it
    return $nearest === NULL || $current['distance'] < $nearest['distance'] ? $current : $nearest;
  }, NULL);

  // Return the name of the nearest city if available
  return $nearest_city['name'] ?? '';
}

echo get_nearest_city($cities); // Expected Output: "Calgary"
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My PHP Website</title>
  <link rel="stylesheet" href="assets/style/style.scss">
</head>
<body>

<main>
  <h1><?php
    echo "Hello, World!"; ?></h1>
</main>

<footer>
  <p>&copy; <?php
    echo date("Y"); ?> My Website. All rights reserved.</p>
</footer>

<!-- Include scripts -->
<script src="assets/js/main.js"></script>

</body>
</html>

