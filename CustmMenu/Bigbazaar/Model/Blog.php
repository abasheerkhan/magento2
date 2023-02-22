<?php

namespace CustmMenu\Bigbazaar\Model;
use Magento\Framework\Model\AbstractModel;
use CustmMenu\Bigbazaar\Model\ResourceModel\Blog as BlogResourceModel;

class Blog extends \Magento\Framework\Model\AbstractModel
{
    protected function _construct()
    {
        $this->_init(BlogResourceModel::class);
    }
}
?>