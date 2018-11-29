<?php

namespace CoffeeBike\SalesforceBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
class CoffeeBikeSalesforceExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));

        $loader->load('services.xml');
        $config = $this->processConfiguration(new Configuration(), $configs);
        $container->setParameter('coffeebike_salesforce.auth.username', $config['auth']['username']);
        $container->setParameter('coffeebike_salesforce.auth.password', $config['auth']['password']);
        $container->setParameter('coffeebike_salesforce.auth.security_token', $config['auth']['security_token']);
        $container->setParameter('coffeebike_salesforce.auth.client_id', $config['auth']['client_id']);
        $container->setParameter('coffeebike_salesforce.auth.client_secret', $config['auth']['client_secret']);
        $container->setParameter('coffeebike_salesforce.api_version', $config['api_version']);
        $container->setParameter('coffeebike_salesforce.sandbox_mode', $config['sandbox_mode']);
    }
}
