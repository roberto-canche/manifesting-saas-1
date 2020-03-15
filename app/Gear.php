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

	

	/**
     * agent.
     *
     * @return  \Illuminate\Support\Collection;
     */
    public function agents()
    {
        return $this->belongsToMany('App\Agent');
    }

    /**
     * Assign a agent.
     *
     * @param  $agent
     * @return  mixed
     */
    public function assignAgent($agent)
    {
        return $this->agents()->attach($agent);
    }
    /**
     * Remove a agent.
     *
     * @param  $agent
     * @return  mixed
     */
    public function removeAgent($agent)
    {
        return $this->agents()->detach($agent);
    }

}
