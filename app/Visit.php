<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visit extends Model {

    public function scopeUnpaid($query)
    {
        return $query->where('paid', '0');
    }
    public function scopePaid($query)
    {
        return $query->where('paid', '1');
    }
}
