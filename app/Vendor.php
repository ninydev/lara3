<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;


class Vendor extends Model
{
	use Resizable;
    //

      public function car()
  {
    return $this->belongsTo('App\Car', 'vendor_id', 'id');
  }
}
