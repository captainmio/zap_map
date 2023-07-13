<?php

namespace App\Http\Controllers;

use App\Services\Locations\GetLocations;

class LocationController extends Controller
{
    public function get_locations(GetLocations $getlocations, $latitude, $longitude, $radius) {
      
      $locations = $getlocations->getLocationsWithinRadius($latitude, $longitude, $radius);

      return response()->json($locations);
    }
}