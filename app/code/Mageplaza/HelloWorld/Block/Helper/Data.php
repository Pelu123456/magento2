<?php
namespace Mageplaza\HelloWorld\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\App\Helper\Context;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;

class data extends AbstractHelper
{
    protected $scopeConfig;

    public function __construct(
        Context $context,
        ScopeConfigInterface $scopeConfig
    ) {
        $this->scopeConfig = $scopeConfig;
        parent::__construct($context);
    }

    public function getTextConfig()
    {
        return $this->scopeConfig->getValue('general/settings/text_field', ScopeInterface::SCOPE_STORE);
    }

    public function getTextareaConfig()
    {
        return $this->scopeConfig->getValue('general/settings/textarea_field', ScopeInterface::SCOPE_STORE);
    }

    public function getImageConfig()
    {
        return $this->scopeConfig->getValue('general/settings/image_field', ScopeInterface::SCOPE_STORE);
    }
}
