<?php

namespace App\Repositories\api\v1\person;

use App\Models\api\v1\person\SectorModel;
use Freelabois\LaravelQuickstart\Extendables\Repository;
//use Your Model

/**
 * Class ColorRepository.
 */
class SectorRepository extends Repository
{
    protected $model = SectorModel::class;

    protected $searchableFields = [
        ["field" => 'sec_description', 'operator' => 'ilike'],
        ["field" => 'sec_name', 'operator' => 'ilike']
    ];

}
