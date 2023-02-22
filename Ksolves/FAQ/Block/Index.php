<?php
/**
 * Ksolves
 *
 * @category  Ksolves
 * @package   Ksolves_FAQ
 * @author    Ksolves Team
 * @copyright Copyright (c) Ksolves India Limited (https://www.ksolves.com/)
 * @license   https://store.ksolves.com/magento-license
 */

namespace Ksolves\FAQ\Block;

/**
* class Index
*/
class Index extends \Magento\Framework\View\Element\Template
{
    /**
    * @var \Ksolves\FAQ\Model\FaqFactory
    */
    private $ksFaqFactory;

    /**
    * @var \Ksolves\FAQ\Helper\ConfigData
    */
    private $ksHelperData;

    /**
    * @param \Magento\Framework\App\Action\Context $ksContext
    * @param \Ksolves\FAQ\Model\FaqFactory $ksFaqFactory
    * @param \Ksolves\FAQ\Helper\ConfigData $ksHelperData
    */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $ksContext,
        \Ksolves\FAQ\Model\FaqFactory $ksFaqFactory,
        \Ksolves\FAQ\Helper\ConfigData $ksHelperData
    ) {
        $this->ksHelperData = $ksHelperData;
        $this->ksFaqFactory = $ksFaqFactory;
        parent::__construct($ksContext);
    }

    /**
    * Module Status
    * @return Int
    */
    public function getModuleStatus()
    {
        return $this->ksHelperData->getGeneralConfigData('enable');
    }

    /**
    *  Text
    * @return String
    */
    public function getText()
    {
        return  $this->ksHelperData->getGeneralConfigData('display_text');
    }

    /**
    *  Text
    * @return String
    */
    public function getKsFaqGroupCollection()
    {
        $ksFaqGroupCollection = $this->ksFaqFactory->create()->getCollection()
                                ->addFieldToFilter('status', '1');
        return $ksFaqGroupCollection;
    }

    /**
    *  Text
    * @return String
    */
    public function allowTopLink()
    {
        return $this->ksHelperData->getGeneralConfigData('allow_toplink');
    }

    /**
    *  Text
    * @return String
    */
    public function allowFooterLink()
    {
        return $this->ksHelperData->getGeneralConfigData('allow_footerlink');
    }

    /**
     * redirect contoller to home
     * @return void
     */
    public function getRedirect()
    {
        $ksStore = $this->_storeManager->getStore();
        $ksRedirect = $this->_objectManager->get('\Magento\Framework\App\Response\Http');
        $ksRedirect->setRedirect($ksStore->getBaseUrl());
        return ;
    }
}
