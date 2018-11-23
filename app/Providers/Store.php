<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
   protected $table = 'store';

   protected $primaryKey = 'store_id';

   public $timestamp = false
}
