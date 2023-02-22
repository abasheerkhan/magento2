<?php
namespace CustmMenu\Bigbazaar\Block;
 
// use Magento\Framework\App\Filesystem\DirectoryList; => there is no use of DrirectoryList
 
class Index extends \Magento\Framework\View\Element\Template
{
     
 
     public function __construct(
          \Magento\Framework\View\Element\Template\Context $context,
          \CustmMenu\Bigbazaar\Model\BlogFactory $postFactory
          )
     {
          parent::__construct($context);
          $this->_postFactory = $postFactory;
     }
 
     public function getResult()
     {
          $post = $this->_postFactory->create();
          $collection = $post->getCollection();
          return $collection;
     }
}

?>