<?php

namespace Aegir\Provision\Command;

use Aegir\Provision\Command;
use Psy\Shell;
use Psy\Configuration;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class ShellCommand
 *
 * @package Aegir\Provision\Command
 */
class ShellCommand extends Command
{

    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this
          ->setName('shell')
          ->setDescription($this->trans('commands.shell.description'))
          ->setHelp($this->trans('commands.shell.help'));
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $config = new Configuration;
        $shell = new Shell($config);
        $shell->run();
    }
}
