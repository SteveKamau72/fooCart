<?php

namespace fooCart\Core;

use Illuminate\Database\Eloquent\Model;

class PromoCode extends Model
{
    /**
     * The attributes that are not mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];
}
