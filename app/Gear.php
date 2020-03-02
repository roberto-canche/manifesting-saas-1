<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Gear.
 *
 * @author  The scaffold-interface created at 2020-02-28 06:38:03pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Gear extends Model
{
	
	
    public $timestamps = false;
    
    protected $table = 'gears';

	
}
