<?php

namespace App\Http\Controllers\api\v1\ticket;

use App\Http\Controllers\Controller;
use App\Managers\ColorManager;
use App\Repositories\api\v1\ticket\ColorRepository;
use Freelabois\LaravelQuickstart\Traits\Crudable;

class ColorController extends Controller
{
    use Crudable;

    public function __construct(
        ColorRepository $repository,
        ColorManager $manager
    )
    {
        $this->setup($manager, $repository);
    }

}
