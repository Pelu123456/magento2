<?php
namespace Mageplaza\Blog\Controller\Router;

/**
 * Interceptor class for @see \Mageplaza\Blog\Controller\Router
 */
class Interceptor extends \Mageplaza\Blog\Controller\Router implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\ActionFactory $actionFactory, \Mageplaza\Blog\Helper\Data $helper)
    {
        $this->___init();
        parent::__construct($actionFactory, $helper);
    }

    /**
     * {@inheritdoc}
     */
    public function match(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'match');
        return $pluginInfo ? $this->___callPlugins('match', func_get_args(), $pluginInfo) : parent::match($request);
    }
}
