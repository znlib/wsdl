<?php

namespace ZnLib\Wsdl\Domain\Interfaces\Services;

use ZnLib\Wsdl\Domain\Entities\TransportEntity;
use ZnDomain\Service\Interfaces\CrudServiceInterface;

interface TransportServiceInterface extends CrudServiceInterface
{

    public function sendAll(): void;

    public function send(TransportEntity $transportEntity): void;
}
