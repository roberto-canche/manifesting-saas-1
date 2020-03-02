<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Customer.
 *
 * @author  The scaffold-interface created at 2020-02-28 06:09:26pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Customer extends Model
{
	
	
    protected $table = 'customers';

	
	public function agent()
	{
		return $this->belongsTo('App\Agent','agent_id');
	}

	
	public function instructor()
	{
		return $this->belongsTo('App\Instructor','instructor_id');
	}

	
	public function jump_type()
	{
		return $this->belongsTo('App\Jump_type','jump_type_id');
	}

	
	public function transport_type()
	{
		return $this->belongsTo('App\Transport_type','transport_type_id');
	}

	
}
