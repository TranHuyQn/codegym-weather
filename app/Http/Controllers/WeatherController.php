<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class WeatherController extends Controller
{
	public function index()
	{
		$cityJson = file_get_contents('city.json');
		$cities = (object)json_decode($cityJson);
		$dataSuggest = [];
		foreach ($cities as $key => $city) {
			array_push($dataSuggest, $city->name);
		}
		$cityId = 1581130;
		$cityName = 'Hà Nội';
		$cityCountry = "VN";
		$client = new Client();
		$response = $client->request("GET","http://api.openweathermap.org/data/2.5/weather?id=$cityId&appid=864d6baefd019b9633bcd4b963ce8bd4");
		$datajson = $response->getBody();
		$data = json_decode($datajson);
		return view('welcome', compact('data', 'dataSuggest', 'cityName', 'cityCountry'));
	}

	public function search(Request $request)
	{
		$cityId = 1581130;
		$cityName = 'Hà Nội';
		$cityCountry = "VN";
		$cityNameInput = $request->cityName;
		$cityJson = file_get_contents('city.json');
		$cities = (object)json_decode($cityJson);
		foreach ($cities as $key => $city) {
			if ($city->name == $cityNameInput) {
				$cityId = $city->id;
				$cityName = $city->name;
				$cityCountry = $city->country;
				break;
			}
		}

		$dataSuggest = [];
		foreach ($cities as $key => $city) {
			array_push($dataSuggest, $city->name);
		}
		$client = new Client();
		$response = $client->request("GET","http://api.openweathermap.org/data/2.5/weather?id=$cityId&appid=864d6baefd019b9633bcd4b963ce8bd4");
		$datajson = $response->getBody();
		$data = json_decode($datajson);
		return view('welcome', compact('data', 'dataSuggest', 'cityName', 'cityCountry'));   	
	}
}
