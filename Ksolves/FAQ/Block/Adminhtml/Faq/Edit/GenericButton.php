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

namespace Ksolves\FAQ\Block\Adminhtml\Faq\Edit;

use Magento\Backend\Block\Widget\Context;

/**
* Abstract class GenericButton
*/
abstract class GenericButton
{
    /**
    * @var Magento\Backend\Block\Widget\Context
    */
    private $ksContext;

    /**
     * @param \Magento\Backend\Block\Widget\Context $ksContext
     */
    public function __construct(Context $ksContext)
    {
        $this->ksContext = $ksContext;
    }

    /**
     * Return model ID
     *
     * @return int|null
     */
    public function getModelId()
    {
        return $this->ksContext->getRequest()->getParam('faqgroup_id');
    }

    /**
     * Generate url by route and parameters
     *
     * @param   string $route
     * @param   array $params
     * @return  string
     */
    public function getUrl($route = '', $params = [])
    {
        return $this->ksContext->getUrlBuilder()->getUrl($route, $params);
    }
}
