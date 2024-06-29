<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Lpost extends Model
{


    public function category() {
        return $this->belongsTo(Lcategory::class, 'category_id', 'id');
    }

}

