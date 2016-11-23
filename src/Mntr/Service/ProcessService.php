<?php

namespace Mntr\Service;

use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Finder\Finder;
use Symfony\Component\Process\Process;

class ProcessService
{
    protected $fs;
    protected $finder;

    public function __construct()
    {
        $this->fs = new Filesystem();
        $this->finder = new Finder();
    }


    public function getProcess($pid)
    {
        $p = new Process('ps -aux | grep ' . $pid);
        $p->run();

        return $p->getOutput();
    }

    public function getHosts()
    {
        $path = '/etc/apache2/sites-available/';
        $files = $this->finder->in($path)->name('*.conf');

        foreach ($files as $file) {
            dump($file->getFilename());
        }
    }
}