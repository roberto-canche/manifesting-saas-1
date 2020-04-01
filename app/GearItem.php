<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Item;
use App\GearSet;

class GearItem extends Model
{
    public function item() {
        return $this->belongsTo(Item::class);
    }

    public function gear_set() {
        return $this->belongsTo(Gear::class);
    }
}
