<?php
namespace AHT\CustomerEmail\Console;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use AHT\CustomerEmail\Helper\SendEmailHelper;

class SendMail extends Command
{
    protected $sendEmailHelper;

    public function __construct(SendEmailHelper $sendEmailHelper)
    {
        $this->sendEmailHelper = $sendEmailHelper;
    }

    protected function configure()
    {
        $this->setName('send:sendmail');
        $this->setDescription('Send birthday emails to customers');
        parent::configure();
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln("Sending birthday emails...");
        $this->sendEmailHelper->execute();
        $output->writeln("Birthday emails sent successfully.");

        return Command::SUCCESS;
    }
}
