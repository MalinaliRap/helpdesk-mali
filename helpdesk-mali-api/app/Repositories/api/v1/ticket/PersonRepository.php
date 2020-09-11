<?php

namespace App\Repositories\api\v1\ticket;


use App\Models\api\v1\person\PersonModel;
use Freelabois\LaravelQuickstart\Extendables\Repository;
//use Your Model

/**
 * Class ColorRepository.
 */
class PersonRepository extends Repository
{
    protected $model = PersonModel::class;

    protected $searchableFields = [
        ["field" => 'per_name', 'operator' => 'ilike'],
        ["field" => 'per_status'],
        ["field" => 'per_position'],
        ["field" => 'per_fk_sec_id'],
        ["field" => 'per_fk_use_id']
    ];

}
