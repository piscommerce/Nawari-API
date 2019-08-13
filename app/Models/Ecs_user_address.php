<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ecs_user_address extends BaseModel
{
    use SoftDeletes;
    protected $guarded = [];
    public function user(){
        return $this->belongsTo(Ecs_user::class,'id');
    }

}
