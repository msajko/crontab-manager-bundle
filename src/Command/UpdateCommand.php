<?php

namespace Acrnogor\CrontabManagerBundle\Command;

class UpdateCommand
{
    private $crontabManager;

    public function __construct(CrontabManager $crontabManager)
    {
        $this->crontabManager = $crontabManager;
    }

    protected function configure()
    {
        $this
            ->setName('maxbrain:crontab:update')
            ->setDescription('...')
            ->addOption('force', null, InputOption::VALUE_NONE, 'Will actually update the crontab, otherwise just list it out.', null)
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        echo ' > Starting crontab update...';
        $this->crontabManager->update();
        echo ' > ... DONE.';
    }

}
