<?php

namespace ZnLib\Wsdl\Domain;

use ZnCore\Domain\Interfaces\DomainInterface;

class Domain implements DomainInterface
{

    public function getName()
    {
        return 'wsdl';
    }
}
