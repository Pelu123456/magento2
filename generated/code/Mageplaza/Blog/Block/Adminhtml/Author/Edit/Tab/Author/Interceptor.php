<?php
namespace Mageplaza\Blog\Block\Adminhtml\Author\Edit\Tab\Author;

/**
 * Interceptor class for @see \Mageplaza\Blog\Block\Adminhtml\Author\Edit\Tab\Author
 */
class Interceptor extends \Mageplaza\Blog\Block\Adminhtml\Author\Edit\Tab\Author implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Cms\Model\Wysiwyg\Config $wysiwygConfig, \Magento\Store\Model\System\Store $systemStore, \Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Mageplaza\Blog\Helper\Image $imageHelper, \Mageplaza\Blog\Model\Config\Source\AuthorStatus $authorStatus, \Mageplaza\Blog\Helper\Data $helperData, \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository, array $data = [])
    {
        $this->___init();
        parent::__construct($wysiwygConfig, $systemStore, $context, $registry, $formFactory, $imageHelper, $authorStatus, $helperData, $customerRepository, $data);
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
