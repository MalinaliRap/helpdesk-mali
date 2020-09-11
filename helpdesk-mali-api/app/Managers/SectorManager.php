<?php


namespace App\Managers;


use App\Repositories\api\v1\person\SectorRepository;
use Freelabois\LaravelQuickstart\Extendables\ManipulationManager;

class SectorManager extends ManipulationManager
{

    protected $validation = [
        self::CREATE => [],
        self::EDIT => []
    ];

    /**
     * @var SectorRepository
     */
    protected $repository;

    public function __construct(SectorRepository $repository)
    {
        $this->repository = $repository;
    }

}
