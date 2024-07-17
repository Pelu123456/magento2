<?php
namespace Mageplaza\Blog\Block\Adminhtml\Comment\Edit\Tab\Comment;

/**
 * Interceptor class for @see \Mageplaza\Blog\Block\Adminhtml\Comment\Edit\Tab\Comment
 */
class Interceptor extends \Mageplaza\Blog\Block\Adminhtml\Comment\Edit\Tab\Comment implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository, \Mageplaza\Blog\Model\PostFactory $postFactory, \Mageplaza\Blog\Model\Config\Source\Comments\Status $commentStatus, \Magento\Store\Model\System\Store $systemStore, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $customerRepository, $postFactory, $commentStatus, $systemStore, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getForm()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getForm');
        return $pluginInfo ? $this->___callPlugins('getForm', func_get_args(), $pluginInfo) : parent::getForm();
    }
}
