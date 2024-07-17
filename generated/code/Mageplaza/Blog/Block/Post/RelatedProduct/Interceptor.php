<?php
namespace Mageplaza\Blog\Block\Post\RelatedProduct;

/**
 * Interceptor class for @see \Mageplaza\Blog\Block\Post\RelatedProduct
 */
class Interceptor extends \Mageplaza\Blog\Block\Post\RelatedProduct implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Block\Product\Context $context, \Magento\Framework\Data\Helper\PostHelper $postDataHelper, \Magento\Catalog\Model\Layer\Resolver $layerResolver, \Magento\Catalog\Api\CategoryRepositoryInterface $categoryRepository, \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productCollectionFactory, \Magento\ConfigurableProduct\Model\ResourceModel\Product\Type\Configurable $catalogProductTypeConfigurable, \Magento\Catalog\Model\ProductRepository $productRepository, \Mageplaza\Blog\Helper\Data $helperData, \Magento\Catalog\Helper\Output $output, \Magento\Framework\Url\Helper\Data $urlHelper, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $postDataHelper, $layerResolver, $categoryRepository, $productCollectionFactory, $catalogProductTypeConfigurable, $productRepository, $helperData, $output, $urlHelper, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getProductDetailsHtml(\Magento\Catalog\Model\Product $product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProductDetailsHtml');
        return $pluginInfo ? $this->___callPlugins('getProductDetailsHtml', func_get_args(), $pluginInfo) : parent::getProductDetailsHtml($product);
    }

    /**
     * {@inheritdoc}
     */
    public function getImage($product, $imageId, $attributes = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getImage');
        return $pluginInfo ? $this->___callPlugins('getImage', func_get_args(), $pluginInfo) : parent::getImage($product, $imageId, $attributes);
    }
}
