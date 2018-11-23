<?php

namespace CoffeeBike\SalesforceBundle\Command;

use CoffeeBike\SalesforceBundle\Authentication\AuthenticationManager;
use Symfony\Component\Cache\Simple\FilesystemCache;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
class InvalidateSessionCommand extends Command
{
    /**
     * @var string
     */
    protected static $defaultName = 'coffee-bike:salesforce:invalidate-session';

    /**
     * @var FilesystemCache
     */
    private $cache;

    public function __construct()
    {
        $this->cache = new FilesystemCache();

        parent::__construct();
    }

    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this->setDescription('Invalidates the current Salesforce REST Session.');
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $io = new SymfonyStyle($input, $output);

        $this->cache->delete(AuthenticationManager::SESSION_CACHE);

        $io->success('Session invalidated.');
    }
}
