<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;


class Car extends Model
{
	use Resizable;
    //

  public function vendor()
  {
    return $this->hasOne('App\Vendor', 'id', 'vendor_id');
  }
}
