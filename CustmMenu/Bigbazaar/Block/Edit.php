<?php
namespace CustmMenu\Bigbazaar\Block;
 
class Edit extends \Magento\Framework\View\Element\Template
{
     protected $_pageFactory;
     protected $_coreRegistry;
     protected $_postLoader;
 
     public function __construct(
          \Magento\Framework\View\Element\Template\Context $context, 
          \Magento\Framework\View\Result\PageFactory $pageFactory,
          \Magento\Framework\Registry $coreRegistry, 
          \CustmMenu\Bigbazaar\Model\BlogFactory $postLoader,
          array $data = []
          )
     {
          $this->_pageFactory = $pageFactory;
          $this->_coreRegistry = $coreRegistry; 
          $this->_postLoader = $postLoader; 
          return parent::__construct($context,$data);
     }
 
     public function execute()
     {
          return $this->_pageFactory->create();
     }
 
     public function getEditRecord()   //method used in the context of an admin form to retrieve the data of an existing record that is being edited
     {
          $id = $this->_coreRegistry->registry('editRecordId'); //retrieves a value from the global registry object, $coreRegistry. The registry method is used to retrieve a value from the registry that is stored under a specific key, which in this case is editRecordId. The value stored under this key represents the ID of a record that is being edited.
          //This line of code is often used in a block class that is used to render an admin form for editing an existing record in the Magento 2 backend.
          $post = $this->_postLoader->create(); 
          $result = $post->load($id);
          $result = $result->getData();
               return $result;
     }
}

?>