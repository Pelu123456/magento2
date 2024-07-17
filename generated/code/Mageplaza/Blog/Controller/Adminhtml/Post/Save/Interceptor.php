<?php
namespace Mageplaza\Blog\Controller\Adminhtml\Post\Save;

/**
 * Interceptor class for @see \Mageplaza\Blog\Controller\Adminhtml\Post\Save
 */
class Interceptor extends \Mageplaza\Blog\Controller\Adminhtml\Post\Save implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Registry $registry, \Mageplaza\Blog\Model\PostFactory $postFactory, \Magento\Backend\Helper\Js $jsHelper, \Mageplaza\Blog\Helper\Image $imageHelper, \Mageplaza\Blog\Helper\Data $helperData, \Mageplaza\Blog\Model\PostHistoryFactory $postHistory, \Magento\Framework\Stdlib\DateTime\DateTime $date, \Magento\Framework\Stdlib\DateTime\TimezoneInterface $timezone)
    {
        $this->___init();
        parent::__construct($context, $registry, $postFactory, $jsHelper, $imageHelper, $helperData, $postHistory, $date, $timezone);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        return $pluginInfo ? $this->___callPlugins('dispatch', func_get_args(), $pluginInfo) : parent::dispatch($request);
    }
}
