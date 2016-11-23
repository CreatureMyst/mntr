<?php

namespace AppBundle\Command\Service;

use Mntr\Service\ProcessService;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class ProcessCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('mntr:service:process')
            ->setDescription('...')
            ->addArgument('argument', InputArgument::OPTIONAL, 'Argument description')
            ->addOption('option', null, InputOption::VALUE_NONE, 'Option description')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        /** @var ProcessService $processService */
        $processService = $this->getContainer()->get('mntr.service.process');
        $res = $processService->getHosts();

//        $output->writeln($res);
    }

}
