<?php
namespace App\Services\Locations;

use App\Models\Location;

class GetLocations {
  public function getLocationsWithinRadius($latitude, $longitude, $radius) {
    $locations = Location::radius($latitude, $longitude, $radius)->get();

    return $locations;
  }
}