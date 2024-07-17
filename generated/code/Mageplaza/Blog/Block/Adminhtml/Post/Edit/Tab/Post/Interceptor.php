<?php
namespace Mageplaza\Blog\Block\Adminhtml\Post\Edit\Tab\Post;

/**
 * Interceptor class for @see \Mageplaza\Blog\Block\Adminhtml\Post\Edit\Tab\Post
 */
class Interceptor extends \Mageplaza\Blog\Block\Adminhtml\Post\Edit\Tab\Post implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Backend\Model\Auth\Session $authSession, \Magento\Framework\Stdlib\DateTime\DateTime $dateTime, \Magento\Cms\Model\Page\Source\PageLayout $layoutOption, \Magento\Framework\Data\FormFactory $formFactory, \Magento\Cms\Model\Wysiwyg\Config $wysiwygConfig, \Magento\Config\Model\Config\Source\Yesno $booleanOptions, \Magento\Config\Model\Config\Source\Design\Robots $metaRobotsOptions, \Magento\Store\Model\System\Store $systemStore, \Mageplaza\Blog\Helper\Image $imageHelper, \Mageplaza\Blog\Model\Config\Source\Author $author, \Mageplaza\Blog\Model\Config\Source\AuthorStatus $status, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $authSession, $dateTime, $layoutOption, $formFactory, $wysiwygConfig, $booleanOptions, $metaRobotsOptions, $systemStore, $imageHelper, $author, $status, $data);
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
