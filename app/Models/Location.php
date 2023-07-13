<?php

namespace App\Models;

use Akuechler\Geoly;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Location extends Model
{
    use HasFactory;
    use Geoly;

    protected $hidden = [
      'created_at',
      'updated_at',
  ];
}