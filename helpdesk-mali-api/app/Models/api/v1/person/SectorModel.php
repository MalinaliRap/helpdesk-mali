<?php

namespace App\Models\api\v1\person;

use Illuminate\Database\Eloquent\Model;

class SectorModel extends Model
{
    //
    protected $table = 'sector';
    protected $primaryKey = "id";

    protected $fillable = [
        'sec_description',
        'sec_name'
    ];

    protected $casts = [
        'sec_description' => 'string',
        'sec_name' => 'string'
    ];

}
