<?php

namespace App\Http\Controllers;

use App\Services\Locations\GetLocations;

class LocationController extends Controller
{
    public function get_locations(GetLocations $getlocations, $latitude, $longitude, $radius) {
      
      // didn't add request here as the value are within URL parameters
      if(is_numeric($latitude) && is_numeric($longitude) && preg_match('/^\d+$/',$radius) && $radius > 0) {

        $locations = $getlocations->getLocationsWithinRadius($latitude, $longitude, $radius);
        $response = $locations;

      } else {

        $response = array("error" => true,
        "message" => "Invalid parameters");

      }
      
      return response()->json($response);
      
    }
}