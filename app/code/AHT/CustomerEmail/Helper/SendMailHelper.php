<?php
namespace AHT\CustomerEmail\Helper;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\Mail\Template\TransportBuilder;
use Magento\Framework\Translate\Inline\StateInterface;
use Magento\Store\Model\StoreManagerInterface;
use Magento\Framework\Stdlib\DateTime\DateTime;
use Magento\Framework\Escaper;
use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Customer\Model\ResourceModel\Customer\CollectionFactory as CustomerCollectionFactory;

class SendEmailHelper extends AbstractHelper {
    protected $scopeConfig;
    protected $transportBuilder;
    protected $inlineTranslation;
    protected $storeManager;
    protected $dateTime;
    protected $escaper;
    protected $customerCollectionFactory;

    public function __construct(
        ScopeConfigInterface $scopeConfig,
        TransportBuilder $transportBuilder,
        StateInterface $inlineTranslation,
        StoreManagerInterface $storeManager,
        DateTime $dateTime,
        Escaper $escaper,
        CustomerCollectionFactory $customerCollectionFactory
    ) {
        $this->scopeConfig = $scopeConfig;
        $this->transportBuilder = $transportBuilder;
        $this->inlineTranslation = $inlineTranslation;
        $this->storeManager = $storeManager;
        $this->dateTime = $dateTime;
        $this->escaper = $escaper;
        $this->customerCollectionFactory = $customerCollectionFactory;
    }

    public function execute()
    {
        $currentDate = date('m-d');

        $customerCollection = $this->customerCollectionFactory->create()
            ->addAttributeToFilter('dob', ['like' => '%-' . $currentDate]);
        foreach ($customerCollection as $customer) {
            if ($customer->getDob()) {
                $this->sendEmail($customer);
            }
        }
    
        return $this;
    }
    

    protected function sendEmail($customer)
    {
        $storeId = $customer->getStoreId();
        $storeName = $this->storeManager->getStore($storeId)->getName();
        $storeUrl = $this->storeManager->getStore($storeId)->getBaseUrl();

        $templateVars = [
            'name' => $this->escaper->escapeHtml($customer->getFirstname()),
            'email' => $this->escaper->escapeHtml($customer->getEmail()),
            'store_name' => $storeName,
            'store_url' => $storeUrl,
        ];

        $templateOptions = [
            'area' => \Magento\Framework\App\Area::AREA_FRONTEND,
            'store' => $storeId,
        ];

        $this->inlineTranslation->suspend();

        $transport = $this->transportBuilder
            ->setTemplateIdentifier('email_template') 
            ->setTemplateOptions($templateOptions)
            ->setTemplateVars($templateVars)
            ->setFrom('general')
            ->addTo($customer->getEmail(), $this->escaper->escapeHtml($customer->getFirstname()))
            ->getTransport();

        $transport->sendMessage();

        $this->inlineTranslation->resume();
    }
    public function test()
    {
        return 'hello';
    }
}
