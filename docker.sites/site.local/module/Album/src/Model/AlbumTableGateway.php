<?php

namespace Album\Model;

use Laminas\Db\Adapter\AdapterInterface;
use Laminas\Db\ResultSet\ResultSetInterface;
use Laminas\Db\Sql\Sql;
use Laminas\Db\TableGateway\TableGateway;

class AlbumTableGateway extends TableGateway
{
    /**
     * @param $table
     * @param AdapterInterface $adapter
     * @param $features
     * @param ResultSetInterface|null $resultSetPrototype
     * @param Sql|null $sql
     */
    public function __construct(
        $table,
        AdapterInterface $adapter,
        $features = null,
        ?ResultSetInterface $resultSetPrototype = null, ?Sql $sql = null) {
        parent::__construct($table, $adapter, $features, $resultSetPrototype, $sql);
    }
}