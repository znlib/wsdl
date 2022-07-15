<?php

namespace ZnLib\Wsdl\Domain\Repositories\Eloquent;

use ZnLib\Wsdl\Domain\Entities\TransportEntity;
use ZnLib\Wsdl\Domain\Enums\StatusEnum;
use ZnLib\Wsdl\Domain\Interfaces\Repositories\TransportRepositoryInterface;
use ZnCore\Collection\Interfaces\Enumerable;
use ZnDomain\Query\Entities\Query;
use ZnDatabase\Eloquent\Domain\Base\BaseEloquentCrudRepository;

class TransportRepository extends BaseEloquentCrudRepository implements TransportRepositoryInterface
{

    public function tableName(): string
    {
        return 'wsdl_transport';
    }

    public function getEntityClass(): string
    {
        return TransportEntity::class;
    }

    public function allByNewStatus(Query $query = null): Enumerable
    {
        $query = $this->forgeQuery($query);
//        $query->limit(10);
        $query->where('status_id', StatusEnum::NEW);
        return $this->findAll($query);
    }
}
