<?php

namespace CustmMenu\Bigbazaar\Model\ResourceModel;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Blog extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('shopping', 'post_id');
    }
}
?>