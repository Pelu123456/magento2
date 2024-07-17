<?php
namespace Mageplaza\Blog\Block\Adminhtml\Import\Edit\Form;

/**
 * Interceptor class for @see \Mageplaza\Blog\Block\Adminhtml\Import\Edit\Form
 */
class Interceptor extends \Mageplaza\Blog\Block\Adminhtml\Import\Edit\Form implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Cms\Model\Wysiwyg\Config $wysiwygConfig, \Magento\Store\Model\System\Store $systemStore, \Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Mageplaza\Blog\Helper\Image $imageHelper, \Mageplaza\Blog\Model\Config\Source\Import\Type $importType, \Mageplaza\Blog\Model\Config\Source\Import\Behaviour $importBehaviour, \Magento\Config\Model\Config\Source\Yesno $booleanOptions, array $data = [])
    {
        $this->___init();
        parent::__construct($wysiwygConfig, $systemStore, $context, $registry, $formFactory, $imageHelper, $importType, $importBehaviour, $booleanOptions, $data);
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
