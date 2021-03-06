<?php

namespace Konduto\Antifraud\Model\ResourceModel\Queue;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(
            'Konduto\Antifraud\Model\Queue',
            'Konduto\Antifraud\Model\ResourceModel\Queue'
        );
    }
}
