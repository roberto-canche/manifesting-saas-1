<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Gear_item.
 *
 * @author  The scaffold-interface created at 2020-02-28 07:15:44pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Gear_item extends Model
{
	
	
    public $timestamps = false;
    
    protected $table = 'gear_items';

	
	public function item()
	{
		return $this->belongsTo('App\Item','item_id');
	}

	
	public function gear_set()
	{
		return $this->belongsTo('App\Gear_set','gear_set_id');
	}

	
}
