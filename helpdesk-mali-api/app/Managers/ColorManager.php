<?php


namespace App\Managers;


use App\Repositories\api\v1\ticket\ColorRepository;
use Freelabois\LaravelQuickstart\Extendables\ManipulationManager;

class ColorManager extends ManipulationManager
{

    protected $validation = [
        self::CREATE => [],
        self::EDIT => []
    ];

    /**
     * @var ColorRepository
     */
    protected $repository;

    public function __construct(ColorRepository $repository)
    {
        $this->repository = $repository;
    }

}
