<?php

    namespace App\Controller\Welcome;

    use App\Model\TestModel;
    use Eskirex\Component\Web\MVC\Controller;

    class IndexController extends Controller
    {
        public function index()
        {
            TestModel::insert();

            return $this->view
                ->name('Welcome/Index.twig')
                ->data([
                    'version'  => '1.0.0',
                    'base_dir' => BASE_DIR,
                ])
                ->render();
        }
    }