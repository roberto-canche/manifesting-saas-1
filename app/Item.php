<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Item.
 *
 * @author  The scaffold-interface created at 2020-02-28 07:08:22pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Item extends Model
{
	
	
    public $timestamps = false;
    
    protected $table = 'items';

	
}
