<?php
namespace Mageplaza\Blog\Controller\Post\Manage;

/**
 * Interceptor class for @see \Mageplaza\Blog\Controller\Post\Manage
 */
class Interceptor extends \Mageplaza\Blog\Controller\Post\Manage implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Magento\Framework\Controller\Result\ForwardFactory $resultForwardFactory, \Mageplaza\Blog\Model\PostFactory $postFactory, \Mageplaza\Blog\Model\ResourceModel\Author\Collection $authorCollection, \Magento\Customer\Model\Session $customerSession, \Magento\Framework\Registry $coreRegistry, \Magento\Framework\Stdlib\DateTime\DateTime $date, \Mageplaza\Blog\Helper\Image $imageHelper, \Mageplaza\Blog\Helper\Data $helperData, \Magento\Framework\Stdlib\DateTime\TimezoneInterface $timezone)
    {
        $this->___init();
        parent::__construct($context, $resultPageFactory, $resultForwardFactory, $postFactory, $authorCollection, $customerSession, $coreRegistry, $date, $imageHelper, $helperData, $timezone);
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