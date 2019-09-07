<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class WeatherController extends Controller
{
	public function index(Request $request)
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
		$client = new Client();
		$response = $client->request("GET","http://api.openweathermap.org/data/2.5/weather?id=$cityId&appid=864d6baefd019b9633bcd4b963ce8bd4");
		$datajson = $response->getBody();
		$data = json_decode($datajson);
		date_default_timezone_set('Asia/Ho_Chi_Minh');
		$sunrise = date ('H:s', $data->sys->sunrise);
		$sunset = date ('H:s', $data->sys->sunset);

		return view('welcome', compact('data', 'cityName', 'cityCountry', 'sunrise', 'sunset'));
	}
}
