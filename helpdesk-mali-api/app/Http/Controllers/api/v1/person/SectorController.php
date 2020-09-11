<?php

namespace App\Http\Controllers\api\v1\person;

use App\Http\Controllers\Controller;
use App\Managers\SectorManager;
use App\Repositories\api\v1\person\SectorRepository;
use Freelabois\LaravelQuickstart\Traits\Crudable;

class SectorController extends Controller
{
    //
    use Crudable;

    public function __construct(
        SectorRepository $repository,
        SectorManager $manager
    )
    {
        $this->setup($manager, $repository);
    }
}
