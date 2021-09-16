<?php


namespace App\Third\Kernel;


interface ServiceProviderInterface
{
    public function register(Container $app);
}