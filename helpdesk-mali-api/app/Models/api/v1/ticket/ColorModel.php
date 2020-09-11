<?php

namespace App\Models\api\v1\ticket;

use Illuminate\Database\Eloquent\Model;

class ColorModel extends Model
{
    //
    protected $table = 'color';
    protected $primaryKey = "id";

    protected $fillable = [
        'col_description',
        'col_color'
    ];

    protected $casts = [
        'col_description' => 'string',
        'col_color' => 'string'
    ];

}
