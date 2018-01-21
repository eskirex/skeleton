<?php
    require COMPOSER_DIR . 'autoload.php';

    use Eskirex\Component\Web\Web;

    class Kernel
    {
        public static function boot()
        {
            Web::configure([
                'model' => [
                    'dir'       => APP_DIR . 'Model',
                    'namespace' => 'App\Model'
                ],
                'view'  => [
                    'dir' => APP_DIR . 'View'
                ],

                'controller' => [
                    'dir'            => APP_DIR . 'Controller',
                    'namespace'      => 'App\Controller',
                    'default_method' => 'index'
                ],

                'console' => [
                    'dir'            => APP_DIR . 'Console',
                    'namespace'      => 'App\Console',
                    'default_method' => 'index'
                ],

                'config' => [
                    'dir' => CONFIG_DIR
                ],

                'var'      => [
                    'dir' => VAR_DIR
                ],
                'resource' => [
                    'dir' => APP_DIR . 'Resource'
                ]
            ]);

            new Web();
        }
    }