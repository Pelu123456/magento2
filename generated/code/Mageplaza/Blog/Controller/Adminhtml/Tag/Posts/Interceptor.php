<?php
namespace Mageplaza\Blog\Controller\Adminhtml\Tag\Posts;

/**
 * Interceptor class for @see \Mageplaza\Blog\Controller\Adminhtml\Tag\Posts
 */
class Interceptor extends \Mageplaza\Blog\Controller\Adminhtml\Tag\Posts implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\View\Result\LayoutFactory $resultLayoutFactory, \Mageplaza\Blog\Model\TagFactory $postFactory)
    {
        $this->___init();
        parent::__construct($context, $registry, $resultLayoutFactory, $postFactory);
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