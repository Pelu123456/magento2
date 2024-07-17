<?php
namespace Mageplaza\HelloWorld\Block;

use Magento\Framework\View\Element\Template;
use Mageplaza\HelloWorld\Helper\Data as HelloWorldHelper;

class HelloWorld extends Template
{
    protected $helloWorldHelper;

    public function __construct(
        Template\Context $context,
        HelloWorldHelper $helloWorldHelper,
        array $data = []
    ) {
        $this->helloWorldHelper = $helloWorldHelper;
        parent::__construct($context, $data);
    }

    public function getTextConfig()
    {
        return $this->helloWorldHelper->getTextConfig();
    }

    public function getTextareaConfig()
    {
        return $this->helloWorldHelper->getTextareaConfig();
    }

    public function getImageConfig()
    {
        return $this->helloWorldHelper->getImageConfig();
    }
}
