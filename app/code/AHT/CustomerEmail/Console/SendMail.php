<?php
namespace AHT\CustomerEmail\Console;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use AHT\CustomerEmail\Helper\SendEmailHelper;

class SendMail extends Command
{
   protected function configure()
   {
       $this->setName('send:sendmail');
       $this->setDescription('Demo command line');
       
       parent::configure();
   }
   
   protected function execute(InputInterface $input, OutputInterface $output)
   {
       $output->writeln("Sending birthday emails...");
       
       $sendEmailHelper = $this->SendEmailHelper();
       
       if ($sendEmailHelper) {
           $test = $sendEmailHelper->test();
           $output->writeln("Birthday emails sent successfully. Test result: " . $test);
       } else {
           $output->writeln("Error: SendEmailHelper is not injected correctly.");
       }
   
       return Command::SUCCESS;
   }
   
}