<?php

class LocationController extends BaseController {
	public $url;
	public $sensor;
	public $key;

 	public function __construct()
 	{
 		$this->url = 'https://maps.google.com/maps/api/geocode/json?';

 		$this->key = "AIzaSyBtCRz6tyiKj2l7O3BOSDIFt9ZozjUTsj8";

 		$this->sensor = "false"; // REQUIRED FOR REQUEST!
 	}

	public function performRequest($search)
	{
		$ch = curl_init($this->url . "key=" . $this->key . "&sensor=" . $this->sensor . "&address=" . $search);

		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		
		$response = curl_exec($ch);
		dd($this->url . "key=" . $this->key . "&sensor=" . $this->sensor . "&address=" . $search);
		curl_close($ch);
 
		return $response;
	}

	public function forwardSearch($address)
	 {
		return $this->performRequest( urlencode(stripslashes($address)));
	 } // end forward

	 public function lookup($string){
 
		   $string = str_replace (" ", "+", urlencode($string));
		   $details_url = "http://maps.googleapis.com/maps/api/geocode/json?address=".$string."&sensor=false";
		 
		   $ch = curl_init();
		   curl_setopt($ch, CURLOPT_URL, $details_url);
		   curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		   $response = json_decode(curl_exec($ch), true);
		 
		   // If Status Code is ZERO_RESULTS, OVER_QUERY_LIMIT, REQUEST_DENIED or INVALID_REQUEST
		   if ($response['status'] != 'OK') {
		    return null;
		   }
		 	
		 	return $response;
		   // print_r($response);
		   // $geometry = $response['results'][0]['geometry'];
		 
		   //  $longitude = $geometry['location']['lat'];
		   //  $latitude = $geometry['location']['lng'];
		 
		   //  $array = array(
		   //      'latitude' => $geometry['location']['lng'],
		   //      'longitude' => $geometry['location']['lat'],
		   //      'location_type' => $geometry['location_type'],
		   //  );
		 
		   //  return $array;
		 
		}


	 public function tesat()
	 {
	 	$geo = $this->lookup("NG173EX");
	 	$components = $geo['results'][0]['address_components'];
	 	$address = new StdClass();
	 	foreach($components as $component)
	 	{
	 		if($component['types'][0] == "administrative_area_level_2")
	 		{
	 			
	 		}

	 		switch($component['types'][0])
	 		{
	 			case "administrative_area_level_2":
	 				$address->city = $component['long_name'];
	 				break;

	 			case "postal_town":
	 				$address->town = $component['long_name'];
	 				break;

	 		}
	 	}
	 	print_r($address);
	 }

	 public function test()
	 {
	 	$postcode = "NG17 3EX";
	 	$search_code = urlencode($postcode);
		$url = 'http://maps.googleapis.com/maps/api/geocode/json?address=' . $search_code . '&sensor=false';
		$json = json_decode(file_get_contents($url));

		$lat = $json->results[0]->geometry->location->lat;
		$lng = $json->results[0]->geometry->location->lng;

		// Now build the lookup:
		$address_url = 'http://maps.googleapis.com/maps/api/geocode/json?latlng=' . $lat . ',' . $lng . '&sensor=false';
		$address_json = json_decode(file_get_contents($address_url));
		$address_data = $address_json->results[0]->address_components;

		$street = str_replace('Dr', 'Drive', $address_data[1]->long_name);
		$town = $address_data[2]->long_name;
		$county = $address_data[3]->long_name;

		$array = array('street' => $street, 'town' => $town, 'county' => $county);
		echo json_encode($array);
	 }
 

}