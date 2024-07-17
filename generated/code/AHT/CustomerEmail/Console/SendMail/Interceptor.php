<?php
namespace AHT\CustomerEmail\Console\SendMail;

/**
 * Interceptor class for @see \AHT\CustomerEmail\Console\SendMail
 */
class Interceptor extends \AHT\CustomerEmail\Console\SendMail implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\AHT\CustomerEmail\Helper\SendEmailHelper $sendEmailHelper)
    {
        $this->___init();
        parent::__construct($sendEmailHelper);
    }

    /**
     * {@inheritdoc}
     */
    public function run(\Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'run');
        return $pluginInfo ? $this->___callPlugins('run', func_get_args(), $pluginInfo) : parent::run($input, $output);
    }
}
