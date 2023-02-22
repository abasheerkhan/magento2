<?php 
namespace CustmMenu\Bigbazaar\Controller\Index;
 

 
class Save extends \Magento\Framework\App\Action\Action
{
     protected $_pageFactory;
     protected $_postFactory;
 
     public function __construct(
          \Magento\Framework\App\Action\Context $context,
          \Magento\Framework\View\Result\PageFactory $pageFactory,
          \CustmMenu\Bigbazaar\Model\BlogFactory $postFactory
          )
     {
          $this->_pageFactory = $pageFactory;
          $this->_postFactory = $postFactory;
          
          return parent::__construct($context);
     }
 
     public function execute()
     {
          if ($this->getRequest()->isPost()) {
               $input = $this->getRequest()->getPostValue();
               $post = $this->_postFactory->create();
 
               if(isset($input['editRecordId'])){
                    $post->load($input['editRecordId']);
                    $post->addData($input);
                    $post->save();
               }else{
                    $post->setData($input)->save();
               }
         
              return $this->_redirect('crud/index/index');
          }
     }
}
?>