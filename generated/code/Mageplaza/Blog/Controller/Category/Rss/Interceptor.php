<?php
namespace Mageplaza\Blog\Controller\Category\Rss;

/**
 * Interceptor class for @see \Mageplaza\Blog\Controller\Category\Rss
 */
class Interceptor extends \Mageplaza\Blog\Controller\Category\Rss implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Rss\Model\RssManager $rssManager, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Rss\Model\RssFactory $rssFactory, \Magento\Customer\Model\Session $customerSession, \Magento\Customer\Api\AccountManagementInterface $customerAccountManagement, \Magento\Framework\HTTP\Authentication $httpAuthentication, \Psr\Log\LoggerInterface $logger)
    {
        $this->___init();
        parent::__construct($context, $rssManager, $scopeConfig, $rssFactory, $customerSession, $customerAccountManagement, $httpAuthentication, $logger);
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