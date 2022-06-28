<?php

namespace ZnLib\Wsdl\Domain\Interfaces\Repositories;

use ZnLib\Wsdl\Domain\Entities\ServiceEntity;

interface ServiceRepositoryInterface
{

    public function oneByName(string $appName): ServiceEntity;
}

