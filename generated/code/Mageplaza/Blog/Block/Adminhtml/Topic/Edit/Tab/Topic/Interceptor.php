<?php
namespace Mageplaza\Blog\Block\Adminhtml\Topic\Edit\Tab\Topic;

/**
 * Interceptor class for @see \Mageplaza\Blog\Block\Adminhtml\Topic\Edit\Tab\Topic
 */
class Interceptor extends \Mageplaza\Blog\Block\Adminhtml\Topic\Edit\Tab\Topic implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\Cms\Model\Wysiwyg\Config $wysiwygConfig, \Magento\Config\Model\Config\Source\Yesno $booleanOptions, \Magento\Config\Model\Config\Source\Enabledisable $enableDisable, \Magento\Config\Model\Config\Source\Design\Robots $metaRobotsOptions, \Magento\Store\Model\System\Store $systemStore, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $wysiwygConfig, $booleanOptions, $enableDisable, $metaRobotsOptions, $systemStore, $data);
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
