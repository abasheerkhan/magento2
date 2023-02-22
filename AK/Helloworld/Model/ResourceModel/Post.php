<?php

namespace AK\Helloworld\Model\ResourceModel;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Post extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('asif_table', 'post_id');
    }
}
?>