<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Gear_set.
 *
 * @author  The scaffold-interface created at 2020-02-28 07:05:39pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Gear_set extends Model
{
	
	
    public $timestamps = false;
    
    protected $table = 'gear_sets';

	
	public function gear()
	{
		return $this->belongsTo('App\Gear','gear_id');
	}

	
}
