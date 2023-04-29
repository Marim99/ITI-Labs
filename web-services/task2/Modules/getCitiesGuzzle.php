<?php

use GuzzleHttp\Client;

function getCities()
{
    $string = file_get_contents('./city.list.json');
    $cities = json_decode($string, true);
    $egypt_cities = array();
    foreach ($cities as $city) {
        foreach ($city as $key => $val) {
            if ($key  == "country" && $val == "EG") {
                array_push($egypt_cities, $city);
            }
        }
    }
    return ($egypt_cities);
}


function guzzle_get_weather()
{
    if (!empty($_GET["lon"]) && !empty($_GET["lat"])) {
        $city_lon = $_GET["lon"];
        $city_lat = $_GET["lat"];
        $apiKey = _KEY_API;
        $client = new Client([
            'base_uri' => 'https://api.openweathermap.org',
        ]);
        $response = $client->request('GET', '/data/2.5/weather', [
            'query' => [
                'lat' => $city_lat,
                'lon' => $city_lon,
                'appid' => $apiKey,
            ]
        ]);
        $body = $response->getBody();
        $arr_body = json_decode($body, true);
        return ($arr_body);
    }
}
