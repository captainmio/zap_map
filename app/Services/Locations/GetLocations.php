<?php
namespace App\Services\Locations;

use App\Models\Location;

class GetLocations {
  public function getLocationsWithinRadius($latitude, $longitude, $radius) {

    // sorry I have to use a package to calculate radius. I am dumb with math and calculation ;p #peace
    $locations = Location::radius($latitude, $longitude, $radius)->get();

    return $locations;
  }
}