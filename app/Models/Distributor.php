<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Distributor extends Model
{
    public function usrdetails(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}