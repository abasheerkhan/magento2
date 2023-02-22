<?php

namespace AK\Helloworld\Model;
use Magento\Framework\Model\AbstractModel;
use AK\Helloworld\Model\ResourceModel\Post as PostResourceModel;

class Post extends \Magento\Framework\Model\AbstractModel
{
    protected function _construct()
    {
        $this->_init(PostResourceModel::class);
    }
}
?>