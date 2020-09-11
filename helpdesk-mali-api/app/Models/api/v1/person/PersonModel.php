<?php

namespace App\Models\api\v1\person;

use Illuminate\Database\Eloquent\Model;

class PersonModel extends Model
{
    //

    const STATUS_ATIVO = 1;
    const STATUS_INATIVO = 0;

    protected $table = 'person';
    protected $primaryKey = "id";

    protected $fillable = [
        'per_name',
        'per_status',
        'per_position',
        'per_fk_sec_id',
        'per_fk_use_id'
    ];

    protected $casts = [
        'per_name' => 'string',
        'per_status' => 'integer',
        'per_position' => 'string',
        'per_fk_sec_id' => 'integer',
        'per_fk_use_id' => 'integer',
    ];

}
