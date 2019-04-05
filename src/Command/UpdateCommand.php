<?php

namespace Acrnogor\CrontabManagerBundle\Command;

use Acrnogor\CrontabManagerBundle\Manager\CrontabManager;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class UpdateCommand extends Command
{
    private $crontabManager;

    protected static $defaultName = 'acrnogor:crontab:update';

    public function __construct(CrontabManager $crontabManager)
    {
        $this->crontabManager = $crontabManager;

        parent::__construct();
    }

    protected function configure()
    {
        $this
            ->setName('acrnogor:crontab:update')
            ->setDescription('Nema smisla')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        echo ' > Starting crontab update...';
        $this->crontabManager->update();
        echo ' > ... DONE.';
    }
}
