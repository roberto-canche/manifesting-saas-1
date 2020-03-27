<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;
use App\Agent;

class Gear extends Model
{
    public $timestamps = false;

    protected $fillable = [ 'name' ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function agents()
    {
        return $this->belongsToMany(Agent::class);
    }

    public function assignAgent($agent)
    {
        return $this->agents()->attach($agent);
    }

    public function removeAgent($agent)
    {
        return $this->agents()->detach($agent);
    }
}
