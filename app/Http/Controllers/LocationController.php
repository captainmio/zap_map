<?php

namespace App\Http\Controllers;

use App\Services\Locations\GetLocations;

class LocationController extends Controller
{
    public function get_locations(GetLocations $getlocations, $latitude, $longitude, $radius) {
      
      // didn't add request here as the value URL parameters
      if(is_numeric($latitude) && is_numeric($longitude) && preg_match('/^\d+$/',$radius) && $radius > 0) {
        $locations = $getlocations->getLocationsWithinRadius($latitude, $longitude, $radius);

        return response()->json($locations);
      } else {
        return response()->json(array("error" => true,
      "message" => "Invalid parameters"));
      }

      
    }
}