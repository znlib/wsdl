<?php

namespace ZnLib\Wsdl\Domain\Repositories\Null;

use ZnLib\Wsdl\Domain\Entities\TransportEntity;
use ZnLib\Wsdl\Domain\Enums\StatusEnum;
use ZnLib\Wsdl\Domain\Interfaces\Repositories\ClientRepositoryInterface;
use ZnLib\Wsdl\Domain\Libs\SoapClient;
use ZnCore\FileSystem\Helpers\FileStorageHelper;
use ZnCore\Repository\Base\BaseRepository;

class ClientRepository extends BaseRepository implements ClientRepositoryInterface
{

    public function send(TransportEntity $transportEntity): void
    {
//        $xmlRequest = $transportEntity->getRequest();
//        $url = $transportEntity->getUrl();
//        $client = new SoapClient();
//        $responseXml = $client->sendXmlRequest($xmlRequest, $url);
        $transportEntity->setResponse(FileStorageHelper::load(__DIR__ . '/sendMessageResponse.xml'));
//        $transportEntity->setStatusId(StatusEnum::COMPLETE);
    }
}
