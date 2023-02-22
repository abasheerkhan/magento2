<?php
namespace CustmMenu\Bigbazaar\Model\ResourceModel\Blog;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use CustmMenu\Bigbazaar\Model\Blog as BlogModel;
use CustmMenu\Bigbazaar\Model\ResourceModel\Blog as BlogResourceModel;
class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(BlogModel::class, BlogResourceModel::class);
    }
}
?>