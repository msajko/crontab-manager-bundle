<?php

namespace Acrnogor\CrontabManagerBundle\Manager;

use QAlliance\CrontabManager\Writer;

class CrontabManager
{
    private $writer;

    private $cronJobs = [];

    public function __construct(Writer $writer)
    {
        $this->writer = $writer;
    }

    public function update(): void
    {
        $this->writer->updateManagedCrontab($this->cronJobs);
    }

    public function getWriter(): Writer
    {
        return $this->writer;
    }

    public function setCronJobs(array $cronJobs): self
    {
        $this->cronJobs = $cronJobs;
        return $this;
    }

    public function getCronJobs(): array
    {
        return $this->cronJobs;
    }
}