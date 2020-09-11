<?php

namespace App\Http\Controllers\api\v1\person;

use App\api\v1\person\PersonModel;
use App\Http\Controllers\Controller;
use App\Managers\PersonManager;
use App\Repositories\api\v1\ticket\PersonRepository;
use Freelabois\LaravelQuickstart\Traits\Crudable;

class PersonController extends Controller
{
    //
    use Crudable;

    public function __construct(
        PersonRepository $repository,
        PersonManager $manager
    )
    {
        $this->setup($manager, $repository);
    }

    public function store()
    {
        $sanitized = request()->all();
        return new $this->resource($this->manager->storeOrUpdate($sanitized));
    }
}
