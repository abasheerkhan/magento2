<?php
namespace AK\Helloworld\Model\ResourceModel\Post;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use AK\Helloworld\Model\Post as PostModel;
use AK\Helloworld\Model\ResourceModel\Post as PostResourceModel;
class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(PostModel::class, PostResourceModel::class);
    }
}
?>