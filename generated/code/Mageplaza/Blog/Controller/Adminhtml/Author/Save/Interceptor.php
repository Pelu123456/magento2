<?php
namespace Mageplaza\Blog\Controller\Adminhtml\Author\Save;

/**
 * Interceptor class for @see \Mageplaza\Blog\Controller\Adminhtml\Author\Save
 */
class Interceptor extends \Mageplaza\Blog\Controller\Adminhtml\Author\Save implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Registry $registry, \Mageplaza\Blog\Model\AuthorFactory $authorFactory, \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository, \Mageplaza\Blog\Helper\Image $imageHelper)
    {
        $this->___init();
        parent::__construct($context, $registry, $authorFactory, $customerRepository, $imageHelper);
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
