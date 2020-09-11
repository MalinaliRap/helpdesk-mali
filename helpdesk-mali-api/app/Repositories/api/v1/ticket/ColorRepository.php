<?php

namespace App\Repositories\api\v1\ticket;


use App\Models\api\v1\ticket\ColorModel;
use Freelabois\LaravelQuickstart\Extendables\Repository;
//use Your Model

/**
 * Class ColorRepository.
 */
class ColorRepository extends Repository
{
    protected $model = ColorModel::class;

    protected $searchableFields = [
        ["field" => 'col_description', 'operator' => 'ilike'],
        ["field" => 'col_color']
    ];

}
